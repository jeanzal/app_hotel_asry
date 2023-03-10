<?php

namespace App\Http\Controllers\FO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Kamar;
use App\Models\Sisasaldo;
use App\Models\Transaksi;
use App\Models\Transaksikas;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $tomorrow = Carbon::tomorrow();
        $kemarin = date("Y-m-d", strtotime('-1 days'));

        Session::put('title', 'Dashboard Front Office');
        $kamar = Kamar::all();
        $harga_sekarang = Kamar::find(3);
        $CI = date('Y-m-d 14:00:00');
        $date_now = date('Y-m-d h:i:s');
        $data = Transaksi::all();
        $data_kas = Transaksikas::whereDate('tgl_trs', date('Y-m-d'))->get();
        $sisa_saldo_kemarin = Sisasaldo::whereDate('tgl_trs', $kemarin)->get();
        $sisa_saldo = Sisasaldo::whereDate('tgl_trs', date('Y-m-d'))->get();
        $total_saldo_today = Transaksikas::select(DB::raw('sum(saldo) as sisa_today'))
            ->whereDate('tgl_trs', date('Y-m-d'))
            ->get();

        return view('FO/content/dashboard', compact('sisa_saldo', 'total_saldo_today', 'today', 'kamar', 'CI', 'harga_sekarang', 'data', 'data_kas', 'date_now', 'sisa_saldo_kemarin'));
    }

    public function bookRoom($id)
    {
        $kamar = Kamar::find($id);
        return response()->json([
            'data' => $kamar,
        ]);
    }

    public function closeBook($id)
    {
        $trs = Transaksi::find($id);
        return response()->json([
            'data' => $trs,
        ]);
    }

    public function trsBook(Request $request)
    {
        $trs = new Transaksi();
        $trs->nama_tamu = $request->namaTamu;
        $trs->alamat = $request->alamat;
        $trs->noHp = $request->noHP;
        $trs->lama_sewa = $request->lamaBooking;
        $trs->ci = $request->ci;
        $trs->co = $request->co;
        $trs->price = $request->price;
        $trs->deposit = $request->deposit;
        $trs->sisa = $request->sisa;
        $trs->status = 1;
        $trs->kamar_no = $request->id_kamar;
        $trs->user_id = $request->id_user;
        $trs->save();

        $trsKAS = new Transaksikas();
        $trsKAS->tgl_trs = $request->ci;
        $trsKAS->ket = 'Check In Kamar ' . $request->no_kamar . ' an. ' . $request->namaTamu;
        $trsKAS->kas_masuk = $request->deposit;
        $trsKAS->kas_keluar = 0;
        $trsKAS->setoran_agh_to_sgh = 0;
        $saldo_akhir = $request->deposit - $request->kas_keluar - $request->setoran_agh_to_sgh;
        $trsKAS->saldo = $request->sisa_saldo - $saldo_akhir;
        $trsKAS->save();

        $kamar = Kamar::FindOrfail($request->id_kamar);
        $kamar->status = 2;

        try {
            $kamar->save();
            Alert::success('Berhasil', 'Berhasil Membuat Room ...');
            return redirect(route('FO.dashboard.index'));
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Gagal Membuat, Silahkan periksa data');
            return redirect(route('FO.dashboard.index'));
        }
    }

    public function clsBook(Request $request)
    {
        $trs = Transaksi::FindOrfail($request->id_baru);
        $trs->status = 2;

        $trs->save();

        $kamar = Kamar::FindOrfail($request->kmr_no);
        $kamar->status = 1;
        try {
            $kamar->save();
            Alert::success('Berhasil', 'Berhasil Closing Room ...');
            return redirect(route('FO.dashboard.index'));
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Gagal Closing Room, silahkan hubungi admin ');
            return redirect(route('FO.dashboard.index'));
        }
    }

    public function tambahTrsKAS(Request $request)
    {
        $trsKAS = new Transaksikas();
        $trsKAS->tgl_trs = $request->tgl_trs;
        $trsKAS->ket = $request->ket;
        $trsKAS->kas_masuk = $request->kas_masuk;
        $trsKAS->kas_keluar = $request->kas_keluar;
        $trsKAS->setoran_agh_to_sgh = $request->setoran_agh_to_sgh;
        $saldo_akhir = $request->kas_masuk - $request->kas_keluar - $request->setoran_agh_to_sgh;
        $trsKAS->saldo = $request->sisa_saldo - $saldo_akhir;

        try {
            $trsKAS->save();
            Alert::success('Berhasil', 'Berhasil Membuat Transaksi ...');
            return redirect(route('FO.dashboard.index'));
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Gagal Membuat, Silahkan periksa data');
            return redirect(route('FO.dashboard.index'));
        }
    }

    public function approveTrsKAS(Request $request)
    {
        $trsApr = new Sisasaldo();
        $trsApr->tgl_trs = $request->tgl_trs;
        $trsApr->sisa_saldo = $request->sisa_saldo;
        $trsApr->total_kas_masuk = $request->total_kas_masuk;
        $trsApr->total_kas_keluar = $request->total_kas_keluar;
        $trsApr->total_setor_ke_sgh = $request->total_setor_ke_sgh;
        // dd($trsApr);

        try {
            $trsApr->save();
            Alert::success('Berhasil', 'Berhasil Approve Transaksi ...');
            return redirect(route('FO.dashboard.index'));
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Gagal Approve, ada kesalahan data !!!');
            return redirect(route('FO.dashboard.index'));
        }
    }
}

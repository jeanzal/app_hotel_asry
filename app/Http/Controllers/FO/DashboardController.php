<?php

namespace App\Http\Controllers\FO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Kamar;
use App\Models\Transaksi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        Session::put('title', 'Dashboard Front Office');
        $kamar = Kamar::all();
        $harga_sekarang = Kamar::find(3);
        $CI = date('Y-m-d 14:00:00');
        $data = Transaksi::all();
        return view('FO/content/dashboard', compact('today', 'kamar', 'CI', 'harga_sekarang', 'data'));
    }
    // SELECT kamar.* FROM kamar INNER JOIN transaksi.kamar_no ON transaksi.kamar_no = WHERE transaksi.no_kamar `kamar` = kamar.id limit 1
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
}

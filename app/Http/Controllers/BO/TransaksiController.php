<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Transaksi'); 
        $trs = Transaksi::select("transaksi.*",'kamar.lokasi', 'kamar.no_kamar','kamar.status') 
            ->join('kamar','kamar.id','=','transaksi.kamar_no')->orderBy('transaksi.id')->get();
        return view('BO/content/transaksi/list', compact('trs'));
    }

    public function trsBook(Request $request){

        // var_dump();
        // dd();
        $trs = new Transaksi();
        $trs->no_kamar = $request->no_kamar;

        print($trs);
        // $trs->lokasi = $request->lokasi;
        // $trs->harga = $request->harga;
        // $trs->fasilitas = $request->fasilitas;
        // $trs->foto = $request->foto;

        // try {
        //     $trs->save();
        //     return redirect(route('BO.transaksi.index'))->with('pesan-berhasil','Berhasil membuat data Transaksi');;
        // }catch (\Exception $e){
        //     return redirect(route('BO.transaksi.index'))->with('pesan-gagal','Gagal membuat data Transaksi');;
        // }

    }
}

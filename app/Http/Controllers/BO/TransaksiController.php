<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Transaksi'); 
        $trs = Transaksi::select("transaksi.*",'kamar.lokasi', 'kamar.no_kamar') ->join('kamar','kamar.id','=','transaksi.kamar_no')->orderBy('transaksi.id')->get();
        return view('BO/content/transaksi/list', compact('trs'));
    }

    public function tambah_kamar(Request $request){
        $trs = new Transaksi();
        $trs->no_kamar = $request->no_kamar;
        $trs->lokasi = $request->lokasi;
        $trs->harga = $request->harga;
        $trs->fasilitas = $request->fasilitas;
        $trs->foto = $request->foto;

        try {
            $trs->save();
            return redirect(route('BO.transaksi.index'))->with('pesan-berhasil','Berhasil membuat data Transaksi');;
        }catch (\Exception $e){
            return redirect(route('BO.transaksi.index'))->with('pesan-gagal','Gagal membuat data Transaksi');;
        }

    }
}

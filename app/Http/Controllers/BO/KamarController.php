<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Kamar'); 
        $kamar = Kamar::all();
        return view('BO/content/kamar/list', compact('kamar'));
    }

    public function tambah_kamar(Request $request){
        echo "berhasil";
        $kamar = new Kamar();
        $kamar->no_kamar = $request->no_kamar;
        $kamar->lokasi = $request->lokasi;
        $kamar->harga = $request->harga;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->foto = $request->foto;

        try {
            $kamar->save();
            return redirect(route('BO.kamar.index'))->with('pesan-berhasil','Berhasil membuat data kamar');;
        }catch (\Exception $e){
            return redirect(route('BO.kamar.index'))->with('pesan-gagal','Gagal membuat data kamar');;
        }

    }
}

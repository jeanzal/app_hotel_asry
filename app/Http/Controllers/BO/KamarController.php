<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Kamar'); 
        $kamar = Kamar::all();
        return view('BO/content/kamar/list', compact('kamar'));
    }

    public function tambah_kamar(Request $request){
        $kamar = new Kamar();
        $kamar->no_kamar = $request->no_kamar;
        $kamar->lokasi = $request->lokasi;
        $kamar->harga = $request->harga;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->status = $request->status;

        try {
            $kamar->save();
            return redirect(route('BO.kamar.index'))->with('pesan-berhasil','Berhasil membuat data kamar');;
        }catch (\Exception $e){
            return redirect(route('BO.kamar.index'))->with('pesan-gagal','Gagal membuat data kamar');;
        }

    }

    public function edit_kamar($id){

        Session::put('title','Ubah Data Kamar');
        $kamar = Kamar::FindOrfail($id);
        return view('BO/content/kamar/edit', compact('kamar'));
    }

    public function update_kamar(Request $request){
        $kamar = Kamar::findOrFail($request->id);
        $kamar->no_kamar = $request->no_kamar;
        $kamar->lokasi = $request->lokasi;
        $kamar->harga = $request->harga;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->status = $request->status;
        try {
            $kamar->save();
            return redirect (route('BO.kamar.index'))->with('pesan-berhasil','Berhasil mengubah Kamar');
        }catch(\Exception $e){
            return redirect (route('BO.kamar.index'))->with('pesan-gagal','Gagal mengubah kamar');
        }
    }

    public function set_harga_kamar(Request $request){
        
        $set_kamar = $request->harga;

        DB::table('kamar')->update(['harga' => $set_kamar]);

        return to_route('BO.kamar.index')->with('success','Berhasil Set Harga Kamar Baru');

    }

    // public function hapus_kamar ($id){
    //     $dokter = Kamar::findOrFail($id);
        
    //     try {
    //         $dokter->delete();
    //         return redirect (route('BO.kamar.index'))->with('pesan-berhasil','Berhasil menghapus kamar');
    //     }catch(\Exception $e){
    //         return redirect (route('BO.kamar.index'))->with('pesan-gagal','Gagal menghapus kamar');
    //     }
    // }
}


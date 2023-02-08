<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KamarController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Kamar');
        $kamar = Kamar::all();
        return view('BO/content/kamar/list', compact('kamar'));
    }

    public function tambah_kamar(Request $request)
    {
        $kamar = new Kamar();
        $kamar->no_kamar = $request->no_kamar;
        $kamar->lokasi = $request->lokasi;
        $kamar->harga = $request->harga;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->status = $request->status;

        try {
            $kamar->save();
            Alert::info('Berhasil', 'Berhasil Membuat Data Kamar');
            return redirect(route('BO.kamar.index'));
        } catch (\Exception $e) {
            Alert::info('Gagal', 'Gagal Membuat Data Kamar');
            return redirect(route('BO.kamar.index'));
        }
    }

    public function edit_kamar($id)
    {

        Session::put('title', 'Ubah Data Kamar');
        $kamar = Kamar::FindOrfail($id);
        return view('BO/content/kamar/edit', compact('kamar'));
    }

    public function update_kamar(Request $request)
    {
        $kamar = Kamar::findOrFail($request->id);
        $kamar->no_kamar = $request->no_kamar;
        $kamar->lokasi = $request->lokasi;
        $kamar->harga = $request->harga;
        $kamar->fasilitas = $request->fasilitas;
        $kamar->status = $request->status;
        try {
            $kamar->save();
            Alert::sinfo('Berhasil', 'Berhasil Mengupdate Data Kamar');
            return redirect(route('BO.kamar.index'));
        } catch (\Exception $e) {
            Alert::info('Gagal', 'Gagal Mengupdate Data Kamar');
            return redirect(route('BO.kamar.index'));
        }
    }

    public function set_harga_kamar(Request $request)
    {

        $set_kamar = $request->harga;

        DB::table('kamar')->update(['harga' => $set_kamar]);

        Alert::info('Berhasil', 'Berhasil Membuat Harga Baru Kamar');
        return to_route('BO.kamar.index');
    }
}

<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        Session::put('title', 'Riwayat Transaksi');
        $trs = Transaksi::select("transaksi.*", 'kamar.lokasi', 'kamar.no_kamar')
            ->join('kamar', 'kamar.id', '=', 'transaksi.kamar_no')->orderBy('transaksi.id')->get();
        return view('BO/content/transaksi/listRiwayat', compact('trs'));
    }
}

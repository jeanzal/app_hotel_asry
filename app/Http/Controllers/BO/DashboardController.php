<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Transaksi;
use App\Models\BO;
use App\Models\FO;

use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    public function index()
    {
        Session::put('title', 'Dashboard');
        $total_kamar = Kamar::all();
        $total_transaksi = Transaksi::select('transaksi')->sum('price');
        $total_ci = Kamar::where('status','1')->count();
        $total_co = Kamar::where('status','2')->count();
        $total_tamu = Transaksi::all()->count();
        $total_user = FO::all()->count();
        return view('BO/content/dashboard', compact('total_kamar','total_transaksi','total_ci','total_co','total_user','total_tamu'));
    }
}

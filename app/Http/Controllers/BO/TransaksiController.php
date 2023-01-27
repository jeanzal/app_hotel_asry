<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Transaksi'); 
        return view('BO/content/transaksi/list');
    }
}

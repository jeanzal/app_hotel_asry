<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Kamar'); 
        return view('BO/content/kamar');
    }
}

<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        Session::put('title', 'Data Tamu'); 
        return view('BO/content/tamu');
    }
}

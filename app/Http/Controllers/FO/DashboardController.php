<?php

namespace App\Http\Controllers\FO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        Session::put('title', 'Dashboard Front Office');
        return view('FO/content/dashboard');
    }
}

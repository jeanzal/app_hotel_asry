<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        Session::put('title', 'Dashboard');
        return view('BO/content/dashboard');
    }
}

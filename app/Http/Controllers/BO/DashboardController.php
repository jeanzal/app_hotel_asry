<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index()
    {
        Session::put('title', 'Dashboard');
        $kamar = Kamar::all();
        return view('BO/content/dashboard', compact('kamar'));
    }
}

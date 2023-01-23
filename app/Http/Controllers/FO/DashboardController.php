<?php

namespace App\Http\Controllers\FO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        Session::put('title', 'Dashboard Front Office');
        return view('FO/content/dashboard', compact('today'));
    }
}

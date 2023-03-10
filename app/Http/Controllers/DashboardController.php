<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Kamar;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        return view('Public.dashboard', compact('kamar'));
    }
}

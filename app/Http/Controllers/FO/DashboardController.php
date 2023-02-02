<?php

namespace App\Http\Controllers\FO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Kamar;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        Session::put('title', 'Dashboard Front Office');
        $kamar = Kamar::all(); 
        return view('FO/content/dashboard', compact('today', 'kamar'));
    }

    public function bookRoom($id){

        $kamar = Kamar::find($id);
        return response()->json([
            'status' => 200,
            'kamar' => $kamar,
        ]);
    }


}

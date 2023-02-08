<?php

namespace App\Http\Controllers\BO;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\BO;
use App\Models\FO;

use RealRashid\SweetAlert\Facades\Alert;


class AdministratorController extends Controller
{
    public function listFO()
    {
        Session::put('title', 'Data Admin Front Office');
        $data = FO::all();
        return view('BO/content/data_admin/listFO', compact('data'));
    }
    public function listBO()
    {
        Session::put('title', 'Data Admin Back Office');
        $data = BO::all();
        return view('BO/content/data_admin/listBO', compact('data'));
    }
}

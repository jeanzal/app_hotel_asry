<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Util\Helper;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function verify(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('FO')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'FO', 'status' => 1])) {
            return redirect()->intended('/FO/dashboard');
        } else if (Auth::guard('BO')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'BO', 'status' => 1])) {
            return redirect()->intended('/BO/dashboard');
        } else {
            return redirect('/login')->with('pesan', 'Password yang anda masukan salah');
        }
    }

    public function logout()
    {
        if (Auth::guard('FO')->check()) {
            Auth::guard('FO')->logout();
        } elseif (Auth::guard('BO')->check()) {
            Auth::guard('BO')->logout();
        }
        return redirect('/login');
    }
}

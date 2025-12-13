<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Tampilan_login');
    }

    public function authenticate(Request $request)
    {
        // TODO: hook into real auth/guard logic
        return back()->withErrors(['email' => 'Autentikasi belum dikonfigurasi.']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestAuth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('/login');
    }
    public function on_login(RequestAuth $request)
    {
        $data = array(
            "username" => $request->username,
            "password" => $request->password
        );
        if (Auth::guard('petugas')->attempt($data)) {
            $request->session()->regenerate();
            $datarole = Auth::guard('petugas')->user()->level;
            if ($datarole == "superadmin") {
                return redirect()->intended('/superadmin');
            } elseif ($datarole == "pegawai") {
                return redirect()->intended('/pegawai');
            } elseif ($datarole == "karyawangudang") {
                return redirect()->intended('/karyawan');
            } elseif ($datarole == "supir") {
                return redirect()->intended('/supir');
            }
        } else {
            //redirect('login')->with('pesan', 'username password error');
            return "salah";
        }
    }
    public function on_logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
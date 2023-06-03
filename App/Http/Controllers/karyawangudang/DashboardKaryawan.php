<?php

namespace App\Http\Controllers\karyawangudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKaryawan extends Controller
{
    public function index()
    {
        return view('karyawan_gudang/dashboard');
    }
}
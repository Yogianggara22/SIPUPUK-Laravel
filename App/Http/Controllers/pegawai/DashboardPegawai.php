<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPegawai extends Controller
{
    public function index()
    {
        return view('pegawai/main');
    }
}
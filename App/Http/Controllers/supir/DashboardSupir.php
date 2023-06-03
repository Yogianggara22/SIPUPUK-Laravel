<?php

namespace App\Http\Controllers\supir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSupir extends Controller
{
    public function index()
    {
        return view('supir/main');
    }
}
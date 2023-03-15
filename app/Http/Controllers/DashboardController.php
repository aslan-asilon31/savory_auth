<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // your controller logic here
    }
    
    public function index()
    {
        return view('dashboard');
    }
}

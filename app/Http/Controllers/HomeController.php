<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Make sure you have a view file named home.blade.php in the resources/views directory
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');

    }
}

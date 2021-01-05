<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Website;

class HomeController extends Controller
{

    public function index()
    {
        $home = Home::all();
        $website = Website::find(1);
        return view('welcome', compact('home', 'website'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2()
    {
        return view('home');
    }
}

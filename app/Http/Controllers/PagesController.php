<?php

namespace App\Http\Controllers;

use App\Prayer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index()
    {
        $prayer = Prayer::inRandomOrder()->first();
        return view('index')->withPrayer($prayer);

    }
}

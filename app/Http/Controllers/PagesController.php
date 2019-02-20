<?php

namespace App\Http\Controllers;

use App\Prayer;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Session;

class PagesController extends Controller
{
    public function index()
    {
        $prayer = Prayer::inRandomOrder()->first();
        return view('index')->withPrayer($prayer);

    }

    public function addprayerpage()
    {
        return view('addprayer');
    }

    public function submitprayer(Request $request)
    {
        $prayer = new Prayer();
        $prayer->prayer = $request->prayer;
        $prayer->timestamps = false; // Dont change the timestamps on save.
        $prayer->save();
        Session::flash('added', 'Thank you, May Allah reward you abundantly');
        return view('index')->withPrayer($prayer);
    }
}

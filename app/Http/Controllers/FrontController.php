<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.home');
    }

    public function requestAccess(Request $request)
    {
        $request->session()->put('adult', true);

        return redirect()->route('choose.night');
    }


}

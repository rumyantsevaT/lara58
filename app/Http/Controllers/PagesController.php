<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Jaffrey Way';

//        return view('pages.about', compact('name'));
        return view('pages.about')->with('name', $name);
    }

}

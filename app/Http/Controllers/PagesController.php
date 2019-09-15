<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Fox';

//        return view('pages.about', compact('name'));
        return view('pages.about')->with('name', $name);
    }

    public function contact()
    {
        $name = 'Fox';

//        return view('pages.about', compact('name'));
        return view('pages.contact')->with('name', $name);
    }

}

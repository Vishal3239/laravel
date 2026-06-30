<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function user()
    {
        // return '<h1>" my name is vishal patel"</h1>';
        if (View::exists('home'))
            return view('home');
        else {
            return 'no exist';
        }
    }

    function add(Request $Request)
    {
        $a = $Request->a;
        $b = $Request->b;
        return '<h1>' . $a + $b . '</h1>';
    }

    function getName($name)
    {
        return 'hello ' . $name;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basic extends Controller
{
    // Basic countroller
    public function index()
    {
        $a = "call from ";
        $b = "controller";
        $data = compact('a', 'b');
        return view('home')->with($data);
    }
    public function about()
    {
        $data = 'This is about page, (Message came from basic controller)';
        return view('about')->with('data', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ( 'pages/home' );
    }

    public function profile()
    {
        return view ( 'pages/profile' );
    }

    public function gallery()
    {
        // If album not empy
        $albums = [
            'Album 1',
            'Album 2',
            'Album 3',
            'Album 4',
            'Album 5',
        ];
        // If album empty
        $albums2 = [ ];
        return view ( 'pages/gallery', compact('albums', 'albums2'));
    }

    public function contact()
    {
        return view ( 'pages/contact' );
    }
}

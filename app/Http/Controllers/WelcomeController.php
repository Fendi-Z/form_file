<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() 
    {
        $activeMenu = 'home';

        return view('welcome', [
                'activeMenu' => $activeMenu
            ]
        );
    }
}

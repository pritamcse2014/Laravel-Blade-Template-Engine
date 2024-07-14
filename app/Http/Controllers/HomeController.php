<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(Request $request) {
        $data = [
            ['name' => 'Pritam', 'city' => 'Dhaka'],
            ['name' => 'Priya', 'city' => 'Jessore'],
            ['name' => 'Prity', 'city' => 'Jhenaidah'],
            ['name' => 'Pori', 'city' => 'Khulna'],
        ];
        return view('Home', ['data' => $data]);
    }
}

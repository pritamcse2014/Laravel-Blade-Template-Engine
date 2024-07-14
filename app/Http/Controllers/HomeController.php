<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(Request $request) {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;

        $message = [
            'message' => 'Home'
        ];
        $result = [
            'result' => $sum
        ];
        return view('Home', $message, $result);
    }
}

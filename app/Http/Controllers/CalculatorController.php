<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index() {
        return view('calculator');
    }

    public function calculate(Request $request) {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $sum = $num1 + $num2;

        return response()->json(['sum' => $sum]);
    }
}
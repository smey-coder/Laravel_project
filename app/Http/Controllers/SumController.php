<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function calc(int $a, int $b) {
        $total = $a + $b;
        return view('sum', compact('total'));
    }

    public function multi(int $a, int $b) {
        $total = $a * $b;
        return view('multi', compact('total'));
    }
}

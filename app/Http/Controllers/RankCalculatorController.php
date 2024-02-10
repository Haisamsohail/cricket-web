<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankCalculatorController extends Controller
{
    public function index() {
        // return view('rankcalculator');
        return view('rankcalculator', ['layoutType' =>  config('constants.layoutType.RANK_CALCULATOR')]);
    }
}

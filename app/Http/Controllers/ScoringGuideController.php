<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoringGuideController extends Controller
{
    public function index() {
        return view('scoringguide');
    }
}

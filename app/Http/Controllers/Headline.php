<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Headline extends Controller
{
    public function index() {
        return view('headline.data');
    }
}

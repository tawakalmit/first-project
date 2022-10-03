<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudControlller extends Controller
{
    public function create() {
        return view('crud');
    }

    public function store(){
        dd('submitted'); // maksudnya die and dump
        
    }
}

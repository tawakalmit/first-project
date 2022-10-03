<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MycardController extends Controller
{
    public function index(){
        $mycard = DB::table('card')->get();
        //dd($mycard);
        return view('components.mycard', compact('mycard'));
    }
}

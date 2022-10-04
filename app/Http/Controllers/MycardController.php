<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MycardController extends Controller
{
    public function index(){
        $mycard = DB::table('card')->get();
        //dd($mycard);
        return view('crud', compact('mycard'));
    }

    public function store(Request $request){
        DB::table('card')->insert([
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
        ]);

        return redirect('crud')->with('status', 'Data successfully added');
        
    }
}
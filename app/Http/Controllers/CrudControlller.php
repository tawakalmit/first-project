<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudControlller extends Controller
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

    public function edit($id) {
        $card = DB::table('card')->where('id', $id)->first();
        return view ('mycardedit', ['card' => $card]);
     }
 
     public function update(Request $request, $id) {
         $card = DB::table('card')->where('id', $id)->update([
             'name' => $request->name,
             'job' => $request->job,
             'description' => $request->description
         ]);
         return redirect('crud')->with('status', 'Data successfully updated');
     }
 
     public function destroy($id) {
         DB::table('card')->where('id', $id)->delete();
         return redirect('crud')->with('status', 'Data successfully Deleted');;
     }
}
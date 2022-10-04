<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mycard3Controller extends Controller
{

    public function index(){
        $mycard3 = DB::table('card3')->get();
        //dd($mycard);
        return view('mycard3', compact('mycard3'));
    }

    public function store(Request $request){
        DB::table('card3')->insert([
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
        ]);

        return redirect('mycard3')->with('status', 'Data successfully added');
    }

    public function edit($id) {
        $card3 = DB::table('card3')->where('id', $id)->first();
        return view ('mycard3edit', ['card3' => $card3]);
     }
 
     public function update(Request $request, $id) {
         $card3 = DB::table('card3')->where('id', $id)->update([
             'name' => $request->name,
             'job' => $request->job,
             'description' => $request->description
         ]);
         return redirect('mycard3')->with('status', 'Data successfully updated');
     }
 
     public function destroy($id) {
         DB::table('card3')->where('id', $id)->delete();
         return redirect('mycard3')->with('status', 'Data successfully Deleted');;
     }
}

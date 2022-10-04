<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mycard2Controller extends Controller
{

    public function index(){
        $mycard2 = DB::table('card2')->get();
        //dd($mycard);
        return view('mycard2', compact('mycard2'));
    }

    public function store(Request $request){
        DB::table('card2')->insert([
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
        ]);

        return redirect('mycard2')->with('status', 'Data successfully added');
    }

    public function edit($id) {
       $card2 = DB::table('card2')->where('id', $id)->first();
       return view ('mycard2edit', ['card2' => $card2]);
    }

    public function update(Request $request, $id) {
        $card2 = DB::table('card2')->where('id', $id)->update([
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description
        ]);
        return redirect('mycard2')->with('status', 'Data successfully updated');
    }

    public function destroy($id) {
        DB::table('card2')->where('id', $id)->delete();
        return redirect('mycard2')->with('status', 'Data successfully Deleted');;
    }
}

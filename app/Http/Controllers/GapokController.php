<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gapok;
use App\Http\Requests;

class GapokController extends Controller
{
    public function index(){
    	$data = Gapok::all();
    	return view('gapok/gapok')->with('data', $data);
    }

    public function create2(){
    	$data = Gapok::all();
    	return view('gapok/buat_gapok', ['data' => $data]);
    }

    public function store2(Request $request){

    $data = new Gapok();
    $data->id_gapok = $request['id_gapok'];
    $data->gapok = $request['gapok'];
    

    $data->save();

   return redirect()->to('gapok')->with('success','Your Data Has Been Added');
    }

    public function edit2($id_gapok){
        $data = Gapok::find($id_gapok);
        return view('gapok/edit_gapok')->with('data', $data);
    }



    public function update2(Request $request, $id_gapok){
        Gapok::find($id_gapok)->update($request->all());
        return redirect('gapok');
    }


    public function delete2($id_gapok){
        $delete2 = Gapok::find($id_gapok);
        $delete2 -> delete();

        return redirect() -> to('gapok')->with('deleted','Your Data Has Been Deleted');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Potongan;
use App\Http\Requests;

class PotonganController extends Controller
{
    public function index(){
    	$data = Potongan::all();
    	return view('potongan/potongan')->with('data', $data);
    }

    public function create7(){
    	$data = Potongan::all();
    	return view('potongan/buat_potongan', ['data' => $data]);
    }

    public function store7(Request $request){

    $data = new Potongan();
    $data->id_potongan = $request['id_potongan'];
    $data->potongan = $request['potongan'];
    $data->nominal = $request['nominal'];
    

    $data->save();

   return redirect()->to('potongan')->with('success','Your Data Has Been Added');
    }

    public function edit7($id_potongan){
        $data = Potongan::find($id_potongan);
        return view('potongan/edit_potongan')->with('data', $data);
    }



    public function update7(Request $request, $id_potongan){
        Potongan::find($id_potongan)->update($request->all());
        return redirect('potongan');
    }


    public function delete7($id_potongan){
        $delete2 = Potongan::find($id_potongan);
        $delete2 -> delete();

        return redirect() -> to('potongan')->with('deleted','Your Data Has Been Deleted');
	}
}

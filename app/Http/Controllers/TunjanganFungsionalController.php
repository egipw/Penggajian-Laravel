<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganFungsional;
use App\Http\Requests;

class TunjanganFungsionalController extends Controller
{
        public function index(){
    	$data = TunjanganFungsional::all();
    	return view('tunjangan_fungsional/tunjangan_fungsional')->with('data', $data);
    }

    public function store8(Request $request){

    $data = new TunjanganFungsional();
    $data->id_fungsional = $request['id_fungsional'];
	$data->jenis_fungsional = $request['jenis_fungsional'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_fungsional')->with('success','Your Data Has Been Added');
    }

    public function edit8($id_fungsional){
        $data = TunjanganFungsional::find($id_fungsional);
        return view('tunjangan_fungsional/edit_tunjangan_fungsional')->with('data', $data);
    }

    public function update8(Request $request, $id_fungsional){
        TunjanganFungsional::find($id_fungsional)->update($request->all());
        return redirect('tunjangan_fungsional');
    }

 		public function delete8($id_fungsional){
        $delete8 = TunjanganFungsional::find($id_fungsional);
        $delete8 -> delete();

        return redirect() -> to('tunjangan_fungsional')->with('deleted','Your Data Has Been Deleted');
	}
}

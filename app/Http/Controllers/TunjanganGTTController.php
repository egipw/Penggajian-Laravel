<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganGTT;
use App\Http\Requests;

class TunjanganGTTController extends Controller
{
        public function index(){
    	$data = TunjanganGTT::all();
    	return view('tunjangan_gtt/tunjangan_gtt')->with('data', $data);
    }

    public function store10(Request $request){

    $data = new TunjanganGTT();
    $data->id_gtt = $request['id_gtt'];
	$data->jenis_gtt = $request['jenis_gtt'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_gtt')->with('success','Your Data Has Been Added');
    }

    public function edit10($id_gtt){
        $data = TunjanganGTT::find($id_gtt);
        return view('tunjangan_gtt/edit_tunjangan_gtt')->with('data', $data);
    }

    public function update10(Request $request, $id_gtt){
        TunjanganGTT::find($id_gtt)->update($request->all());
        return redirect('tunjangan_gtt');
    }

 		public function delete10($id_gtt){
        $delete10 = TunjanganFungsional::find($id_gtt);
        $delete10 -> delete();

        return redirect() -> to('tunjangan_gtt')->with('deleted','Your Data Has Been Deleted');
	}
}

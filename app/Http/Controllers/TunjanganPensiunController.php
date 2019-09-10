<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganPensiun;
use App\Http\Requests;

class TunjanganPensiunController extends Controller
{
        public function index(){
    	$data = TunjanganPensiun::all();
    	return view('tunjangan_pensiun/tunjangan_pensiun')->with('data', $data);
    }

    public function store11(Request $request){

    $data = new TunjanganPensiun();
    $data->id_pensiun = $request['id_pensiun'];
	$data->jenis_pensiun = $request['jenis_pensiun'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_pensiun')->with('success','Your Data Has Been Added');
    }

    public function edit11($id_pensiun){
        $data = TunjanganPensiun::find($id_pensiun);
        return view('tunjangan_pensiun/edit_tunjangan_pensiun')->with('data', $data);
    }

    public function update11(Request $request, $id_pensiun){
        TunjanganPensiun::find($id_pensiun)->update($request->all());
        return redirect('tunjangan_pensiun');
    }

 		public function delete9($id_pensiun){
        $delete11 = TunjanganPensiun::find($id_pensiun);
        $delete11 -> delete();

        return redirect() -> to('tunjangan_pensiun')->with('deleted','Your Data Has Been Deleted');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganKesehatan;
use App\Http\Requests;

class TunjanganKesehatanController extends Controller
{
        public function index(){
    	$data = TunjanganKesehatan::all();
    	return view('tunjangan_kesehatan/tunjangan_kesehatan')->with('data', $data);
    }

    public function store6(Request $request){

    $data = new TunjanganKesehatan();
    $data->id_kesehatan = $request['id_kesehatan'];
	$data->jenis_kesehatan = $request['jenis_kesehatan'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_kesehatan')->with('success','Your Data Has Been Added');
    }

    public function edit6($id_kesehatan){
        $data = TunjanganKesehatan::find($id_kesehatan);
        return view('tunjangan_kesehatan/edit_tunjangan_kesehatan')->with('data', $data);
    }

    public function update6(Request $request, $id_kesehatan){
        TunjanganKesehatan::find($id_kesehatan)->update($request->all());
        return redirect('tunjangan_kesehatan');
    }

 		public function delete6($id_kesehatan){
        $delete6 = TunjanganKesehatan::find($id_kesehatan);
        $delete6 -> delete();

        return redirect() -> to('tunjangan_kesehatan')->with('deleted','Your Data Has Been Deleted');
	}
}
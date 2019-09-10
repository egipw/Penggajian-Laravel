<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganJabatan;
use App\Http\Requests;

class TunjanganJabatanController extends Controller
{
        public function index(){
    	$data = TunjanganJabatan::all();
    	return view('tunjangan_jabatan/tunjangan_jabatan')->with('data', $data);
    }

    public function store9(Request $request){

    $data = new TunjanganJabatan();
    $data->id_jabatan = $request['id_jabatan'];
	$data->jenis_jabatan = $request['jenis_jabatan'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_jabatan')->with('success','Your Data Has Been Added');
    }

    public function edit9($id_jabatan){
        $data = TunjanganJabatan::find($id_jabatan);
        return view('tunjangan_jabatan/edit_tunjangan_jabatan')->with('data', $data);
    }

    public function update9(Request $request, $id_jabatan){
        TunjanganJabatan::find($id_jabatan)->update($request->all());
        return redirect('tunjangan_jabatan');
    }

 		public function delete9($id_jabatan){
        $delete9 = TunjanganJabatan::find($id_jabatan);
        $delete9 -> delete();

        return redirect() -> to('tunjangan_jabatan')->with('deleted','Your Data Has Been Deleted');
	}
}

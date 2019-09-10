<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TunjanganKeluarga;
use App\Http\Requests;

class TunjanganKeluargaController extends Controller
{
        public function index(){
    	$data = TunjanganKeluarga::all();
    	return view('tunjangan_keluarga/tunjangan_keluarga')->with('data', $data);
    }

    

    public function store5(Request $request){

    $data = new TunjanganKeluarga();
    $data->id_keluarga = $request['id_keluarga'];
	$data->jenis_keluarga = $request['jenis_keluarga'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('tunjangan_keluarga')->with('success','Your Data Has Been Added');
    }

    public function edit5($id_keluarga){
        $data = TunjanganKeluarga::find($id_keluarga);
        return view('tunjangan_keluarga/edit_tunjangan_keluarga')->with('data', $data);
    }



    public function update5(Request $request, $id_keluarga){
        TunjanganKeluarga::find($id_keluarga)->update($request->all());
        return redirect('tunjangan_keluarga');
    }


    public function delete5($id_keluarga){
        $delete6 = TunjanganKeluarga::find($id_keluarga);
        $delete6 -> delete();

        return redirect() -> to('tunjangan_keluarga')->with('deleted','Your Data Has Been Deleted');
	}
}

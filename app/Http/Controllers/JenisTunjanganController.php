<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenistunjangan;
use App\Http\Requests;

class JenisTunjanganController extends Controller
{
    public function index(){
    	$data = Jenistunjangan::all();
    	return view('jenistunjangan/jenistunjangan')->with('data', $data);
    }

    public function create4(){
    	$data = Jenistunjangan::all();
    	return view('jenistunjangan/buat_jenistunjangan', ['data' => $data]);
    }

    public function store4(Request $request){

    $data = new Jenistunjangan();
    $data->id_jenis = $request['id_jenis'];
	$data->tunjangan = $request['tunjangan'];
	$data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('jenistunjangan')->with('success','Your Data Has Been Added');
    }

    public function edit4($id_tunjangan){
        $data = Jenistunjangan::find($id_tunjangan);
        return view('jenistunjangan/edit_jenistunjangan')->with('data', $data);
    }



    public function update4(Request $request, $id_tunjangan){
        Jenistunjangan::find($id_tunjangan)->update($request->all());
        return redirect('jenistunjangan');
    }


    public function delete4($id_tunjangan){
        $delete4 = Jenistunjangan::find($id_tunjangan);
        $delete4 -> delete();

        return redirect() -> to('jenistunjangan')->with('deleted','Your Data Has Been Deleted');
	}
}

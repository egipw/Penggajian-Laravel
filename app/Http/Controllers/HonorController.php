<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Honor;
use App\Pegawai;
use App\Http\Requests;

class HonorController extends Controller
{
    public function index(){
    	$data = Honor::all();
    	return view('honor/honor')->with('data', $data);
    }

    public function create3(){
        $data = Pegawai::all();
        return view('honor/buat_honor', ['data' => $data]);
    }

    public function store3(Request $request){

    $data = new Honor();
    $data->id_pegawai = $request['id_pegawai'];
    $data->tanggal_honor = $request['tanggal_honor'];
    $data->jenis_honor = $request['jenis_honor'];
    $data->nominal = $request['nominal'];

    $data->save();

   return redirect()->to('honor')->with('success','Your Data Has Been Added');
    }


    public function edit3($id_honor){
        $data = Honor::find($id_honor);
        return view('honor/edit_honor')->with('data', $data);
    }



    public function update3(Request $request, $id_honor){
        Honor::find($id_honor)->update($request->all());
        return redirect('honor');
    }


    public function delete3($id_honor){
        $delete3 = Honor::find($id_honor);
        $delete3 -> delete();

        return redirect() -> to('honor')->with('deleted','Your Data Has Been Deleted');
	}
}

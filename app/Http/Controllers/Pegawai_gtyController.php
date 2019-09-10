<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai_gty;
use App\Status;
use App\Http\Requests;

class Pegawai_gtyController extends Controller
{
    public function index(){
    $data = Pegawai_gty::all();
    return view('pegawai_gty/pegawai_gty')->with('data', $data);
    }

    public function create_gty(){
    	$data = Pegawai_gty::all();
    	return view('pegawai_gty/buat_pegawai_gty', ['data' => $data]);
    }

    public function store_gty(Request $request){

    $data = new Pegawai_gty();

    $data->nip = $request['nip'];
    $data->nama = $request['nama'];
    $data->jabatan = $request['jabatan'];
    $data->id_status = $request['id_status'];
    $data->gapok = $request['gapok'];
    $data->t_kesehatan = $request['t_kesehatan'];
    $data->t_keluarga = $request['t_keluarga'];
 

    $data->t_fungsional = $request['t_fungsional'];
    $data->t_jabatan = $request['t_jabatan'];
    $data->t_transportasi = $request['t_transportasi'];
    $data->t_kinerja = $request['t_kinerja'];
    $data->t_pensiun = $request['t_pensiun'];
    $data->t_gtt = $request['t_gtt'];


    $data->save();

   return redirect()->to('pegawai_gty')->with('success','Your Data Has Been Added');
    }

    public function edit_gty($id_gty){
        $data = Pegawai_gty::find($id_gty);
        return view('pegawai_gty/edit_pegawai_gty')->with('data', $data);
    }



    public function update_gty(Request $request, $id_gty){
        Pegawai_gty::find($id_gty)->update($request->all());
        return redirect('pegawai_gty');
    }


    public function delete_gty($id_gty){
        $delete6 = Pegawai_gty::find($id_gty);
        $delete6 -> delete();

        return redirect() -> to('pegawai_gty')->with('deleted','Your Data Has Been Deleted');
	}
}

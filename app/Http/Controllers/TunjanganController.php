<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tunjangan;
use App\Pegawai;
use App\Http\Requests;

class TunjanganController extends Controller
{
    public function index(){
    	$data = Tunjangan::all();
    	return view('tunjangan/tunjangan')->with('data', $data);
    }

    public function create1(){
    	$data = Pegawai::all();
    	return view('tunjangan/buat_tunjangan', ['data' => $data]);
    }

    public function store1(Request $request){

    $data = new Tunjangan();
    $data->id_pegawai = $request['id_pegawai'];
    $data->tanggal_gajian = $request['tanggal_gajian'];
	$data->jmlh_transport = $request['jmlh_transport'];
	$data->jmlh_kinerja = $request['jmlh_kinerja'];
    $data->keterangan = $request['keterangan'];

    $data->save();

   return redirect()->to('tunjangan')->with('success','Your Data Has Been Added');
    }

    public function edit1($id_tunjangan){
        $data = Tunjangan::find($id_tunjangan);
        return view('tunjangan/edit_tunjangan')->with('data', $data);
    }

    //coba lihat tunjangan
    public function lihat1($id_tunjangan){
        $data = Tunjangan::find($id_tunjangan);
        return view('tunjangan/lihat_tunjangan')->with('data', $data);
    }



    public function update1(Request $request, $id_tunjangan){
        Tunjangan::find($id_tunjangan)->update($request->all());
        return redirect('tunjangan');
    }


    public function delete1($id_tunjangan){
        $delete1 = Tunjangan::find($id_tunjangan);
        $delete1 -> delete();

        return redirect() -> to('tunjangan')->with('deleted','Your Data Has Been Deleted');
	}
}


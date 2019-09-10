<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PegawaiBaru;
use App\Pegawai;
use App\Pegawai1;
use App\JenisTunjangan;
use App\Gapok;
use App\Potongan;
use App\Tunjangan;
use App\TunjanganKeluarga;
use App\TunjanganKesehatan;
use App\TunjanganFungsional;
use App\TunjanganJabatan;
use App\TunjanganGTT;
use App\TunjanganPensiun;
use App\Http\Requests;


class PegawaiController extends Controller
{
    public function index(){
    	$data = Pegawai::all();
    	return view('pegawai/daftar_pegawai')->with('data', $data);
    }

    public function create(){
        $data = array( 
            'data' => Gapok::all(),
            'cs' => JenisTunjangan::all(),
            'ss' => TunjanganKesehatan::all(),
            'aa' => TunjanganKeluarga::all(),
            'ff' => TunjanganFungsional::all(),
            'jj' => TunjanganJabatan::all(),
            'tt' => TunjanganGTT::all(),
            'pp' => TunjanganPensiun::all(),
            'pot' => Potongan::all()
            );
    	return view('pegawai/buat_pegawai')->with($data);
    }

    public function store(Request $request){

    $data = new Pegawai();
    $data->id_pegawai = $request['id_pegawai'];
    $data->nip = $request['nip'];
    $data->nama = $request['nama'];
    $data->keterangan = $request['keterangan'];
    $data->jabatan = $request['jabatan'];
    $data->id_status = $request['id_status'];
    $data->id_gapok = $request['id_gapok'];
    $data->id_kesehatan = $request['id_kesehatan'];
    $data->id_keluarga = $request['id_keluarga'];
    $data->id_fungsional = $request['id_fungsional'];
    $data->id_jabatan = $request['id_jabatan'];
    $data->id_pensiun = $request['id_pensiun'];
    $data->id_gtt = $request['id_gtt'];
    
    $data->transportasi = $request['1'];
    $data->kinerja = $request['2'];
    
    $data->id_potongan = $request['id_potongan'];
    
  
    
    $data->save();

   return redirect()->to('pegawai')->with('success','Your Data Has Been Added');
    }

    
    public function show($id_pegawai){
        $data = Pegawai::find($id_pegawai);
        return view('pegawai/detail_pegawai')->with('data', $data);
    }

    public function edit($id_pegawai){
         $data = array(
                'data' => Gapok::all(),
                'cs' => JenisTunjangan::all(),
                'ss' => TunjanganKesehatan::all(),
                'aa' => TunjanganKeluarga::all(),
                'ff' => TunjanganFungsional::all(),
                'jj' => TunjanganJabatan::all(),
                'tt' => TunjanganGTT::all(),
                'pp' => TunjanganPensiun::all(),
                'pot' => Potongan::all()
            );
         $peg = Pegawai::find($id_pegawai);
        return view('pegawai/edit_pegawai' )->with('peg', $peg)->with($data);
    }

    public function edit_ket($id_pegawai){
        $peg = Pegawai::find($id_pegawai);
        return view('pegawai/edit_ket_pegawai' )->with('peg', $peg);
    }

//coba lihat pegawai
    public function lihat($id_pegawai){
        $data = Pegawai::find($id_pegawai);
        return view('pegawai/lihat_pegawai')->with('data', $data);
    }



    public function update(Request $request, $id_pegawai){
        Pegawai::find($id_pegawai)->update($request->all());
        return redirect('pegawai');
    }

    public function update_ket(Request $request, $id_pegawai){ 
        $update = Tunjangan::find($id_tunjangan);
        $update->keterangan=$request['keterangan'];
        $update->update();
        return redirect('pegawai');
    }


    public function delete($id_pegawai){
        $delete = Pegawai::find($id_pegawai);
        $delete -> delete();

        return redirect() -> to('pegawai')->with('deleted','Your Data Has Been Deleted');
	}

    public function gajian(){
        $data = Pegawai1::where('keterangan', 'Aktif')->get();

        return view('gajian.gajian')->with('data', $data);
    }

    public function tambahgaji($id_pegawai){
        $data = Pegawai1::where('id_pegawai', $id_pegawai)->first();
        //$cek = Pegawai1::where('id_pegawai', $id_pegawai)->where('keterangan', 'Cuti')->first();
        return view('gajian.tambah')->with('data', $data);
    }

    public function simpangaji(Request $request, $id_pegawai){
        $cek = $request['keterangan'];
        $isi = 0;
        if($cek == 'Cuti'){
            $data = new Tunjangan();
            $data->id_pegawai = $id_pegawai;
            $data->keterangan = $request['keterangan'];
            $data->tanggal_gajian = $request['tanggal_gajian'];
            $data->jmlh_kinerja = $isi;
            $data->jmlh_transport = $isi;
            $data->gapok = $request['gapok'];
            $data->kesehatan = $isi;
            $data->keluarga = $isi;
            $data->fungsional = $isi;
            $data->tjabatan = $isi;
            $data->pensiun = $isi;
            $data->gtt = $isi;
            $data->transportasi = $isi;
            $data->kinerja = $isi;
            $data->potongan = $isi;
            
            $data->save();
        }else{
            $data = new Tunjangan();
            $data->id_pegawai = $id_pegawai;
            $data->keterangan = $request['keterangan'];
            $data->tanggal_gajian = $request['tanggal_gajian'];
            $data->jmlh_kinerja = $request['jmlh_kinerja'];
            $data->jmlh_transport = $request['jmlh_transport'];
            $data->gapok = $request['gapok'];
            $data->kesehatan = $request['kesehatan'];
            $data->keluarga = $request['keluarga'];
            $data->fungsional = $request['fungsional'];
            $data->tjabatan = $request['tjabatan'];
            $data->pensiun = $request['pensiun'];
            $data->gtt = $request['gtt'];
            $data->transportasi = $request['transportasi'];
            $data->kinerja = $request['kinerja'];
            $data->potongan = $request['potongan'];
            $data->save();
        }
        //dd($request->all());
       return redirect()->to('gajian');
    }
}
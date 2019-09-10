<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\PegawaiBaru;
use App\Honor;

class PDFController extends Controller
{
    public function getPDF($id_tunjangan){  	
    	
        $data=PegawaiBaru::find($id_tunjangan);
    	$data = PDF::loadView('pegawai/pdf_pegawai', ['data'=>$data]);
    	return $data->stream('slip_gaji.pdf');
    }

    public function getPDFsemua(){
        $tes = Input::get('bulan');
        $tahun = Carbon::parse($tes)->format('Y');
        $bulan = Carbon::parse($tes)->format('m');
        //echo  $tahun, $bulan;
    	$data=PegawaiBaru::whereMonth('tanggal_gajian', '=', $bulan)->whereYear('tanggal_gajian','=', $tahun)->get();
    	$data = PDF::loadView('pegawai/pdf_pegawailihat', ['data'=>$data]);
    	return $data->setPaper('legal', 'landscape')->stream('laporan_penggajian.pdf');
    }

    public function getPDFhonor(){
        $tes = Input::get('bulan');
        $tahun = Carbon::parse($tes)->format('Y');
        $bulan = Carbon::parse($tes)->format('m');
        //echo  $tahun, $bulan;
        $data=Honor::whereMonth('tanggal_honor', '=', $bulan)->whereYear('tanggal_honor','=', $tahun)->get();
        $data = PDF::loadView('pegawai/pdf_pegawaihonor', ['data'=>$data]);
        return $data->stream('laporan_honor.pdf');
    }
}

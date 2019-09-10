<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\PegawaiBaru;
use App\Http\Requests;

class ExcelController extends Controller
{
   public function getExcel(){  	
    	$data=PegawaiBaru::get()->toArray();
    	return Excel::create('Laporan Penggajian' .date("Y-m-d"), function($excel) use ($data){
    		$excel->sheet('sheet1', function($sheet) use ($data){
    			$sheet->fromArray($data);
    		});
    	})->download("xlsx");
    }

}

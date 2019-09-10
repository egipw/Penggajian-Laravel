<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiBaru;
use App\Http\Requests;

class LaporanController extends Controller
{
    public function index(){
    	$data = PegawaiBaru::all();
    	return view('laporan/laporan')->with('data', $data);
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//****************ROUTE Bendahara************/
Route::group(['middleware' => ['auth', 'role:admin']], function(){
//PEGAWAI CRUD
	Route::get('/laporan', 'LaporanController@index');


	//PEGAWAI CRUD
	Route::get('/pegawai', 'PegawaiController@index');
	Route::get('/create', 'PegawaiController@create');
	Route::post('/store', 'PegawaiController@store');
	Route::get('/delete/{id_pegawai}', 'PegawaiController@delete');
	Route::get('show/{id_pegawai}', 'PegawaiController@show');
	Route::get('edit/{id_pegawai}', 'PegawaiController@edit');
	Route::get('edit_ket/{id_pegawai}', 'PegawaiController@edit_ket');
	Route::post('update/ket/{id_pegawai}', 'PegawaiController@update_ket');

	Route::get('lihat/{id_pegawai}', 'PegawaiController@lihat');
	Route::post('update/{id_pegawai}', 'PegawaiController@update');

	//PEGAWAI GTY CRUD
	Route::get('/pegawai_gty', 'Pegawai_gtyController@index');
	Route::get('/create_gty', 'Pegawai_gtyController@create_gty');
	Route::post('/store_gty', 'Pegawai_gtyController@store_gty');
	Route::get('/delete_gty/{id_pegawai}', 'Pegawai_gtyController@delete_gty');
	Route::get('show_gty/{id_pegawai}', 'Pegawai_gtyController@show');
	Route::get('edit_gty/{id_pegawai}', 'Pegawai_gtyController@edit_gty');
	Route::get('lihat_gty/{id_pegawai}', 'Pegawai_gtyController@lihat');
	Route::post('update_gty/{id_pegawai}', 'Pegawai_gtyController@update_gty');


	//TUNJANGAN (ABSEN) CRUD
	Route::get('/tunjangan', 'TunjanganController@index');
	Route::get('/create1', 'TunjanganController@create1');
	Route::post('/store1', 'TunjanganController@store1');
	Route::get('/delete1/{id_tunjangan}', 'TunjanganController@delete1');
	Route::get('show1/{id_tunjangan}', 'TunjanganController@show1');
	Route::get('edit1/{id_tunjangan}', 'TunjanganController@edit1');
	Route::get('lihat1/{id_tunjangan}', 'TunjanganController@lihat1');
	Route::post('update1/{id_tunjangan}', 'TunjanganController@update1');


	//GAPOK
	Route::get('/gapok', 'GapokController@index');
	Route::get('/create2', 'GapokController@create2');
	Route::post('/store2', 'GapokController@store2');
	Route::get('/delete2/{id_gapok}', 'GapokController@delete2');
	Route::get('edit2/{id_gapok}', 'GapokController@edit2');
	Route::post('update2/{id_gapok}', 'GapokController@update2');


	//HONOR
	Route::get('/honor', 'HonorController@index');
	Route::get('/create3', 'HonorController@create3');
	Route::post('/store3', 'HonorController@store3');
	Route::get('/delete3/{id_honr}', 'HonorController@delete3');
	Route::get('edit3/{id_honr}', 'HonorController@edit3');
	Route::post('update3/{id_honr}', 'HonorController@update3');


	//JENIS TUNJANGAN
	Route::get('/jenistunjangan', 'JenisTunjanganController@index');
	Route::get('/create4', 'JenisTunjanganController@create4');
	Route::post('/store4', 'JenisTunjanganController@store4');
	Route::get('/delete4/{id_jenis}', 'JenisTunjanganController@delete4');
	Route::get('show4/{id_jenis}', 'JenisTunjanganController@show1');
	Route::get('edit4/{id_jenis}', 'JenisTunjanganController@edit4');
	Route::post('update4/{id_jenis}', 'JenisTunjanganController@update4');


	//JENIS TUNJANGAN KELUARGA
	Route::get('/tunjangan_keluarga', 'TunjanganKeluargaController@index');
	Route::post('/store5', 'TunjanganKeluargaController@store5');
	Route::get('edit5/{id_keluarga}', 'TunjanganKeluargaController@edit5');
	Route::post('update5/{id_keluarga}', 'TunjanganKeluargaController@update5');


	//JENIS TUNJANGAN KESEHATAN
	Route::get('/tunjangan_kesehatan', 'TunjanganKesehatanController@index');
	Route::post('/store6', 'TunjanganKesehatanController@store6');
	Route::get('edit6/{id_kesehatan}', 'TunjanganKesehatanController@edit6');
	Route::post('update6/{id_kesehatan}', 'TunjanganKesehatanController@update6');


	//POTONGAN
	Route::get('/potongan', 'PotonganController@index');
	Route::get('/create7', 'PotonganController@create7');
	Route::post('/store7', 'PotonganController@store7');
	Route::get('/delete7/{id_potongan}', 'PotonganController@delete7');
	Route::get('edit7/{id_potongan}', 'PotonganController@edit7');
	Route::post('update7/{id_potongan}', 'PotonganController@update7');

	//JENIS TUNJANGAN FUNGSIONAL
	Route::get('/tunjangan_fungsional', 'TunjanganFungsionalController@index');
	Route::post('/store8', 'TunjanganFungsionalController@store8');
	Route::get('edit8/{id_fungsional}', 'TunjanganFungsionalController@edit8');
	Route::post('update8/{id_fungsional}', 'TunjanganFungsionalController@update8');


	//JENIS TUNJANGAN JABATAN
	Route::get('/tunjangan_jabatan', 'TunjanganJabatanController@index');
	Route::post('/store9', 'TunjanganJabatanController@store9');
	Route::get('edit9/{id_jabatan}', 'TunjanganJabatanController@edit9');
	Route::post('update9/{id_jabatan}', 'TunjanganJabatanController@update9');

	//JENIS TUNJANGAN GTT
	Route::get('/tunjangan_gtt', 'TunjanganGTTController@index');
	Route::post('/store10', 'TunjanganGTTController@store10');
	Route::get('edit10/{id_gtt}', 'TunjanganGTTController@edit10');
	Route::post('update10/{id_gtt}', 'TunjanganGTTController@update10');

	//JENIS TUNJANGAN PENSIUN
	Route::get('/tunjangan_pensiun', 'TunjanganPensiunController@index');
	Route::post('/store11', 'TunjanganPensiunController@store11');
	Route::get('edit11/{id_pensiun}', 'TunjanganPensiunController@edit11');
	Route::post('update11/{id_pensiun}', 'TunjanganPensiunController@update11');

	//PDF
	Route::get('/getPDF/{id_tunjangan}', 'PDFController@getPDF');
	Route::get('/getPDFsemua', 'PDFController@getPDFsemua');
	Route::get('/getPDFhonor', 'PDFController@getPDFhonor');

	//PDF
	Route::get('/getExcel', 'ExcelController@getExcel');

	//gajian
	Route::get('gajian', 'PegawaiController@gajian');
	Route::get('gaji/tambah/{id_pegawai}', 'PegawaiController@tambahgaji');
	Route::post('gaji/simpan/{id_pegawai}', 'PegawaiController@simpangaji');
});


//ROUTE KEPSEK
Route::group(['middleware' => ['auth', 'role:kepsek']], function(){
	
	//LAPORAN
	Route::get('/laporan_kep', 'LaporanController@index');

	//PDF
	Route::get('/getPDF_kep/{id_tunjangan}', 'PDFController@getPDF');
	Route::get('/getPDFsemua_kep', 'PDFController@getPDFsemua');
	Route::get('/getPDFhonor_kep', 'PDFController@getPDFhonor');

	//PEGAWAI CRUD
	Route::get('/pegawai_kep', 'PegawaiController@index');
	Route::get('/create_kep', 'PegawaiController@create');
	Route::post('/store_kep', 'PegawaiController@store');
	Route::get('/delete_kep/{id_pegawai}', 'PegawaiController@delete');
	Route::get('show_kep/{id_pegawai}', 'PegawaiController@show');
	Route::get('edit_kep/{id_pegawai}', 'PegawaiController@edit');
	Route::get('lihat_kep/{id_pegawai}', 'PegawaiController@lihat');
	Route::post('update_kep/{id_pegawai}', 'PegawaiController@update');

	
});


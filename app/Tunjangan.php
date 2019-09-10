<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    protected $table = 'tunjangan';
    protected $primaryKey = 'id_tunjangan';
    protected $fillable = ['id_pegawai', 'tanggal_gajian', 'jmlh_transport', 'jmlh_kinerja', 'gapok', 'keluarga', 'fungsional', 'tjabatan','pensiun', 'kesehatan','gtt','kinerja','transportasi','keterangan'];

    public function pegawai(){
    	return $this->belongsTo('App\Pegawai','id_pegawai');
    }

}

	

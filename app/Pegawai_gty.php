<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai_gty extends Model
{
    protected $table = 'Pegawai_gty';
    protected $primaryKey = 'id_gty';
    protected $fillable = ['nama', 'nip', 'jabatan', 'id_status', 'gapok', 't_keluarga', 't_kesehatan', 't_fungsional', 't_pensiun', 't_jabatan', 't_gtt', 't_transportasi', 't_kinerja'];

	public function status(){
    	return $this->belongsTo('App\Status','id_status');
    }
}

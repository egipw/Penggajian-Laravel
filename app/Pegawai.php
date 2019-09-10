<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['nama', 'nip', 'jabatan', 'id_status', 'id_gapok', 'id_keluarga', 'id_kesehatan', 'id_fungsional', 'id_pensiun', 'id_jabatan', 'id_gtt', 'transportasi', 'kinerja', 'id_potongan', 'keterangan'];

	public function status1(){
    	return $this->belongsTo('App\Status','id_status');
    }

    public function gapok(){
    	return $this->belongsTo('App\Gapok','id_gapok');
    }

    public function tunjangan_keluarga(){
    	return $this->belongsTo('App\TunjanganKeluarga','id_keluarga');
    }
    public function tunjangan_kesehatan(){
    	return $this->belongsTo('App\TunjanganKesehatan','id_kesehatan');
    }

    public function tunjangan_fungsional(){
        return $this->belongsTo('App\TunjanganFungsional','id_fungsional');
    }

    public function tunjangan_jabatan(){
        return $this->belongsTo('App\TunjanganJabatan','id_jabatan');
    }

    public function tunjangan_gtt(){
        return $this->belongsTo('App\TunjanganGTT','id_gtt');
    }

    public function tunjangan_pensiun(){
        return $this->belongsTo('App\TunjanganPensiun','id_pensiun');
    }

    public function potongan(){
        return $this->belongsTo('App\Potongan','id_potongan');
    }

    public function tunjangan(){
    	return $this->belongsTo('App\Tunjangan','id_tunjangan');
    }

    public function jenistunjangan(){
        return $this->belongsTo('App\JenisTunjangan','id_jenis');
    }
   

}

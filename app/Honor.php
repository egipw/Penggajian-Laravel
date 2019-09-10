<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honor extends Model
{
    protected $table = 'honor';
    protected $primaryKey = 'id_honor';
    protected $fillable = ['id_pegawai', 'tanggal_honor', 'jenis_honor', 'nominal'];

    public function pegawai(){
    	return $this->belongsTo('App\Pegawai','id_pegawai');
    }
}

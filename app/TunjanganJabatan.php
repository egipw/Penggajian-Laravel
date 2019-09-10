<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganJabatan extends Model
{
    protected $table = 'tunjangan_jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $fillable = ['id_jabatan', 'jenis_jabatan', 'nominal'];
}

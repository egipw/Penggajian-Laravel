<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganKesehatan extends Model
{
    protected $table = 'tunjangan_kesehatan';
    protected $primaryKey = 'id_kesehatan';
    protected $fillable = ['id_kesehatan', 'jenis_kesehatan', 'nominal'];
}
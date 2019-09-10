<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganKeluarga extends Model
{
    protected $table = 'tunjangan_keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $fillable = ['id_keluarga', 'jenis_keluarga', 'nominal'];
}

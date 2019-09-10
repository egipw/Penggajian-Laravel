<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganGTT extends Model
{
    protected $table = 'tunjangan_gtt';
    protected $primaryKey = 'id_gtt';
    protected $fillable = ['id_gtt', 'jenis_gtt', 'nominal'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganPensiun extends Model
{
    protected $table = 'tunjangan_pensiun';
    protected $primaryKey = 'id_pensiun';
    protected $fillable = ['id_pensiun', 'jenis_pensiun', 'nominal'];
}

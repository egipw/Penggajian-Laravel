<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisTunjangan extends Model
{
    protected $table = 'jenistunjangan';
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['id_jenis', 'tunjangan', 'nominal'];
}

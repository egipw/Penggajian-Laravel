<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganFungsional extends Model
{
    protected $table = 'tunjangan_fungsional';
    protected $primaryKey = 'id_fungsional';
    protected $fillable = ['id_fungsional', 'jenis_fungsional', 'nominal'];
}

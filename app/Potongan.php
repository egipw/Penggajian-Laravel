<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    protected $table = 'potongan';
    protected $primaryKey = 'id_potongan';
    protected $fillable = ['id_potongan', 'potongan', 'nominal'];
}

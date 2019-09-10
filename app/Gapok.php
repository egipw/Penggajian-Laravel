<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gapok extends Model
{
    protected $table = 'gapok';
    protected $primaryKey = 'id_gapok';
    protected $fillable = ['gapok'];
}

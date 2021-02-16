<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandar extends Model
{
    protected $table = 'bandar_udara';
    protected $fillable = ['nama'];
}

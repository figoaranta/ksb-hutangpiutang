<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hutang extends Model
{
    protected $fillable =
    [
    	'pembeli',
    	'alamat',
    	'total'
    ]
}

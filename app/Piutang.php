<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piutang extends Model
{
    protected $fillable =
    [
    	'pembeli',
    	'alamat',
    	'total'
    ];
}

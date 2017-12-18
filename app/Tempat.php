<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $fillable = [
        'tempat'
    ];

    public function jadwals()
    {
    	return $this->hasMany(Jadwal::class);
    }
}

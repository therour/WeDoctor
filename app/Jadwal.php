<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'hari', 'tanggal', 'waktu_mulai', 'waktu_akhir', 'tempat'
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }
}

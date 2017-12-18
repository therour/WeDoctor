<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'hari', 'tanggal', 'waktu_mulai', 'waktu_akhir', 'tempat', 'doctor_id'
    ];

    public function doctors()
    {
    	return $this->belongsTo(Doctor::class);
    }

    public function tempats()
    {
        return $this->belongsTo(Tempat::class);
    }

    // public function doctors()
    // {
    // 	return $this->hasMany(Doctor::class);
    // }
}

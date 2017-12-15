<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Spesialisasi;
use App\Jadwal;
use App\Rating;

class Doctor extends Model
{
    protected $fillable = [
        'nama_doctor', 'alamat_doctor', 'pengalaman_doctor', 'spesialisasi_id', 'jadwal_id', 'rating_id'
    ];

    public function spesialisasi()
    {
    	return $this->belongsTo(Spesialisasi::class);
    }

    public function jadwal()
    {
    	return $this->belongsTo(Jadwal::class);
    }

    public function rating()
    {
    	return $this->belongsTo(Rating::class);
    }
}

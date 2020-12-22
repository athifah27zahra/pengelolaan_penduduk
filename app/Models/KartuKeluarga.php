<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table = "kartu_keluarga";

    public function penduduks(){
        // fungsi count penduduk
        return $this->hasMany(Penduduk::class, 'keluarga_id', 'id');
    }

    public function jorong(){
        return $this->belongsTo(Jorong::class);
    }

    public $timestamps = false;
}
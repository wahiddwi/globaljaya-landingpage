<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    protected $fillable = [
        'nama', 'alamat', 'latitude', 'longitude', 'no_telpon', 'email'
    ];
}

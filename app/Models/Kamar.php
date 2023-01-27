<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = "kamar";
    protected $primaryKey = "id";

    protected $fillable = [
        'no_kamar', 'lokasi', 'harga', 'fasilitas', 'foto'
    ];
}

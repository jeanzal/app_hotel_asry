<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama_tamu', 'ci', 'co', 'price', 'ket', 'kamar_no'
    ];
}

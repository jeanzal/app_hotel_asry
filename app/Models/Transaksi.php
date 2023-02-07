<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama_tamu', 'noHp', 'alamat', 'lama_sewa', 'ci', 'co', 'price', 'status', 'kamar_no'
    ];

    public function kamar()
    {
    	return $this->belongsTo(Kamar::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama_tamu', 'noHp', 'alamat', 'lama_sewa', 'ci', 'co', 'price', 'status', 'deposit', 'sisa', 'kamar_no', 'user_id'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}

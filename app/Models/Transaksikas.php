<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksikas extends Model
{
    protected $table = "transaksikas";
    protected $primaryKey = "id";

    protected $fillable = [
        'tgl_trs', 'ket', 'kas_masuk', 'kas_keluar', 'setoran_agh_to_sgh', 'saldo'
    ];
}

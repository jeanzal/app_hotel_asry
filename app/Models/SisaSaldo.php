<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sisasaldo extends Model
{
    protected $table = "sisa_saldo";
    protected $primaryKey = "id";

    protected $fillable = [
        'tgl_trs', 'sisa_saldo'
    ];
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FO extends Authenticatable
{
    use Notifiable;

    protected $table = "fo";
    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'role', 'email', 'password', 'status',
    ];
    protected $hidden = [
        'password', 'token',
    ];
}

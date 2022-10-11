<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table='usuario';
    protected $fillable=[
         'email',
         'name',
         'password',
    ];
    protected $hidden=[
       'password',
    ];
}

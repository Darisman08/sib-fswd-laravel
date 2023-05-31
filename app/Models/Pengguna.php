<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Model
{
    use HasFactory,
        HasApiTokens,
        Authenticatable,
        Authorizable,
        CanResetPassword,
        MustVerifyEmail;
    protected $table = 'pengguna';
    protected $fillable = [
        'nama',
        'grup_id',
        'email',
        'password'
    ];
}

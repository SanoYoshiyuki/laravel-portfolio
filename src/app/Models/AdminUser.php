<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'admin_users';
    protected $fillable = [
        'email',
        'password'
    ];
}

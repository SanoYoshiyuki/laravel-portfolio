<?php

namespace App\Models;

use App\models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'email',
        'user',
        'password',
        'tel',
        'affiliate_id',
        'pin',
        'bank',
        'bank_account_number',
        'bank_deposit_type',
        'bank_branch'
    ];

    public function ticket() {
        return $this->hasMany(Ticket::class, 'user_id', 'id');
    }
}

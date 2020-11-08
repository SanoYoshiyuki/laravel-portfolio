<?php

namespace App\Models;

use App\models\Ticket;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'email',
        'user',
        'password',
        'affiliate_id',
        'eth_address',
        'status'
    ];

    public function ticket() {
        return $this->hasMany(Ticket::class, 'user_id', 'id');
    }

    public function lottery_reservation() {
        return $this->hasMany(LotteryReservation::class, 'user_id', 'id');
    }
}

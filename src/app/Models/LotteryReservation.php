<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class LotteryReservation extends Model
{
    protected $table = 'lottery_reservations';
    protected $fillable = [
        'user_id',
        'gem_id',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function gem() {
        return $this->belongsTo(Gem::class, 'gem_id', 'id');
    }

    public function myfarm() {
        return $this->hasMany(Myfarm::class, 'transaction_id', 'id');
    }
}

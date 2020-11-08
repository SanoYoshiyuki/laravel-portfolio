<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Myfarm extends Model
{
    protected $table = 'myfarms';
    protected $fillable = [
        'user_id',
        'gem_id',
        'transaction_id',
        'buy_price',
        'sell_price',
        'buy_date',
        'sell_date',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function gem() {
        return $this->belongsTo(Gem::class, 'gem_id', 'id');
    }

    public function lottery_reservation() {
        return $this->belongsTo(LotteryReservation::class, 'transaction_id', 'id');
    }
}

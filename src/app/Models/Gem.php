<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
    protected $table = 'gems';
    protected $fillable = [
        'gem',
        'holding_reriod',
        'interest_rate',
        'low_price',
        'high_price',
        'fee'
    ];

    public function lottery_reservation() {
        return $this->hasMany(LotteryReservation::class, 'gem_id', 'id');
    }
}

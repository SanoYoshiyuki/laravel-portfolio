<?php

namespace App\Models;

use App\models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table = 'users';

    public function ticket() {
        return $this->hasMany(Ticket::class, 'user_id', 'id');
    }
}

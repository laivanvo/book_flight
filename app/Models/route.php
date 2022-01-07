<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    protected $fillable=['departure_airport', 'arrival_airport'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable=['route_id','dateDeparture','dateArrival'];
}

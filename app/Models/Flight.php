<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $fillable=['route_id','dateDeparture','dateArrival'];
}

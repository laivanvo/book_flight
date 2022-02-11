<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable=['flight_id', 'airline_company_id', 'name_plane', 'category_id', 'status', 'detail', 'slug', 'price', 'image', 'chair'];
}

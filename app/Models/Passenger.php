<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    protected $fillable=['bill_id','name_passenger','CMND','phone','age','gender','nationality'];
}

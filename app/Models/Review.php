<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name','designation','comment','is_active','created_at','updated_at','deleted_at'];
}

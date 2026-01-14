<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;    
    protected $fillable = ['slug','name','description','avatar','after_avatar','is_active'];
}

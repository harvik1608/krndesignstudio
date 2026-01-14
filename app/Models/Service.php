<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','slug','short_description','description','icon','avatar','is_active'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($service) {
    //         // Generate a slug from the 'name' attribute if it doesn't exist or needs to be updated
    //         if (!$service->slug || $service->isDirty('name')) {
    //             $service->slug = Str::slug($service->name);
    //         }
    //     });
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;    
    protected $fillable = ['project_no','project_type','project_start_date','project_status','invoice_status','address','lat','lng','is_active','created_at','updated_at','deleted_at'];
}

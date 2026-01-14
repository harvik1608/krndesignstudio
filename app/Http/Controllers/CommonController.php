<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\General_setting;

class CommonController extends Controller
{
    public function __construct()
    {
        $settings = General_setting::all();
        if(!empty($settings)) {
            foreach ($settings as $row) {
                if(!defined(strtoupper($row["setting_key"]))) {
                    define(strtoupper($row["setting_key"]),$row["setting_val"]);
                }
            }
        }
    }
}

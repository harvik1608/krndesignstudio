<?php 
	use App\Models\Service;
	use App\Models\General_setting;

	if (!function_exists('preview')) {
	    function preview($data)
	    {
	        echo "<pre>";
	        print_r ($data);
	        exit;
	    }
	}

	if (!function_exists('services')) {
	    function services()
	    {
	        $services = Service::select("id","name","slug")->where("is_active",1)->get();
	        return $services;
	    }
	}

	if (!function_exists('format_date')) {
	    function format_date($date)
	    {
	        return date('d M, Y',strtotime($date));
	    }
	}

	if (!function_exists('general_setting')) {
	    function general_setting($key)
	    {
	    	$row = General_setting::select("setting_val")->where("setting_key",$key)->orderBy('id','desc')->first();
	        if($row) {
	        	return $row->setting_val;
	        } else {
	        	return '';
	        }
	    }
	}
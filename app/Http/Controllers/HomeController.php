<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\WhyChoose;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Download;
use App\Models\Tool;
use App\Models\Project;
use App\Models\Inquiry;
use App\Models\Review;
use App\Http\Controllers\CommonController;

class HomeController extends CommonController
{
    public function index()
    {
        $reasons        = WhyChoose::select("id","name")->where("is_active",1)->get();
        $services       = Service::select("id","name","avatar","slug","short_description","icon")->where("is_active",1)->get();
        $faqs           = Faq::select("question","answer")->where("is_active",1)->get();
        $blogs          = Blog::select("title","slug","banner","created_at")->where("is_active",1)->orderBy('id','asc')->get();
        $latest_blogs   = Blog::select("title","slug","banner","created_at")->where("is_latest_news",1)->get();
        $projects       = Project::select("id","slug","name","avatar","description")->where("is_active",1)->get();
        $reviews        = Review::select("id","name","designation","comment")->where("is_active",1)->get();
        $app_title      = explode("-",APP_NAME);
        $main_title     = trim($app_title[0]) ?? '';
        $sub_title      = trim($app_title[1]) ?? ''; 
        return view('index',compact('reasons','services','faqs','blogs','projects','reviews','latest_blogs','main_title','sub_title'));
    }
    
    public function about_us()
    {
        return view('about_us');
    }

    public function services()
    {
        $services = Service::select("id","name","short_description","slug","avatar")->where("is_active",1)->get();
        return view('services',compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where("slug",$slug)->where("is_active",1)->first();
        if(!$service) {
            return redirect()->route('home');
        }
        return view('service',compact('service'));
    }

    public function resources()
    {
        $downloads = Download::select("id","name","file")->where("is_active",1)->get();
        $tools = Tool::select("id","name","link")->where("is_active",1)->get();
        $blogs = Blog::select("id","title","banner")->where("is_active",1)->get();
        return view('resources',compact('downloads','tools','blogs'));
    }

    public function projects()
    {
        $projects = Project::select("id","name","avatar","after_avatar")->where("is_active",1)->get();
        return view('projects',compact('projects'));
    }

    public function blogs()
    {
        $blogs = Blog::select("id","slug","title","banner","created_at")->where("is_active",1)->get();
        return view('blogs',compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where("slug",$slug)->where("is_active",1)->first();
        if(!$blog) {
            return redirect()->route('home');
        }
        $blogs = Blog::where("is_active",1)->get();
        return view('blog',compact('blog','blogs'));
    }

    public function faqs()
    {
        $faqs = Faq::select("question","answer")->where("is_active",1)->get();
        return view('faqs',compact('faqs'));
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function submit_contactus(Request $request)
    {
        $post = $request->all();
        try {
            $row = new Inquiry;
            $row->name = trim($post["name"]);
            $row->email = trim($post["email"]);
            $row->phone = trim($post["phone"]);
            $row->message = trim($post["message"]);
            $row->location = trim($post["location"]);
            $row->ip = request()->ip();
            $row->created_at = date("Y-m-d H:i:s");
            $row->updated_at = date("Y-m-d H:i:s");
            $row->save();

            return response()->json([
                "status" => 200,
                "message" => 'Your inquiry has been successfully submitted1.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'There was an issue submitting your inquiry. Please try again later.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

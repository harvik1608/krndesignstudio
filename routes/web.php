<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WhyController; 
use App\Http\Controllers\ReviewController; 
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service/{slug}', [HomeController::class, 'service'])->name('service');
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/project/{slug}', [HomeController::class, 'project'])->name('project');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name('blog');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::post('/submit-contactUs', [HomeController::class, 'submit_contactus'])->name('submit.contact-us');

Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('check-login', [AuthController::class, 'checkLogin'])->name('admin.submit.login');
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('general-settings', [DashboardController::class, 'general_settings'])->name('admin.general-settings');
        Route::post('submit-general-settings', [DashboardController::class, 'submit_general_settings'])->name('admin.submit.general-settings');

        Route::resource('faqs', FaqController::class);
        Route::get('/load-faqs', [FaqController::class, 'load'])->name('admin.faq.load');

        Route::resource('services', ServiceController::class);
        Route::get('/load-services', [ServiceController::class, 'load'])->name('admin.service.load');

        Route::resource('reviews', ReviewController::class);
        Route::get('/load-reviews', [ReviewController::class, 'load'])->name('admin.review.load');

        Route::resource('projects', ProjectController::class);
        Route::get('/load-projects', [ProjectController::class, 'load'])->name('admin.project.load');

        Route::resource('sites', SiteController::class);
        Route::get('/load-sites', [SiteController::class, 'load'])->name('admin.site.load');
        Route::post('/upload-site', [SiteController::class, 'import'])->name('admin.upload.site');
        Route::get('/download-sample', [SiteController::class, 'downloadSample'])->name('admin.download.sample');

        Route::resource('downloads', DownloadController::class);
        Route::get('/load-downloads', [DownloadController::class, 'load'])->name('admin.download.load');

        Route::resource('tools', ToolController::class);
        Route::get('/load-tools', [ToolController::class, 'load'])->name('admin.tool.load');

        Route::resource('blogs', BlogController::class);
        Route::get('/load-blogs', [BlogController::class, 'load'])->name('admin.blog.load');

        Route::resource('why_chooses', WhyController::class);
        Route::get('/load-why_chooses', [WhyController::class, 'load'])->name('admin.why_chooses.load');

        Route::get('inquiries', [DashboardController::class, 'inquiries'])->name('admin.inquiry');
        Route::get('/load-inquiries', [DashboardController::class, 'load_inquiries'])->name('admin.inquiry.load');
        Route::get('/remove-inquiry/{id}', [DashboardController::class, 'remove_inquiry'])->name('admin.remove.inquiry');

        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});

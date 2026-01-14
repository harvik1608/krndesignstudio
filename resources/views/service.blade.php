@extends('include.front_header')
@section('content')
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>{{ $service->name }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li>Service Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="services-details-area overflow-hidden default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">
                <div class="col-xl-8 col-lg-7 order-lg-last pl-50 pl-md-15 pl-xs-15">
                    <div class="thumb">
                        <img src="{{ asset('uploads/service/'.$service->avatar) }}" alt="Thumb">
                    </div>
                    <h2>{{ $service->name }}</h2>
                    <p><?php echo $service->description; ?></p>
                </div>
                <div class="col-xl-4 col-lg-5 mt-md-120 mt-xs-50 services-sidebar">
                    <div class="single-widget bg-dark quick-contact-widget text-light" style="background-image: url(assets/img/shape/15.png);">
                        <div class="content">
                            <h3>Need Help?</h3>
                            <p>
                                Speak with a human to filling out a form? call corporate office and we will connect you with a team member help.
                            </p>
                            <h2><small><a href="tel:{{ general_setting('app_phone') }}">{{ general_setting('app_phone') }}</a></small></h2>
                            <h4><a href="mailto:{{ general_setting('app_email') }}">{{ general_setting('app_email') }}</a></h4>
                            <a class="btn mt-30 circle btn-sm btn-gradient" href="{{ route('contact-us') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection
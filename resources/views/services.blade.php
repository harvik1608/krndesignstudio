@extends('include.front_header')
@section('content')
<style>
    .services-style-two .thumb .title {
        width: 90%;
    }
    .services-style-two-area h4 {
        font-size: 14px !important;
    }
    .services-style-two .thumb .title {
        bottom: 0px !important;
    }
</style>
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Our Services</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="services-style-two-area default-padding bottom-less bg-cover bg-gray" style="background-image: url(assets/img/shape/27.png);">
    <div class="container">
        <div class="row">
            @if(!$services->isEmpty())
                @foreach($services as $key => $val)
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="services-style-two {{ $key == 0 ? 'active' : '' }}">
                            <div class="thumb">
                                <img src="{{ asset('uploads/service/'.$val->avatar) }}" alt="Thumb">
                                <div class="title">
                                    <a href="{{ route('service',['slug' => $val->slug ]) }}">
                                        <!-- <i class="flaticon-budget"></i> -->
                                        <h4>{{ $val->name }}</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>{{ $val->short_description }}</p>
                                <div class="button">
                                    <a href="{{ route('service',['slug' => $val->slug ]) }}">Read More</a>
                                    <div class="devider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endSection
@extends('include.front_header')
@section('content')
<style>
    .blog-area.single .item .blog-item-box span {
        background-color: #FFFFFF !important;
        color: #000000 !important;
        text-transform: none !important;
    }
    .blog-area.single .item .blog-item-box span {
        padding: 3px 0px !important;
    }
</style>
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>News</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('blogs') }}">News</a></li>
                    <li>News Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="blog-area single full-blog full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">
                    <div class="blog-style-two item">
                        <div class="blog-item-box">
                            <div class="thumb">
                                <img src="{{ asset('uploads/blog/'.$blog->banner) }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="javascript:;"><i class="fas fa-calendar-alt"></i> {{ format_date($blog->created_at) }}</a></li>
                                    </ul>
                                </div>
                                <p><?php echo $blog->description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection
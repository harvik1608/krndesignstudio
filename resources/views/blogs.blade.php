@extends('include.front_header')
@section('content')
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
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="blog-area blog-grid default-padding">
    <div class="container">
        <div class="blog-item-box">
            <div class="row">
                @if($blogs)
                    @foreach($blogs as $blog)
                        <div class="col-xl-4 col-md-6 single-item">
                            <div class="blog-style-one">
                                <div class="thumb">
                                    <a href="{{ route('blog',['slug' => $blog->slug ]) }}"><img src="{{ asset('uploads/blog/'.$blog->banner) }}" alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="blog-meta">
                                       <ul>
                                           <li>{{ format_date($blog->created_at) }}</li>
                                       </ul>
                                    </div>
                                    <h3>
                                        <a href="{{ route('blog',['slug' => $blog->slug ]) }}" title="{{ $blog->title }}">{{ substr($blog->title,0,40) }}...</a>
                                    </h3>
                                    <a href="{{ route('blog',['slug' => $blog->slug ]) }}" class="btn-simple"><i class="fas fa-angle-right"></i> Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endSection
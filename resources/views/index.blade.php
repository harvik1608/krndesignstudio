@extends('include.front_header')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    .welcome {
        font-family: "Mitr", sans-serif !important;
        font-weight: 300;
        font-style: normal;
    }
    .content h2 {
        font-family: "Mitr", sans-serif !important;
        font-weight: 600;
        font-style: normal;    
    }
    .content h2 span {
        font-family: "Mitr", sans-serif !important;
        font-weight: 300;
        font-style: normal;    
    }
    .content h2 small {
        font-family: "Mitr", sans-serif !important;
        font-weight: 600;
        font-style: normal;    
    }
    .icon {
        width: 50px !important;
        height: 55px !important;
        margin-right: 10px;
    }
    .banner-style-one h4 {
        text-transform: none !important;
    }
</style>
<div class="banner-area banner-style-one shadow navigation-custom-large zoom-effect overflow-hidden text-light">
    <div class="banner-fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url({{ asset('uploads/banner/'.general_setting('banner_image_1'))  }});"></div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-8">
                            <div class="content">
                                <h4 class="welcome">Welcome to </h4>
                                <h2>Sheladiya <span>Limited</span><br><small>{{ $sub_title }}</small></h2>
                                <div class="button mt-40">
                                    <a class="btn-animation" href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> <span>Our Services</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape-bg">
                    <img src="{{ asset('uploads/banner/'.general_setting('website_image_1'))  }}" alt="Shape">
                </div>
            </div>
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url({{ asset('uploads/banner/'.general_setting('banner_image_2'))  }});"></div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-8">
                            <div class="content">
                                <h4 class="welcome">Welcome to </h4>
                                <h2>Sheladiya <span>Limited</span><br><small>{{ $sub_title }}</small></h2>
                                <div class="button mt-40">
                                    <a class="btn-animation" href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> <span>Our Services</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape-bg">
                    <img src="{{ asset('uploads/banner/'.general_setting('website_image_1'))  }}" alt="Shape">
                </div>
            </div>
            <div class="swiper-slide banner-style-one">
                <div class="banner-thumb bg-cover shadow dark" style="background: url({{ asset('uploads/banner/'.general_setting('banner_image_3'))  }});"></div>
                <div class="container">
                    <div class="row align-center">
                        <div class="col-xl-8">
                            <div class="content">
                                <h4 class="welcome">Welcome to </h4>
                                <h2>Sheladiya <span>Limited</span><br><small>{{ $sub_title }}</small></h2>
                                <div class="button mt-40">
                                    <a class="btn-animation" href="{{ route('services') }}"><i class="fas fa-arrow-right"></i> <span>Our Services</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape-bg">
                    <img src="{{ asset('uploads/banner/'.general_setting('website_image_1'))  }}" alt="Shape">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>  
</div>
<div class="about-style-one-area default-padding">
    <div class="shape-animated-left">
        <img src="{{ asset('assets/website/img/shape/anim-1.png') }}" alt="Image Not Found">
        <img src="{{ asset('assets/website/img/shape/anim-2.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row align-center">
            <div class="about-style-one col-xl-6 col-lg-5">
                <div class="h4 sub-heading">{{ general_setting('about_title') }}</div>
                <h2 class="title mb-25">{{ general_setting('about_sub_title') }}</h2>
                <p><?php echo general_setting('about_description'); ?></p>
            </div>
            <div class="about-style-one col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                <div class="about-thumb">
                    <img class="wow fadeInRight" src="{{ asset('uploads/banner/'.general_setting('about_image'))  }}" alt="Image Not Found">                    
                    <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms">
                        <img src="{{ asset('assets/website/img/shape/anim-3.png') }}" alt="Image Not Found">
                        <img src="{{ asset('assets/website/img/shape/anim-4.png') }}" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-style-one-area default-padding bg-gray">
    <div class="triangle-shape">
        <img src="{{ asset('uploads/banner/'.general_setting('website_image_2'))  }}" alt="Shape">
    </div>
    <div class="center-shape" style="background-image: url({{ asset('assets/website/img/shape/5.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2 class="title">Our Services</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
        <div class="row align-center">
            <div class="col-lg-12 pl-50 pl-md-15 pl-xs-15">
                <div class="tab-content services-tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                        <div class="row">
                            @if(!$services->isEmpty())
                                @foreach($services as $service)
                                    <div class="col-lg-4 col-md-4 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                        <div class="services-style-one">
                                            <img src="{{ asset('uploads/service/'.$service->icon) }}" class="icon" />
                                            <h4><a href="{{ route('service',['slug' => $service->slug ]) }}">{{ $service->name }}</a></h4>
                                            <p>{{ $service->short_description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!$latest_blogs->isEmpty())
    <div class="process-style-one-area text-center default-padding">
        <!-- <div class="large-shape">
            <img src="{{ asset('uploads/banner/'.general_setting('website_image_3'))  }}" alt="Shape">
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title">Our Latest News</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($latest_blogs as $key => $val)
                    <div class="col-lg-4">
                        <div class="process-style-one {{ $key == 0 ? 'active' : '' }}">
                            <div class="thumb">
                                <img src="{{ asset('uploads/blog/'.$val->banner) }}" alt="Thumb">
                                <span>0{{ $key+1 }}</span>
                            </div>
                            <h4><a href="{{ route('blog',['slug' => $val->slug ]) }}">{{ $val->title }}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<div class="choose-us-style-one-area default-padding text-light">
    <!-- <div class="cover-bg" style="background-image: url({{ asset('uploads/banner/'.general_setting('highlight_image'))  }});"></div> -->
    <div class="shape-left-top">
        <img src="{{ asset('uploads/banner/'.general_setting('website_image_4'))  }}" alt="Shape">
    </div>
    <div class="text-invisible">{{ general_setting('background_title') }}</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading">
                    <h2 class="title">Why Choose Us</h2>
                    <div class="devider"></div>
                </div>
            </div>
            <div class="col-lg-6 pr-80">
                <div class="choose-us-style-one">
                    <ul class="list-item">
                        <li class="wow fadeInUp">
                            <h4>{{ general_setting('highlight_sub_title_1') }}</h4>
                            <p>{{ general_setting('highlight_description_1') }}</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <h4>{{ general_setting('highlight_sub_title_2') }}</h4>
                            <p>{{ general_setting('highlight_description_2') }}</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <h4>{{ general_setting('highlight_sub_title_3') }}</h4>
                            <p>{{ general_setting('highlight_description_3') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 pr-80">
                <div class="choose-us-style-one">
                    <ul class="list-item">
                        <li class="wow fadeInUp">
                            <h4>{{ general_setting('highlight_sub_title_4') }}</h4>
                            <p>{{ general_setting('highlight_description_4') }}</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <h4>{{ general_setting('highlight_sub_title_5') }}</h4>
                            <p>{{ general_setting('highlight_description_5') }}</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <h4>{{ general_setting('highlight_sub_title_6') }}</h4>
                            <p>{{ general_setting('highlight_description_6') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!$reviews->isEmpty())
    <div class="testimonial-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title">Testimonial</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
            <div class="row align-center">
                <div class="col-lg-4">
                    <div class="testimonial-thumb">
                        <div class="thumb-item">
                            <img src="{{ asset('assets/website/img/illustration/5.png') }}" alt="illustration">
                            <div class="mini-shape">
                                <img src="{{ asset('assets/website/img/shape/19.png') }}" alt="illustration">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="testimonial-carousel swiper">
                        <div class="swiper-wrapper">
                            @foreach($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="testimonial-style-one">
                                        <div class="item">
                                            <div class="content">
                                                <p>“{{ $review->comment }}”</p>
                                            </div>
                                            <div class="provider">
                                                <i class="flaticon-quote"></i>
                                                <div class="info">
                                                    <h4>{{ $review->name }}</h4>
                                                    <span>{{ $review->designation }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="request-call-back-area text-light default-padding" style="background-image: url({{ asset('uploads/banner/'.general_setting('business_image')) }});">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2 class="title">{{ general_setting('business_title') }}</h2>
                <a class="btn circle btn-light mt-30 mt-md-15 mt-xs-10 btn-md radius animation" href="{{ route('contact-us') }}">Request a Call back</a>
            </div>
            <div class="col-lg-6 text-end">
                <div class="achivement-counter">
                    <ul>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('uploads/banner/'.general_setting('business_icon_1')) }}" class="icon" />
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div>{{ general_setting('business_advices') }}</div>
                                    <div class="operator"></div>
                                </div>
                                <span class="medium">{{ general_setting('business_advice_title') }}</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('uploads/banner/'.general_setting('business_icon_1')) }}" class="icon" />
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div>{{ general_setting('business_awards') }}</div>
                                    <div class="operator"></div>
                                </div>
                                <span class="medium">{{ general_setting('business_award_title') }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!$blogs->isEmpty())
    <div class="home-blog-area default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <!-- <h4 class="sub-heading">Latest Blog</h4> -->
                        <h2 class="title">News & Insight</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
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
                                <h4>
                                    <a href="{{ route('blog',['slug' => $blog->slug ]) }}" title="{{ $blog->title }}">{{ substr($blog->title,0,50) }}...</a>
                                </h4>
                                <a href="{{ route('blog',['slug' => $blog->slug ]) }}" class="btn-simple"><i class="fas fa-angle-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
@endSection
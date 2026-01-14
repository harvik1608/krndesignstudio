<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ APP_NAME }}</title>

		<link rel="shortcut icon" href="{{ asset('uploads/banner/'.general_setting('favicon')) }}" type="image/x-icon">
		<link href="{{ asset('assets/website/css/bootstrap.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/font-awesome.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/themify-icons.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/elegant-icons.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/flaticon-set.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/magnific-popup.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/swiper-bundle.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/animate.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/validnavs.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/helper.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/unit-test.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/css/style.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/website/style.css') }}" rel="stylesheet">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
	    <style>
	    	body, p, h2, h4 {
				font-family: "Nunito", serif !important;
				font-optical-sizing: auto;
				font-weight: 400;
				font-style: normal;
			}
	        .navbar .attr-right .attr-nav li.button a,.site-heading .devider,.site-heading .devider:before,.list-item::after,.testimonial-thumb::after,.request-call-back-area::after,.services-style-two .thumb .title i::after,.contact-form-style-one button,.services-style-two .button .devider::after {
	            background: {{ APP_THEME_COLOR }} !important;
	        }
	        .item-flex li i, .services-style-one i,a:hover,.services-style-two:hover .button a {
	            color: {{ APP_THEME_COLOR }} !important;
	        }
	        .banner-fade .content h2 {
	        	font-size: {{ APP_NAME_WEB_SIZE }}px !important;
	        }
	        .banner-fade .content small {
	        	font-size: 45px !important;
	        }
	        .choose-us-style-one-area::after {
	        	left: 0% !important;
	        	width: 100% !important;
	        	transform: skewX(0deg);
	        }
	        .site-heading {
	        	margin-bottom: 10px !important;
	        }
	        .download {
	        	float: right;
	        }
	        .choose-us-style-one-area .text-invisible {
                text-transform: none !important;
            }
            @media (min-width: 1024px) {
    			nav.navbar ul.nav>li>a {
    				font-size: 16px !important;
    				/*padding: 30px 10px !important;*/
    			}
    		}
    		@media (min-width: 350px) {
    			.banner-fade .content small {
		        	font-size: 25px !important;
		        }
    		}
	    </style>
	    <script src="{{ asset('assets/website/js/jquery-3.6.0.min.js') }}"></script>
	</head>
	<body>
		<div id="preloader">
	        <div id="consua-preloader" class="consua-preloader">
	            <div class="animation-preloader">
	                <div class="spinner"></div>
	                <div class="txt-loading">
	                    @php
                            $app_name = general_setting('app_name');
                            $chars = str_split($app_name);
                        @endphp
                        
                        @foreach ($chars as $char)
                            <span data-text-preloader="{{ strtoupper($char) }}" class="letters-loading">
                                {{ strtoupper($char) }}
                            </span>
                        @endforeach
	                </div>
	            </div>
	            <div class="loader">
	                <div class="row">
	                    <div class="col-3 loader-section section-left">
	                        <div class="bg"></div>
	                    </div>
	                    <div class="col-3 loader-section section-left">
	                        <div class="bg"></div>
	                    </div>
	                    <div class="col-3 loader-section section-right">
	                        <div class="bg"></div>
	                    </div>
	                    <div class="col-3 loader-section section-right">
	                        <div class="bg"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="top-bar-area top-bar-style-one bg-dark text-light">
	        <div class="container">
	            <div class="row align-center">
	                <div class="col-xl-6 col-lg-8 offset-xl-3 pl-30 pl-md-15 pl-xs-15">
	                    <ul class="item-flex">
	                        <li><i class="fas fa-envelope"></i> {{ APP_EMAIL }}</li>
	                        <li><a href="tel:+4733378901"><i class="fas fa-phone-alt"></i> {{ APP_PHONE }}</a></li>
	                    </ul>
	                </div>
	                <div class="col-xl-3 col-lg-4 text-end">
	                    <div class="social">
	                        <ul>
	                        	@if(FACEBOOK_URL != "")
	                        		<li><a href="{{ FACEBOOK_URL }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
	                        	@endif
	                        	@if(LINKEDIN_URL != "")
	                        		<li><a href="{{ LINKEDIN_URL }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
	                        	@endif
	                        	@if(TWITTER_URL != "")
	                        		<li><a href="{{ TWITTER_URL }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
	                        	@endif
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <header>
	        <nav class="navbar mobile-sidenav navbar-style-one navbar-sticky navbar-default validnavs white navbar-fixed no-background">
	            <div class="container">
	                <div class="row align-center">
	                    <div class="col-xl-2 col-lg-3 col-md-2 col-sm-1 col-1">
	                        <div class="navbar-header">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                                <i class="fa fa-bars"></i>
	                            </button>
	                            <a class="navbar-brand" href="{{ route('home') }}">
	                                <img src="{{ asset('uploads/banner/'.general_setting('logo')) }}" class="logo" alt="Logo">
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-4 col-sm-4 col-4">
	                        <div class="collapse navbar-collapse" id="navbar-menu">
	                            <img src="{{ asset('uploads/banner/'.general_setting('logo')) }}" alt="Logo">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                                <i class="fa fa-times"></i>
	                            </button>
	                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
	                               	<li><a href="{{ route('home') }}">Home</a></li>
	                               	<li><a href="{{ route('about-us') }}">About Us</a></li>
	                               	<li><a href="{{ route('services') }}">Services</a></li>
	                               	<li><a href="{{ route('resources') }}">Resources & Download</a></li>
	                               	<li><a href="{{ route('blogs') }}">News</a></li>
	                               	<li><a href="{{ route('faqs') }}">FAQ</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-7 col-7">
	                        <div class="attr-right">
	                            <div class="attr-nav">
	                                <ul>
	                                    <li class="button"><a href="{{ route('contact-us') }}">Contact Us</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="overlay-screen"></div>
	            </div>   
	        </nav>
	    </header>
	    @yield('content')
	    <footer class="bg-dark text-light">
	        <div class="footer-shape">
	            <div class="item">
	                <img src="{{ asset('uploads/banner/'.general_setting('website_image_5')) }}" alt="Shape">
	            </div>
	            <div class="item">
	                <img src="{{ asset('uploads/banner/'.general_setting('website_image_5')) }}" alt="Shape">
	            </div>
	        </div>
	        <div class="container">
	            <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
	                <div class="row">
	                    <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
	                        <div class="f-item about">
	                            <img class="logo" src="{{ asset('uploads/banner/'.general_setting('logo')) }}" alt="Logo" />
	                            <p>{{ general_setting('footer_title') }}</p>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 footer-item">
	                        <div class="f-item link">
	                            <h4 class="widget-title">Our Services</h4>
	                            <ul>
	                            	@php 
	                            		$services = services();
	                            	@endphp
	                                @if(!$services->isEmpty())
	                                	@foreach($services as $service)
	                                		<li><a href="{{ route('service',['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
	                                	@endforeach
	                                @endif
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 footer-item">
	                        <div class="f-item link">
	                            <h4 class="widget-title">Working Hours</h4>
	                            <ul>
	                                <li>
	                                    <a>Mon - Fri : {{ general_setting('mon_fri') }}</a>
	                                </li>
	                                <li>
	                                    <a>Sat : {{ general_setting('saturday') }}</a>
	                                </li>
	                                <li>
	                                    <a>Sunday & Bank Holiday : Closed</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <script src="{{ asset('assets/website/js/bootstrap.bundle.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery.appear.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery.easing.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery.magnific-popup.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/modernizr.custom.13711.js') }}"></script>
	    <script src="{{ asset('assets/website/js/swiper-bundle.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/wow.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/progress-bar.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/circle-progress.js') }}"></script>
	    <script src="{{ asset('assets/website/js/isotope.pkgd.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/imagesloaded.pkgd.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery.nice-select.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/count-to.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery.scrolla.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/YTPlayer.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/TweenMax.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/rangeSlider.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/jquery-ui.min.js') }}"></script>
	    <script src="{{ asset('assets/website/js/validnavs.js') }}"></script>
	    <script src="{{ asset('assets/website/js/main.js') }}?v={{ time() }}"></script>
	</body>
</html>
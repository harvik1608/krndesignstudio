@extends('include.front_header')
@section('content')
<style>
    .alert-error {
        color: #FF0000 !important;
    }
</style>
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-style-one-area overflow-hidden default-padding">
    <div class="contact-shape">
        <img src="{{ asset('assets/website/img/shape/37.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row align-center">
            <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">
                <div class="contact-style-one-info">
                    <h2>Contact Information</h2>
                    <p>Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.</p>
                    <ul>
                        <li class="wow fadeInUp">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Call Us</h5>
                                <a href="tel:{{ general_setting('app_phone') }}">{{ general_setting('app_phone') }}</a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info">
                                <h5 class="title">Official Email</h5>
                                <a href="mailto:{{ general_setting('app_email') }}">{{ general_setting('app_email') }}</a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h5 class="title">Our Location</h5>
                                <p><a href="javascript:;">{{ general_setting('app_address') }}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                <div class="contact-form-style-one">
                    <h5 class="sub-title">Have Questions?</h5>
                    <h2 class="heading">Send us a Massage</h2>
                    <form action="{{ route('submit.contact-us') }}" method="POST" class="contact-form contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name*" type="text" />
                                    <span class="alert-error" id="nameError"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email" />
                                    <span class="alert-error" id="mailError"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone*" type="number" />
                                    <span class="alert-error" id="phoneError"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="location" name="location" placeholder="Location" type="text" />
                                    <span class="alert-error" id="locationError"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *"></textarea>
                                    <span class="alert-error" id="messageError"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">Send</button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".contact-form").submit(function(e){
            e.preventDefault();

            var isError = 0;
            if($("#name").val().trim() == "") {
                isError = 1;
                $("#nameError").html("Name is required.");
            } else {
                $("#nameError").html("");
            }
            if($("#email").val().trim() == "") {
                isError = 1;
                $("#mailError").html("Email is required.");
            } else {
                $("#mailError").html("");
            }
            if($("#phone").val().trim() == "") {
                isError = 1;
                $("#phoneError").html("Phone is required.");
            } else {
                $("#phoneError").html("");
            }
            if($("#location").val().trim() == "") {
                isError = 1;
                $("#locationError").html("Location is required.");
            } else {
                $("#locationError").html("");
            }
            if($("#message").val().trim() == "") {
                isError = 1;
                $("#messageError").html("Message is required.");
            } else {
                $("#messageError").html("");
            }
            if(isError == 0) {
                $.ajax({
                    url: $(".contact-form").attr("action"),
                    type: $(".contact-form").attr("method"),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend:function(){
                        $(".contact-form button[type=submit]").attr("disabled",true).html("Sending");
                    },
                    success:function(response){
                        $(".contact-form button[type=submit]").attr("disabled",false).html("Send");
                        if(response.status == 200) {
                            $(".alert-msg").html(response.message);
                            $("#name,#email,#phone,#location,#message").val("");
                        } else {
                            $(".alert-msg").html(response.message);
                        }
                        setTimeout(function(){
                            $(".alert-msg").html("");    
                        },5000);
                    }
                });
            }
        });
    });
</script>
@endSection
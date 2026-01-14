@extends('include.front_header')
@section('content')
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Resources</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li>Resources</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="pricing-style-one-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-30">
                <div class="pricing-style-one" style="background-image: url({{ asset('assets/website/img/shape/15.webp')  }});">
                    <div class="pricing-header">
                        <h4>Download Section</h4>
                        @if(!$downloads->isEmpty())
                            @foreach($downloads as $download)
                                <p><a href="javascript:;">-> {{ $download->name }}</a> <a href="{{ asset('uploads/download/'.$download->file) }}" class="download" download>Download</a></p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12 mb-30">
                <div class="pricing-style-one" style="background-image: url({{ asset('assets/website/img/shape/15.webp')  }});">
                    <div class="pricing-header">
                        <h4>Useful links</h4>
                        @if(!$tools->isEmpty())
                            @foreach($tools as $tool)
                                <p><a href="{{ $tool->link }}">-> {{ $tool->name }}</a><a href="{{ $tool->link }}" class="download" target="_blank">Open Link</a></p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection
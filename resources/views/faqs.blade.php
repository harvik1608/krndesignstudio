@extends('include.front_header')
@section('content')
<div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="breadcrum-shape">
        <img src="{{ asset('assets/website/img/shape/50.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>FAQ</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="faq-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 faq-style-one dark pl-50 pl-md-15 pl-xs-15">
                <!-- <h2 class="title mb-40">You need to know before begin everything.</h2> -->
                <div class="accordion" id="faqAccordion">
                    @if(!$faqs->isEmpty())
                        @foreach($faqs as $key => $val)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $key+1 }}">
                                    <button class="accordion-button {{ $key > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key+1 }}" aria-expanded="true" aria-controls="collapse{{ $key+1 }}">{{ $val->question }}</button>
                                </h2>
                                <div id="collapse{{ $key+1 }}" class="accordion-collapse collapse {{ $key > 0 ? '' : 'show' }}" aria-labelledby="heading{{ $key+1 }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p><?php echo $val->answer; ?></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endSection
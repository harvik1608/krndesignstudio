@extends('include.header')
@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>General Settings</h4>
        <h6>(<span class='mandadory'>*</span>) indicates required field.</h6>
    </div>
</div>
<form action="{{ route('admin.submit.general-settings') }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>General Settings</h4>
                </div>
                <div class="card-body profile-body">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_name" id="app_name" value="{{ isset($app_name) ? $app_name : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Email<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_email" id="app_email" value="{{ isset($app_email) ? $app_email : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Phone<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_phone" id="app_phone" value="{{ isset($app_phone) ? $app_phone : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Theme Color<span class="text-danger">*</span> <small>(Hexa Color)</small></label>
                            <input type="text" class="form-control" name="app_theme_color" id="app_theme_color" value="{{ isset($app_theme_color) ? $app_theme_color : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Name Font Size<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_name_web_size" id="app_name_web_size" value="{{ isset($app_name_web_size) ? $app_name_web_size : '' }}" />
                        </div>
                        <!-- <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Founder Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_founder_name" id="app_founder_name" value="{{ isset($app_founder_name) ? $app_founder_name : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Helpline No.<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_helpline_no" id="app_helpline_no" value="{{ isset($app_helpline_no) ? $app_helpline_no : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Years of experience<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="year_of_experience" id="year_of_experience" value="{{ isset($year_of_experience) ? $year_of_experience : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Positive Feedback (%)<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="positive_feedback" id="positive_feedback" value="{{ isset($positive_feedback) ? $positive_feedback : '' }}" />
                        </div> -->
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">App. Address<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_address" id="app_address" value="{{ isset($app_address) ? $app_address : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">App. Youtube Video URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_video" id="app_video" value="{{ isset($app_video) ? $app_video : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Facebook URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="facebook_url" id="facebook_url" value="{{ isset($facebook_url) ? $facebook_url : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Twitter URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="twitter_url" id="twitter_url" value="{{ isset($twitter_url) ? $twitter_url : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Linkedin URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="linkedin_url" id="linkedin_url" value="{{ isset($linkedin_url) ? $linkedin_url : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <h2>Logo</h2>
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(750X220)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="logo" id="logo">
                                @if(isset($logo) && $logo != "")
                                    <img src="{{ asset('uploads/banner/'.$logo) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_logo" value="{{ isset($logo) ? $logo : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <h2>Favicon Icon</h2>
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(32x32)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="favicon" id="favicon">
                                @if(isset($favicon) && $favicon != "")
                                    <img src="{{ asset('uploads/banner/'.$favicon) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_favicon" value="{{ isset($favicon) ? $favicon : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Banner Image</h2>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(2440X1578)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="banner_image_1" id="banner_image_1">
                                @if(isset($banner_image_1) && $banner_image_1 != "")
                                    <img src="{{ asset('uploads/banner/'.$banner_image_1) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_banner_image_1" value="{{ isset($banner_image_1) ? $banner_image_1 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(2440X1578)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="banner_image_2" id="banner_image_2">
                                @if(isset($banner_image_2) && $banner_image_2 != "")
                                    <img src="{{ asset('uploads/banner/'.$banner_image_2) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_banner_image_2" value="{{ isset($banner_image_2) ? $banner_image_2 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(2440X1578)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="banner_image_3" id="banner_image_3">
                                @if(isset($banner_image_3) && $banner_image_3 != "")
                                    <img src="{{ asset('uploads/banner/'.$banner_image_3) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_banner_image_3" value="{{ isset($banner_image_3) ? $banner_image_3 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>About Us</h2><hr>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="about_title" id="about_title" value="{{ isset($about_title) ? $about_title : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="about_sub_title" id="about_sub_title" value="{{ isset($about_sub_title) ? $about_sub_title : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control summernote" name="about_description" id="about_description">{{ isset($about_description) ? $about_description : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Background Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="background_title" id="background_title" value="{{ isset($background_title) ? $background_title : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(848x935)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="about_image" id="about_image">
                                @if(isset($about_image) && $about_image != "")
                                    <img src="{{ asset('uploads/banner/'.$about_image) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_about_image" value="{{ isset($about_image) ? $about_image : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Highlight</h2><hr>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_title" id="highlight_title" value="{{ isset($highlight_title) ? $highlight_title : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 1<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_1" id="highlight_sub_title_1" value="{{ isset($highlight_sub_title_1) ? $highlight_sub_title_1 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 1<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_1" id="highlight_description_1" value="{{ isset($highlight_description_1) ? $highlight_description_1 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 2<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_2" id="highlight_sub_title_2" value="{{ isset($highlight_sub_title_2) ? $highlight_sub_title_2 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 2<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_2" id="highlight_description_2" value="{{ isset($highlight_description_2) ? $highlight_description_2 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 3<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_3" id="highlight_sub_title_3" value="{{ isset($highlight_sub_title_3) ? $highlight_sub_title_3 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 3<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_3" id="highlight_description_3" value="{{ isset($highlight_description_3) ? $highlight_description_3 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 4<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_4" id="highlight_sub_title_4" value="{{ isset($highlight_sub_title_4) ? $highlight_sub_title_4 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 4<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_4" id="highlight_description_4" value="{{ isset($highlight_description_4) ? $highlight_description_4 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 5<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_5" id="highlight_sub_title_5" value="{{ isset($highlight_sub_title_5) ? $highlight_sub_title_5 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 5<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_5" id="highlight_description_5" value="{{ isset($highlight_description_5) ? $highlight_description_5 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 6<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_6" id="highlight_sub_title_6" value="{{ isset($highlight_sub_title_6) ? $highlight_sub_title_6 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 6<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_6" id="highlight_description_6" value="{{ isset($highlight_description_6) ? $highlight_description_6 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Sub Title 7<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_sub_title_7" id="highlight_sub_title_7" value="{{ isset($highlight_sub_title_7) ? $highlight_sub_title_7 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description 7<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="highlight_description_7" id="highlight_description_7" value="{{ isset($highlight_description_7) ? $highlight_description_7 : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(2440X1578)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="highlight_image" id="highlight_image">
                                @if(isset($highlight_image) && $highlight_image != "")
                                    <img src="{{ asset('uploads/banner/'.$highlight_image) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_highlight_image" value="{{ isset($highlight_image) ? $highlight_image : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Business Glance</h2><hr>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="business_title" id="business_title" value="{{ isset($business_title) ? $business_title : '' }}" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Total Business Advices<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="business_advices" id="business_advices" value="{{ isset($business_advices) ? $business_advices : '' }}" />
                        </div>
                        <div class="col-lg-10 mb-3">
                            <label class="form-label">Business Advices Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="business_advice_title" id="business_advice_title" value="{{ isset($business_advice_title) ? $business_advice_title : '' }}" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Business Awards<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="business_awards" id="business_awards" value="{{ isset($business_awards) ? $business_awards : '' }}" />
                        </div>
                        <div class="col-lg-10 mb-3">
                            <label class="form-label">Business Awards Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="business_award_title" id="business_award_title" value="{{ isset($business_award_title) ? $business_award_title : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(50x50)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="business_icon_1" id="business_icon_1">
                                @if(isset($business_icon_1) && $business_icon_1 != "")
                                    <img src="{{ asset('uploads/banner/'.$business_icon_1) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_business_icon_1" value="{{ isset($business_icon_1) ? $business_icon_1 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(50x50)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="business_icon_2" id="business_icon_2">
                                @if(isset($business_icon_2) && $business_icon_2 != "")
                                    <img src="{{ asset('uploads/banner/'.$business_icon_2) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_business_icon_2" value="{{ isset($business_icon_2) ? $business_icon_2 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(2440X1578)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="business_image" id="business_image">
                                @if(isset($business_image) && $business_image != "")
                                    <img src="{{ asset('uploads/banner/'.$business_image) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_business_image" value="{{ isset($business_image) ? $business_image : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Working Hours</h2><hr>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Monday to Friday<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="mon_fri" id="mon_fri" value="{{ isset($mon_fri) ? $mon_fri : '' }}" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Saturday<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="saturday" id="saturday" value="{{ isset($saturday) ? $saturday : '' }}" />
                        </div>
                        <h2>Footer</h2><hr>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Title<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="footer_title" id="footer_title" value="{{ isset($footer_title) ? $footer_title : '' }}" />
                        </div>
                        <h2>Website Images</h2>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(916X693)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="website_image_1" id="website_image_1">
                                @if(isset($website_image_1) && $website_image_1 != "")
                                    <img src="{{ asset('uploads/banner/'.$website_image_1) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_website_image_1" value="{{ isset($website_image_1) ? $website_image_1 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(682X849)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="website_image_2" id="website_image_2">
                                @if(isset($website_image_2) && $website_image_2 != "")
                                    <img src="{{ asset('uploads/banner/'.$website_image_2) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_website_image_2" value="{{ isset($website_image_2) ? $website_image_2 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(479X970)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="website_image_3" id="website_image_3">
                                @if(isset($website_image_3) && $website_image_3 != "")
                                    <img src="{{ asset('uploads/banner/'.$website_image_3) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_website_image_3" value="{{ isset($website_image_3) ? $website_image_3 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(335X245)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="website_image_4" id="website_image_4">
                                @if(isset($website_image_4) && $website_image_4 != "")
                                    <img src="{{ asset('uploads/banner/'.$website_image_4) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_website_image_4" value="{{ isset($website_image_4) ? $website_image_4 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(282X748)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="website_image_5" id="website_image_5">
                                @if(isset($website_image_5) && $website_image_5 != "")
                                    <img src="{{ asset('uploads/banner/'.$website_image_5) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_website_image_5" value="{{ isset($website_image_5) ? $website_image_5 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>About Us Page</h2>
                        <div class="col-lg-12 mb-3">
                            <textarea class="form-control summernote" name="about_us" id="about_us">{{ isset($about_us) ? $about_us : '' }}</textarea>
                        </div>
                    </div>
                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
	var page_title = "General Settings";
    $(document).ready(function(){
        $("#mainForm").submit(function(e){
            e.preventDefault();

            if($("#mainForm").valid()) {
                $.ajax({
                    url: $("#mainForm").attr("action"),
                    type: $("#mainForm").attr("method"),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend:function(xhr){
                        xhr.setRequestHeader("csrf-token", $("input[name=_csrf]").val());
                        $("#mainForm button[type=submit]").html('<div class="spinner-border spinner-border-sm text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>').attr("disabled",true);
                    },
                    success:function(response){
                        if(response.success) {
                            show_toast("Success!",response.message,"success");
                            setTimeout(function(){
                                window.location.reload();
                            },3000);
                        } else {
                            show_toast("Oops!",response.message,"error");
                        }
                    },
                    error: function(xhr, status, error) {
                        $("#mainForm button[type=submit]").html("SUBMIT").attr("disabled",false);
                        if (xhr.status === 400) {
                            const res = xhr.responseJSON;
                            show_toast("Oops!",res.message,"error");
                        } else {
                            show_toast("Oops!","Something went wrong","error");
                        }
                    }
                });
            }
        });
    });
</script>
@endsection

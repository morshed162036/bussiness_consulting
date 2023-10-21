@extends('client.layout.main')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/about/page-header-bg.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>About Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <div id="aboutus" class="row align-items-xl-center pt-4 mt-5 ">
        <div class="col-md-10 col-lg-6 mb-5 mb-lg-0 ">
            <div class="row row-gutter-sm ">
                <div class="col-6  " id="about">
                    <img id="about_img" src="{{ asset('business/img/about/about-2.webp') }}" class="box-shadow-5 " alt="" />
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                data-appear-animation="fadeInUpShorter">Build your Business in Dubai</h2>
            <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">{{ $about->title }}
            </h3>
            <div class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                {!! $about->pera_1 !!}
                @if ($about->pera_2)
                    <br><br>
                    {!! $about->pera_2 !!}
                @endif
                
            </div>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1000">
                <a href="{{ route('client.contact-page') }}"
                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a
                        Quote</span></a>
            </div>
        </div>
    </div>

    <section class="ceo message">
        <div class="container">
            <div class="row align-items-center py-2 my-5 mb-lg-0 my-xl-5">
                <div class="col-lg-7 mb-2 mb-lg-0 md_speach_first_part">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-6 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter">CEO Message</h2>
                    <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">{{ $ceo_message->title }}</h3>
                    <div class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation line-height-6"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        {!! $ceo_message->pera_1 !!}
                    </div>  
                </div>
                <div class="col-lg-5 md_image">
                    <img src="@if ($ceo_message->image)
                        {{ asset('images/ceo/'.$ceo_message->image) }}
                    @endif" class="img-fluid" alt="" />
                </div>
                @if ($ceo_message->pera_2)
                    <div class="md_speach_2nd">
                        <div class="text-3">{!! $ceo_message->pera_2 !!}</div>
                    </div>
                @endif
                <div class="col-lg-2">
                    <div class="md_signature">
                        <img src="@if ($ceo_message->sign)
                        {{ asset('images/ceo/'.$ceo_message->sign) }}
                    @endif" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 mt-4 md_details">
                    <h2 class="text-color-primary">{{ $ceo_message->name }}</h2>
                    <p class="">{{ $ceo_message->designation }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="tabs tabs-bottom tabs-center tabs-simple custom-tabs-style-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#tabsNavigationVision"
                                    data-bs-toggle="tab">Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#tabsNavigationMission"
                                    data-bs-toggle="tab">Mission</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane text-dark" id="tabsNavigationVision">
                                <div class="text-3-5">{!! $about->our_vision !!}</div>
                            </div>
                            <div class="tab-pane text-dark" id="tabsNavigationMission">
                                <div class="text-3-5">{!! $about->our_mission !!}</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
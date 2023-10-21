@extends('client.layout.main')

@section('content')
    <div id="home" class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                @if ($banners)
                    @foreach ($banners as $banner)
                        <div class="owl-item position-relative pt-5"
                            style="background-image: url({{ asset('images/banner/'.$banner->image) }}); background-size: cover; background-position: center;">
                            <div class="container position-relative z-index-3 h-100">
                                <div class="row justify-content-center align-items-center h-100">
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column align-items-center">
                                            <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation"
                                                data-appear-animation="fadeInDownShorterPlus"
                                                data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                                <span
                                                    class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                    <img src="img/slides/slide-title-border.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInRightShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                        alt="" />
                                                </span>

                                                <span
                                                    class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                    <img src="{{ asset('business/img/slides/slide-title-border.png') }}"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInLeftShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                        alt="" />
                                                </span>
                                            </h3>
                                            <h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation"
                                                data-appear-animation="blurIn" data-appear-animation-delay="500"
                                                data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                                {{ $banner->first_text }}
                                            </h2>
                                            <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                                data-plugin-animated-letters
                                                data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                                {{ $banner->first_text }}
                                            </p>
                                            <a href=""
                                                class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1600"
                                                data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET
                                                STARTED NOW!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            @for ($i=1;$i<$banner_count; $i++)
                <button role="button" class="owl-dot"><span></span></button>
            @endfor
            
        </div>
    </div>

    <!-- short about section start -->
    <div id="aboutus" class="row align-items-xl-center pt-4 mt-5">
        <div class="col-md-10 col-lg-6 mb-5 mb-lg-0 ">
            <div class="row row-gutter-sm ">
                <div class="col-6  " id="about">
                    <img id="about_img" src="{{ asset('business/img/short-about.jpg') }}" class="box-shadow-5 " alt="" />
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class=" custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium  mb-2 appear-animation"
                data-appear-animation="fadeInUpShorter" id="choose-text">ABOUT US</h2>
            <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">@if ($about_us)
                    {{ $about_us->title }}
                @endif</h3>
            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="500" style="height: 100px; overflow:hidden">
                @if ($about_us)
                    {{ $about_us->pera_1 }}
                @endif
            </p>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1000">
                <a href="{{ route('client.about-page') }}"
                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Read More</span></a>
                <a href="{{ route('client.contact-page') }}"
                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 mx-2 btn-py-2 text-3-5"
                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a
                        Quote</span></a>
            </div>
        </div>
    </div>
    <!-- short about section end -->


    <!-- services section start -->
    @if ($services)
        <section class="section section-height-4 section-with-shape-divider  border-0 pb-5 m-0">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><span
                                id="choose-text">Why
                                Choose Us</span></h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Services
                        </h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                            hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun
                            volutpat.
                            Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                    </div>
                </div>
                <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    @foreach ($services as $service)
                        <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                            <a href="@if ($service->service_details)
                                {{ route('service-page.show',$service->service_details->id) }}
                            @endif" class="custom-link-hover-effects text-decoration-none"
                                data-cursor-effect-hover="plus">
                                <div class="card box-shadow-2" style="height: 480px; overflow:hidden">
                                    <div class="card-img-top position-relative">
                                        <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">

                                            <div class="custom-crooked-line">

                                            </div>

                                        </div>
                                        <img src="@if ($service->image)
                                            {{ asset('images/service/'.$service->image) }}
                                        @endif" class="img-fluid"
                                            alt="Card Image" />
                                    </div>
                                    <h4 class="font-weight-semibold text-color-black text-6 text-center mt-4 mb-1">{{ $service->title }}
                                    </h4>
                                    <div class="card-body d-flex align-items-center custom-view-more px-4">
                                        <div class="card-text w-100 mb-0">@if ($service->service_details)
                                           {!! $service->service_details->description !!}
                                        @endif</div>
                                        <img width="50" height="50" class="w-auto" id="arrow-right"
                                            src="{{ asset('business/img/demos/business-consulting-3/icons/arrow-right.svg') }}" alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 50px;" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </div>
                @if ($service_count > 6)
                    <a href="{{ route('service-page.index') }}"
                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 mx-2 btn-py-2 text-3-5"
                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>See More</span></a>
                @endif
            </div>
        </section>
    @endif
    
    <!-- services section end -->

    <!-- number section start -->
    <!--Numbers-->
    @if ($counter)
        <section id="numbers" class="ts-block ts-separate-bg-element py-5 ts-xs-text-center   mt-5"
        data-bg-image="assets/img/bg-field.jpg" data-bg-image-opacity=".1" data-bg-color="#eeeeee"
        data-bg-parallax="scroll" data-bg-parallax-speed="3">
            <div class="container">
                <div class="ts-promo-numbers py-5 text-center">
                    <div class="row align">
                        <div class="col-sm-3">
                            <div class="ts-promo-number">
                                <h2 class="ts-opacity__60 text-white stat-number">{{ $counter->customers }}</h2>
                                <h5 class="mb-0 ts-opacity__30 text-white">Satisfied Clients</h5>
                            </div>

                        </div>

                        <div class="col-sm-3">
                            <div class="ts-promo-number">

                                <h2 class="ts-opacity__60 text-white stat-number">{{ $counter->service_guarantee }}</h2>

                                <h5 class="mb-0 ts-opacity__30 text-white">Service Guarantee</h5>
                            </div>

                        </div>

                        <div class="col-sm-3">
                            <div class="ts-promo-number">
                                <h2 class="ts-opacity__60 text-white stat-number">{{ $counter->services }}</h2>
                                <h5 class="mb-0 ts-opacity__30 text-white">Services</h5>
                            </div>

                        </div>

                        <div class="col-sm-3">
                            <div class="ts-promo-number">
                                <h2 class="ts-opacity__60 text-white stat-number">{{ $counter->seevices_completed }}</h2>
                                <h5 class="mb-0 ts-opacity__30 text-white">Service Completed</h5>
                            </div>

                        </div>
                        <!-- <div class="counters">
                            <div class="counter custom-sm-counter-style">
                                <img class="counter-icon" src="img/demos/business-consulting/icons/icon-1.png" alt />
                                <strong class="text-color-primary custom-primary-font" data-to="15"
                                    data-append="+">0</strong>
                                <label>Years in Business</label>
                            </div>
                        </div> -->

                    </div>

                </div>

            </div>

        </section>
    @endif
    

    <!-- Pricing Section Start -->
    @if ($pricingplans)
        <section class="mt-5">
            <div class="container">
                <div class="text-center">
                    <div>
                        <p class="section-title__tagline mt-5 custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            Pricing Plans</p>
                    </div>
                    <h2 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Offering Our Best
                        Plan For
                        Your
                        <br> Business Purpose
                    </h2>
                </div>
                <div class="mt-5">
                    <div>
                        <div>
                            <div class="row justify-content-center">
                                @foreach ($pricingplans as $pricingplan)
                                    <div class="col-lg-4 mt-4 mt-sm-4 ">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="pricing-one__price-box">
                                                    <p class="pricing-one__price-title text-center">{{ $pricingplan->title }}</p>
                                                    <h3 class="pricing-one__price text-center">${{ $pricingplan->price }}<span
                                                            id="montly">/montly</span></h3>
                                                    <p class="text-center pricing-one__text">Popularised
                                                        in the follower
                                                        with the etraset
                                                        sheets
                                                        containing.</p>
                                                </div>
                                                <div>
                                                     {!! $pricingplan->title !!}
                                                </div>
                                                {{-- <div class="pricing-one__btn-box">
                                                    <a href="price.html" class="thm-btn pricing-one__btn text-center">Buy
                                                        Now</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                                <!-- Add two more cards here -->
                                {{-- <div class="col-lg-4 mt-4 mt-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="pricing-one__price-box">
                                                <p class="pricing-one__price-title text-center">
                                                    Standard Plan</p>
                                                <h3 class="pricing-one__price text-center">$39<span
                                                        id="montly">/montly</span></h3>
                                                <p class="text-center pricing-one__text">Popularised
                                                    in the follower
                                                    with the etraset
                                                    sheets
                                                    containing.</p>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Powerful Admin Panel</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>3 Native Android App</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Multi-Language Support</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Support via E-mail and Phone</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="pricing-one__btn-box">
                                                <a href="price.html" class="thm-btn pricing-one__btn text-center">Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="pricing-one__price-box">
                                                <p class="pricing-one__price-title text-center">
                                                    Premium Plan</p>
                                                <h3 class="pricing-one__price text-center">$59<span
                                                        id="montly">/montly</span></h3>
                                                <p class="text-center pricing-one__text">Popularised
                                                    in the follower
                                                    with the etraset
                                                    sheets
                                                    containing.</p>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Powerful Admin Panel</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>3 Native Android App</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Multi-Language Support</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex gap-3">
                                                        <div id="icon-check">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                            </svg>

                                                        </div>
                                                        <div>
                                                            <p>Support via E-mail and Phone</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="pricing-one__btn-box">
                                                <a href="price.html" class="thm-btn pricing-one__btn text-center">Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    

    <!-- Pricing Section End -->


    <!-- testimonial section start -->
    @if ($reviews)
        <section class="section section-height-3 border-0 m-0 lazyload mt-5"
        data-bg-src="{{ asset('business/img/demos/business-consulting-3/backgrounds/background-3.jpg') }}">
            <div class="container py-4">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" id="choose-text">
                            TESTIMONIALS
                        </h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            What People
                            Say</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="250">
                        <div class="owl-carousel owl-theme custom-nav-style-1 nav-style-1 nav-svg-arrows-1 nav-outside custom-dots-style-2 bg-light box-shadow-4 mb-0"
                            data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true}, '768': {'items': 1}, '992': {'items': 1, 'nav': true, 'dots': false}, '1200': {'items': 1, 'nav': true, 'dots': false}}, 'loop': false, 'autoHeight': true}">
                            @foreach ($reviews as $review)
                                <div class="py-5 px-lg-5">
                                    <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                                        
                                        <blockquote>
                                            <div class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">
                                                {!! $review->review !!}
                                            </div>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p>
                                                <img width="40" height="40" src="@if ($review->image)
                                                    {{ asset('images/review/'.$review->image) }}
                                                    @endif"
                                                    alt=""
                                                    style="width: 40px;" />
                                                    <strong class="font-weight-bold text-5-5 negative-ls-1">
                                                        {{ $review->name }}
                                                    </strong>
                                                    <p class="text-color-dark mb-0">{{ $review->position }}</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    
    <!-- testimonial section end -->
@endsection
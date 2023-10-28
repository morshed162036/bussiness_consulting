@extends('client.layout.main')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/services-category/services.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $details->setup->title }}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>{{ $details->setup->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <div class="container pt-3 mt-4">
        <div class="row mb-8">
            <div class="col-12 col-lg-8">
                <div class="left_side">

                    <img src="@if ($details->image)
                        {{ asset('images/setup/'.$details->image) }}
                    @endif" class="img-fluid w-100">

                    <h2 class="services_headig mt-3"> {{ $details->setup->title }}</h2>
                    <div class="text-3-5">{!! $details->description !!}</div>

                    <h3 class="services-details__title-2">ADVANTAGE OF {{ $details->setup->title }}:</h3>
                    <div class="services-details__text-2">{!! $details->our_plan !!}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="services-details__services-box">
                    <ul class="services-details__services-list list-unstyled">
                        @foreach ($setups as $setup)
                            <li>
                                <a href="@if ($setup->setup_details)
                                    {{ route('setup-page.show',$setup->setup_details->id) }}
                                @endif">{{ $setup->title }}
                                    <span>
                                        <img width="50" height="50" class="w-auto"
                                            src="{{ asset('business/img/demos/business-consulting-3/icons/arrow-right.svg') }}" alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" style="width: 50px;" />
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">
                    <h3 class="font-weight-semibold text-color-dark text-transform-none text-5-5 mb-3">More
                        About Us</h3>
                    <p class="pb-1 mb-2">Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet
                        pretium blandit. Vestibulum luctus laoreet lacinia. </p>
                    <span
                        class="d-flex align-items-center justify-content-center justify-content-md-start pb-2 mb-3">
                        <span>
                            <img width="25" height="25" src="{{ asset('business/img/demos/business-consulting-3/icons/phone.svg') }}"
                                alt="Phone Icon" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                        </span>
                        <a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-semibold text-3-5 ms-2"
                            href="tel:+88{{ $company->phone }}">{{ $company->phone }}</a>
                    </span>
                    <a href="{{ route('client.contact-page') }}"
                        class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                        data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
                            Us</span></a>

                    <hr class="my-4">
                </div>
                {{-- <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="750">
                    <h3 class="font-weight-semibold text-color-dark text-transform-none text-5-5 pt-2 mb-3">
                        Ready to Start?</h3>
                    <p class="pb-1 mb-3">Curabitur vulputate posuere tortor luctus vulputate laoreet pretium
                        blandit. </p>
                    <a href="{{ route('client.contact-page') }}"
                        class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                        data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a
                            Quote</span></a>
                </div> --}}
            </div>
        </div>
        @if ($questions)
            <div class="row row-gutter-sm pt-4 pt-sm-0">
                <div class="col-md-8 col-lg-8 col-sm-12 mb-5 mb-md-0">
                    <h2 class=" services_headig"> Frequently asked Question</h2>
                    <div class="accordion custom-accordion-style-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" id="accordion1">
                        
                            @foreach ($questions as $question)
                                <div class="card card-default">
                                    <div class="card-header" id="collapse1HeadingOne">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1One"
                                                aria-expanded="false" aria-controls="collapse1One">
                                                {{ $question->qsn }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne"
                                        data-bs-parent="#accordion1">
                                        <div class="card-body">
                                            <div class="mb-0">{!! $question->ans !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>
        @endif
        <div class="row py-4 my-5 mb-lg-0 my-xl-5">
        </div>
    </div>

    <!--Appointment One Start-->
    <section class="appointment-one">
        <div class="appointment-one__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="appointment-one__left">
                            <h3 class="appointment-one__title">Book a Appointment</h3>
                            <p class="appointment-one__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="appointment-one__right">
                            <div class="appointment-one__form-box">
                                <form action="{{ route('setup-page.store') }}" method="post"
                                    class="appointment-one__form contact-form-validated" novalidate="novalidate">@csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="appointment-one__input-box">
                                                <h3 class="appointment-one__input-title">Name *</h3>
                                                <input type="text" placeholder="" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="appointment-one__input-box">
                                                <h3 class="appointment-one__input-title">Setup Type</h3>
                                                <div class="appointment-one__showing-sort">
                                                    <select class="selectpicker"
                                                        aria-label="Default select example" required name="setup_id">
                                                        <option value="">Select ...</option>
                                                        @if ($setups)
                                                            @foreach ($setups as $setup)
                                                                <option value="{{ $setup->id }}">{{ $setup->title }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="appointment-one__input-box">
                                                <h3 class="appointment-one__input-title">Email *</h3>
                                                <input type="email" placeholder="e.g:" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="appointment-one__input-box text-message-box">
                                                <h3 class="appointment-one__input-title">Message
                                                    <span>(Optional)</span>
                                                </h3>
                                                <textarea name="message" placeholder="Type here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="appointment-one__input-box appointment-one__input-box-2">
                                                <h3 class="appointment-one__input-title">Phone Number *</h3>
                                                <input type="text" placeholder="017xxx" name="phone" required>
                                            </div>
                                            <div class="appointment-one__btn-box">
                                                <input type="submit"
                                                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                                    data-cursor-effect-hover="plus"
                                                    data-cursor-effect-hover-color="light">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('client.layout.main')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/about/page-header-bg.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="section section-height-3 bg-light border-0 pt-4 m-0 lazyload"
        data-bg-src="{{ asset('business/img/demos/business-consulting-3/backgrounds/background-6.jpg') }}"
        style="background-size: 100%; background-repeat: no-repeat;">
        <div class="container py-4">
            <div class="row box-shadow-4 mx-3 mx-xl-0 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="300">
                <div class="col-lg-6 px-0">
                    <div class="bg-light h-100">
                        <img src="{{ asset('business/img/contact.jpg') }}" style="height: 100%; width: 100%;" alt="">
                         {{-- <div class="d-flex flex-column justify-content-center p-5 h-100 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div class="pb-5 mb-4 mt-5 mt-lg-0">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center justify-content-center pe-lg-4">
                                    <img width="105" height="105"
                                        src="{{ asset('business/img/demos/business-consulting-3/icons/map-pin.svg') }}" alt="Location" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-4 mb-md-0'}"
                                        style="width: 105px;" />
                                    <div class="text-center text-md-start ps-md-3">
                                        <h2 class="font-weight-semibold text-6 mb-1">Porto Business</h2>
                                        <p class="text-3-5 mb-0">12345 Porto Blvd,<br>Suite 1500<br>Los Angeles,
                                            California
                                            9000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-5 mb-lg-0">
                                <div class="col-auto text-center ms-xl-auto mb-4 mb-xl-0">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SUPPORT</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25"
                                            src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon"
                                            data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a href="tel:8001234567"
                                            class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ms-2">800-123-4567</a>
                                    </div>
                                </div>
                                <div class="col-auto text-center me-xl-auto">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SALES</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25"
                                            src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon"
                                            data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a href="tel:8001234567"
                                            class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ms-2">800-123-4567</a>
                                    </div>
                                </div>
                                <div class="col-auto text-center pt-4 mt-5">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">SEND AN EMAIL</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25"
                                            src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon"
                                            data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a href="mailto:contact@portotheme.com"
                                            class="text-color-dark text-color-hover-primary text-decoration-underline font-weight-semibold text-5-5 wb-all ms-2">contact@portotheme.com</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="bg-dark h-100">
                        <div class="text-center text-md-start p-5 h-100 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                            <h2 class="text-color-light font-weight-medium mb-4 mt-5 mt-lg-0">Send Us a Message and
                                Learn
                                More About Our Services</h2>
                            <p class="text-3-5 font-weight-medium mb-4">Cras a elit sit amet leo accumsan volutpat.
                                Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. </p>
                            <form
                                class="contact-form form-style-4 form-placeholders-light form-errors-light mb-5 mb-lg-0"
                                action="{{ route('client.contact-page-store') }}" method="POST"> @csrf
                                {{-- <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div> --}}

                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Please enter your name."
                                            maxlength="100"
                                            class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="name" placeholder="* Full Name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Please enter your phone number."
                                            maxlength="100"
                                            class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="phone" placeholder="* Phone Number" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="email" value=""
                                            data-msg-required="Please enter your email address."
                                            data-msg-email="Please enter a valid email address." maxlength="100"
                                            class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="email" placeholder="* Email Address" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message."
                                            rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="message" placeholder="* Message" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <button type="submit"
                                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                            data-loading-text="Loading..." data-cursor-effect-hover="plus"
                                            data-cursor-effect-hover-color="light">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- map section start -->
    {{-- <section>
        <div class="block fullwidth no-pad">
            <iframe
                src="{{ $details->google_location }}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            <iframe>
        </div>
    </section> --}}
    
    
    <!-- map section end -->
@endsection
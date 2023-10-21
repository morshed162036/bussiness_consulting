@extends('client.layout.main')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/services-category/services.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Business Setup</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>Business Setup</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End -->

    <!-- services section start -->

    <div class="row pt-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
        @foreach ($setups as $setup)
            <div class="col-md-4 mb-4 mb-md-0 col-lg-3">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                    <div class="card-body p-relative zindex-1 p-5 text-center">
                        <div class="anim-hover-inner-translate-top-20px transition-3ms">
                            <img width="72" height="73" src="@if ($setup->image)
                                {{ asset('images/setup/'.$setup->image) }}
                            @endif" alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                            <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">{{ $setup->title }}</h4>
                        </div>
                        <div
                            class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                            <a href="@if ($setup->setup_details)
                                {{ route('setup-page.show',$setup->setup_details->id) }}
                            @endif"
                                class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn More <i
                                    class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    <!-- services section end -->
    <ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
        {{ $setups->links() }}
    </ul>
@endsection
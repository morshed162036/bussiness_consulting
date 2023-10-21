@extends('client.layout.main')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/about/page-header-bg.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Blog</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->



<!-- about the blog section start-->

<div class="container pt-4 pb-5 my-5">
    <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1600">
        @if ($blogs)
            @foreach ($blogs as $blog)
                <article class="mb-5">
                    <div class="card bg-transparent border-0 custom-border-radius-1">
                        <div class="card-body p-0 z-index-1">
                            <a href="{{ route('blog-page.show',$blog->id) }}" data-cursor-effect-hover="plus">
                                <img class="card-img-top custom-border-radius-1 mb-2" src="{{ asset('images/blog/'.$blog->image) }}"
                                    alt="Card Image">
                            </a>
                            <p class="text-uppercase text-color-default text-1 my-2">
                                <time pubdate datetime="2023-01-10">{{ $blog->date }}</time>
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                @if ($blog->category)
                                    {{ $blog->category->title }}
                                @endif
                                
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                        class="text-color-dark text-color-hover-primary text-decoration-none"
                                        href="{{ route('blog-page.show',$blog->id) }}">{{ $blog->title }}</a>
                                </h4>
                                <div class="card-text mb-2" style="height: 50px; overflow:hidden;">{!! $blog->post !!}</div>
                                <a href="{{ route('blog-page.show',$blog->id) }}" class="text-decoration-none custom-link-hover-effects">
                                    <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                        Read More
                                        <img width="27" height="27"
                                            src="{{ asset('business/img/demos/business-consulting-3/icons/arrow-right.svg') }}" alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                            style="width: 27px;" />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        @endif

            <ul
                class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
                {{ $blogs->links() }}
            </ul>

        </div>
        <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1800">
            <aside class="sidebar">
                {{-- <div class="px-3 mb-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The
                        Blog
                    </h3>
                    <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat
                        quis
                        porta diam.</p>
                </div> --}}
                {{-- <div class="py-1 clearfix">
                    <hr class="my-2">
                </div> --}}
                {{-- <div class="px-3 mt-4">
                    <form action="page-search-results.html" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control box-shadow-none text-1 border-0 bg-color-grey"
                                placeholder="Search..." name="s" id="s" type="text">
                            <button type="submit" class="btn bg-color-grey text-1 p-2"><i
                                    class="fas fa-search m-2"></i></button>
                        </div>
                    </form>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div> --}}
                {{-- <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts
                    </h3>
                    <div class="pb-2 mb-1">
                        <a href="#"
                            class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                            Jan
                            2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#"
                            class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem
                            ipsum dolor sit amet</a>
                        <a href="#"
                            class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                            Jan
                            2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#"
                            class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur
                            adipiscing elit</a>
                        <a href="#"
                            class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                            Jan
                            2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                        <a href="#"
                            class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus
                            sollicitudin nibh luctus</a>
                    </div>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div> --}}
                {{-- <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent
                        Comments
                    </h3>
                    <div class="pb-2 mb-1">
                        <a href="#"
                            class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                            on
                            <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong>
                            <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                        <a href="#"
                            class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John
                            Doe
                            on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong>
                            <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                        <a href="#"
                            class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                            on
                            <strong class="text-color-dark text-hover-primary text-4">Consectetur
                                adipiscing</strong>
                            <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                    </div>
                </div>
                <div class="py-1 clearfix">
                    <hr class="my-2">
                </div> --}}
                <div class="px-3 mt-4">
                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
                    <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                        @if ($categories)
                            @foreach ($categories as $category)
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="{{ route('blog-page.edit',$category->id) }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
@extends('server.layout.main')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Question Create</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('question.index') }}">Questions</a>
                        </li>
                        <li class="breadcrumb-item active">Question Create
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <fieldset class="form-group">
                                            <h5>Question Type</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"></span>
                                                </div>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="0">Select</option>
                                                    <option value="Service">Service</option>
                                                    <option value="Setup">Business Setup</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4">
                                        <fieldset class="form-group">
                                            <h5>Service</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"></span>
                                                </div>
                                                <select name="service_id" id="service_id" class="form-control">
                                                    <option value="0">Select</option>
                                                    @isset($services)
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4">
                                        <fieldset class="form-group">
                                            <h5>Business Setup</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"></span>
                                                </div>
                                                <select name="setup_id" id="setup_id" class="form-control">
                                                    <option value="0">Select</option>
                                                    @isset($setups)
                                                        @foreach ($setups as $setup)
                                                            <option value="{{ $setup->id }}">{{ $setup->title }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h1>Question-Answer</h1>
                                                    <div class="row mt-2">
                                                        <div class="repeater-default">
                                                            <div data-repeater-list="group-question">
                                                                <div data-repeater-item>
                                                                    <div class="row justify-content-between" id='question_details'>
                                                                        <div class="col-md-4 col-sm-12 form-group">
                                                                            <label for="question">Question</label>
                                                                            <input type="text" class="form-control" id="question"
                                                                                name="qsn" placeholder="Enter Question" >
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 form-group">
                                                                            <label for="unit_price">Answer</label>
                                                                            <textarea class="form-control" name="ans" id="answer" cols="30" rows="5"></textarea>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                            <button class="btn btn-danger text-nowrap px-1"
                                                                                data-repeater-delete type="button"> <i
                                                                                    class="bx bx-x"></i>
                                                                                Delete
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col p-0">
                                                                    <button class="btn btn-primary" data-repeater-create type="button" id="product"><i
                                                                            class="bx bx-plus"></i>
                                                                        Add
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Create</button>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/moment.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/pages/table-extended.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <!-- END: Page JS-->
@endsection
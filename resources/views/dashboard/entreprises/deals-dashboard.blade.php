@extends('layouts.master', [
    'title' => 'Tableau de bord',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- ApexChart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart-data.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/peity/chart-data.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Deals Dashboard</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Dashboard
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Deals Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-file-export me-1"></i>Export
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="input-icon mb-2 position-relative">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-9"></i>
                    </span>
                    <input type="text" class="form-control date-range bookingrange"
                        placeholder="dd/mm/yyyy - dd/mm/yyyy">
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row">
            <div class="col-xl-6 d-flex">
                <div class="row flex-fill">
                    <div class="col-sm-6">
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Total Deals</p>
                                        <h5>$45,221,45</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-primary">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-delta text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-danger fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>-4.01% </span> from
                                    last week</p>
                            </div>
                        </div>
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Deal Value</p>
                                        <h5>$12,545,68</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-secondary">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-currency text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-success fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>+20.01% </span> from
                                    last week</p>
                            </div>
                        </div>
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Revenue this month </p>
                                        <h5>$46,548,48</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-pink">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-stairs-up text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-success fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>+55% </span> from last
                                    week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Total Customers</p>
                                        <h5>9895</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-purple">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-users-group text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-success fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>+55% </span> from last
                                    week</p>
                            </div>
                        </div>
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Conversion Rate</p>
                                        <h5>51.96%</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-info">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-swipe text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-danger fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>-6.01% </span> from
                                    last week</p>
                            </div>
                        </div>
                        <div class="card bg-linear-gradiant border-white border-2 overlay-bg-3 position-relative">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <div>
                                        <p class="fw-medium mb-1">Active Customers </p>
                                        <h5>8987</h5>
                                    </div>
                                    <div class="avatar avatar-md br-10 icon-rotate bg-warning">
                                        <span class="d-flex align-items-center"><i
                                                class="ti ti-star text-white fs-16"></i></span>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"></div>
                                </div>
                                <p class="fw-medium fs-13"><span class="text-danger fs-12"><i
                                            class="ti ti-arrow-wave-right-up me-1"></i>-3.22% </span> from
                                    last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Pipeline Stages</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                            Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="pipeline_chart"></div>
                        <div>
                            <h6 class="mb-3">Leads Values By Stages</h6>
                            <div class="row g-2 justify-content-center">
                                <div class="col-md col-sm-4 col-6">
                                    <div class="border rounded text-center p-2">
                                        <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Marketing</p>
                                        <h6>$5,221,45</h6>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 col-6">
                                    <div class="border rounded text-center p-2">
                                        <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Sales</p>
                                        <h6>$30,424</h6>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 col-6">
                                    <div class="border rounded text-center p-2">
                                        <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Email</p>
                                        <h6>$21,135</h6>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 col-6">
                                    <div class="border rounded text-center p-2">
                                        <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Chat</p>
                                        <h6>$15,235</h6>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 col-6">
                                    <div class="border rounded text-center p-2">
                                        <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Operational</p>
                                        <h6>$10,557</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Deals by Stage</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                            Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div>
                            <div class="d-flex align-items-center">
                                <h3 class="me-2">98%</h3>
                                <span
                                    class="badge badge-outline-success bg-success-transparent rounded-pill me-1">12%</span>
                                <span>vs last years</span>
                            </div>
                            <div id="deals_stage"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Deals By Companies</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                            Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-md rounded-circle bg-gray-100 flex-shrink-0 me-2">
                                            <img src="assets/img/company/company-24.svg" class="w-auto h-auto"
                                                alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1">Pitch</h6>
                                            <p class="text-truncate">Closing Deal date 05 April, 2025</p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>$3655</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-md rounded-circle bg-gray-100 flex-shrink-0 me-2">
                                            <img src="assets/img/company/company-25.svg" class="w-auto h-auto"
                                                alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1">Initech</h6>
                                            <p class="text-truncate">Closing Deal date 05 May, 2025</p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>$2185</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-md rounded-circle bg-gray-100 flex-shrink-0 me-2">
                                            <img src="assets/img/company/company-26.svg" class="w-auto h-auto"
                                                alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1">Umbrella Corp</h6>
                                            <p class="text-truncate">Closing Deal date 29 April, 2025</p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>$1583</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2 mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-md rounded-circle bg-gray-100 flex-shrink-0 me-2">
                                            <img src="assets/img/company/company-27.svg" class="w-auto h-auto"
                                                alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1">Capital Partners</h6>
                                            <p class="text-truncate">Closing Deal date 23 Mar, 2025</p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>$6584</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed bg-transparent-light rounded p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-md rounded-circle bg-gray-100 flex-shrink-0 me-2">
                                            <img src="assets/img/company/company-28.svg" class="w-auto h-auto"
                                                alt="Img">
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1">Massive Dynamic</h6>
                                            <p class="text-truncate">Closing Deal date 23 Feb, 2025</p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>$2153</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Top Deals</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                            Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <canvas id="deal_chart" class="mx-auto mb-3" height="200"></canvas>
                        </div>
                        <div>
                            <h6 class="mb-3">Status</h6>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-primary me-1"></i>Marketing</p>
                                <p class="f-13 fw-medium text-gray-9">$5,69,877</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-purple me-1"></i>Chat</p>
                                <p class="f-13 fw-medium text-gray-9">$4,84,575</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-success me-1"></i>Email</p>
                                <p class="f-13 fw-medium text-gray-9">$1,84,575</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Deals By Country</h5>
                            <div>
                                <a href="countries.html" class="btn btn-light btn-sm px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-2">
                        <div class="table-responsive pt-1">
                            <table class="table table-nowrap table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="countries.html" class="avatar rounded-circle border border-2">
                                                    <img src="assets/img/payment-gateway/country-01.svg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1"><a href="countries.html">USA</a></h6>
                                                    <span class="fs-13 d-inline-flex align-items-center">Deals
                                                        : 350</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center mb-2">
                                                <span class="country-chart-1" data-width="100%">0,3,0,2,1,3,1</span>
                                            </div>
                                        </td>
                                        <td class="px-0 text-end">
                                            <div class="mb-2">
                                                <p class="fs-13 mb-1">Total Value</p>
                                                <h6 class="fw-medium">$1065.00</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="countries.html" class="avatar rounded-circle border border-2">
                                                    <img src="assets/img/payment-gateway/country-02.svg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1"><a href="countries.html">UAE</a></h6>
                                                    <span class="fs-13 d-inline-flex align-items-center">Deals
                                                        : 221</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center mb-2">
                                                <span class="country-chart-1" data-width="100%">0,3,0,2,1,3,1</span>
                                            </div>
                                        </td>
                                        <td class="px-0 text-end">
                                            <div class="mb-2">
                                                <p class="fs-13 mb-1">Total Value</p>
                                                <h6 class="fw-medium">$966.00</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="countries.html" class="avatar rounded-circle border border-2">
                                                    <img src="assets/img/payment-gateway/country-03.svg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1"><a href="countries.html">Singapore</a></h6>
                                                    <span class="fs-13 d-inline-flex align-items-center">Deals
                                                        : 236</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center mb-2">
                                                <span class="country-chart-2" data-width="100%">0,3,0,2,1,3,1</span>
                                            </div>
                                        </td>
                                        <td class="px-0 text-end">
                                            <div class="mb-2">
                                                <p class="fs-13 mb-1">Total Value</p>
                                                <h6 class="fw-medium">$959.00</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="countries.html" class="avatar rounded-circle border border-2">
                                                    <img src="assets/img/payment-gateway/country-04.svg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1"><a href="countries.html">France</a></h6>
                                                    <span class="fs-13 d-inline-flex align-items-center">Deals
                                                        : 589</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center mb-2">
                                                <span class="country-chart-1" data-width="100%">0,3,0,2,1,3,1</span>
                                            </div>
                                        </td>
                                        <td class="px-0 text-end">
                                            <div class="mb-2">
                                                <p class="fs-13 mb-1">Total Value</p>
                                                <h6 class="fw-medium">$879.00</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <a href="countries.html" class="avatar rounded-circle border border-2">
                                                    <img src="assets/img/payment-gateway/country-05.svg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1"><a href="countries.html">Norway</a></h6>
                                                    <span class="fs-13 d-inline-flex align-items-center">Deals
                                                        : 221</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <span class="country-chart-2" data-width="100%">0,3,0,2,1,3,1</span>
                                            </div>
                                        </td>
                                        <td class="px-0 text-end">
                                            <p class="fs-13 mb-1">Total Value</p>
                                            <h6 class="fw-medium">$632.00</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Won Deals Stage</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border-0 dropdown-toggle btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Sales Pipeline
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                            Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <p class="mb-1 fw-medium">Stages Won This Year</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 class="me-2">$45,899,79</h3>
                                <span
                                    class="badge badge-soft-danger border-danger border rounded-pill me-1">$45,899,79</span>
                            </div>
                        </div>
                        <div class="stage-chart-main">
                            <div class="deal-stage-chart">
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-secondary rounded-circle chart-stage-1">
                                    <span class="d-block text-white mb-1">Conversion</span>
                                    <h6 class="text-white">48%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-danger rounded-circle chart-stage-2">
                                    <span class="d-block text-white mb-1">Calls</span>
                                    <h6 class="text-white">24%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-warning rounded-circle chart-stage-3">
                                    <span class="d-block text-white mb-1">Email</span>
                                    <h6 class="text-white">39%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-success rounded-circle chart-stage-4">
                                    <span class="d-block text-white mb-1">Chats</span>
                                    <h6 class="text-white">20%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Recent Follow Up</h5>
                            <div>
                                <a href="#" class="btn btn-light btn-sm px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Alexander Jermai</a>
                                    </h6>
                                    <p class="fs-13">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-42.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas
                                            Martini</a></h6>
                                    <p class="fs-13">Product Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center"><a href="#"
                                    class="btn btn-light btn-icon btn-sm"><i class="ti ti-phone fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-43.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel
                                            Esbella</a></h6>
                                    <p class="fs-13">Project Manager</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-mail-bolt fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-11.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel
                                            Esbella</a></h6>
                                    <p class="fs-13">Team Lead</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-44.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Stephan
                                            Peralt</a></h6>
                                    <p class="fs-13">Team Lead</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-light btn-icon btn-sm"><i
                                        class="ti ti-brand-hipchat fs-16"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 d-flex">
                <div class="card flex-fill">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                        <h5>Recent Deals</h5>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="deals.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap dashboard-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Deal Name</th>
                                        <th>Stage</th>
                                        <th>Deal Value</th>
                                        <th>Owner</th>
                                        <th>Closed Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="deals-details.html">Collins</a>
                                            </h6>
                                        </td>
                                        <td>Quality To Buy</td>
                                        <td>
                                            $4,50,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-32.jpg" alt="Img">
                                                </a>
                                                <h6 class="fw-medium"><a href="#">Anthony Lewis</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>14 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="deals-details.html">Konopelski</a></h6>
                                        </td>
                                        <td>Proposal Made</td>
                                        <td>
                                            $3,15,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-09.jpg" alt="Img">
                                                </a>
                                                <h6 class="fw-medium"><a href="#">Brian Villalobos</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>21 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="deals-details.html">Adams</a>
                                            </h6>
                                        </td>
                                        <td>Contact Made</td>
                                        <td>
                                            $8,40,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-01.jpg" alt="Img">
                                                </a>
                                                <h6 class="fw-medium"><a href="#">Harvey Smith</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>20 Feb 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="deals-details.html">Schumm</a>
                                            </h6>
                                        </td>
                                        <td>Quality To Buy</td>
                                        <td>
                                            $6,10,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-33.jpg" alt="Img">
                                                </a>
                                                <h6 class="fw-medium"><a href="#">Stephan Peralt</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>15 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="deals-details.html">Wisozk</a>
                                            </h6>
                                        </td>
                                        <td>Presentation</td>
                                        <td>
                                            $4,70,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-34.jpg" alt="Img">
                                                </a>
                                                <h6 class="fw-medium"><a href="#">Doglas Martini</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>12 Apr 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Recent Activities</h5>
                            <div>
                                <a href="activity.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body schedule-timeline activity-timeline">
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
                                <i class="ti ti-phone-filled fs-16"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Drain
                                        responded to your appointment schedule question.</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-info flex-shrink-0">
                                <i class="ti ti-message-circle-2-filled fs-16"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">You sent 1
                                        Message to the James.</a></p>
                                <span>10:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
                                <i class="ti ti-phone-filled fs-16"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Denwar
                                        responded to your appointment on 25 Jan 2025, 08:15 PM</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-purple flex-shrink-0">
                                <i class="ti ti-user-circle fs-16"></i>
                            </div>
                            <div class="flex-fill ps-3 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html"
                                        class="d-flex align-items-center">Meeting With <img
                                            src="assets/img/users/user-58.jpg"
                                            class="avatar avatar-sm rounded-circle mx-2" alt="Img">Abraham</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

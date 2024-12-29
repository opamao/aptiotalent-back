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

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

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
        <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Leads Dashboard</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Dashboard
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Leads Dashboard</li>
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
            <div class="col-xl-3 col-md-6">
                <div class="card position-relative">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-md br-10 icon-rotate bg-primary flex-shrink-0">
                                <span class="d-flex align-items-center"><i class="ti ti-delta text-white fs-16"></i></span>
                            </div>
                            <div class="ms-3">
                                <p class="fw-medium text-truncate mb-1">Total No of Leads</p>
                                <h5>6000</h5>
                            </div>
                        </div>
                        <div class="progress progress-xs mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"></div>
                        </div>
                        <p class="fw-medium fs-13 mb-0"><span class="text-danger fs-12"><i
                                    class="ti ti-arrow-wave-right-up me-1"></i>-4.01% </span> from last week</p>
                        <span class="position-absolute top-0 end-0"><img src="assets/img/bg/card-bg-04.png"
                                alt="Img"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card position-relative">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-md br-10 icon-rotate bg-secondary flex-shrink-0">
                                <span class="d-flex align-items-center"><i
                                        class="ti ti-currency text-white fs-16"></i></span>
                            </div>
                            <div class="ms-3">
                                <p class="fw-medium text-truncate mb-1">No of New Leads</p>
                                <h5>120</h5>
                            </div>
                        </div>
                        <div class="progress progress-xs mb-2">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%"></div>
                        </div>
                        <p class="fw-medium fs-13 mb-0"><span class="text-success fs-12"><i
                                    class="ti ti-arrow-wave-right-up me-1"></i>+20.01% </span> from last week</p>
                        <span class="position-absolute top-0 end-0"><img src="assets/img/bg/card-bg-04.png"
                                alt="Img"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card position-relative">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-md br-10 icon-rotate bg-danger flex-shrink-0">
                                <span class="d-flex align-items-center"><i
                                        class="ti ti-stairs-up text-white fs-16"></i></span>
                            </div>
                            <div class="ms-3">
                                <p class="fw-medium text-truncate mb-1">No of Lost Leads</p>
                                <h5>30</h5>
                            </div>
                        </div>
                        <div class="progress progress-xs mb-2">
                            <div class="progress-bar bg-pink" role="progressbar" style="width: 40%"></div>
                        </div>
                        <p class="fw-medium fs-13 mb-0"><span class="text-success fs-12"><i
                                    class="ti ti-arrow-wave-right-up me-1"></i>+55% </span> from last week</p>
                        <span class="position-absolute top-0 end-0"><img src="assets/img/bg/card-bg-04.png"
                                alt="Img"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card position-relative">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-md br-10 icon-rotate bg-purple flex-shrink-0">
                                <span class="d-flex align-items-center"><i
                                        class="ti ti-users-group text-white fs-16"></i></span>
                            </div>
                            <div class="ms-3">
                                <p class="fw-medium text-truncate mb-1">No of Total Customers</p>
                                <h5>9895</h5>
                            </div>
                        </div>
                        <div class="progress progress-xs mb-2">
                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%"></div>
                        </div>
                        <p class="fw-medium fs-13 mb-0"><span class="text-success fs-12"><i
                                    class="ti ti-arrow-wave-right-up me-1"></i>+55% </span> from last week</p>
                        <span class="position-absolute top-0 end-0"><img src="assets/img/bg/card-bg-04.png"
                                alt="Img"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Pipeline Stages</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2023 - 2024
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023 - 2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022 - 2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2021 - 2023</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row g-2 justify-content-center mb-3">
                            <div class="col-md col-sm-4 col-6">
                                <div class="border rounded p-2">
                                    <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Contacted</p>
                                    <h6>50000</h6>
                                </div>
                            </div>
                            <div class="col-md col-sm-4 col-6">
                                <div class="border rounded p-2">
                                    <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Oppurtunity</p>
                                    <h6>25985</h6>
                                </div>
                            </div>
                            <div class="col-md col-sm-4 col-6">
                                <div class="border rounded p-2">
                                    <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Not Contacted</p>
                                    <h6>12566</h6>
                                </div>
                            </div>
                            <div class="col-md col-sm-4 col-6">
                                <div class="border rounded p-2">
                                    <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Closed</p>
                                    <h6>8965</h6>
                                </div>
                            </div>
                            <div class="col-md col-sm-4 col-6">
                                <div class="border rounded p-2">
                                    <p class="mb-1"><i class="ti ti-point-filled text-primary"></i>Lost</p>
                                    <h6>2452</h6>
                                </div>
                            </div>
                        </div>
                        <div id="revenue-income"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>New Leads</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="heat_chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Lost Leads By Reason</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border-0 dropdown-toggle btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sales Pipeline
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div>
                            <div id="leads_stage"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Leads By Companies</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
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
                                            <p class="text-truncate">Value : $45,985</p>
                                        </div>
                                    </div>
                                    <span class="badge badge-purple d-inline-flex align-items-center">
                                        <i class="ti ti-point-filled me-1"></i> Not Contacted
                                    </span>
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
                                            <p class="text-truncate">Value : $21,145</p>
                                        </div>
                                    </div>
                                    <span class="badge badge-success d-inline-flex align-items-center">
                                        <i class="ti ti-point-filled me-1"></i>Closed
                                    </span>
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
                                            <p class="text-truncate">Value : $15,685</p>
                                        </div>
                                    </div>
                                    <span class="badge badge-secondary d-inline-flex align-items-center">
                                        <i class="ti ti-point-filled me-1"></i>Contacted
                                    </span>
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
                                            <p class="text-truncate">Value : $12,105</p>
                                        </div>
                                    </div>
                                    <span class="badge badge-secondary d-inline-flex align-items-center">
                                        <i class="ti ti-point-filled me-1"></i>Contacted
                                    </span>
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
                                            <p class="text-truncate">Value : $2,546</p>
                                        </div>
                                    </div>
                                    <span class="badge badge-danger d-inline-flex align-items-center">
                                        <i class="ti ti-point-filled me-1"></i>Lost
                                    </span>
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
                            <h5>Leads by Source</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donut-chart-2"></div>
                        <div>
                            <h6 class="mb-3">Status</h6>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-secondary me-1"></i>Google</p>
                                <p class="f-13 fw-medium text-gray-9">40%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-warning me-1"></i>Paid</p>
                                <p class="f-13 fw-medium text-gray-9">35%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-pink me-1"></i>Campaigns</p>
                                <p class="f-13 fw-medium text-gray-9">15%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-purple me-1"></i>Referals</p>
                                <p class="f-13 fw-medium text-gray-9">10%</p>
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
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas Martini</a>
                                    </h6>
                                    <p class="fs-13">Product Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center"><a href="#"
                                    class="btn btn-light btn-icon btn-sm"><i class="ti ti-phone-x fs-16"></i></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                    <img src="assets/img/users/user-43.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a>
                                    </h6>
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
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a>
                                    </h6>
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
                                    <img src="assets/img/users/user-45.jpg" class="rounded-circle border border-2"
                                        alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas Martini</a>
                                    </h6>
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
                                <i class="ti ti-phone fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Drain responded to your
                                        appointment schedule question.</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-info flex-shrink-0">
                                <i class="ti ti-message-circle-2 fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">You sent 1 Message to the
                                        James.</a></p>
                                <span>10:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
                                <i class="ti ti-phone fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Denwar responded to your
                                        appointment on 25 Jan 2025, 08:15 PM</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-purple flex-shrink-0">
                                <i class="ti ti-user-circle fs-20"></i>
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
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5>Notifications</h5>
                            <div>
                                <a href="#" class="btn btn-light btn-sm px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-4">
                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                <img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2"
                                    alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to UNIX </h6>
                                <p class="fs-13 mb-2">Today at 9:42 AM</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="avatar avatar-sm border flex-shrink-0 me-2"><img
                                            src="assets/img/social/pdf-icon.svg" class="w-auto h-auto"
                                            alt="Img"></a>
                                    <h6 class="fw-normal"><a href="#">EY_review.pdf</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                <img src="assets/img/users/user-28.jpg" class="rounded-circle border border-2"
                                    alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to UNIX </h6>
                                <p class="fs-13 mb-0">Today at 10:00 AM</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                <img src="assets/img/users/user-29.jpg" class="rounded-circle border border-2"
                                    alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to UNIX </h6>
                                <p class="fs-13 mb-2">Today at 10:50 AM</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-primary btn-sm me-2">Approve</a>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Decline</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                <img src="assets/img/users/user-33.jpg" class="rounded-circle border border-2"
                                    alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to UNIX </h6>
                                <p class="fs-13 mb-0">Today at 05:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Top Countries</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border-0 dropdown-toggle btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Referrals
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Referrals</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Sales Pipeline</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xxl-5 col-sm-6">
                                <div class="pe-3 border-end">
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="me-2"><i class="ti ti-point-filled text-primary fs-16"></i></span>
                                        <a href="countries.html"
                                            class="avatar rounded-circle flex-shrink-0 border border-2">
                                            <img src="assets/img/payment-gateway/country-03.svg"
                                                class="img-fluid rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium text-truncate mb-1"><a
                                                    href="countries.html">Singapore</a></h6>
                                            <span class="fs-13 text-truncate">Leads : 236</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="me-2"><i
                                                class="ti ti-point-filled text-secondary fs-16"></i></span>
                                        <a href="countries.html"
                                            class="avatar rounded-circle flex-shrink-0 border border-2">
                                            <img src="assets/img/payment-gateway/country-04.svg"
                                                class="img-fluid rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium text-truncate mb-1"><a href="countries.html">France</a>
                                            </h6>
                                            <span class="fs-13 text-truncate">Leads : 589</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="me-2"><i class="ti ti-point-filled text-info fs-16"></i></span>
                                        <a href="countries.html"
                                            class="avatar rounded-circle flex-shrink-0 border border-2">
                                            <img src="assets/img/payment-gateway/country-05.svg"
                                                class="img-fluid rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium text-truncate mb-1"><a href="countries.html">Norway</a>
                                            </h6>
                                            <span class="fs-13 text-truncate">Leads : 221</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="me-2"><i class="ti ti-point-filled text-danger fs-16"></i></span>
                                        <a href="countries.html"
                                            class="avatar rounded-circle flex-shrink-0 border border-2">
                                            <img src="assets/img/payment-gateway/country-01.svg"
                                                class="img-fluid rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium text-truncate mb-1"><a href="countries.html">USA</a></h6>
                                            <span class="fs-13 text-truncate">Leads : 350</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="me-2"><i class="ti ti-point-filled text-warning fs-16"></i></span>
                                        <a href="countries.html"
                                            class="avatar rounded-circle flex-shrink-0 border border-2">
                                            <img src="assets/img/payment-gateway/country-02.svg"
                                                class="img-fluid rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium text-truncate mb-1"><a href="countries.html">UAE</a></h6>
                                            <span class="fs-13 text-truncate">Leads : 221</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-sm-6">
                                <div id="donut-chart-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 d-flex">
                <div class="card flex-fill">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                        <h5>Recent Leads</h5>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="leads.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap dashboard-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Lead Name</th>
                                        <th>Company Name</th>
                                        <th>Stage</th>
                                        <th>Created Date</th>
                                        <th>Lead Owner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="leads-details.html">Collins</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html" class="avatar border rounded-circle">
                                                    <img src="assets/img/company/company-01.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">BrightWave
                                                            Innovations</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-secondary d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Contacted
                                            </span>
                                        </td>
                                        <td>
                                            14 Jan 2024
                                        </td>
                                        <td>Hendry</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="leads-details.html">Konopelski</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html" class="avatar border rounded-circle">
                                                    <img src="assets/img/company/company-02.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Stellar
                                                            Dynamics</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Closed
                                            </span>
                                        </td>
                                        <td>
                                            21 Jan 2024
                                        </td>
                                        <td>Guilory</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="leads-details.html">Adams</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html" class="avatar border rounded-circle">
                                                    <img src="assets/img/company/company-03.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Quantum Nexus</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Lost
                                            </span>
                                        </td>
                                        <td>
                                            20 Feb 2024
                                        </td>
                                        <td>Jami</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="leads-details.html">Schumm</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html" class="avatar border rounded-circle">
                                                    <img src="assets/img/company/company-04.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">EcoVision
                                                            Enterprises</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-purple d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Not Contacted
                                            </span>
                                        </td>
                                        <td>
                                            15 Mar 2024
                                        </td>
                                        <td>Theresa</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="fw-medium"><a href="leads-details.html">Wisozk</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html" class="avatar border rounded-circle">
                                                    <img src="assets/img/company/company-05.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Aurora
                                                            Technologies</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Closed
                                            </span>
                                        </td>
                                        <td>
                                            12 Apr 2024
                                        </td>
                                        <td>Smith</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

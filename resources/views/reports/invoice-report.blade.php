@extends('layouts.master', [
    'title' => 'Invoice Report',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Invoice Report</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            HR
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice Report</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
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
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row">

            <!-- Total Exponses -->
            <div class="col-xl-7 d-flex">
                <div class="row flex-fill">
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Total
                                                Invoice</span>
                                            <h5>600</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge-warning">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Partially
                                                Paid</span>
                                            <h5>80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge-success">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Paid
                                                Invoices</span>
                                            <h5>450</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge-purple">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Overdue
                                                Invoices</span>
                                            <h5>40</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge-danger">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Unpaid
                                                Invoices</span>
                                            <h5>150</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card invoice-report  flex-fill">
                            <span class="invoice-report-badge-skyblue">
                            </span>
                            <div class="card-body d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-column overflow-hidden">
                                    <div>
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate mb-1">Revenue</span>
                                            <h5>$25,340</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <span class="badge badge-sm badge-success me-3">+19.01%</span>
                                    <a href="#"
                                        class="avatar avatar-md br-10  bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-file-invoice"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Total Exponses -->

            <!-- Total Exponses -->
            <div class="col-xl-5 d-flex">
                <div class="card flex-fill">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="d-flex align-items-center ">
                                <span class="me-2"><i class="ti ti-chart-area-line text-danger"></i></span>
                                <h5>Expense </h5>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-sm fs-12 btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    This Year
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div id="invoice-report"></div>
                    </div>
                </div>
            </div>
            <!-- /Total Exponses -->
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Invoice List</h5>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="me-3">
                        <div class="input-icon-end position-relative">
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy">
                            <span class="input-icon-addon">
                                <i class="ti ti-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            $0.00 - $00
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$10 - $20</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$20 - $30</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$30 - $40</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Select Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Sent</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Partially
                                    Paid</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                    Added</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                    Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>Invoice ID</th>
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Created Date</th>
                                <th>Due Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-39.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Michael Walker</a></h6>
                                            <span class="fs-12 fw-normal">CEO</span>
                                        </div>
                                    </div>
                                </td>
                                <td>BrightWave Innovations</td>
                                <td>
                                    14 Jan 2024
                                </td>
                                <td>
                                    15 Jan 2024
                                </td>
                                <td>
                                    $3000
                                </td>
                                <td>
                                    <span class="badge badge-success-transparent">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-002
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-40.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Sophie Headrick</a></h6>
                                            <span class="fs-12 fw-normal">Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Stellar Dynamics</td>
                                <td>
                                    21 Jan 2024
                                </td>
                                <td>
                                    25 Jan 2024
                                </td>
                                <td>
                                    $2500
                                </td>
                                <td>
                                    <span class="badge badge-purple-transparent">Sent</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-003
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-41.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Cameron Drake</a></h6>
                                            <span class="fs-12 fw-normal">Director</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Quantum Nexus</td>
                                <td>
                                    20 Feb 2024
                                </td>
                                <td>
                                    22 Feb 2024
                                </td>
                                <td>
                                    $2800
                                </td>
                                <td>
                                    <span class="badge badge-warning-transparent">Partially Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-004
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-42.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Doris Crowley</a></h6>
                                            <span class="fs-12 fw-normal">Consultant</span>
                                        </div>
                                    </div>
                                </td>
                                <td>EcoVision Enterprises</td>
                                <td>
                                    15 Mar 2024
                                </td>
                                <td>
                                    17 Mar 2024
                                </td>
                                <td>
                                    $3300
                                </td>
                                <td>
                                    <span class="badge badge-purple-transparent">Sent</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-005
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-43.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Thomas Bordelon</a></h6>
                                            <span class="fs-12 fw-normal">Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Aurora Technologies</td>
                                <td>
                                    12 Apr 2024
                                </td>
                                <td>
                                    16 Apr 2024
                                </td>
                                <td>
                                    $3600
                                </td>
                                <td>
                                    <span class="badge badge-success-transparent">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-006
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-44.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Kathleen Gutierrez</a>
                                            </h6>
                                            <span class="fs-12 fw-normal">Director</span>
                                        </div>
                                    </div>
                                </td>
                                <td>BlueSky Ventures</td>
                                <td>
                                    20 Apr 2024
                                </td>
                                <td>
                                    21 Apr 2024
                                </td>
                                <td>
                                    $2000
                                </td>
                                <td>
                                    <span class="badge badge-warning-transparent">Partially Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-007
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-45.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Bruce Wright</a></h6>
                                            <span class="fs-12 fw-normal">CEO</span>
                                        </div>
                                    </div>
                                </td>
                                <td>TerraFusion Energy</td>
                                <td>
                                    06 Jul 2024
                                </td>
                                <td>
                                    06 Jul 2024
                                </td>
                                <td>
                                    $3400
                                </td>
                                <td>
                                    <span class="badge badge-purple-transparent">Sent</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-008
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-46.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Estelle Morgan</a></h6>
                                            <span class="fs-12 fw-normal">Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>UrbanPulse Design</td>
                                <td>
                                    02 Sep 2024
                                </td>
                                <td>
                                    04 Sep 2024
                                </td>
                                <td>
                                    $4000
                                </td>
                                <td>
                                    <span class="badge badge-success-transparent">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-009
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-47.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephen Dias</a></h6>
                                            <span class="fs-12 fw-normal">CEO</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Nimbus Networks</td>
                                <td>
                                    15 Nov 2024
                                </td>
                                <td>
                                    15 Nov 2024
                                </td>
                                <td>
                                    $4500
                                </td>
                                <td>
                                    <span class="badge badge-warning-transparent">Partially Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    Inv-010
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-48.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Angela Thomas</a></h6>
                                            <span class="fs-12 fw-normal">Consultant</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Epicurean Delights</td>
                                <td>
                                    10 Dec 2024
                                </td>
                                <td>
                                    11 Dec 2024
                                </td>
                                <td>
                                    $3800
                                </td>
                                <td>
                                    <span class="badge badge-success-transparent">Paid</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

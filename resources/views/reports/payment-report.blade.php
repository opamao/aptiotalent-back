@extends('layouts.master', [
    'title' => 'Payment Report',
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
                <h2 class="mb-1">Payment Report</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            HR
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Payment Report</li>
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
            <div class="col-xl-6 d-flex">
                <div class="row flex-fill">
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body ">
                                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom pb-2">
                                    <div class="d-flex align-items-center flex-column overflow-hidden">
                                        <div>
                                            <div>
                                                <span class="fs-14 fw-normal text-truncate mb-1">Total
                                                    Payments</span>
                                                <h5>$45,221,45</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="#"
                                            class="avatar avatar-md br-5 payment-report-icon  bg-transparent-primary border border-primary">
                                            <span class="text-primary"><i class="ti ti-currency-dollar"></i></span>
                                        </a>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate"><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span>from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body ">
                                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom pb-2">
                                    <div class="d-flex align-items-center flex-column overflow-hidden">
                                        <div>
                                            <div>
                                                <span class="fs-14 fw-normal text-truncate mb-1">Pending
                                                    Payments</span>
                                                <h5>$45,221,45</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="#"
                                            class="avatar avatar-md br-5 payment-report-icon  bg-transparent-skyblue border border-skyblue">
                                            <span class="text-skyblue"><i class="ti ti-currency-dollar"></i></span>
                                        </a>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate"><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span> from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body ">
                                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom pb-2">
                                    <div class="d-flex align-items-center flex-column overflow-hidden">
                                        <div>
                                            <div>
                                                <span class="fs-14 fw-normal text-truncate mb-1">Failed
                                                    Payments</span>
                                                <h5>$10,470</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="#"
                                            class="avatar avatar-md br-5 payment-report-icon  bg-transparent-danger border border-danger">
                                            <span class="text-danger"><i class="ti ti-currency-dollar"></i></span>
                                        </a>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate"><span
                                            class="text-danger fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span> from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body ">
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between border-bottom pb-2">
                                    <div class="d-flex align-items-center flex-column overflow-hidden">
                                        <div>
                                            <div>
                                                <span class="fs-14 fw-normal text-truncate mb-1">Payment
                                                    Success
                                                    Rate</span>
                                                <h5>90%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="#"
                                            class="avatar avatar-md br-5 payment-report-icon  bg-pink-transparent border border-pink">
                                            <span class="text-pink"><i class="ti ti-currency-dollar"></i></span>
                                        </a>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate"><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span> from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Total Exponses -->

            <!-- Total Exponses -->
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header border-0">
                        <div class="d-flex flex-wrap row-gap-2 justify-content-between align-items-center">
                            <div class="d-flex align-items-center ">
                                <span class="me-2"><i class="ti ti-chart-donut text-danger"></i></span>
                                <h5>Payments By Payment Methods </h5>
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
                    <div class="card-body d-flex align-items-center justify-content-between pt-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative payment-total">
                                    <div id="payment-report"></div>
                                    <div class="payment-total-content ">
                                        <span class="display-3 fs-24 fw-bold text-skyblue">+14%</span>
                                        <p class="fs-16 fw-normal">vs last year</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <h6 class="fs-16 text-gray-5 fw-normal side-badge mb-1">Paypal</h6>
                                        <h5 class="fs-20 fw-bold">$54,071 </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="fs-16 text-gray-5 fw-normal side-badge-pink mb-1"> Debit
                                            Card</h6>
                                        <h5 class="fs-20 fw-bold">$54,071 </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="fs-16 text-gray-5 fw-normal side-badge-purple mb-1"> Bank
                                            Transfer</h6>
                                        <h5 class="fs-20 fw-bold">$32,210 </h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="fs-16 text-gray-5 fw-normal side-badge-warning mb-1">
                                            Credit Card</h6>
                                        <h5 class="fs-20 fw-bold">$32,210 </h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /Total Exponses -->


        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Payment List</h5>
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
                            Payment Type
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Paypal</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Cash</a>
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
                                <th>Payment Type</th>
                                <th>Paid Date</th>
                                <th>Paid Amount</th>
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
                                    <a href="invoice-details.html" class="link-default">Inv-001</a>
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
                                    Paypal
                                </td>
                                <td>
                                    15 Jan 2024
                                </td>
                                <td>
                                    $3000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-002</a>
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
                                    Paypal
                                </td>
                                <td>
                                    25 Jan 2024
                                </td>
                                <td>
                                    $2500
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-003</a>
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
                                    Paypal
                                </td>
                                <td>
                                    22 Feb 2024
                                </td>
                                <td>
                                    $2800
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-004</a>
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
                                    Paypal
                                </td>
                                <td>
                                    15 Mar 2024
                                </td>
                                <td>
                                    $3300
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-005</a>
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
                                    Paypal
                                </td>
                                <td>
                                    16 Apr 2024
                                </td>
                                <td>
                                    $3600
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-006</a>
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
                                    Paypal
                                </td>
                                <td>
                                    21 Apr 2024
                                </td>
                                <td>
                                    $2000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-007</a>
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
                                    Paypal
                                </td>
                                <td>
                                    06 Jul 2024
                                </td>
                                <td>
                                    $3400
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-008</a>
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
                                    Paypal
                                </td>
                                <td>
                                    04 Sep 2024
                                </td>
                                <td>
                                    $4000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-009</a>
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
                                    Paypal
                                </td>
                                <td>
                                    15 Nov 2024
                                </td>
                                <td>
                                    $4500
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="invoice-details.html" class="link-default">Inv-010</a>
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
                                    Paypal
                                </td>
                                <td>
                                    11 Dec 2024
                                </td>
                                <td>
                                    $3800
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

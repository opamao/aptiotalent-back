@extends('layouts.master', [
    'title' => 'Payslip Report',
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
                <h2 class="mb-1">Payslip Report</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            HR
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Payslip Report</li>
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
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
                                    <div class="">
                                        <span class="fs-14 fw-normal text-truncate mb-1">Total Payroll</span>
                                        <h5>$250,000</h5>
                                    </div>
                                    <a href="#"
                                        class="avatar avatar-md avatar-rounded bg-transparent-primary border border-primary">
                                        <span class="text-primary"><i class="ti ti-brand-shopee"></i></span>
                                    </a>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+20.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
                                    <div class="">
                                        <span class="fs-14 fw-normal text-truncate mb-1">Deductions</span>
                                        <h5>$50,000</h5>
                                    </div>
                                    <a href="#"
                                        class="avatar avatar-md avatar-rounded bg-transparent-danger border border-danger">
                                        <span class="text-danger"><i class="ti ti-brand-shopee"></i></span>
                                    </a>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+17.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
                                    <div class="">
                                        <span class="fs-14 fw-normal text-truncate mb-1">Net Pay</span>
                                        <h5>$200,000</h5>
                                    </div>
                                    <a href="#"
                                        class="avatar avatar-md avatar-rounded bg-transparent-success border border-success">
                                        <span class="text-success"><i class="ti ti-brand-shopee"></i></span>
                                    </a>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+10.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
                                    <div class="">
                                        <span class="fs-14 fw-normal text-truncate mb-1">Allowances</span>
                                        <h5>$30,000</h5>
                                    </div>
                                    <a href="#"
                                        class="avatar avatar-md avatar-rounded bg-transparent-skyblue border border-skyblue">
                                        <span class="text-skyblue"><i class="ti ti-brand-shopee"></i></span>
                                    </a>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-danger fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>-10.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Exponses -->

            <!-- Total Exponses -->
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="d-flex align-items-center ">
                                <span class="me-2"><i class="ti ti-chart-area-line text-danger"></i></span>
                                <h5>Payroll</h5>
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
                        <div id="payslip-chart"></div>
                    </div>
                </div>
            </div>
            <!-- /Total Exponses -->


        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Payslip List</h5>
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
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$3800</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$4500</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$3400</a>
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
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Cash</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Cheque</a>
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
                                <th>Name</th>
                                <th>Paid Amount</th>
                                <th>Paid Month</th>
                                <th>Paid Year</th>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-32.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Anthony Lewis</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$3000</td>
                                <td>$3000</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-09.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Brian Villalobos</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$2500</td>
                                <td>$2500</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-37.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Connie Waters</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$2800</td>
                                <td>$2800</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-33.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Doglas Martini</a></p>
                                            <span class="fs-12">Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$3300</td>
                                <td>$3300</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-35.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Elliot Murray</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$3600</td>
                                <td>$3600</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-01.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Harvey Smith</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$2000</td>
                                <td>$2000</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-02.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Linda Ray</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$3400</td>
                                <td>$3400</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-38.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Lori Broaddus</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$4000</td>
                                <td>$4000</td>
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
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-36.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Rebecca Smtih</a></p>
                                            <span class="fs-12">Executive</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$4500</td>
                                <td>$4500</td>
                                <td>
                                    $4500
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

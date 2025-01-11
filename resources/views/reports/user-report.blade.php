@extends('layouts.master', [
    'title' => 'User report',
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
                <h2 class="mb-1">User Report</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            HR
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Report</li>
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
            <div class="col-xl-6 d-flex">
                <div class="row flex-fill">
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fs-12 fw-medium mb-1 text-truncate">Total Users</p>
                                            <h4>800</h4>
                                        </div>
                                    </div>
                                    <div class="leave-report-icon">
                                        <a href="#">
                                            <span
                                                class="p-2 border border-primary bg-transparent-primary rounded-3 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-user text-primary"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+20.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fs-12 fw-medium mb-1 text-truncate">Active Users</p>
                                            <h4>750</h4>
                                        </div>
                                    </div>
                                    <div class="leave-report-icon">
                                        <a href="#">
                                            <span
                                                class="p-2 border border-success bg-transparent-success rounded-3 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-user-check text-success"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+17.02%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fs-12 fw-medium mb-1 text-truncate">New Users</p>
                                            <h4>100</h4>
                                        </div>
                                    </div>
                                    <div class="leave-report-icon">
                                        <a href="#">
                                            <span
                                                class="p-2 border border-skyblue bg-transparent-skyblue rounded-3 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-user-up text-skyblue"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-12 fw-normal d-flex align-items-center text-truncate">
                                    <span class="text-success fs-12 d-flex align-items-center me-1">
                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+10.01%
                                    </span> from last week
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fs-12 fw-medium mb-1 text-truncate">Inactive Users</p>
                                            <h4>50</h4>
                                        </div>
                                    </div>
                                    <div class="leave-report-icon">
                                        <a href="#">
                                            <span
                                                class="p-2 border border-danger bg-transparent-danger rounded-3 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-user-pause text-danger"></i>
                                            </span>
                                        </a>
                                    </div>
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
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="d-flex align-items-center ">
                                <span class="me-2"><i class="ti ti-chart-bar text-danger"></i></span>
                                <h5>Users</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="d-inline-flex align-items-center me-2 mb-0">
                                    <i class="ti ti-square-filled fs-12 text-success me-2"></i>
                                    Active Users
                                </p>
                                <p class="d-inline-flex align-items-center mb-0 me-2">
                                    <i class="ti ti-square-filled fs-12 text-light me-2"></i>
                                    Inactive Users
                                </p>
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
                        <div id="user-chart"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Users List</h5>
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
                            Role
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Employee</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Client</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
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
                                <th>Email</th>
                                <th>Created Date</th>
                                <th>Role</th>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-32.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>anthony@example.com</td>
                                <td>12 Sep 2024</td>
                                <td>
                                    <span class="badge badge-pink-transparent d-inline-flex align-items-center badge-xs">
                                        Employee
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Brian Villalobos</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>brian@example.com</td>
                                <td>24 Oct 2024</td>
                                <td>
                                    <span class="badge badge-pink-transparent d-inline-flex align-items-center badge-xs">
                                        Employee
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-40.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Sophie Headrick</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>sophie@example.com</td>
                                <td>18 Feb 2024</td>
                                <td>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center badge-xs">
                                        Client
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>peral@example.com</td>
                                <td>17 Oct 2024</td>
                                <td>
                                    <span class="badge badge-pink-transparent d-inline-flex align-items-center badge-xs">
                                        Employee
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-44.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Thomas Bordelon</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>thomas@example.com</td>
                                <td>20 Jul 2024</td>
                                <td>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center badge-xs">
                                        Client
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>martniwr@example.com</td>
                                <td>10 Apr 2024</td>
                                <td>
                                    <span class="badge badge-pink-transparent d-inline-flex align-items-center badge-xs">
                                        Employee
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-41.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Cameron Drake</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>cameron@example.com</td>
                                <td>29 Aug 2024</td>
                                <td>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center badge-xs">
                                        Client
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-01.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>harvey@example.com</td>
                                <td>22 Feb 2024</td>
                                <td>
                                    <span class="badge badge-pink-transparent d-inline-flex align-items-center badge-xs">
                                        Employee
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Inactive
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-39.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Michael Walker</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>michael@example.com</td>
                                <td>03 Nov 2024</td>
                                <td>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center badge-xs">
                                        Client
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-42.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Doris Crowley</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>doris@example.com</td>
                                <td>17 Dec 2024</td>
                                <td>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center badge-xs">
                                        Client
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

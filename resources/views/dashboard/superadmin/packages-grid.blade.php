@extends('layouts.master', [
    'title' => 'Packages Grid',
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
                <h2 class="mb-1">Packages</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Superadmin
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Packages List</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                        <a href="packages.html" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
                        <a href="packages-grid.html" class="btn btn-icon btn-sm bg-primary text-white active"><i
                                class="ti ti-layout-grid"></i></a>
                    </div>
                </div>
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
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_plans"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Plan</a>
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

            <!-- Total Plans -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <div>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Total Plans</p>
                                <h4>08</h4>
                            </div>
                        </div>
                        <div>
                            <span class="avatar avatar-lg bg-primary flex-shrink-0">
                                <i class="ti ti-box fs-16"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Plans -->

            <!-- Total Plans -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <div>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Active Plans</p>
                                <h4>08</h4>
                            </div>
                        </div>
                        <div>
                            <span class="avatar avatar-lg bg-success flex-shrink-0">
                                <i class="ti ti-activity-heartbeat fs-16"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Plans -->

            <!-- Inactive Plans -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <div>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Inactive Plans</p>
                                <h4>0</h4>
                            </div>
                        </div>
                        <div>
                            <span class="avatar avatar-lg bg-danger flex-shrink-0">
                                <i class="ti ti-player-pause fs-16"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Inactive Companies -->

            <!-- No of Plans  -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <div>
                                <p class="fs-12 fw-medium mb-1 text-truncate">No of Plan Types</p>
                                <h4>02</h4>
                            </div>
                        </div>
                        <div>
                            <span class="avatar avatar-lg bg-skyblue flex-shrink-0">
                                <i class="ti ti-mask fs-16"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /No of Plans -->

        </div>

        <div class="card">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h5>Plans List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Select Plan
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Basic</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Advanced</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Premium</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Enterprise</a>
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
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                        Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                        Days</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <p class="mb-0 me-2">Monthly</p>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    </div>
                    <p>Yearly</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Basic</h4>
                                        <h1>$50<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                    </div>
                                </div>
                                <div class="pricing-content rounded bg-light mb-3">
                                    <div class="price-hdr">
                                        <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                    </div>
                                    <div>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>10
                                            Employees</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>50
                                            Projects</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>50
                                            Clients</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>50
                                            GB Storage</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-circle-x-filled text-danger me-2"></i>Voice &
                                            Video Chat</span>
                                        <span class="text-dark d-flex align-items-center"><i
                                                class="ti ti-circle-x-filled text-danger me-2"></i>CRM</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Advanced</h4>
                                        <h1>$200<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                    </div>
                                </div>
                                <div class="pricing-content rounded bg-light mb-3">
                                    <div class="price-hdr">
                                        <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                    </div>
                                    <div>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>50
                                            Employees</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>100
                                            Projects</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>100
                                            Clients</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>50
                                            GB Storage</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Voice
                                            & Video Chat</span>
                                        <span class="text-dark d-flex align-items-center"><i
                                                class="ti ti-circle-x-filled text-danger me-2"></i>CRM</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Premium</h4>
                                        <h1>$300<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                    </div>
                                </div>
                                <div class="pricing-content rounded bg-light mb-3">
                                    <div class="price-hdr">
                                        <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                    </div>
                                    <div>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>100
                                            Employees</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>200
                                            Projects</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>100
                                            Clients</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>100
                                            GB Storage</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Voice
                                            & Video Chat</span>
                                        <span class="text-dark d-flex align-items-center"><i
                                                class="ti ti-circle-x-filled text-danger me-2"></i>CRM</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Enterprise</h4>
                                        <h1>$400<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                    </div>
                                </div>
                                <div class="pricing-content rounded bg-light mb-3">
                                    <div class="price-hdr">
                                        <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                    </div>
                                    <div>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Unlimited
                                            Employees</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Unlimited
                                            Clients</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Unlimited
                                            Projects</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Unlimited
                                            Storage</span>
                                        <span class="text-dark d-flex align-items-center mb-3"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>Voice
                                            & Video Chat</span>
                                        <span class="text-dark d-flex align-items-center"><i
                                                class="ti ti-discount-check-filled text-success me-2"></i>CRM</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Plan -->
    <div class="modal fade" id="add_plans">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Plan</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="packages-grid.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                        <img src="assets/img/profiles/avatar-30.jpg" alt="img"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-upload">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Upload Profile Image</h6>
                                            <p class="fs-12">Image should be below 4 mb</p>
                                        </div>
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Name<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Advanced</option>
                                        <option>Basic</option>
                                        <option>Enterprise</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Type<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Position<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Currency<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>USD</option>
                                        <option>EURO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label">Plan Currency <span class="text-danger">
                                                *</span></label>
                                        <span class="text-primary"><i class="fa-solid fa-circle-exclamation me-2"></i>Set
                                            0 for
                                            free</span>
                                    </div>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Fixed</option>
                                        <option>Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 ">
                                    <label class="form-label">Discount Type<span class="text-danger">
                                            *</span></label>
                                    <div class="pass-group">
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Fixed</option>
                                            <option>Percentage</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 ">
                                    <label class="form-label">Discount<span class="text-danger">
                                            *</span></label>
                                    <div class="pass-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Limitations Invoices</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Max Customers</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Product</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Supplier</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Plan Modules</h6>
                                    <div class="form-check form-check-md d-flex align-items-center">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Select All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Employees
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Invoices
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Reports
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Contacts
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Clients
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Estimates
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Goals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Deals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Projects
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Payments
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Assets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Leads
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Tickets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Taxes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Activities
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Pipelines
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 me-2 text-dark fw-medium">
                                            Access Trial
                                        </label>
                                        <div class="form-check form-check-md form-switch me-2">
                                            <input class="form-check-input me-2" type="checkbox" role="switch">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center gx-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill">
                                            <label class="form-label">Trial Days</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-block align-items-center ms-3">
                                        <label class="form-check-label mt-0 me-2 text-dark">
                                            Is Recommended
                                        </label>
                                        <div class="form-check form-check-md form-switch me-2">
                                            <input class="form-check-input me-2" type="checkbox" role="switch">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3 ">
                                        <label class="form-label">Status<span class="text-danger">
                                                *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Plan -->

    <!-- Edit Plan -->
    <div class="modal fade" id="edit_plans">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Plan</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="packages-grid.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                        <img src="assets/img/profiles/avatar-30.jpg" alt="img"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-upload">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Upload Profile Image</h6>
                                            <p class="fs-12">Image should be below 4 mb</p>
                                        </div>
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Name<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Advanced</option>
                                        <option>Basic</option>
                                        <option>Enterprise</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Type<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Position<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Currency<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>USD</option>
                                        <option>EURO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label">Plan Currency<span class="text-danger">
                                                *</span></label>
                                        <span class="text-primary"><i class="fa-solid fa-circle-exclamation me-2"></i>Set
                                            0 for
                                            free</span>
                                    </div>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Fixed</option>
                                        <option>Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 ">
                                    <label class="form-label">Discount Type<span class="text-danger">
                                            *</span></label>
                                    <div class="pass-group">
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Fixed</option>
                                            <option>Percentage</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 ">
                                    <label class="form-label">Discount<span class="text-danger">
                                            *</span></label>
                                    <div class="pass-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Limitations Invoices</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Max Customers</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Product</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Supplier</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6>Plan Modules</h6>
                                    <div class="form-check form-check-md d-flex align-items-center">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Select All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Employees
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Invoices
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Reports
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Contacts
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Clients
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Estimates
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Goals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Deals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Projects
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Payments
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Assets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Leads
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Tickets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Taxes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Activities
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check form-check-md d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Pipelines
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 me-2 text-dark fw-medium">
                                            Access Trial
                                        </label>
                                        <div class="form-check form-check-md form-switch me-2">
                                            <input class="form-check-input me-2" type="checkbox" role="switch">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center gx-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-fill">
                                            <label class="form-label">Trial Days</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-block align-items-center ms-3">
                                        <label class="form-check-label mt-0 me-2 text-dark">
                                            Is Recommended
                                        </label>
                                        <div class="form-check form-check-md form-switch me-2">
                                            <input class="form-check-input me-2" type="checkbox" role="switch">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3 ">
                                        <label class="form-label">Status<span class="text-danger">
                                                *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Plan -->
@endsection

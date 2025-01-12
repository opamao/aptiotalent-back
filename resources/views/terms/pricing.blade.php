@extends('layouts.master', [
    'title' => 'Pricing',
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
                <h2 class="mb-1">Pricing</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Pages
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
                <div class="mb-2">
                    <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                        data-bs-target="#add_plans">
                        <i class="ti ti-circle-plus me-2"></i>Add Plan
                    </a>
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

        <!-- Pricing -->
        <div class="card">
            <div class="card-body pb-1">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <p class="mb-0 me-2">Monthly</p>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    </div>
                    <p>Yearly</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-3">
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
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Professional</h4>
                                        <h1>$100<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
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
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Enterprise</h4>
                                        <h1>$200<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
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
                                                class="ti ti-discount-check-filled text-success me-2"></i>200
                                            Clients</span>
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
        <!-- /Pricing -->

        <!-- Pricing Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Plan Details</h5>
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
                                <th>Plan</th>
                                <th>Plan Type</th>
                                <th>Created Date</th>
                                <th>Modified Date</th>
                                <th>Amount</th>
                                <th>Subscribed Users</th>
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
                                    <h6 class="fw-medium"><a href="#">Basic</a></h6>
                                </td>
                                <td>Monthly</td>
                                <td>14 Jan 2024</td>
                                <td>20 Feb 2024</td>
                                <td>$50</td>
                                <td>30 Users</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Professional</a></h6>
                                </td>
                                <td>Monthly</td>
                                <td>21 Feb 2024</td>
                                <td>11 Mar 2024</td>
                                <td>$100</td>
                                <td>40 Users</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Enterprise</a></h6>
                                </td>
                                <td>Monthly</td>
                                <td>18 Mar 2024</td>
                                <td>05 Apr 2024</td>
                                <td>$200</td>
                                <td>50 Users</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Pricing Table -->
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
                <form action="pricing.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Plan Name <span class="text-danger">
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
                                    <label class="form-label">Plan Type <span class="text-danger">
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
                                    <div class="form-check d-flex align-items-center">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Select All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Employees
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Invoices
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Reports
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Contacts
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Clients
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Estimates
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Goals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Deals
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Projects
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Payments
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Assets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Leads
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Tickets
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Taxes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <label class="form-check-label mt-0 text-dark fw-medium">
                                            <input class="form-check-input" type="checkbox">
                                            Activities
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="form-check d-flex align-items-center mb-3">
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
                                        <div class="form-check form-switch me-2">
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
                                        <div class="form-check form-switch me-2">
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
@endsection

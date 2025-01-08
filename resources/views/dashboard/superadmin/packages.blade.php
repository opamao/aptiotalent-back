@extends('layouts.master', [
    'title' => 'Packages',
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
                        <a href="packages.html" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i
                                class="ti ti-list-tree"></i></a>
                        <a href="{{ url('packages-grid') }}" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
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
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New
                        Plan</a>
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
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Plan List</h5>
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
                            Select Plan
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Monthly</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Yearly</a>
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
                                <th>Plan Name</th>
                                <th>Plan Type</th>
                                <th>Total Subscribers</th>
                                <th>Price</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th></th>
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
                                <td>56</td>
                                <td>$50</td>
                                <td>14 Jan 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Advanced</a></h6>
                                </td>
                                <td>Monthly</td>
                                <td>99</td>
                                <td>$200</td>
                                <td>21 Jan 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Premium</a></h6>
                                </td>
                                <td>Monthly</td>
                                <td>58</td>
                                <td>$300</td>
                                <td>10 Feb 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
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
                                <td>67</td>
                                <td>$400</td>
                                <td>18 Feb 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Basic</a></h6>
                                </td>
                                <td>Yearly</td>
                                <td>78</td>
                                <td>$600</td>
                                <td>15 Mar 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Advanced</a></h6>
                                </td>
                                <td>Yearly</td>
                                <td>99</td>
                                <td>$2400</td>
                                <td>26 Mar 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="fw-medium"><a href="#">Premium</a></h6>
                                </td>
                                <td>Yearly</td>
                                <td>48</td>
                                <td>$3600</td>
                                <td>05 Apr 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
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
                                <td>Yearly</td>
                                <td>17</td>
                                <td>$4800</td>
                                <td>16 Apr 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_plans"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                <form action="packages.html">
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
                <form action="packages.html">
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
                                        <label class="form-check-label mt-0 me-2  text-dark">
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
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Plan -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you
                        delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="packages.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection

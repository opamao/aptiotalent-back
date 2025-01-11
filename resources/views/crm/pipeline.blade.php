@extends('layouts.master', [
    'title' => 'Pipeline',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-colorpicker.js"></script>
    <script src="assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Pipeline</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            CRM
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pipeline List</li>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_pipeline"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                        Pipeline</a>
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

        <!-- Leads List -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Pipeline List</h5>
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
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Stage
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Won</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">In
                                    Pipeline</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Conversation</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Follow Up</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            $0.00 - $0.00
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$10 - $20</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$20 - $30</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">$40 - $50</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Select Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">InActive</a>
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
                                <th>Pipeline Name</th>
                                <th>Total Deal Value</th>
                                <th>No of Deals</th>
                                <th>Stages</th>
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
                                    <h6 class="fs-14 fw-medium">Sales</h6>
                                </td>
                                <td>
                                    $4,50,000
                                </td>
                                <td>315</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Won</span>
                                    </div>
                                </td>
                                <td>14 Jan 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Marketing</h6>
                                </td>
                                <td>
                                    $3,15,000
                                </td>
                                <td>447</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-purple" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">In Pipeline</span>
                                    </div>
                                </td>
                                <td>21 Jan 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Calls</h6>
                                </td>
                                <td>
                                    $8,40,000
                                </td>
                                <td>654</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Won</span>
                                    </div>
                                </td>
                                <td>20 Feb 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Email</h6>
                                </td>
                                <td>
                                    $6,10,000
                                </td>
                                <td>545</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-skyblue" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Conversation</span>
                                    </div>
                                </td>
                                <td>15 Mar 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Chats</h6>
                                </td>
                                <td>
                                    $4,70,000
                                </td>
                                <td>787</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-skyblue" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Won</span>
                                    </div>
                                </td>
                                <td>12 Apr 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Operational</h6>
                                </td>
                                <td>
                                    $5,50,000
                                </td>
                                <td>787</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-warning" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Follow Up</span>
                                    </div>
                                </td>
                                <td>20 Apr 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Collabrative</h6>
                                </td>
                                <td>
                                    $5,00,000
                                </td>
                                <td>315</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Won</span>
                                    </div>
                                </td>
                                <td>06 Jul 2024</td>
                                <td><span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Inactive </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Differentiate</h6>
                                </td>
                                <td>
                                    $4,50,000
                                </td>
                                <td>478</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-pink" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Schedule servise</span>
                                    </div>
                                </td>
                                <td>02 Sep 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Interact</h6>
                                </td>
                                <td>
                                    $6,20,000
                                </td>
                                <td>664</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-success" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Won</span>
                                    </div>
                                </td>
                                <td>15 Nov 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
                                    <h6 class="fs-14 fw-medium">Identify</h6>
                                </td>
                                <td>
                                    $7,40,000
                                </td>
                                <td>128</td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div class="progress me-2" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; min-width: 80px;">
                                            <div class="progress-bar bg-danger" style="width: 100%"></div>
                                        </div>
                                        <span class="fs-14 fw-normal">Lost</span>
                                    </div>
                                </td>
                                <td>10 Dec 2024</td>
                                <td><span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="ti ti-edit"></i></a>
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
        <!-- /Leads List -->

    </div>

    <!-- Add Pipeline -->
    <div class="modal fade" id="add_pipeline">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Pipeline</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="pipeline.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Pipeline Name <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label">Pipeline Stages <span class="text-danger">
                                                *</span></label>
                                        <a href="#" class="add-new text-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add
                                            New</a>
                                    </div>
                                    <div class="p-3 border border-gray br-5 mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Inpipline</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default" data-bs-toggle="modal"
                                                    data-bs-target="#edit_stage"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><span><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-gray br-5 mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Follow Up</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default" data-bs-toggle="modal"
                                                    data-bs-target="#edit_stage"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><span><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-gray br-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Schedule Service</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default" data-bs-toggle="modal"
                                                    data-bs-target="#edit_stage"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default"><span><i class="ti ti-trash"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Access</label>
                                    <div class="d-flex  access-item nav">
                                        <div class="d-flex align-items-center">
                                            <div class="radio-btn d-flex align-items-center " data-bs-toggle="tab"
                                                data-bs-target="#all">
                                                <input type="radio" class="status-radio me-2" id="all"
                                                    name="status" checked>
                                                <label for="all">All</label>
                                            </div>
                                            <div class="radio-btn d-flex align-items-center " data-bs-toggle="tab"
                                                data-bs-target="#select-person">
                                                <input type="radio" class="status-radio me-2" id="select"
                                                    name="status">
                                                <label for="select">Select Person</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="select-person">
                                            <div class="access-wrapper">
                                                <div class="p-3 border border-gray br-5 mb-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center file-name-icon">
                                                            <a href="#"
                                                                class="avatar avatar-md border avatar-rounded">
                                                                <img src="assets/img/profiles/avatar-20.jpg"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                            <div class="ms-2">
                                                                <h6 class="fw-medium"><a href="#">Sharon
                                                                        Roy</a></h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-danger">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border border-gray br-5 mb-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center file-name-icon">
                                                            <a href="#"
                                                                class="avatar avatar-md border avatar-rounded">
                                                                <img src="assets/img/profiles/avatar-21.jpg"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                            <div class="ms-2">
                                                                <h6 class="fw-medium"><a href="#">Sharon
                                                                        Roy</a></h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-danger">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Pipeline</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Pipeline -->

    <!-- Edit Pipeline -->
    <div class="modal fade" id="edit_pipeline">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Pipeline</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="pipeline.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Pipeline Name <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control" value="Marketing">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label">Pipeline Stages <span class="text-danger">
                                                *</span></label>
                                        <a href="#" class="add-new text-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add
                                            New</a>
                                    </div>
                                    <div class="p-3 border border-gray br-5 mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Inpipline</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default"><span><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-gray br-5 mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Follow Up</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default"><span><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-gray br-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><i class="ti ti-grip-vertical"></i></span>
                                                <h6 class="fs-14 fw-normal">Schedule Service</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="text-default"><span class="me-2"><i
                                                            class="ti ti-edit"></i></span></a>
                                                <a href="#" class="text-default"><span><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Access</label>
                                    <div class="d-flex  access-item nav">
                                        <div class="d-flex align-items-center">
                                            <div class="radio-btn d-flex align-items-center " data-bs-toggle="tab"
                                                data-bs-target="#all2">
                                                <input type="radio" class="status-radio me-2" id="all2"
                                                    name="status" checked>
                                                <label for="all2">All</label>
                                            </div>
                                            <div class="radio-btn d-flex align-items-center " data-bs-toggle="tab"
                                                data-bs-target="#select-person2">
                                                <input type="radio" class="status-radio me-2" id="select2"
                                                    name="status">
                                                <label for="select2">Select Person</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="select-person2">
                                            <div class="access-wrapper">
                                                <div class="p-3 border border-gray br-5 mb-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center file-name-icon">
                                                            <a href="#"
                                                                class="avatar avatar-md border avatar-rounded">
                                                                <img src="assets/img/profiles/avatar-20.jpg"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                            <div class="ms-2">
                                                                <h6 class="fw-medium"><a href="#">Sharon
                                                                        Roy</a></h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-danger">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border border-gray br-5 mb-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center file-name-icon">
                                                            <a href="#"
                                                                class="avatar avatar-md border avatar-rounded">
                                                                <img src="assets/img/profiles/avatar-21.jpg"
                                                                    class="img-fluid" alt="img">
                                                            </a>
                                                            <div class="ms-2">
                                                                <h6 class="fw-medium"><a href="#">Sharon
                                                                        Roy</a></h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-danger">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#pipeline-access">Add Pipeline</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pipeline -->

    <!-- Pipeline Access -->
    <div class="modal fade" id="pipeline-access">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pipeline Access</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="pipeline.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-search text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="p-2 border br-5">
                                        <div class="pipeline-access-items">
                                            <div class="d-flex  align-items-center p-2">
                                                <div class="form-check  form-check-md me-2">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="#" class="avatar avatar-md border avatar-rounded">
                                                        <img src="assets/img/profiles/avatar-19.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-12"><a href="#">Darlee
                                                                Robertson</a></h6>
                                                        <span class="fs-10 fw-normal">Darlee Robertson</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-2">
                                                <div class="form-check form-check-md me-2">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="#" class="avatar avatar-md border avatar-rounded">
                                                        <img src="assets/img/profiles/avatar-20.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-12"><a href="#">Sharon
                                                                Roy</a></h6>
                                                        <span class="fs-10 fw-normal">Installer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-2">
                                                <div class="form-check form-check-md me-2">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="#" class="avatar avatar-md border avatar-rounded">
                                                        <img src="assets/img/profiles/avatar-21.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-12"><a href="#">Vaughan
                                                                Lewis</a></h6>
                                                        <span class="fs-10 fw-normal">Senior Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-2">
                                                <div class="form-check form-check-md me-2">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="#" class="avatar avatar-md border avatar-rounded">
                                                        <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-12"><a href="#">Jessica
                                                                Louise</a></h6>
                                                        <span class="fs-10 fw-normal">Test Engineer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-2">
                                                <div class="form-check form-check-md me-2">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                                <div class="d-flex align-items-center file-name-icon">
                                                    <a href="#" class="avatar avatar-md border avatar-rounded">
                                                        <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                            alt="img">
                                                    </a>
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-12"><a href="#">Test
                                                                Engineer</a></h6>
                                                        <span class="fs-10 fw-normal">UI /UX Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Pipeline Access -->

    <!-- Add New Stage -->
    <div class="modal fade" id="add_stage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Stage</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="pipeline.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Stage Name <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Stage</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Stage -->

    <!-- Edit Stage -->
    <div class="modal fade" id="edit_stage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Stage</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="pipeline.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Edit Name <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control" value="Inpipeline">
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
    <!-- /Edit Stage -->

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
                        <a href="pipeline.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection

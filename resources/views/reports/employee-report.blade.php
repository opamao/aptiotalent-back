@extends('layouts.master', [
    'title' => 'Employe Report',
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

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

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
                <h2 class="mb-1">Employee Report</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            HR
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Employee Report</li>
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

                    <!-- Total Companies -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="overflow-hidden d-flex mb-2 align-items-center">
                                    <span class="me-2"><img src="assets/img/reports-img/employee-report-icon.svg"
                                            alt="Img" class="img-fluid"></span>
                                    <div>
                                        <p class="fs-14 fw-normal mb-1 text-truncate">Total Employee</p>
                                        <h5>600</h5>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate "><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span>from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Companies -->

                    <!-- Total Companies -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="overflow-hidden d-flex mb-2 align-items-center">
                                    <span class="me-2"><img src="assets/img/reports-img/employee-report-success.svg"
                                            alt="Img" class="img-fluid"></span>
                                    <div>
                                        <p class="fs-14 fw-normal mb-1 text-truncate">Active Employee</p>
                                        <h5>600</h5>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate "><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span>from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Companies -->

                    <!-- Inactive Companies -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="overflow-hidden d-flex mb-2 align-items-center">
                                    <span class="me-2"><img src="assets/img/reports-img/employee-report-info.svg"
                                            alt="Img" class="img-fluid"></span>
                                    <div>
                                        <p class="fs-14 fw-normal mb-1 text-truncate">New Employee</p>
                                        <h5>600</h5>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate "><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span>from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Inactive Companies -->

                    <!-- Company Location -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="overflow-hidden d-flex mb-2 align-items-center">
                                    <span class="me-2"><img src="assets/img/reports-img/employee-report-danger.svg"
                                            alt="Img" class="img-fluid"></span>
                                    <div>
                                        <p class="fs-14 fw-normal mb-1 text-truncate">Inactive Employee</p>
                                        <h5>600</h5>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-12 fw-normal d-flex align-items-center text-truncate "><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+20.01%</span>from
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Company Location -->
                </div>
            </div>
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex flex-wrap justify-content-between align-items-center row-gap-2">
                            <div class="d-flex align-items-center ">
                                <span class="me-2"><i class="ti ti-chart-bar text-danger"></i></span>
                                <h5>Employee </h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="d-inline-flex align-items-center me-3 mb-0">
                                    <i class="ti ti-square-filled fs-12 text-success me-2"></i>
                                    Active Employees
                                </p>
                                <p class="d-inline-flex align-items-center">
                                    <i class="ti ti-square-filled fs-12 text-gray-1 me-2 mb-0"></i>
                                    Inactive Employees
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
                        <div id="employee-reports"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Employees List</h5>
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
                            Designation
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Present</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Absent</a>
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
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Phone</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-001</a></td>
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
                                <td>anthony@example.com</td>
                                <td>Finance</td>
                                <td>(123) 4567 890</td>
                                <td>12 Sep 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-002</a></td>
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
                                <td>brian@example.com</td>
                                <td>Application Development</td>
                                <td>(179) 7382 829</td>
                                <td>24 Oct 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-003</a></td>
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
                                <td>harvey@example.com</td>
                                <td>IT Management</td>
                                <td>(184) 2719 738</td>
                                <td>18 Feb 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-004</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal"
                                            data-bs-target="#view_details"><img src="assets/img/users/user-33.jpg"
                                                class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Stephan Peralt</a></p>
                                            <span class="fs-12">Executive Officer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>peral@example.com</td>
                                <td>Web Development</td>
                                <td>(193) 7839 748</td>
                                <td>17 Oct 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-005</a></td>
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
                                <td>martniwr@example.com</td>
                                <td>Sales</td>
                                <td>(183) 9302 890</td>
                                <td>20 Jul 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-006</a></td>
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
                                <td>ray456@example.com</td>
                                <td>UI / UX</td>
                                <td>(120) 3728 039</td>
                                <td>10 Apr 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-007</a></td>
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
                                <td>murray@example.com</td>
                                <td>Account Management</td>
                                <td>(102) 8480 832</td>
                                <td>29 Aug 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-008</a></td>
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
                                <td>smtih@example.com</td>
                                <td>Marketing</td>
                                <td>(162) 8920 713</td>
                                <td>22 Feb 2024</td>
                                <td>
                                    <span class="badge badge-danger d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>Inactive
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-009</a></td>
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
                                <td>connie@example.com</td>
                                <td>Administration</td>
                                <td>(189) 0920 723</td>
                                <td>03 Nov 2024</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="employee-details.html" class="link-default">Emp-010</a></td>
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
                                <td>broaddus@example.com</td>
                                <td>Business Development</td>
                                <td>(168) 8392 823</td>
                                <td>17 Dec 2024</td>
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

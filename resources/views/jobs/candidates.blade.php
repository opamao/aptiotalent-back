@extends('layouts.master', [
    'title' => 'Candidates',
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
                <h2 class="mb-1">Candidates List</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Candidates List</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
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
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Candidates List</h5>
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
                            Role
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Accountant</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Accountant</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Technician</a>
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
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Accepted</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">sent</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Expired</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Declined</a>
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
                                <th>Cand ID</th>
                                <th>Candidate</th>
                                <th>Applied Role</th>
                                <th>Phone</th>
                                <th>Applied Date</th>
                                <th>Resume</th>
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
                                <td>Cand-001</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-01.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Harold Gaynor</a></h6>
                                            <span class="d-block mt-1">harold@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Accountant</td>
                                <td>(146) 8964 278</td>
                                <td>12 Sep 2024 </td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-purple text-purple"><i
                                            class="ti ti-point-filled"></i>Sent</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                            data-bs-target="#candidate_details"><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-002</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Sandra Ornellas</a></h6>
                                            <span class="d-block mt-1">sandra@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>App Developer</td>
                                <td>(148) 9648 218</td>
                                <td>24 Oct 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-pink text-pink"><i
                                            class="ti ti-point-filled"></i>Scheduled</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-003</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">John Harris</a></h6>
                                            <span class="d-block mt-1">john@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Technician</td>
                                <td>(196) 2348 947</td>
                                <td>18 Feb 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-info text-info"><i
                                            class="ti ti-point-filled"></i>Interviewed</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-004</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-26.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Carole Langan</a></h6>
                                            <span class="d-block mt-1">carole@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Web Developer</td>
                                <td>(138) 6487 295</td>
                                <td>17 Oct 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-warning text-warning"><i
                                            class="ti ti-point-filled"></i>Offered</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-005</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-39.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Charles Marks</a></h6>
                                            <span class="d-block mt-1">charles@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Sales Executive Officer</td>
                                <td>(154) 6485 218</td>
                                <td>20 Jul 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-success text-success"><i
                                            class="ti ti-point-filled"></i>Hired</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-006</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-24.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Kerry Drake</a></h6>
                                            <span class="d-block mt-1">kerry@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>(185) 5947 097</td>
                                <td>20 Jul 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-danger text-danger"><i
                                            class="ti ti-point-filled"></i>Rejected</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-007</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">David Carmona</a></h6>
                                            <span class="d-block mt-1">david@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Account Manager</td>
                                <td>(106) 3485 978</td>
                                <td>29 Aug 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-success text-success"><i
                                            class="ti ti-point-filled"></i>Hired</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-008</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-10.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Margaret Soto</a></h6>
                                            <span class="d-block mt-1">margaret@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>SEO Analyst</td>
                                <td>(174) 3795 107</td>
                                <td>22 Feb 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-pink text-pink"><i
                                            class="ti ti-point-filled"></i>Scheduled</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-009</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-11.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Jeffrey Thaler</a></h6>
                                            <span class="d-block mt-1">jeffrey@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Admin</td>
                                <td>(128) 0975 348</td>
                                <td>03 Nov 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-purple text-purple"><i
                                            class="ti ti-point-filled"></i>App Received</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Cand-010</td>
                                <td>

                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md ">
                                            <img src="assets/img/users/user-57.jpg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Joyce Golston</a></h6>
                                            <span class="d-block mt-1">joyce@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Business Analyst</td>
                                <td>(132) 1876 304</td>
                                <td>17 Dec 2024</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-gray me-2 fs-16"><i
                                                class="ti ti-file-text"></i></a>
                                        <a href="#" class="text-gray fs-16"><i class="ti ti-download"></i></a>
                                    </div>
                                </td>

                                <td><span class="badge border border-success text-success"><i
                                            class="ti ti-point-filled"></i>Hired</span></td>
                                <td>
                                    <div class="action-icon d-inline-flex">

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
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
                        <a href="candidates.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

    		<!-- Candidate Details -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="candidate_details">
			<div class="offcanvas-header border-bottom">
				<h4 class="d-flex align-items-center">Candidate Details
					<span class="badge bg-primary-transparent fw-medium ms-2">Cand-001</span>
				</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center flex-wrap flex-md-nowrap row-gap-3">
							<span class="avatar avatar-xxxl candidate-img flex-shrink-0 me-3">
								<img src="assets/img/users/user-03.jpg" alt="Img">
							</span>
							<div class="flex-fill border rounded p-3 pb-0">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Candiate Name</p>
											<h6 class="fw-normal">Harold Gaynor</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Applied Role</p>
											<h6 class="fw-normal">Accountant</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Applied  Date</p>
											<h6 class="fw-normal">12 Sep 2024</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Email</p>
											<h6 class="fw-normal">harold@example.com</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<h6 class="fw-normal d-flex align-items-center">
												<span class="avatar avatar-xs avatar-rounded me-1">
													<img src="assets/img/users/user-01.jpg" alt="Img">
												</span>
												Anthony Lewis
											</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<span class="badge badge-purple d-inline-flex align-items-center"><i class="ti ti-point-filled me-1"></i>New</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-grids-tab p-0 mb-3">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
						  <button class="nav-link active pt-0" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Profile</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Hiring Pipeline</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Notes</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="card">
							<div class="card-header">
								<h5>Personal Information</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Candiate Name</p>
											<h6 class="fw-normal">Harold Gaynor</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Phone</p>
											<h6 class="fw-normal">(146) 8964 278</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Gender</p>
											<h6 class="fw-normal">Male</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Date of Birth</p>
											<h6 class="fw-normal">23 Oct 2000</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Email</p>
											<h6 class="fw-normal">harold@example.com</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Nationality</p>
											<h6 class="fw-normal">Indian</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Religion</p>
											<h6 class="fw-normal">Christianity</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Marital status</p>
											<h6 class="fw-normal">No</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Address Information</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Address</p>
											<h6 class="fw-normal">1861 Bayonne Ave</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">City</p>
											<h6 class="fw-normal">New York</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">State</p>
											<h6 class="fw-normal">New York</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Country</p>
											<h6 class="fw-normal">United States Of America</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Resume</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										<div class="d-flex align-items-center mb-3">
											<span class="avatar avatar-lg bg-light-500 border text-dark me-2"><i class="ti ti-file-description fs-24"></i></span>
											<div>
												<h6 class="fw-medium">Resume.doc</h6>
												<span>120 KB</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 text-md-end">
											<a href="#" class="btn btn-dark d-inline-flex align-items-center"><i class="ti ti-download me-1"></i>Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
						<div class="card">
							<div class="card-body">
								<h5 class="fw-medium mb-2">Candidate Pipeline Stage</h5>
								<div class="pipeline-list candidates border-0 mb-0">
									<ul class="mb-0">
										<li><a href="javascript:void(0);" class="bg-purple">New</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Scheduled</a></li>
										<li><a href="javascript:void(0);" class="bg-grat-100">Interviewed</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Offered</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Hired / Rejected</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Details</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Current Status</p>
											<span class="badge badge-soft-purple d-inline-flex align-items-center"><i class="ti ti-point-filled me-1"></i>New</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Applied Role</p>
											<h6 class="fw-normal">Accountant</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Applied Date</p>
											<h6 class="fw-normal">12 Sep 2024</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<div class="d-flex align-items-center">
												<a href="#" class="avatar avatar-sm avatar-rounded me-2">
													<img src="assets/img/users/user-01.jpg" alt="Img">
												</a>
												<h6><a href="#">Anthony Lewis</a></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex align-items-center justify-content-end">
									<a href="#" class="btn btn-dark me-3">Reject</a>
									<a href="#" class="btn btn-primary">Move to Next Stage</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
						<div class="card">
							<div class="card-header">
								<h5>Notes</h5>
							</div>
							<div class="card-body">
								<p>Harold Gaynor is a detail-oriented and highly motivated accountant with 4  years of experience in financial reporting, auditing, and tax preparation.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Candidate Details -->
@endsection

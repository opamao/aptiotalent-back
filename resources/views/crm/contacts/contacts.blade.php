@extends('layouts.master', [
    'title' => 'Contacts',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Contacts</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            CRM
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts List</li>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_contact"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                        Contact</a>
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

        <!-- Contact List -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Contact List</h5>
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
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
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
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
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
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Rating</th>
                                <th>Owner</th>
                                <th>Contact</th>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="{{ url('contact-details') }}" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-49.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="{{ url('contact-details') }}">Darlee Robertson</a></h6>
                                            <span class="fs-12 fw-normal ">Facility Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>darlee@example.com</td>
                                <td>(163) 2459 315</td>
                                <td>
                                    Germany
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>4.2</span></td>
                                <td>Hendry Milner</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-50.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Sharon Roy</a></h6>
                                            <span class="fs-12 fw-normal ">Installer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>sharon@example.com</td>
                                <td>(146) 1249 296</td>
                                <td>
                                    USA
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>5.0</span></td>
                                <td>Guilory Berggren</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-51.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Vaughan Lewis</a></h6>
                                            <span class="fs-12 fw-normal ">Senior Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>vaughan@example.com</td>
                                <td>(135) 3489 516</td>
                                <td>
                                    Canada
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>3.5</span></td>
                                <td>Jami Carlile</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-02.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Jessica Louise</a></h6>
                                            <span class="fs-12 fw-normal ">Test Engineer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>jessica@example.com</td>
                                <td>(158) 3459 596</td>
                                <td>
                                    India
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>4.5</span></td>
                                <td>Theresa Nelson</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-52.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Carol Thomas</a></h6>
                                            <span class="fs-12 fw-normal ">UI /UX Designer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>carol@example.com</td>
                                <td>(196) 4862 196</td>
                                <td>
                                    China
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>4.7</span></td>
                                <td>Smith Cooper</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-57.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Dawn Mercha</a></h6>
                                            <span class="fs-12 fw-normal ">Technician</span>
                                        </div>
                                    </div>
                                </td>
                                <td>dawn@example.com</td>
                                <td>(163) 6498 256</td>
                                <td>
                                    Japan
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>5.0</span></td>
                                <td>Martin Lewis</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-54.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Rachel Hampton</a></h6>
                                            <span class="fs-12 fw-normal ">Software Developer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>rachel@example.com</td>
                                <td>(154) 6481 075</td>
                                <td>
                                    Indonesia
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>3.1</span></td>
                                <td>Newell Egan</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-56.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Jonelle Curtiss</a></h6>
                                            <span class="fs-12 fw-normal ">Supervisor</span>
                                        </div>
                                    </div>
                                </td>
                                <td>jonella@example.com</td>
                                <td>(184) 6348 195</td>
                                <td>
                                    Cuba
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>5.0</span></td>
                                <td>Janet Carlson</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-26.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Jonathan Smith</a></h6>
                                            <span class="fs-12 fw-normal ">Team Lead Dev</span>
                                        </div>
                                    </div>
                                </td>
                                <td>jonathan@example.com</td>
                                <td>(175) 2496 125</td>
                                <td>
                                    Israel
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>2.7</span></td>
                                <td>Craig Brown</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="contact-details.html" class="avatar avatar-md border avatar-rounded">
                                            <img src="assets/img/users/user-36.jpg" class="img-fluid" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="contact-details.html">Patricia Carter</a></h6>
                                            <span class="fs-12 fw-normal ">Team Lead Dev</span>
                                        </div>
                                    </div>
                                </td>
                                <td>patricia@example.com</td>
                                <td>(132) 3145 977</td>
                                <td>
                                    Colombia
                                </td>
                                <td><span class="d-flex align-items-center"><i
                                            class="ti ti-star-filled text-warning me-2"></i>3.0</span></td>
                                <td>Daniel Byrne</td>
                                <td>
                                    <ul class="contact-icon d-flex align-items-center ">
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-mail d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-mail text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-call d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-phone-call text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-msg d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-message-2 text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-skype d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-skype text-gray-5"></i></span></a></li>
                                        <li><a href="#"
                                                class="p-1 rounded-circle contact-icon-facebook d-flex align-items-center justify-content-center"><span
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-brand-facebook text-gray-5"></i></span></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Active
                                    </span>
                                </td>
                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
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
        <!-- /Contact List -->

    </div>

    <!-- Add Contact -->
    <div class="modal fade" id="add_contact">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Contact</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="contacts.html">
                    <div class="contact-grids-tab">
                        <ul class="nav nav-underline" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="info-tab" data-bs-toggle="tab"
                                    data-bs-target="#basic-info" type="button" role="tab"
                                    aria-selected="true">Basic Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address"
                                    type="button" role="tab" aria-selected="false">Address</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="social-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#social-profile" type="button" role="tab"
                                    aria-selected="false">Social Profiles</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="access-tab" data-bs-toggle="tab" data-bs-target="#access"
                                    type="button" role="tab" aria-selected="false">Access</button>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="basic-info" role="tabpanel"
                            aria-labelledby="info-tab" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                            <div
                                                class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                <i class="ti ti-photo text-gray-2 fs-16"></i>
                                            </div>
                                            <div class="profile-upload">
                                                <div class="mb-2">
                                                    <h6 class="mb-1">Upload Profile Image</h6>
                                                    <p class="fs-12">Image should be below 4 mb</p>
                                                </div>
                                                <div class="profile-uploader d-flex align-items-center">
                                                    <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                        Upload
                                                        <input type="file" class="form-control image-sign"
                                                            multiple="">
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Job Title <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>BrightWave Innovations</option>
                                                <option>Stellar Dynamics</option>
                                                <option>Quantum Nexus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number 2<span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fax</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Deals <span class="text-danger">
                                                        *</span></label>
                                                <a href="#" class="add-new text-primary"
                                                    data-bs-target="#add_deals" data-bs-toggle="modal"><i
                                                        class="ti ti-plus text-primary me-1"></i>Add New</a>
                                            </div>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Collins</option>
                                                <option>Konopelski</option>
                                                <option>Adams</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Date of Birth <span class="text-danger"> *</span>
                                            </label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Ratings <span class="text-danger"> *</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-star text-gray-6"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Owner <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Hendry Milner</option>
                                                <option>Guilory Berggren</option>
                                                <option>Jami Carlile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Industry <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Retail Industry</option>
                                                <option>Banking</option>
                                                <option>Hotels</option>
                                                <option>Financial Services</option>
                                                <option>Insurance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Currency <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>USD</option>
                                                <option>Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Language <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Tags <span class="text-danger"> *</span> </label>
                                            <input class="input-tags form-control" placeholder="Add new" type="text"
                                                data-role="tagsinput" name="Label" value="Collab">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Source <span class="text-danger"> *</span> </label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Phone Calls</option>
                                                <option>Social Media</option>
                                                <option>Refferal Sites</option>
                                                <option>Web Analytics</option>
                                                <option>Previous Purchase</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab"
                            tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>USA</option>
                                                <option>Canada</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>California</option>
                                                <option>New York</option>
                                                <option>Texas</option>
                                                <option>Florida</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Los Angeles</option>
                                                <option>San Diego</option>
                                                <option>Fresno</option>
                                                <option>San Francisco</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Zipcode <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social-profile" role="tabpanel"
                            aria-labelledby="social-profile-tab" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">LinkedIn</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Skype</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Whatsapp</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="access" role="tabpanel" aria-labelledby="access-tab"
                            tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="mb-4">
                                    <h6 class="fs-14 fw-medium mb-1">Visibility</h6>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label text-dark" for="flexRadioDefault1">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault2">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault3">
                                                Select People
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 bg-gray br-5 mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-6">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-01.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Michael Walker</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-7">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-02.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Sophie Headrick</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-8">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-03.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Cameron Drake</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-9">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-04.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Doris Crowley</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-10">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/profiles/avatar-12.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Thomas Bordelon</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="btn btn-primary">Confirm</a>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#success_compay">Save </button>
                            </div>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
    <!-- /Add Contact -->

    <!-- Edit Contact -->
    <div class="modal fade" id="edit_contact">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Contact</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="contacts.html">
                    <div class="contact-grids-tab">
                        <ul class="nav nav-underline" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
                                    data-bs-target="#basic-info2" type="button" role="tab"
                                    aria-selected="true">Basic Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="address-tab2" data-bs-toggle="tab"
                                    data-bs-target="#address2" type="button" role="tab"
                                    aria-selected="false">Address</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="social-profile-tab2" data-bs-toggle="tab"
                                    data-bs-target="#social-profile2" type="button" role="tab"
                                    aria-selected="false">Social Profiles</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="access-tab2" data-bs-toggle="tab"
                                    data-bs-target="#access2" type="button" role="tab"
                                    aria-selected="false">Access</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="basic-info2" role="tabpanel"
                            aria-labelledby="info-tab2" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
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
                                                        <input type="file" class="form-control image-sign"
                                                            multiple="">
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-light btn-sm">Cancel</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" value="Darlee">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" value="Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Job Title <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Facility Manager">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>BrightWave Innovations</option>
                                                <option>Stellar Dynamics</option>
                                                <option>Quantum Nexus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="darlee@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="(163) 2459 315">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number 2<span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="(146) 1249 296">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fax</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Deals <span class="text-danger">
                                                        *</span></label>
                                                <a href="#" class="add-new text-primary"
                                                    data-bs-target="#add_deals" data-bs-toggle="modal"><i
                                                        class="ti ti-plus text-primary me-1"></i>Add New</a>
                                            </div>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Collins</option>
                                                <option>Konopelski</option>
                                                <option>Adams</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Date of Birth <span class="text-danger"> *</span>
                                            </label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy" value="02-05-2024">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Ratings <span class="text-danger">
                                                    *</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-star text-gray-6"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Owner <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Hendry Milner</option>
                                                <option>Guilory Berggren</option>
                                                <option>Jami Carlile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Industry <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Retail Industry</option>
                                                <option>Banking</option>
                                                <option>Hotels</option>
                                                <option>Financial Services</option>
                                                <option>Insurance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Currency <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Dollar</option>
                                                <option>Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 ">
                                            <label class="form-label">Language <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>English</option>
                                                <option>Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Tags <span class="text-danger"> *</span> </label>
                                            <input class="input-tags form-control" placeholder="Add new"
                                                type="text" data-role="tagsinput" name="Label" value="Collab">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Source <span class="text-danger"> *</span>
                                            </label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Phone Calls</option>
                                                <option selected>Social Media</option>
                                                <option>Refferal Sites</option>
                                                <option>Web Analytics</option>
                                                <option>Previous Purchase</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2"
                            tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Germany">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>USA</option>
                                                <option>Canada</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>California</option>
                                                <option>New York</option>
                                                <option>Texas</option>
                                                <option>Florida</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City <span class="text-danger"> *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Los Angeles</option>
                                                <option>San Diego</option>
                                                <option>Fresno</option>
                                                <option>San Francisco</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Zipcode <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="65">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social-profile2" role="tabpanel"
                            aria-labelledby="social-profile-tab2" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input type="email" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">LinkedIn</label>
                                            <input type="email" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Skype</label>
                                            <input type="email" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Whatsapp</label>
                                            <input type="email" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input type="email" class="form-control" value="Darlee Robertson">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="access2" role="tabpanel" aria-labelledby="access-tab2"
                            tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="mb-4">
                                    <h6 class="fs-14 fw-medium mb-1">Visibility</h6>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4">
                                            <label class="form-check-label text-dark" for="flexRadioDefault4">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault5" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault5">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault6">
                                            <label class="form-check-label text-dark" for="flexRadioDefault6">
                                                Select People
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 bg-gray br-5 mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-1">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-01.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Michael Walker</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-2">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-02.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Sophie Headrick</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-3">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-03.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Cameron Drake</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-4">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/reports/user-04.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Doris Crowley</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-5">
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="#" class="avatar avatar-md border avatar-rounded">
                                                <img src="assets/img/profiles/avatar-12.jpg" class="img-fluid"
                                                    alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-normal"><a href="#">Thomas Bordelon</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="btn btn-primary">Confirm</a>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#success_compay">Save </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Contact -->

    <!-- Success Contact -->
    <div class="modal fade" id="success_compay">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body pb-0">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                                    <img src="assets/img/reports-img/check-icon.svg" alt="icon" class="mb-3">
                                    <h5>Contact Added Successfully</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <a href="contacts.html" class="btn btn-dark d-flex justify-content-center ">Back to
                                        List</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <a href="contact-details.html"
                                        class="btn btn-primary bg-primary-gradient d-flex justify-content-center ">Detail
                                        Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Success Contact -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="contacts-grid.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

    <!-- Add Deals -->
    <div class="modal fade" id="add_deals">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Deals</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="deals-grid.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Deal Name <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Collins</option>
                                        <option>Konopelski</option>
                                        <option>Adams</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label">Pipeline <span class="text-danger"> *</span></label>
                                        <a href="#" class="add-new text-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_pipeline"><i
                                                class="ti ti-plus text-primary me-1"></i>Add New</a>
                                    </div>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Sales</option>
                                        <option>Marketing</option>
                                        <option>Calls</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Open</option>
                                        <option>Won</option>
                                        <option>Lost</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Deal Value <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Currency<span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Dollar</option>
                                        <option>Euro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Period <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Days</option>
                                        <option>Months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Period Value <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Contact <span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label" value="Vaughan Lewis">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Project<span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label"
                                        value="Office Management App,Clinic Management,Educational Platform">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Due Date <span class="text-danger"> *</span> </label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Expected Closing Date <span class="text-danger"> *</span>
                                    </label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 ">
                                    <label class="form-label">Assignee <span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label" value="Vaughan Lewis">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Tags <span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label" value="Collab">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Followup Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Source <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Phone Calls</option>
                                        <option>Social Media</option>
                                        <option>Refferal Sites</option>
                                        <option>Web Analytics</option>
                                        <option>Previous Purchase</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Priority <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 ">
                                    <label class="form-label">Description <span class="text-danger"> *</span></label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Deal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Deals -->

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
                                    <label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
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
                                                                <h6 class="fw-medium"><a href="#">Sharon Roy</a>
                                                                </h6>
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
                                                                <h6 class="fw-medium"><a href="#">Sharon Roy</a>
                                                                </h6>
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
                                    <label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
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
                                                                <h6 class="fw-medium"><a href="#">Sharon Roy</a>
                                                                </h6>
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
                                                                <h6 class="fw-medium"><a href="#">Sharon Roy</a>
                                                                </h6>
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
                                                        <h6 class="fw-medium fs-12"><a href="#">Sharon Roy</a>
                                                        </h6>
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
                                                        <h6 class="fw-medium fs-12"><a href="#">Vaughan Lewis</a>
                                                        </h6>
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
                                                        <h6 class="fw-medium fs-12"><a href="#">Jessica Louise</a>
                                                        </h6>
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
                                                        <h6 class="fw-medium fs-12"><a href="#">Test Engineer</a>
                                                        </h6>
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
                                    <label class="form-label">Stage Name <span class="text-danger"> *</span></label>
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
                                    <label class="form-label">Edit Name <span class="text-danger"> *</span></label>
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
@endsection

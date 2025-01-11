@extends('layouts.master', [
    'title' => 'Companies details',
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

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/add-comments.js"></script>
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">
        <div class="row align-items-center mb-4">
            <div class="col-sm-6">
                <h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="companies-grid.html">
                        <i class="ti ti-arrow-left me-2"></i>Companies</a>
                    <span class="text-gray d-inline-flex ms-2">/ BrightWave Innovations</span>
                </h6>
            </div>
            <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-sm-end">
                    <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center me-2"
                        data-bs-toggle="modal" data-bs-target="#add_deals">
                        <i class="ti ti-circle-plus me-2"></i>Add Deal
                    </a>
                    <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center"><i
                            class="ti ti-mail me-2"></i>Send Email</a>
                    <div class="head-icons ms-2 mb-0">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 theiaStickySidebar">
                <div class="card card-bg-1">
                    <div class="card-body p-0">
                        <span class="avatar avatar-xl border bg-white rounded-circle m-auto d-flex mb-2">
                            <img src="assets/img/company/company-11.svg" class="w-auto h-auto" alt="Img">
                        </span>
                        <div class="text-center px-3 pb-3 border-bottom">
                            <h5 class="d-flex align-items-center justify-content-center mb-1">BrightWave
                                Innovations <i class="ti ti-discount-check-filled text-success ms-1"></i></h5>
                            <p class="text-dark">1861 Bayonne Ave, Manchester, NJ, 08759</p>
                        </div>
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6>Basic information</h6>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-phone me-2"></i>
                                    Phone
                                </span>
                                <p class="text-dark">(163) 2459 315</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-mail-check me-2"></i>
                                    Email
                                </span>
                                <a href="javascript:void(0);"
                                    class="text-info d-inline-flex align-items-center">darlee@example.com <i
                                        class="ti ti-copy text-dark ms-2"></i></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-gender-male me-2"></i>
                                    Created On
                                </span>
                                <p class="text-dark">24 July 2024, 11:45 pm </p>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6>Other Information</h6>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-e-passport me-2"></i>
                                    Language
                                </span>
                                <p class="text-dark">English</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-mail-check me-2"></i>
                                    Currency
                                </span>
                                <p class="text-dark">United States dollar</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-globe me-2"></i>
                                    Last Modified
                                </span>
                                <p class="text-dark">27 Sep 24, 11:45 pm </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="d-inline-flex align-items-center">
                                    <i class="ti ti-bookmark-plus me-2"></i>
                                    Source
                                </span>
                                <p class="text-dark">Paid Campaign</p>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <h5 class="mb-3">Tags</h5>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-soft-success me-3">Collab</span>
                                <span class="badge badge-soft-warning">Rated</span>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5>Company</h5>
                                <a href="javascript:void(0);" class="text-primary d-inline-flex align-items-center"
                                    data-bs-toggle="modal" data-bs-target="#add_company">
                                    <i class="ti ti-circle-plus me-1"></i>Add New
                                </a>
                            </div>
                            <div class="d-flex align-items-center file-name-icon mb-3">
                                <a href="javascript:void(0);" class="avatar avatar-md border rounded-circle">
                                    <img src="assets/img/company/company-01.svg" class="img-fluid" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fw-medium">BrightWave Innovations</h6>
                                    <span class="d-block">bwi.example.com</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center file-name-icon">
                                <a href="javascript:void(0);" class="avatar avatar-md border rounded-circle">
                                    <img src="assets/img/company/company-02.svg" class="img-fluid" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fw-medium">Stellar Dynamics</h6>
                                    <span class="d-block">sd.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6>Social Links</h6>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-01.svg"
                                        alt="Img"></a>
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-06.svg"
                                        alt="Img"></a>
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-02.svg"
                                        alt="Img"></a>
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-03.svg"
                                        alt="Img"></a>
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-04.svg"
                                        alt="Img"></a>
                                <a href="javascript:void(0);" class="me-2"><img src="assets/img/social/social-05.svg"
                                        alt="Img"></a>
                            </div>
                            <div class="row gx-2">
                                <div class="col-6">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center justify-content-center btn btn-dark">
                                        <i class="ti ti-share-2 me-2"></i>Share
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center justify-content-center btn btn-primary">
                                        <i class="ti ti-trash me-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div>
                    <div class="bg-white rounded">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active fw-medium d-flex align-items-center justify-content-center"
                                    href="#bottom-justified-tab1" data-bs-toggle="tab" aria-selected="false"
                                    role="tab">
                                    <i class="ti ti-activity me-1"></i>
                                    Activities
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fw-medium d-flex align-items-center justify-content-center"
                                    href="#bottom-justified-tab2" data-bs-toggle="tab" aria-selected="false"
                                    role="tab">
                                    <i class="ti ti-file-description me-1"></i>
                                    Notes
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fw-medium d-flex align-items-center justify-content-center"
                                    href="#bottom-justified-tab3" data-bs-toggle="tab" aria-selected="true"
                                    role="tab">
                                    <i class="ti ti-phone-call me-1"></i>
                                    Calls
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fw-medium d-flex align-items-center justify-content-center"
                                    href="#bottom-justified-tab4" data-bs-toggle="tab" aria-selected="true"
                                    role="tab">
                                    <i class="ti ti-files me-1"></i>
                                    Files
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fw-medium d-flex align-items-center justify-content-center"
                                    href="#bottom-justified-tab5" data-bs-toggle="tab" aria-selected="true"
                                    role="tab">
                                    <i class="ti ti-mail-check me-1"></i>
                                    Email
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="bottom-justified-tab1" role="tabpanel">
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Activities</h5>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                Sort By : Last 7 Days
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                                        Added</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item rounded-1">Ascending</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item rounded-1">Desending</a>
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
                                <div class="card-body">
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                        <i class="ti ti-calendar me-1"></i>
                                        15 Feb 2024
                                    </span>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-skyblue me-2"><i
                                                    class="ti ti-message-circle-2 fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">You sent 1 Message to the contact.
                                                </h6>
                                                <span>10:25 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i
                                                    class="ti ti-phone fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">Denwar responded to your
                                                    appointment schedule question by call at 09:30pm.</h6>
                                                <span>09:25 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-warning me-2"><i
                                                    class="ti ti-file-description fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">Notes added by Antony</h6>
                                                <p class="mb-1">Please accept my apologies for the
                                                    inconvenience caused. It would be much appreciated if it's
                                                    possible to reschedule to 6:00 PM, or any other day that
                                                    week.</p>
                                                <span>10.00 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                        <i class="ti ti-calendar me-1"></i>
                                        15 Feb 2024
                                    </span>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i
                                                    class="ti ti-user-circle fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium d-flex align-items-center mb-1">
                                                    Meeting With
                                                    <span class="avatar avatar-sm avatar-rounded mx-1"><img
                                                            src="assets/img/profiles/avatar-02.jpg" alt="Img"></span>
                                                    Abraham
                                                </h6>
                                                <span>Schedueled on 05:00 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i
                                                    class="ti ti-phone fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">Drain responded to your appointment
                                                    schedule question.</h6>
                                                <span>09:25 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                        <i class="ti ti-calendar me-1"></i>
                                        Upcoming Activity
                                    </span>
                                    <div class="border rounded p-3">
                                        <div class="d-flex align-items-start mb-2">
                                            <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i
                                                    class="ti ti-user-circle fs-20"></i></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">
                                                    Product Meeting
                                                </h6>
                                                <p class="mb-1">A product team meeting is a gathering of the
                                                    cross-functional product team — ideally including
                                                    team members from product, engineering, marketing, and
                                                    customer support.
                                                </p>
                                                <span>Schedueled on 05:00 pm</span>
                                            </div>
                                        </div>
                                        <div class="bg-light-500 rounded p-3">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div>
                                                        <h6 class="fs-12 fw-medium mb-2">Reminder</h6>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="clock-hour-3 me-1"></i>
                                                                Reminder
                                                            </a>
                                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">Reminder</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">1
                                                                        Hr</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">10
                                                                        Hr</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div>
                                                        <h6 class="fs-12 fw-medium mb-2">Task Priority</h6>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-toggle btn-sm btn btn-white d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <span
                                                                    class="border border-purple rounded-circle bg-soft-danger d-flex justify-content-center align-items-center me-1">
                                                                    <i class="ti ti-point-filled text-danger"></i>
                                                                </span>
                                                                High
                                                            </a>
                                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">High</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">Medium</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1">Low</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div>
                                                        <h6 class="fs-12 fw-medium mb-2">Assigned to</h6>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <span class="avatar avatar-xs avatar-rounded me-1">
                                                                    <img src="assets/img/profiles/avatar-02.jpg"
                                                                        alt="Img">
                                                                </span>
                                                                John
                                                            </a>
                                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                                                        <span class="avatar avatar-xs avatar-rounded me-1">
                                                                            <img src="assets/img/profiles/avatar-02.jpg"
                                                                                alt="Img">
                                                                        </span>
                                                                        John
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                                                        <span class="avatar avatar-xs avatar-rounded me-1">
                                                                            <img src="assets/img/profiles/avatar-01.jpg"
                                                                                alt="Img">
                                                                        </span>
                                                                        Sophie
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"
                                                                        class="dropdown-item rounded-1 d-flex align-items-center">
                                                                        <span class="avatar avatar-xs avatar-rounded me-1">
                                                                            <img src="assets/img/profiles/avatar-03.jpg"
                                                                                alt="Img">
                                                                        </span>
                                                                        Estelle
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bottom-justified-tab2" role="tabpanel">
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h5>Notes</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown me-2">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    Sort By : Last 7 Days
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1">Recently Added</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1">Ascending</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1">Desending</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                                            Month</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                                            7 Days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0);"
                                                class="d-inline-flex align-items-center text-primary fw-medium"
                                                data-bs-toggle="modal" data-bs-target="#add_notes">
                                                <i class="ti ti-circle-plus me-1"></i>
                                                Add Note
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Darlee Robertson</h6>
                                                    <span>15 Sep 2023, 12:10 pm</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                            <p class="mb-3">A project review evaluates the success of an
                                                initiative and identifies areas for improvement.
                                                It can also evaluate a current project to determine whether
                                                it's on the right track. Or, it can determine the success of a
                                                completed project.
                                            </p>
                                            <div class="d-flex align-items-center flex-wrap gap-3 mb-3">
                                                <div
                                                    class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                    <div class="d-flex align-items-center me-4">
                                                        <span
                                                            class="avatar avatar-lg bg-success avatar-rounded flex-shrink-0 me-2">
                                                            <i class="ti ti-file-type-xls fs-24"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium">Project Specs.xls</h6>
                                                            <span>365 KB</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i
                                                            class="ti ti-download"></i></a>
                                                </div>
                                                <div
                                                    class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                    <div class="d-flex align-items-center me-4">
                                                        <span
                                                            class="avatar avatar-lg bg-success avatar-rounded flex-shrink-0 me-2">
                                                            <i class="ti ti-file-type-xls fs-24"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium">090224.jpg</h6>
                                                            <span>365 KB</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i
                                                            class="ti ti-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="notes-editor">
                                                <div class="note-edit-wrap">
                                                    <div class="mb-3">
                                                        <div class="summernote">Write a new comment, send your
                                                            team notification by typing @ followed by their name
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                        <i class="ti ti-circle-plus me-1"></i>
                                                        Add Comment
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-03.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Sharon Roy</h6>
                                                    <span>18 Sep 2023, 09:52 am</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                            <p class="mb-3">
                                                A project plan typically contains a list of the essential
                                                elements of a project,
                                                such as stakeholders, scope, timelines, estimated cost and
                                                communication methods.
                                                The project manager typically lists the information based on the
                                                assignment.
                                            </p>
                                            <div class="d-flex align-items-center flex-wrap gap-3 mb-3">
                                                <div
                                                    class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                    <div class="d-flex align-items-center me-4">
                                                        <span
                                                            class="avatar avatar-lg bg-purple avatar-rounded flex-shrink-0 me-2">
                                                            <i class="ti ti-file-description fs-24"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium">Andrewpass.txt</h6>
                                                            <span>365 KB</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i
                                                            class="ti ti-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="bg-light-500 rounded p-3 mb-3">
                                                <p class="mb-2">The best way to get a project done faster is
                                                    to start sooner. A goal without a
                                                    timeline is just a dream.The goal you set must be
                                                    challenging. At the same time,
                                                    it should be realistic and attainable, not impossible to
                                                    reach.
                                                </p>
                                                <p class="text-dark mb-2">Commented by <span class="text-primary">
                                                        Aeron</span> on 15 Sep 2023,
                                                    11:15 pm</p>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-dark d-inline-flex align-items-center"><i
                                                        class="ti ti-arrow-back-up me-1"></i>Reply</a>
                                            </div>
                                            <div class="notes-editor">
                                                <div class="note-edit-wrap">
                                                    <div class="mb-3">
                                                        <div class="summernote">Write a new comment, send your
                                                            team notification by typing @ followed by their name
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                        <i class="ti ti-circle-plus me-1"></i>
                                                        Add Comment
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Vaughan Lewis</h6>
                                                    <span>20 Sep 2023, 10:26 pm</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                            <p class="mb-3">
                                                Projects play a crucial role in the success of organizations,
                                                and their importance cannot
                                                be overstated. Whether it's launching a new product, improving
                                                an existing
                                            </p>
                                            <div class="notes-editor">
                                                <div class="note-edit-wrap">
                                                    <div class="mb-3">
                                                        <div class="summernote">Write a new comment, send your
                                                            team notification by typing @ followed by their name
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                        <i class="ti ti-circle-plus me-1"></i>
                                                        Add Comment
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bottom-justified-tab3" role="tabpanel">
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h5>Calls</h5>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex align-items-center text-primary fw-medium"
                                            data-bs-toggle="modal" data-bs-target="#add_call">
                                            <i class="ti ti-circle-plus me-1"></i>
                                            Add New
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border rounded p-3 mb-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <p class="fw-medium"><span class="text-dark">Darlee
                                                            Robertson </span> logged a call on 23 Jul 2023,
                                                        10:00 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown me-2">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-sm bg-danger-transparent border-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Busy<i
                                                            class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end p-3">
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Busy</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">No
                                                            Answer</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Unavailable</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Wrong Number</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">Left
                                                            Voice Message</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Moving Forward</a>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p>A project review evaluates the success of an initiative and
                                                identifies areas for
                                                improvement. It can also evaluate a current project
                                                to determine whether it's on the right track. Or, it can
                                                determine the success of a completed project
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-03.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <p class="fw-medium"><span class="text-dark">Sharon Roy
                                                        </span>  logged a call on 28 Jul 2023, 09:00 pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown me-2">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-sm bg-transparent-purple border-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">No
                                                        Answer<i class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end p-3">
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Busy</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">No
                                                            Answer</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Unavailable</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Wrong Number</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">Left
                                                            Voice Message</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Moving Forward</a>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p>
                                                A project plan typically contains a list of the essential
                                                elements of a project,
                                                such as stakeholders, scope, timelines, estimated cost and
                                                communication methods.
                                                The project manager typically lists the information based on the
                                                assignment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <p class="fw-medium"><span class="text-dark">Vaughan
                                                            Lewis </span> logged a call on 30 Jul 2023, 08:00 pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown me-2">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-sm bg-transparent-purple border-0"
                                                        data-bs-toggle="dropdown" aria-expanded="false">No
                                                        Answer<i class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end p-3">
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Busy</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">No
                                                            Answer</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Unavailable</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Wrong Number</a>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);">Left
                                                            Voice Message</a>
                                                        <a class="dropdown-item rounded-1"
                                                            href="javascript:void(0);">Moving Forward</a>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p>
                                                Projects play a crucial role in the success of organizations,
                                                and their importance cannot be
                                                overstated. Whether it's launching a new product, improving an
                                                existing
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bottom-justified-tab4" role="tabpanel">
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h5>Files</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border rounded p-3 mb-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <div>
                                                <h6 class="fw-medium mb-1">Manage Documents</h6>
                                                <p>Send customizable quotes, proposals and contracts to close
                                                    deals faster.</p>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#create_file">Create Document</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                            <div>
                                                <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                <p>Send customizable quotes, proposals and contracts to close
                                                    deals faster.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-download"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <span class="d-inline-flex mb-1">Owner</span>
                                                    <h6 class="fw-medium">Darlee Robertson</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge bg-pink-transparent me-2">Proposal</span>
                                                <span class="badge badge-dark-transparent"><i
                                                        class="ti ti-point-filled"></i>Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3 mb-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                            <div>
                                                <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                <p>Send customizable quotes, proposals and contracts to close
                                                    deals faster.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-download"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-01.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <span class="d-inline-flex mb-1">Owner</span>
                                                    <h6 class="fw-medium">Sharon Roy</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-soft-info me-2">Quote</span>
                                                <span class="badge badge-soft-success"><i
                                                        class="ti ti-point-filled"></i>Sent</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                            <div>
                                                <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                <p>Send customizable quotes, proposals and contracts to close
                                                    deals faster.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-download"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i
                                                        class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="Img">
                                                </span>
                                                <div>
                                                    <span class="d-inline-flex mb-1">Owner</span>
                                                    <h6 class="fw-medium">Vaughan Lewis</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge bg-pink-transparent me-2">Proposal</span>
                                                <span class="badge badge-dark-transparent"><i
                                                        class="ti ti-point-filled"></i>Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bottom-justified-tab5" role="tabpanel">
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h5>Email</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border rounded p-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <div>
                                                <h6 class="fw-medium mb-1">Manage Emails</h6>
                                                <p>You can send and reply to emails directly via this section.
                                                </p>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#connect_account">Connect Account</a>
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
    </div>

    <!-- Add Company -->
    <div class="modal fade" id="add_company">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Company</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="companies-crm.html">
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Fax</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Owner <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Hendry Milner</option>
                                                <option>Guilory Berggren</option>
                                                <option>Jami Carlile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Tags <span class="text-danger">*</span>
                                            </label>
                                            <input class="input-tags form-control" placeholder="Add new" type="text"
                                                data-role="tagsinput" name="Label" value="Collab">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Deals <span
                                                        class="text-danger">*</span></label>
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
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Industry <span class="text-danger">*</span></label>
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
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Source <span class="text-danger">*</span>
                                            </label>
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
                                            <label class="form-label">Currency <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>USD</option>
                                                <option>Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Language <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3 ">
                                            <label class="form-label">About <span class="text-danger">*</span></label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Contact <span
                                                        class="text-danger">*</span></label>
                                                <a href="#" class="add-new text-primary"
                                                    data-bs-target="#add_contact" data-bs-toggle="modal"><i
                                                        class="ti ti-plus text-primary me-1"></i>Add New</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option>Darlee Robertson</option>
                                                <option selected>Sharon Roy</option>
                                                <option>Vaughan</option>
                                                <option>Jessica</option>
                                                <option>Carol Thomas</option>
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
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country <span class="text-danger">
                                                    *</span></label>
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
                                            <label class="form-label">State <span class="text-danger">
                                                    *</span></label>
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
                                            <label class="form-label">City <span class="text-danger">
                                                    *</span></label>
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
                                            <label class="form-label">Zipcode <span class="text-danger">*</span></label>
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
                                                id="flexRadioDefault01">
                                            <label class="form-check-label text-dark" for="flexRadioDefault01">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault02" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault02">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault03" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault03">
                                                Select People
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 bg-gray br-5 mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-06">
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
                                            id="user-07">
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
                                            id="user-08">
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
                                            id="user-09">
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
                                            id="user-11">
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
    <!-- /Add Company -->

    <!-- Edit Company -->
    <div class="modal fade" id="edit_company">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit New Company</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="companies-crm.html">
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="darlee@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="(146) 1249 296">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number 2</label>
                                            <input type="text" class="form-control" value="(146) 1249 321">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Fax</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Reviews <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="4.5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Owner <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Hendry</option>
                                                <option selected>Guilory</option>
                                                <option>Jami</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Tags <span class="text-danger">*</span>
                                            </label>
                                            <input class="input-tags form-control" placeholder="Add new"
                                                type="text" data-role="tagsinput" name="Label" value="Collab">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Deals <span
                                                        class="text-danger">*</span></label>
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
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Industry <span
                                                    class="text-danger">*</span></label>
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
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Source <span class="text-danger">*</span>
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
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Currency <span
                                                    class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Dollar</option>
                                                <option>Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Language <span
                                                    class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>English</option>
                                                <option>Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3 ">
                                            <label class="form-label">About <span class="text-danger">*</span></label>
                                            <textarea class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nisi numquam vitae consequatur impedit rem laboriosam iusto sapiente ex mollitia voluptate ullam laudantium, vel atque ducimus blanditiis magni perspiciatis nulla.</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label class="col-form-label p-0">Contact <span
                                                        class="text-danger">*</span></label>
                                                <a href="#" class="add-new text-primary"
                                                    data-bs-target="#add_contact" data-bs-toggle="modal"><i
                                                        class="ti ti-plus text-primary me-1"></i>Add New</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option>Darlee Robertson</option>
                                                <option selected>Sharon Roy</option>
                                                <option selected>Vaughan</option>
                                                <option>Jessica</option>
                                                <option>Carol Thomas</option>
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
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
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
                                            <label class="form-label">State <span class="text-danger">
                                                    *</span></label>
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
                                            <label class="form-label">City <span class="text-danger">
                                                    *</span></label>
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
                                            <label class="form-label">Zipcode <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
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
                                                id="flexRadioDefault11">
                                            <label class="form-check-label text-dark" for="flexRadioDefault11">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault21" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault21">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault31" checked>
                                            <label class="form-check-label text-dark" for="flexRadioDefault31">
                                                Select People
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 bg-gray br-5 mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <input class="form-check-input me-1" type="checkbox" value=""
                                            id="user-006">
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
                                            id="user-007">
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
                                            id="user-008">
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
                                            id="user-009">
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
                                            id="user-100">
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
    <!-- /Edit Company -->

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
                                    <label class="form-label">Deal Name <span class="text-danger">
                                            *</span></label>
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
                                        <label class="form-label">Pipeline <span class="text-danger">
                                                *</span></label>
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
                                    <label class="form-label">Deal Value <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Currency<span class="text-danger">
                                            *</span></label>
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
                                    <label class="form-label">Period Value <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Contact <span class="text-danger">
                                            *</span></label>
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
                                    <label class="form-label">Due Date <span class="text-danger"> *</span>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Expected Closing Date <span class="text-danger">
                                            *</span> </label>
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
                                    <label class="form-label">Assignee <span class="text-danger">
                                            *</span></label>
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
                                    <label class="form-label">Followup Date <span class="text-danger">
                                            *</span></label>
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
                                    <label class="form-label">Priority <span class="text-danger">
                                            *</span></label>
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
                                    <label class="form-label">Description <span class="text-danger">
                                            *</span></label>
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

    <!-- Add Note -->
    <div class="modal fade" id="add_notes" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <h5 class="modal-title">Add New Note</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="company-details.html">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger"> *</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Note <span class="text-danger"> *</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Attachment <span class="text-danger"> *</span></label>
                            <div
                                class="d-flex align-items-center justify-content-center border border-dashed rounded p-3 flex-column">
                                <span class="avatar avatar-lg avatar-rounded bg-primary-transparent mb-2"><i
                                        class="ti ti-folder-open fs-24"></i></span>
                                <p class="fs-14 text-center mb-2">Drag and drop your files</p>
                                <div class="file-upload position-relative btn btn-sm btn-primary px-3 mb-2">
                                    <i class="ti ti-upload me-1"></i>Upload
                                    <input type="file" accept="video/image">
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Uploaded Files</label>
                            <div class="border bg-light-500 rounded mb-3 p-3">
                                <h6 class="fw-medium mb-1">Projectneonals teyys.xls</h6>
                                <p class="mb-2">4.25 MB</p>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 45%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>45%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light-500 rounded p-3">
                                <div>
                                    <h6 class="fw-medium mb-1">tes.txt</h6>
                                    <p>1.2 MB</p>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-icon text-danger"><i
                                        class="ti ti-trash fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end m-0">
                            <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Note -->

    <!-- Add Call -->
    <div class="modal fade" id="add_call" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <h5 class="modal-title">Create Call Log</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="company-details.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Busy</option>
                                        <option>Unavailable</option>
                                        <option>No Answer</option>
                                        <option>Wrong Number</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Followup Date <span class="text-danger">
                                            *</span></label>
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
                                <div class="mb-3">
                                    <label class="form-label">Note <span class="text-danger"> *</span></label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="check">
                                        Create a follow up task
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end m-0">
                            <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Call -->

    <!-- Create File -->
    <div class="modal fade" id="create_file" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <h5 class="modal-title">Create New File</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="add-info-fieldset">
                    <div class="add-details-wizard p-3 pb-0">
                        <ul class="progress-bar-wizard d-flex align-items-center border-bottom">
                            <li class="active p-2 pt-0">
                                <h6 class="fw-medium">Basic Information</h6>
                            </li>
                            <li class="p-2 pt-0">
                                <h6 class="fw-medium">Add Recipient</h6>
                            </li>
                        </ul>
                    </div>
                    <fieldset id="first-field-file">
                        <form action="company-details.html">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Choose Deal <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Collins</option>
                                                <option>Wisozk</option>
                                                <option>Walter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Document Type <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Contract</option>
                                                <option>Proposal</option>
                                                <option>Quote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Owner <span class="text-danger">
                                                    *</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Admin</option>
                                                <option>Jackson Daniel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username <span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Password <span class="text-danger">
                                                    *</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="pass-input form-control">
                                                <span class="ti toggle-password ti-eye-off"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Confirm Password <span class="text-danger">
                                                    *</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="pass-inputs form-control">
                                                <span class="ti toggle-passwords ti-eye-off"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Company</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-light-500 rounded p-3 pb-0 mb-3">
                                            <h4>Signature</h4>
                                            <ul class="nav">
                                                <li class="nav-item form-check form-check-md mb-2">
                                                    <span data-bs-toggle="tab" data-bs-target="#nosign">
                                                        <input type="radio" class="form-check-input mt-2"
                                                            id="sign1" name="email">
                                                        <label for="sign1" class="form-check-label"><span
                                                                class="d-block fw-medium text-dark mb-1">No
                                                                Signature</span>This document does not require a
                                                            signature before acceptance.</label>
                                                    </span>
                                                </li>
                                                <li class="nav-item form-check form-check-md mb-3">
                                                    <span class="active mb-0" data-bs-toggle="tab"
                                                        data-bs-target="#use-esign">
                                                        <input type="radio" class="form-check-input mt-2"
                                                            id="sign2" name="email" checked>
                                                        <label for="sign2" class="form-check-label"><span
                                                                class="d-block fw-medium text-dark mb-1">Use
                                                                e-signature</span>This document require e-signature
                                                            before acceptance.</label>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="nosign"></div>
                                                <div class="tab-pane show active" id="use-esign">
                                                    <div class="mb-0">
                                                        <label class="form-label">Document Signers <span
                                                                class="text-danger"> *</span></label>
                                                    </div>
                                                    <div class="sign-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <div class="flex-fill me-2">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm add-sign text-primary"><i
                                                                                class="ti ti-circle-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <label class="form-label">Content <span class="text-danger">
                                                    *</span></label>
                                            <textarea class="form-control" rows="3" placeholder="Add Content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                                    <button class="btn btn-primary wizard-next-btn" type="button">Next</button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company-details.html">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="bg-light-500 rounded p-3 pb-0 mb-3">
                                            <h4>Signature</h4>
                                            <ul class="nav">
                                                <li class="nav-item form-check form-check-md mb-2">
                                                    <span data-bs-toggle="tab" data-bs-target="#nosign2">
                                                        <input type="radio" class="form-check-input mt-2"
                                                            id="sign3" name="email">
                                                        <label for="sign3" class="form-check-label"><span
                                                                class="d-block fw-medium text-dark mb-1">No
                                                                Signature</span>This document does not require a
                                                            signature before acceptance.</label>
                                                    </span>
                                                </li>
                                                <li class="nav-item form-check form-check-md mb-3">
                                                    <span class="active mb-0" data-bs-toggle="tab"
                                                        data-bs-target="#use-esign2">
                                                        <input type="radio" class="form-check-input mt-2"
                                                            id="sign4" name="email" checked>
                                                        <label for="sign4" class="form-check-label"><span
                                                                class="d-block fw-medium text-dark mb-1">Use
                                                                e-signature</span>This document require e-signature
                                                            before acceptance.</label>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="nosign2"></div>
                                                <div class="tab-pane show active" id="use-esign2">
                                                    <div class="mb-0">
                                                        <label class="form-label">Document Signers <span
                                                                class="text-danger"> *</span></label>
                                                    </div>
                                                    <div class="sign-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <div class="flex-fill me-2">
                                                                        <input class="form-control" type="text">
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm add-sign text-primary"><i
                                                                                class="ti ti-circle-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Message Subject <span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Message Text <span class="text-danger">
                                                    *</span></label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-dark mb-3">Send Now</button>
                                        <div class="border border-success bg-success-transparent p-3 rounded">
                                            <p class="d-flex align-items-center"><i
                                                    class="ti ti-circle-check fs-24 me-2"></i> Document Sent
                                                successfully to the Selected Recipients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Save &
                                        Next</button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- /Create File -->

    <!-- Connect Account -->
    <div class="modal fade" id="connect_account" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header header-border align-items-center justify-content-between">
                    <h5 class="modal-title">Connect Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="company-details.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Account Type <span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Gmail</option>
                                        <option>Outlook</option>
                                        <option>Imap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <p class="text-dark fw-medium mb-2">Sync emails from</p>
                                    <div class="form-check form-check-md mb-2">
                                        <input type="radio" class="form-check-input" id="email_1"
                                            name="email">
                                        <label for="email_1" class="form-check-label text-dark">Now</label>
                                    </div>
                                    <div class="form-check form-check-md mb-2">
                                        <input type="radio" class="form-check-input" id="email_2"
                                            name="email">
                                        <label for="email_2" class="form-check-label text-dark">1 month
                                            ago</label>
                                    </div>
                                    <div class="form-check form-check-md mb-2">
                                        <input type="radio" class="form-check-input" id="email_3"
                                            name="email">
                                        <label for="email_3" class="form-check-label text-dark">3 months
                                            ago</label>
                                    </div>
                                    <div class="form-check form-check-md">
                                        <input type="radio" class="form-check-input" id="email_4"
                                            name="email">
                                        <label for="email_4" class="form-check-label text-dark">6 months
                                            ago</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end m-0">
                            <button class="btn btn-outline-light border me-2" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#success_modal">Connect Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Connect Account -->

    <!-- Connect Account Success -->
    <div class="modal fade" id="success_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center p-3">
                        <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                class="ti ti-check fs-24"></i></span>
                        <h5 class="mb-2">Email Connected Successfully!!!</h5>
                        <p class="mb-3">Email Account is configured with <span
                                class="d-block text-dark">“example@example.com”. </span>
                            Now you can access email.
                        </p>
                        <a href="email.html" class="btn btn-primary w-100">Go to Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Connect Account Success -->
@endsection

@extends('layouts.master', [
    'title' => 'Calendar',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush

@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Fullcalendar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/fullcalendar/index.global.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/fullcalendar/calendar-data.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Theiastickysidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Calendar</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Application
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                    </ol>
                </nav>

            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="input-icon-end position-relative">
                        <input type="text" class="form-control date-range bookingrange"
                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
                        <span class="input-icon-addon">
                            <i class="ti ti-chevron-down"></i>
                        </span>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_event"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Create</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Calendar Sidebar -->
            <div class="col-xxl-3 col-xl-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="border-bottom pb-2 mb-4">
                            <div class="datepic"></div>
                        </div>

                        <!-- Event -->
                        <div class="border-bottom pb-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5>Event </h5>
                                <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#add_event"><i
                                        class="ti ti-square-rounded-plus-filled fs-16"></i></a>
                            </div>
                            <p class="fs-12 mb-2">Drag and drop your event or click in the calendar</p>
                            <div id='external-events'>
                                <div class="fc-event bg-transparent-success mb-1" data-event='{ "title": "Team Events" }'
                                    data-event-classname="bg-transparent-success">
                                    <i class="ti ti-square-rounded text-success me-2"></i>Team Events
                                </div>
                                <div class="fc-event bg-transparent-warning mb-1" data-event='{ "title": "Team Events" }'
                                    data-event-classname="bg-transparent-warning">
                                    <i class="ti ti-square-rounded text-warning me-2"></i>Work
                                </div>
                                <div class="fc-event bg-transparent-danger mb-1" data-event='{ "title": "External" }'
                                    data-event-classname="bg-transparent-danger">
                                    <i class="ti ti-square-rounded text-danger me-2"></i>External
                                </div>
                                <div class="fc-event bg-transparent-skyblue mb-1" data-event='{ "title": "Projects" }'
                                    data-event-classname="bg-transparent-skyblue">
                                    <i class="ti ti-square-rounded text-skyblue me-2"></i>Projects
                                </div>
                                <div class="fc-event bg-transparent-purple mb-1" data-event='{ "title": "Applications" }'
                                    data-event-classname="bg-transparent-purple">
                                    <i class="ti ti-square-rounded text-purple me-2"></i>Applications
                                </div>
                                <div class="fc-event bg-transparent-info mb-0" data-event='{ "title": "Desgin" }'
                                    data-event-classname="bg-transparent-info">
                                    <i class="ti ti-square-rounded text-info me-2"></i>Desgin
                                </div>
                            </div>
                        </div>
                        <!-- /Event -->

                        <!-- Upcoming Event -->
                        <div class="border-bottom pb-2 mb-4">
                            <h5 class="mb-2">Upcoming Event<span class="badge badge-success rounded-pill ms-2">15</span>
                            </h5>
                            <div class="border-start border-purple border-3 mb-3">
                                <div class="ps-3">
                                    <h6 class="fw-medium mb-1">Meeting with Team Dev</h6>
                                    <p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>15 Mar 2025</p>
                                </div>
                            </div>
                            <div class="border-start border-pink border-3 mb-3">
                                <div class="ps-3">
                                    <h6 class="fw-medium mb-1">Design System With Client</h6>
                                    <p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>24 Mar 2025</p>
                                </div>
                            </div>
                            <div class="border-start border-success border-3 mb-3">
                                <div class="ps-3">
                                    <h6 class="fw-medium mb-1">UI/UX Team Call</h6>
                                    <p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>28 Mar 2025</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Upcoming Event -->

                        <!-- Upgrade Details -->
                        <div class="bg-dark rounded text-center position-relative p-4">
                            <span class="avatar avatar-lg rounded-circle bg-white mb-2">
                                <i class="ti ti-alert-triangle text-dark"></i>
                            </span>
                            <h6 class="text-white mb-3">Enjoy Unlimited Access on a small price monthly.</h6>
                            <a href="#" class="btn btn-white">Upgrade Now <i class="ti ti-arrow-right"></i></a>
                            <div class="box-bg">
                                <span class="bg-right"><img src="assets/img/bg/email-bg-01.png" alt="Img"></span>
                                <span class="bg-left"><img src="assets/img/bg/email-bg-02.png" alt="Img"></span>
                            </div>
                        </div>
                        <!-- /Upgrade Details -->

                    </div>
                </div>

            </div>
            <!-- /Calendar Sidebar -->

            <div class="col-xxl-9 col-xl-8 theiaStickySidebar">
                <div class="card border-0">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Add New Event -->
    <div class="modal fade" id="add_event">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Event</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="calendar.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Time</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-clock text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Time</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-clock text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Location</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Descriptions</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Event -->

    <!-- Event -->
    <div class="modal fade" id="event_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark modal-bg">
                    <div class="modal-title text-white"><span id="eventTitle"></span></div>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-calendar-check text-default me-2"></i>26 Jul,2024 to 31 Jul,2024</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-calendar-check text-default me-2"></i>11:00 AM to 12:15 PM</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-map-pin-bolt text-default me-2"></i>Las Vegas, US</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-0"><i
                            class="ti ti-calendar-check text-default me-2"></i>A recurring or repeating event is simply any
                        event that you will occur more than once on your calendar.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Event -->
@endsection

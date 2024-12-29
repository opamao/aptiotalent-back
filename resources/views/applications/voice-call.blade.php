@extends('layouts.master', [
    'title' => 'Voice call',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
@endpush

@push('scripts')
    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Fullcalendar JS -->
    <script src="assets/plugins/fullcalendar/index.global.min.js"></script>
    <script src="assets/plugins/fullcalendar/calendar-data.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Theiastickysidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>

    <!-- Theiastickysidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-colorpicker.js"></script>
    <script src="assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content pb-4">
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Voice Call</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Application
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Voice Call</li>
                    </ol>
                </nav>
            </div>
            <div class="head-icons">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>

        <div class="row">

            <!-- Call -->
            <div class="col-xxl-12">
                <div class="card incoming-call mb-0">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-lg avatar-rounded me-2">
                                    <img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img">
                                </span>
                                <div>
                                    <h5 class="mb-1"><a href="#">Anthony Lewis</a></h5>
                                    <span class="d-block">Online</span>
                                </div>
                            </div>
                            <a href="#" class="avatar avatar-md rounded-circle bg-gray-200 text-dark">
                                <i class="ti ti-user-plus fs-20"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
                        <div class="voice-call-img mb-3">
                            <img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img">
                        </div>
                        <h4 class="display-4">Anthony Lewis</h4>
                        <p>00:24</p>
                        <a href="#" class="avatar avatar-xl position-absolute end-0 bottom-0 m-3"><img
                                src="assets/img/users/user-05.jpg" alt="Img"></a>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-video fs-20"></i></a>
                            <a href="#"
                                class="btn btn-danger call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-phone fs-20"></i></a>
                            <a href="#"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center"><i
                                    class="ti ti-microphone fs-20"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Call -->

        </div>
    </div>
@endsection

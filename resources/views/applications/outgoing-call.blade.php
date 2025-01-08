@extends('layouts.master', [
    'title' => 'Outgoing Call',
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
    <div class="content pb-4">
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Outgoing Call</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Application
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Outgoing Call</li>
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
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <div class="voice-call-img mb-3">
                            <img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img">
                        </div>
                        <h4 class="display-4">Anthony Lewis</h4>
                        <p>Calling...</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-video fs-20"></i></a>
                            <a href="javascript:void(0);"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-microphone fs-20"></i></a>
                            <a href="javascript:void(0);"
                                class="btn btn-danger call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-phone-off fs-20"></i></a>
                            <a href="javascript:void(0);"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center me-3"><i
                                    class="ti ti-user-plus fs-20"></i></a>
                            <a href="javascript:void(0);"
                                class="btn btn-light call-item p-0 d-flex align-items-center justify-content-center"><i
                                    class="ti ti-volume fs-20"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Call -->

        </div>

    </div>
@endsection

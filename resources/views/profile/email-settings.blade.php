@extends('layouts.master', [
    'title' => 'Email settings',
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

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Settings</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
            <li class="nav-item">
                <a class="nav-link " href="profile-settings.html"><i class="ti ti-settings me-2"></i>General Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bussiness-settings.html"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="salary-settings.html"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="email-settings.html"><i class="ti ti-server-cog me-2"></i>System
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payment-gateways.html"><i class="ti ti-settings-dollar me-2"></i>Financial
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="custom-css.html"><i class="ti ti-settings-2 me-2"></i>Other
                    Settings</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-xl-3 theiaStickySidebar">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column list-group settings-list">
                            <a href="email-settings.html"
                                class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Email Settings</a>
                            <a href="email-template.html" class="d-inline-flex align-items-center rounded   py-2 px-3">Email
                                Templates</a>
                            <a href="sms-settings.html" class="d-inline-flex align-items-center rounded py-2 px-3">SMS
                                Settings</a>
                            <a href="sms-template.html" class="d-inline-flex align-items-center rounded py-2 px-3">SMS
                                Templates</a>
                            <a href="otp-settings.html" class="d-inline-flex align-items-center rounded py-2 px-3">OTP</a>
                            <a href="gdpr-cookies.html" class="d-inline-flex align-items-center rounded py-2 px-3">GDPR
                                Cookies</a>
                            <a href="maintenance-mode.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Maintenance
                                Mode</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Email Settings</h4>
                        </div>
                        <form action="email-settings.html">
                            <div class="border-bottom mb-3">
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xl p-2 me-2 bg-light flex-shrink-0">
                                                                <img src="assets/img/settings/phpmail.svg" alt="Profile">
                                                            </span>
                                                            <h5>PHP Mailer</h5>
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                id="flexSwitchCheckDefault">
                                                        </div>
                                                    </div>
                                                    <p>Used to send emails safely and easily via PHP code from a
                                                        web server.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="btn btn-sm d-inline-flex align-items-center btn-dark">
                                                        <i class="ti ti-checks me-1"></i>Connected
                                                    </span>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#phpmailersettings"
                                                        class="btn btn-icon btn-sm text-gray-5 fs-20"><i
                                                            class="ti ti-settings"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xl me-2 p-2 bg-light flex-shrink-0">
                                                                <img src="assets/img/settings/smtp.svg" alt="Profile">
                                                            </span>
                                                            <h5>SMTP</h5>
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckDefault2">
                                                        </div>
                                                    </div>
                                                    <p>SMTP is used to send, relay or forward messages from a
                                                        mail client.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="btn btn-sm d-inline-flex align-items-center btn-light">
                                                        <i class="ti ti-checks me-1"></i>Connected
                                                    </span>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#smtpsettings"
                                                        class="btn btn-icon btn-sm text-gray-5 fs-20"><i
                                                            class="ti ti-settings"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add php mailer -->
    <div class="modal fade" id="phpmailersettings">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        PHP Mailer
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="email-settings.html">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Address</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Password</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add php mailer -->

    <!-- Add SMTP -->
    <div class="modal fade" id="smtpsettings">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        SMTP
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="email-settings.html">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Address</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Password</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Host</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Port</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add  SMTP -->
@endsection

@extends('layouts.master', [
    'title' => 'Preferences',
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
                <a class="nav-link" href="profile-settings.html"><i class="ti ti-settings me-2"></i>General Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="bussiness-settings.html"><i class="ti ti-world-cog me-2"></i>Website
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="salary-settings.html"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="email-settings.html"><i class="ti ti-server-cog me-2"></i>System Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payment-gateways.html"><i class="ti ti-settings-dollar me-2"></i>Financial
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="custom-css.html"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-xl-3 theiaStickySidebar">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column list-group settings-list">
                            <a href="business-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Business Settings</a>
                            <a href="seo-settings.html" class="d-inline-flex align-items-center rounded py-2 px-3">SEO
                                Settings</a>
                            <a href="localization-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Localization</a>
                            <a href="prefixes.html" class="d-inline-flex align-items-center rounded py-2 px-3">Prefixes</a>
                            <a href="preferences.html" class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Preferences</a>
                            <a href="appearance.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Appearance</a>
                            <a href="language.html" class="d-inline-flex align-items-center rounded py-2 px-3">Language</a>
                            <a href="authentication-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Authentication Settings</a>
                            <a href="ai-settings.html" class="d-inline-flex align-items-center rounded py-2 px-3">AI
                                Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Preferences</h4>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Employees</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user1" class="check" checked>
                                        <label for="user1" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Clients</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user2" class="check" checked>
                                        <label for="user2" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Projects</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user3" class="check" checked>
                                        <label for="user3" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Contacts</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user4" class="check" checked>
                                        <label for="user4" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Companies</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user5" class="check" checked>
                                        <label for="user5" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Deals</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user6" class="check" checked>
                                        <label for="user6" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Leads</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user12" class="check" checked>
                                        <label for="user12" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Pipeline</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user7" class="check" checked>
                                        <label for="user7" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Activities</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user8" class="check" checked>
                                        <label for="user8" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Sales</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user9" class="check" checked>
                                        <label for="user9" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Accounting</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user10" class="check" checked>
                                        <label for="user10" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div
                                    class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Reports</h5>
                                    <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user11" class="check" checked>
                                        <label for="user11" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master', [
    'title' => 'SEO settings',
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
                <a class="nav-link" href="email-settings.html"><i class="ti ti-server-cog me-2"></i>System
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
                            <a href="bussiness-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Business
                                Settings</a>
                            <a href="seo-settings.html" class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>SEO Settings</a>
                            <a href="localization-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Localization</a>
                            <a href="prefixes.html" class="d-inline-flex align-items-center rounded py-2 px-3">Prefixes</a>
                            <a href="preferences.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Preferences</a>
                            <a href="appearance.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Appearance</a>
                            <a href="language.html" class="d-inline-flex align-items-center rounded py-2 px-3">Language</a>
                            <a href="authentication-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Authentication
                                Settings</a>
                            <a href="ai-settings.html" class="d-inline-flex align-items-center rounded py-2 px-3">AI
                                Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>SEO Settings</h4>
                        </div>
                        <form action="seo-settings.html">
                            <div class="border-bottom mb-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Meta Title</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Meta Keywords</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-start mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Meta Description</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Canonical Url</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Og Title</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-start mb-3">
                                            <div class="col-xxl-2 col-md-3">
                                                <label class="form-label mb-md-0">Og Description</label>
                                            </div>
                                            <div class="col-xxl-10 col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex align-items-start">
                                        <div class="col-xxl-2 col-md-3">
                                            <label class="form-label mb-md-0">Og Image</label>
                                        </div>
                                        <div class="col-xxl-10 col-md-9">
                                            <div
                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center og-upload bg-white rounded border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                    <i class="ti ti-photo text-gray-3 fs-16"></i>
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">OG Image</h6>
                                                        <p class="fs-12">Recommended image size is 40px x
                                                            40px</p>
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
@endsection

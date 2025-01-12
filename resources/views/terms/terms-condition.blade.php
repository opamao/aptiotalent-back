@extends('layouts.master', [
    'title' => 'Terms condition',
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

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/chartjs/chart-data.js"></script>

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
                <h2 class="mb-1">Terms & Conditions</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Pages
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
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

        <div class="card">
            <div class="card-body pb-1">
                <div class="mb-3">
                    <p>
                        Welcome to the Smart HR Admin platform. These terms and conditions outline the rules and
                        regulations for using our HR administrative services. By accessing or using this
                        platform, you agree to comply with these terms. Please read them carefully.
                    </p>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Acceptance of Terms</h5>
                    <p class="mb-2">By using the HR Admin platform, you agree to be bound by these Terms and
                        Conditions and any additional guidelines, restrictions, or rules that may apply to
                        specific sections or services. If you do not agree, please do not use
                        this platform.</p>
                </div>
                <div>
                    <h5 class="mb-2">User Responsibilities</h5>
                    <p class="mb-2">As an authorized user of the HR Admin platform, you agree to:</p>
                    <ul class="list-styled mb-3">
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Ensure the confidentiality of your
                            login credentials.
                        </li>
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Use the platform solely for lawful
                            HR administrative purposes.
                        </li>
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Not share or disclose sensitive
                            employee information unless authorized.
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Report any security breaches or
                            suspicious activity immediately.
                        </li>
                    </ul>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Platform Usage</h5>
                    <p class="mb-2">The HR Admin platform allows you to manage employee data, review
                        reports, process payroll, and perform other HR functions. You are responsible for
                        ensuring the accuracy and legality of all information entered into the system.
                    </p>
                </div>
                <div>
                    <h5 class="mb-2">Restrictions</h5>
                    <p class="mb-2">
                        You agree not to:
                    </p>
                    <ul class="list-styled mb-3">
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Access the platform for any unlawful
                            purposes.
                        </li>
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Use the platform to harass, defraud,
                            or harm any individual or company.
                        </li>
                        <li class="d-flex align-items-baseline mb-2">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Reverse engineer, decompile, or
                            attempt to extract the source code of the platform.
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="ti ti-point-filled fs-10 me-1"></i> Interfere with the platform’s
                            functionality or introduce malicious software.
                        </li>
                    </ul>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Intellectual Property</h5>
                    <p class="mb-2">
                        All content, software, and intellectual property associated with the platform are owned
                        by SmartHR. You may not reproduce, distribute, or create derivative works from any
                        materials on the platform without prior written consent.
                    </p>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Termination</h5>
                    <p class="mb-2">
                        We reserve the right to suspend or terminate your access to the platform at any time,
                        without notice, if you violate these terms or engage in any unauthorized activity.
                    </p>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Disclaimer of Warranties</h5>
                    <p>
                        The HR Admin platform is provided on an "as is" and "as available" basis. We do not
                        guarantee that the platform will be error-free, uninterrupted, or free of security
                        vulnerabilities. We disclaim all warranties, express or implied, including but not
                        limited
                        to the implied warranties of merchantability, fitness for a particular purpose, and
                        non-infringement.
                    </p>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Limitation of Liability</h5>
                    <p>
                        In no event shall SmartHR be liable for any direct, indirect, incidental, special, or
                        consequential damages resulting from the use or inability to use the platform, even if
                        we have been advised of the possibility of such damages.
                    </p>
                </div>
                <div class="mb-3">
                    <h5 class="mb-2">Modifications to Terms</h5>
                    <p>
                        We may modify these Terms and Conditions at any time by updating this page. Continued
                        use of the platform following any changes constitutes acceptance of the revised terms.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

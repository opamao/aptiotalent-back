@extends('layouts.master', [
    'title' => 'Analytics',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

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

    <!-- Chart JS -->
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <!-- Chart JS -->
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/plugins/chartjs/chart-data.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Color Picker JS -->
    <script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-colorpicker.js"></script>
    <script src="assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Analytics</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            CRM
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
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
                <div class="input-icon w-120 position-relative mb-2">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar text-gray-9"></i>
                    </span>
                    <input type="text" class="form-control datetimepicker" value="15 Apr 2025">
                </div>
                <div class="head-icons ms-2 ">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Recently Created Contacts</h5>
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="contact-details.html"
                                                    class="avatar avatar-md border avatar-rounded">
                                                    <img src="assets/img/users/user-49.jpg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="contact-details.html">Darlee
                                                            Robertson</a></h6>
                                                    <span class="fs-12 fw-normal ">Facility Manager</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>darlee@example.com </td>
                                        <td>(163) 2459 315</td>
                                        <td>14 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="contact-details.html"
                                                    class="avatar avatar-md border avatar-rounded">
                                                    <img src="assets/img/users/user-50.jpg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="contact-details.html">Sharon Roy</a></h6>
                                                    <span class="fs-12 fw-normal ">Installer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>darlee@example.com </td>
                                        <td>(146) 1249 296 </td>
                                        <td>15 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="contact-details.html"
                                                    class="avatar avatar-md border avatar-rounded">
                                                    <img src="assets/img/users/user-51.jpg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="contact-details.html">Vaughan Lewis</a>
                                                    </h6>
                                                    <span class="fs-12 fw-normal ">Senior Manager</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>vaughan@example.com </td>
                                        <td>(135) 3489 516</td>
                                        <td>16 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="contact-details.html"
                                                    class="avatar avatar-md border avatar-rounded">
                                                    <img src="assets/img/users/user-02.jpg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="contact-details.html">Jessica
                                                            Louise</a></h6>
                                                    <span class="fs-12 fw-normal ">Test Engineer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jessica@example.com</td>
                                        <td>jessica@example.com</td>
                                        <td>17 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="contact-details.html"
                                                    class="avatar avatar-md border avatar-rounded">
                                                    <img src="assets/img/users/user-52.jpg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="contact-details.html">Carol Thomas</a>
                                                    </h6>
                                                    <span class="fs-12 fw-normal ">UI /UX Designer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>carol@example.com</td>
                                        <td>(196) 4862 196</td>
                                        <td>18 Jan 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h6>Won Deals Stage</h6>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border-0 dropdown-toggle btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Sales Pipeline
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <p class="mb-1 fw-medium">Stages Won This Year</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 class="me-2">$45,899,79</h3>
                                <span
                                    class="badge badge-soft-danger border-danger border rounded-pill me-1">$45,899,79</span>
                            </div>
                        </div>
                        <div class="stage-chart-main">
                            <div class="deal-stage-chart">
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-secondary rounded-circle chart-stage-1">
                                    <span class="d-block text-white mb-1">Conversion</span>
                                    <h6 class="text-white">48%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-danger rounded-circle chart-stage-2">
                                    <span class="d-block text-white mb-1">Calls</span>
                                    <h6 class="text-white">24%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-warning rounded-circle chart-stage-3">
                                    <span class="d-block text-white mb-1">Email</span>
                                    <h6 class="text-white">39%</h6>
                                </div>
                                <div
                                    class="text-center d-flex align-items-center justify-content-center flex-column bg-success rounded-circle chart-stage-4">
                                    <span class="d-block text-white mb-1">Chats</span>
                                    <h6 class="text-white">20%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                        <h5>Recent Deals</h5>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="deals.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Deal Name</th>
                                        <th>Stage</th>
                                        <th>Deal Value</th>
                                        <th>Owner</th>
                                        <th>Closed Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6><a href="deals-details.html">Collins</a></h6>
                                        </td>
                                        <td>Quality To Buy</td>
                                        <td>
                                            $4,50,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-32.jpg" alt="Img">
                                                </a>
                                                <h6><a href="#">Anthony Lewis</a></h6>
                                            </div>
                                        </td>
                                        <td>14 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="deals-details.html">Konopelski</a></h6>
                                        </td>
                                        <td>Proposal Made</td>
                                        <td>
                                            $3,15,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-09.jpg" alt="Img">
                                                </a>
                                                <h6><a href="#">Brian Villalobos</a></h6>
                                            </div>
                                        </td>
                                        <td>21 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="deals-details.html">Adams</a></h6>
                                        </td>
                                        <td>Contact Made</td>
                                        <td>
                                            $8,40,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-01.jpg" alt="Img">
                                                </a>
                                                <h6><a href="#">Harvey Smith</a></h6>
                                            </div>
                                        </td>
                                        <td>20 Feb 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="deals-details.html">Schumm</a></h6>
                                        </td>
                                        <td>Quality To Buy</td>
                                        <td>
                                            $6,10,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-33.jpg" alt="Img">
                                                </a>
                                                <h6><a href="#">Stephan Peralt</a></h6>
                                            </div>
                                        </td>
                                        <td>15 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="deals-details.html">Wisozk</a></h6>
                                        </td>
                                        <td>Presentation</td>
                                        <td>
                                            $4,70,000
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-34.jpg" alt="Img">
                                                </a>
                                                <h6><a href="#">Doglas Martini</a></h6>
                                            </div>
                                        </td>
                                        <td>12 Apr 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                        <h5>Recent Leads</h5>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="leads.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Lead Name</th>
                                        <th>Company Name</th>
                                        <th>Stage</th>
                                        <th>Created Date</th>
                                        <th>Lead Owner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6><a href="leads-details.html">Collins</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-01.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">BrightWave
                                                            Innovations</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-secondary d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Contacted
                                            </span>
                                        </td>
                                        <td>
                                            14 Jan 2024
                                        </td>
                                        <td>Hendry</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="leads-details.html">Konopelski</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-02.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Stellar
                                                            Dynamics</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Closed
                                            </span>
                                        </td>
                                        <td>
                                            21 Jan 2024
                                        </td>
                                        <td>Guilory</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="leads-details.html">Adams</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-03.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Quantum Nexus</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Lost
                                            </span>
                                        </td>
                                        <td>
                                            20 Feb 2024
                                        </td>
                                        <td>Jami</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="leads-details.html">Schumm</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-04.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">EcoVision
                                                            Enterprises</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-purple d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Not Contacted
                                            </span>
                                        </td>
                                        <td>
                                            15 Mar 2024
                                        </td>
                                        <td>Theresa</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6><a href="leads-details.html">Wisozk</a></h6>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-05.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Aurora
                                                            Technologies</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-point-filled me-1"></i>
                                                Closed
                                            </span>
                                        </td>
                                        <td>
                                            12 Apr 2024
                                        </td>
                                        <td>Smith</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h6>Deals by Stage</h6>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div>
                            <div class="d-flex align-items-center">
                                <h3 class="me-2">98%</h3>
                                <span
                                    class="badge badge-outline-success bg-success-transparent rounded-pill me-1">12%</span>
                                <span>vs last years</span>
                            </div>
                            <div id="deals_stage"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h6>Recent Activities</h6>
                            <div>
                                <a href="activity.html" class="btn btn-sm btn-light px-3">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body schedule-timeline activity-timeline">
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
                                <i class="ti ti-phone fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Drain responded to your
                                        appointment schedule question.</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-info flex-shrink-0">
                                <i class="ti ti-message-circle-2 fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">You sent 1 Message to the
                                        James.</a></p>
                                <span>10:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
                                <i class="ti ti-phone fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Denwar responded to your
                                        appointment on 25 Jan 2025, 08:15 PM</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="avatar avatar-md avatar-rounded bg-purple flex-shrink-0">
                                <i class="ti ti-user-circle fs-20"></i>
                            </div>
                            <div class="flex-fill ps-3 timeline-flow">
                                <p class="fw-medium text-gray-9 mb-1"><a href="activity.html"
                                        class="d-flex align-items-center">Meeting With <img
                                            src="assets/img/users/user-58.jpg"
                                            class="avatar avatar-sm rounded-circle mx-2" alt="Img">Abraham</a></p>
                                <span>09:25 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h6>Leads by Source</h6>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donut-chart-2"></div>
                        <div>
                            <h6 class="mb-3">Status</h6>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-secondary me-1"></i>Google</p>
                                <p class="f-13 fw-medium text-gray-9">40%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-warning me-1"></i>Paid</p>
                                <p class="f-13 fw-medium text-gray-9">35%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-pink me-1"></i>Campaigns</p>
                                <p class="f-13 fw-medium text-gray-9">15%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-purple me-1"></i>Referals</p>
                                <p class="f-13 fw-medium text-gray-9">10%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <h5>Recently Created Companies</h5>
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);"
                                    class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-01.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">BrightWave
                                                            Innovations</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>darlee@example.com </td>
                                        <td>(163) 2459 315</td>
                                        <td>14 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-02.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Stellar
                                                            Dynamics</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>darlee@example.com </td>
                                        <td>(146) 1249 296 </td>
                                        <td>15 Jan 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="company-details.html"
                                                    class="avatar avatar-md border rounded-circle">
                                                    <img src="assets/img/company/company-03.svg" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="company-details.html">Quantum Nexus</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jessica@example.com</td>
                                        <td>(148) 1229 235</td>
                                        <td>17 Jan 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Todo -->
    <div class="modal fade" id="add_todo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Todo</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="index.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Todo Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Internal</option>
                                        <option>Projects</option>
                                        <option>Meetings</option>
                                        <option>Reminder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Descriptions</label>
                                    <div class="summernote"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Add Assignee</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Sophie</option>
                                        <option>Cameron</option>
                                        <option>Doris</option>
                                        <option>Rufana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Completed</option>
                                        <option>Pending</option>
                                        <option>Onhold</option>
                                        <option>Inprogress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add New Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Todo -->

    <!-- Schedule Timing -->
    <div class="modal fade" id="schedule_timing">
        <div class="modal-dialog modal-dialog-centered modal-lg w-100">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Schedule Timing</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="index.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Schedule Date 1</label>
                                    <div class="input-icon position-relative w-100 me-2">
                                        <input type="text" class="form-control datetimepicker ps-3"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Time</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>11:00 AM-12:00 PM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Schedule Date 2</label>
                                    <div class="input-icon position-relative w-100 me-2">
                                        <input type="text" class="form-control datetimepicker ps-3"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Time</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>11:00 AM-12:00 PM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Schedule Date 3</label>
                                    <div class="input-icon position-relative w-100 me-2">
                                        <input type="text" class="form-control datetimepicker ps-3"
                                            placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Time</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>11:00 AM-12:00 PM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                        <option>10:00 AM-11:00 AM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Schedule Timing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Schedule Timing -->

    <!-- Add Leaves -->
    <div class="modal fade" id="add_leaves">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Leave Request</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="index.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Employee Name</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Harvey Smith</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Leave Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Medical Leave</option>
                                        <option>Casual Leave</option>
                                        <option>Annual Leave</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From </label>
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
                                    <label class="form-label">To </label>
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
                                    <label class="form-label">No of Days</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Remaining Days</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Reason</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Leaves</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Leaves -->
@endsection

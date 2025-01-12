@extends('layouts.master', [
    'title' => 'Blogs',
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

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

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
                <h2 class="mb-1">Blogs</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Content
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_blog"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Blog</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Blogs </h5>
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
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Sort By : Last 7 Days
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                        Added</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-01.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Evlovution</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i> Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-02.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Gertrude
                                    Bowie</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">The
                                    Evolution of HRMS: Manual to Digital</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">3000</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">454</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">102</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">350</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-02.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Guide</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-03.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Edward
                                    Marcus</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">HRMS
                                    Implementation: Step-by-Step Guide</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">2458</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">524</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">248</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">450</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-03.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Security</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-05.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Mark
                                    Phillips</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate"> Data
                                    Security in HRMS: What Matters</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">3000</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">454</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">102</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">350</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-04.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Recruitment</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-04.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Nidia
                                    Hale</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">
                                    Improving Recruitment with HRMS</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">3200</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">424</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">402</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">250</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-05.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Implementation</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-06.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Rebecca
                                    Dale</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate"> Impact
                                    of HRMS on Company Culture</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">2200</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">224</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">122</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">450</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-06.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Benefits</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-08.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Jimmy
                                    Johnson</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">Key
                                    Benefits of Implementing HRMS</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">2800</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">284</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">182</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">680</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-07.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Management</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-07.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Stanley
                                    Pierre</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">Why
                                    Your Company Needs a HRMS</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">4800</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">484</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">490</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">850</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-08.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Management</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-10.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">Alice
                                    Garcia</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">Scaling
                                    Your HR Operations with HRMS</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">3000</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">454</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">102</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">350</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-sec w-100 position-relative mb-3">
                            <a href="blog-categories.html"><img src="assets/img/blogs/blog-09.jpg"
                                    class="img-fluid rounded w-100" alt="img"></a>
                            <div class="">
                                <a href="blog-categories.html"
                                    class="trend-tag badge bg-info-transparent fs-10 fw-medium">Management</a>
                                <span class="badge badge-success dot-icon"><i class="ti ti-point-filled"></i>
                                    Active</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center"><i class="ti ti-calendar me-1"></i> 05 Oct
                                    2024</span>
                                <a href="javascript:void(0);"
                                    class="border-start link-default fs-14 fw-normal ps-2 me-2 text-truncate"><img
                                        src="assets/img/users/user-09.jpg"
                                        class="avatar avatar-xs rounded-circle me-2 flex-shrink-0" alt="Img">James
                                    Currier</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="link-default me-2" data-bs-toggle="modal"
                                    data-bs-target="#edit_blog"><i class="ti ti-edit"></i></a>
                                <a href="#" class="link-default" data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3">
                            <h5 class="mb-3">
                                <a href="blog-categories.html" class="fs-16 fw-medium text-truncate">How
                                    HRMS Drives Organizational Success</a>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div class="me-3">
                                <h6 class="fs-14 fw-medium">4000</h6>
                                <span class="fs-12 fw-normal">Likes</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">554</h6>
                                <span class="fs-12 fw-normal">Comments</span>
                            </div>
                            <div class="border-start text-gray ps-3 me-3">
                                <h6 class="fs-14 fw-medium">202</h6>
                                <span class="fs-12 fw-normal">Share</span>
                            </div>
                            <div class="border-start text-gray ps-3">
                                <h6 class="fs-14 fw-medium">450</h6>
                                <span class="fs-12 fw-normal">Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <a href="#" class="btn btn-white border"><i class="ti ti-loader-3 text-primary me-2"></i>Load More</a>
        </div>
    </div>

    <!-- Add Blog -->
    <div class="modal fade" id="add_blog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Blog</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="blogs.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl bg-white rounded border border-dashed me-2 flex-shrink-0 text-dark frames">
                                        <i class="ti ti-photo text-gray-2 fs-16"></i>
                                    </div>
                                    <div class="profile-upload">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Featured Image</h6>
                                            <p class="fs-12">Image should be below 4 mb</p>
                                        </div>
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Blog Title <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Category <span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Evlovution</option>
                                        <option>Guide</option>
                                        <option>Security</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Tags <span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label" value="HRMS,Recruitment">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote">
                                        <p class="text-gray fw-normal">Write a new comment, send your team
                                            notification by typing @ followed by their name</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 ">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Blog -->

    <!-- Edit Blog -->
    <div class="modal fade" id="edit_blog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Blog</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="blogs.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                        <img src="assets/img/blogs/blog-07.jpg" alt="img" class="rounded">
                                    </div>
                                    <div class="profile-upload">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Featured Image</h6>
                                            <p class="fs-12">Image should be below 4 mb</p>
                                        </div>
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Blog Title <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Category <span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Evlovution</option>
                                        <option>Guide</option>
                                        <option>Security</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="form-label">Tags <span class="text-danger"> *</span></label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text"
                                        data-role="tagsinput" name="Label" value="HRMS,Recruitment">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <div class="summernote">
                                        <p class="text-gray fw-normal">Write a new comment, send your team
                                            notification by typing @ followed by their name</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 ">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                    </select>
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
    <!-- /Edit Blog -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Deletion</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you
                        delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="cronjob-schedule.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection

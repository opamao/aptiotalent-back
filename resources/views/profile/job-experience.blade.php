@extends('layouts.master', [
    'title' => 'Job Experience',
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

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

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

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">
        @include('layouts.status')
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Job Experience</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Job Experience</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_assets"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                        Experience</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
                <div class="modal fade" id="add_assets">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Experience</h4>
                                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ti ti-x"></i>
                                </button>
                            </div>
                            <form action="{{ route('job-experience.store') }}" method="POST" role="form">
                                @csrf
                                <div class="modal-body pb-0">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Experience Name</label>
                                            <input name="libelle" required type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Add Experience</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Assets Lists -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Job Experience List</h5>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Experience Name</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($experiences as $list)
                                <tr>
                                    <td>
                                        <h6 class="fs-14 fw-medium">{{ $list->libelle_experience }}</h6>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_category{{ $list->idjob_experience }}"><i
                                                    class="ti ti-edit"></i></a>
                                            <div class="modal fade" id="edit_category{{ $list->idjob_experience }}">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Experience</h4>
                                                            <button type="button" class="btn-close custom-btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ti ti-x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('job-experience.update', $list->idjob_experience) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="modal-body pb-0">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Experience Name</label>
                                                                            <input name="libelle" required type="text"
                                                                                class="form-control"
                                                                                value="{{ $list->libelle_experience }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light me-2"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal{{ $list->idjob_experience }}"><i
                                                    class="ti ti-trash"></i></a>
                                            <div class="modal fade" id="delete_modal{{ $list->idjob_experience }}">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center">
                                                            <span
                                                                class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                                                                <i class="ti ti-trash-x fs-36"></i>
                                                            </span>
                                                            <h4 class="mb-1">Confirm Delete</h4>
                                                            <p class="mb-3">You want to delete all the marked items, this
                                                                cant be undone once you
                                                                delete.</p>
                                                            <form
                                                                action="{{ route('job-experience.destroy', $list->idjob_experience) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="d-flex justify-content-center">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-light me-3"
                                                                        data-bs-dismiss="modal">Cancel</a>
                                                                    <button type="submit" class="btn btn-danger">Yes,
                                                                        Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

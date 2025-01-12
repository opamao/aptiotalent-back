@extends('layouts.master', [
    'title' => 'Security setting',
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
                <a class="nav-link active" href="profile-settings.html"><i class="ti ti-settings me-2"></i>General
                    Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bussiness-settings.html"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
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
                            <a href="profile-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Profile
                                Settings</a>
                            <a href="security-settings.html"
                                class="d-inline-flex align-items-center rounded active py-2 px-3"><i
                                    class="ti ti-arrow-badge-right me-2"></i>Security Settings</a>
                            <a href="notification-settings.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Notifications</a>
                            <a href="connected-apps.html"
                                class="d-inline-flex align-items-center rounded py-2 px-3">Connected Apps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Security Settings</h4>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Password</h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">Set a unique password to protect
                                            the account</p>
                                        <p>Last Changed 03 Jan 2024, 09:00 AM</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-password">Change Pasword</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Two Factor Authentication</h5>
                                    <p>Receive codes via SMS or email every time you login</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm">Enable</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium d-flex align-items-center mb-1">
                                        Google Authentication
                                        <span
                                            class="badge badge-xs ms-2 bg-outline-success rounded-pill d-flex align-items-center">
                                            <i class="ti ti-point-filled"></i>Connected
                                        </span>
                                    </h5>
                                    <p>Connect to Google</p>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-check-md form-switch me-2">
                                        <input class="form-check-input me-2" type="checkbox" role="switch">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium d-flex align-items-center mb-1">Phone Number
                                        Verification <span><i
                                                class="ti ti-discount-check-filled text-success ms-2"></i></span>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">The Phone Number associated with
                                            the account</p>
                                        <p>Verified Mobile Number : +99264710583</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-outline-light btn-sm border me-2">Remove</a>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-phone">Change </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium d-flex align-items-center mb-1">Email Verification
                                        <span><i class="ti ti-discount-check-filled text-success ms-2"></i></span>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2 pe-2 border-end">The email address associated with
                                            the account</p>
                                        <p>Verified Email : info@example.com</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-outline-light btn-sm border me-2">Remove</a>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#change-email">Change </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Device Management</h5>
                                    <p>The devices associated with the account</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#device_management">Manage</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Account Activity</h5>
                                    <p>The activities of the account</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#account_activity">View</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom mb-3">
                                <div class="mb-3">
                                    <h5 class="fw-medium mb-1">Deactivate Account</h5>
                                    <p>This will shutdown your account. Your account will be reactive when you
                                        sign in again</p>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-dark btn-sm">Deactivate</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <div>
                                    <h5 class="fw-medium mb-1">Delete Account</h5>
                                    <p>Your account will be permanently deleted</p>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#del-account">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password -->
    <div class="modal fade custom-modal" id="change-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Password</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="success.html">
                        <div class="mb-3">
                            <label class="form-label">Current Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control">
                                <span class="ti toggle-password ti-eye-off"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Current Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="pass-inputs form-control">
                                <span class="ti toggle-passwords ti-eye-off"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-inputa">
                                <span class="ti toggle-passworda ti-eye-off"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Password -->

    <!-- Change Email -->
    <div class="modal fade custom-modal" id="change-email">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Email</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="provider-security-settings.html">
                        <div class="wallet-add">
                            <div class="mb-3">
                                <label class="form-label">Current Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Email -->

    <!-- Change Phone -->
    <div class="modal fade custom-modal" id="change-phone">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Phone Number</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="provider-security-settings.html">
                        <div class="wallet-add">
                            <div class="mb-3">
                                <label class="form-label">Current Phone Number</label>
                                <input class="form-control form-control-lg group_formcontrol" id="phone"
                                    name="phone" type="text" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control form-control-lg group_formcontrol" id="phone1"
                                    name="phone" type="text" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-dark" type="submit">Change Number</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Phone -->

    <!-- Device Management -->
    <div class="modal fade custom-modal" id="device_management">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Device Management</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body">
                    <div class="table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Device</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>IP Address</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chrome - Windows</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>232.222.12.72</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>10 Apr 2025, 05:15 PM</td>
                                    <td>New York / USA</td>
                                    <td>224.111.12.75</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Firefox Windows</td>
                                    <td>15 Mar 2025, 02:40 PM</td>
                                    <td>New York / USA</td>
                                    <td>111.222.13.28</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>333.555.10.54</td>
                                    <td>
                                        <span><i class="ti ti-trash text-gray-6"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Device Management -->

    <!-- Activity Management -->
    <div class="modal fade custom-modal" id="account_activity">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Account Activity</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body">
                    <div class="table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Device</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>IP Address</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chrome - Windows</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>232.222.12.72</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>10 Apr 2025, 05:15 PM</td>
                                    <td>New York / USA</td>
                                    <td>224.111.12.75</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Firefox Windows</td>
                                    <td>15 Mar 2025, 02:40 PM</td>
                                    <td>New York / USA</td>
                                    <td>111.222.13.28</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari Macos</td>
                                    <td>15 May 2025, 10:30 AM</td>
                                    <td>New York / USA</td>
                                    <td>333.555.10.54</td>
                                    <td>
                                        <span class="badge badge-sm badge-success"><i
                                                class="ti ti-point-filled me-1"></i>connect</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Activity Management -->

    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="security-settings.html">
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to delete This Account? To delete your account,
                            Type your password.</p>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-inputa">
                                <span class="ti toggle-passworda ti-eye-off"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Delete Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->
@endsection

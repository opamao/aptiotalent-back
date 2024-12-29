@extends('layouts.master', [
    'title' => 'video call',
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

    <!-- Custom JS -->
    <script src="assets/js/chat.js"></script>
    <script src="assets/js/theme-colorpicker.js"></script>
    <script src="assets/js/script.js"></script>
@endpush

@push('modale')
    <!-- Add New Event -->
    <div class="modal fade" id="add_event">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Event</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="calendar.html">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>pending</option>
                                        <option>Onhold</option>
                                        <option>Inprogress</option>
                                        <option>Done</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Time</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Time</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control timepicker">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Location</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Descriptions</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Event -->

    <!-- Event -->
    <div class="modal fade" id="event_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark modal-bg">
                    <h4 class="modal-title text-white"><span id="eventTitle"></span></h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-calendar-check text-default me-2"></i>26 July,2024 to 31 July,2024</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-calendar-check text-default me-2"></i>11:00 AM to 12:15 PM</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-3"><i
                            class="ti ti-map-pin-bolt text-default me-2"></i>Las Vegas, US</p>
                    <p class="d-flex align-items-center fw-medium text-black mb-0"><i
                            class="ti ti-calendar-check text-default me-2"></i>A recurring or repeating event is simply any
                        event that you will occur more than once on your calendar.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Event -->
@endpush

@section('content')
    <div class="content pb-4">
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Calls</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Application
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Calls</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">
                    <div class="input-icon-start position-relative">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="mb-2">
                    <a href="#" class="btn btn-primary d-flex align-items-center"><i
                            class="ti ti-circle-plus me-2"></i>Add People</a>
                </div>
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- Video -->
            <div class="col-xxl-12">
                <div class="single-video d-flex">
                    <div class="join-video flex-fill">
                        <img src="assets/img/video/video.jpg" class="img-fluid" alt="Logo">
                        <div class="chat-active-users">
                            <div class="video-avatar">
                                <img src="assets/img/video/user-01.jpg" class="img-fluid" alt="Logo">
                                <div class="user-name">
                                    <span>Joanne Conner</span>
                                </div>
                            </div>
                        </div>

                        <div class="record-item d-flex align-items-center">
                            <div class="record-time me-2">
                                <span>40:12</span>
                            </div>
                            <a href="javascript:void(0);" class="video-expand btnFullscreen	">
                                <i class="ti ti-maximize"></i>
                            </a>
                        </div>
                        <div class="more-icon">
                            <a href="javascript:void(0);" class="mic-off">
                                <i class="bx bx-microphone-off"></i>
                            </a>
                        </div>
                        <div
                            class="call-overlay-bottom d-flex justify-content-sm-between align-items-center flex-wrap w-100">
                            <a href="javascript:void(0);"
                                class="options-icon d-flex align-items-center justify-content-center guest-off rounded"><i
                                    class="ti ti-user-off"></i></a>
                            <div class="call-option rounded-pill d-flex justify-content-center align-items-center">
                                <a href="javascript:void(0);"
                                    class="options-icon bg-light d-flex justify-content-center align-items-center rounded me-2"><i
                                        class="ti ti-microphone"></i></a>
                                <a href="javascript:void(0);"
                                    class="options-icon bg-light d-flex justify-content-center align-items-center rounded me-2"><i
                                        class="ti ti-video"></i></a>
                                <a href="javascript:void(0);"
                                    class="call-icon bg-danger d-flex justify-content-center align-items-center rounded"><i
                                        class="ti ti-phone"></i></a>
                                <a href="javascript:void(0);"
                                    class="options-icon bg-light d-flex justify-content-center align-items-center rounded mx-2"><i
                                        class="ti ti-volume"></i></a>
                                <a href="javascript:void(0);"
                                    class="options-icon bg-light d-flex justify-content-center align-items-center rounded"><i
                                        class="ti ti-device-imac-share"></i></a>
                            </div>
                            <a href="javascript:void(0);"
                                class="options-icon bg-light d-flex align-items-center justify-content-center rounded"
                                id="show-message"><i class="ti ti-dots"></i></a>
                        </div>
                    </div>
                    <div class="right-user-side chat-rooms" id="chat-room">
                        <div class="card slime-grp border-0 mb-0">
                            <div class="card-header p-3 pb-0 border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Chat</h5>
                                    <a href="#"
                                        class="close_profile close_profile4 avatar avatar-sm mb-0 rounded-circle bg-danger">
                                        <i class="ti ti-x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body slimscroll p-3">
                                <div>
                                    <div class="chat-msg-blk p-0">
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Hi Everyone.!</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats chats-right">
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Good Morning..! Today we have meeting about the new policy.</h4>
                                                </div>
                                                <div class="chat-profile-name text-end">
                                                    <h6><i class="bx bx-check-double"></i> 10:00</h6>
                                                </div>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 ms-2">
                                                <img src="assets/img/users/user-02.jpg" alt="image">
                                            </div>
                                        </div>
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Great.! This is the second new product that comes in this week.</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Nice..which category it belongs to?</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Great.! This is the second new product that comes in
                                                        this week.</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Hi.! Good Morning all.</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Nice..which category it belongs to?</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chats chats-right">
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Good Morning..! Today we have meeting about the new
                                                        product.</h4>
                                                </div>
                                                <div class="chat-profile-name text-end">
                                                    <h6><i class="bx bx-check-double"></i> 10:00</h6>
                                                </div>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 ms-2">
                                                <img src="assets/img/users/user-02.jpg" alt="image">
                                            </div>
                                        </div>
                                        <div class="chats mb-0">
                                            <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-01.jpg" alt="image">
                                            </div>
                                            <div class="chat-content flex-fill">
                                                <div class="message-content">
                                                    <h4>Great.! This is the second new product that comes in
                                                        this week.</h4>
                                                </div>
                                                <div class="chat-profile-name d-flex justify-content-end">
                                                    <h6>10:00 AM</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer">
                                        <form>
                                            <div class="smile-col comman-icon">
                                                <a href="#"><i class="far fa-smile"></i></a>
                                            </div>
                                            <div class="attach-col comman-icon">
                                                <a href="#"><i class="fas fa-paperclip"></i></a>
                                            </div>
                                            <div class="micro-col comman-icon">
                                                <a href="#"><i class="bx bx-microphone"></i></a>
                                            </div>
                                            <input type="text" class="form-control chat_form"
                                                placeholder="Enter Message.....">
                                            <div class="send-chat comman-icon">
                                                <a href="#" class="rounded"><i data-feather="send"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Video -->

        </div>
    </div>
@endsection

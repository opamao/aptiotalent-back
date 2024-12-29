@extends('layouts.master', [
    'title' => 'Chat',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

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

    <!-- Custom JS -->
    <script src="assets/js/chat.js"></script>
    <script src="assets/js/theme-colorpicker.js"></script>
    <script src="assets/js/script.js"></script>
@endpush

@section('content')
    <div class="content">
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Chat</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Application
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Chat</li>
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
        <div class="chat-wrapper">
            <!-- Chats sidebar -->
            <div class="sidebar-group">
                <div id="chats" class="sidebar-content active slimscroll">

                    <div class="slimscroll">

                        <div class="chat-search-header">
                            <div class="header-title d-flex align-items-center justify-content-between">
                                <h4 class="mb-3">Chats</h4>
                            </div>

                            <!-- Chat Search -->
                            <div class="search-wrap">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="Search For Contacts or Messages">
                                        <span class="input-group-text"><i class="ti ti-search"></i></span>
                                    </div>
                                </form>
                            </div>
                            <!-- /Chat Search -->
                        </div>

                        <div class="sidebar-body chat-body" id="chatsidebar">

                            <!-- Left Chat Title -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="chat-title">All Chats</h5>
                            </div>
                            <!-- /Left Chat Title -->

                            <div class="chat-users-wrap">
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Anthony Lewis</h6>
                                                <p><span class="animate-typing">is typing
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">02:40 PM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-pin me-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark
                                                    as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark
                                                    as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin
                                                    Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-01.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Elliot Murray</h6>
                                                <p><i class="ti ti-file me-1"></i>Document</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">06:12 AM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-checks text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Stephan Peralt</h6>
                                                <p class="text-danger"><i class="ti ti-video-off me-2"></i>Missed Video
                                                    Call</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">03:15 AM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-pin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-18.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Rebecca Smtih</h6>
                                                <p>Hi How are you 🔥</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">Sunday</span>
                                                <div class="chat-pin">
                                                    <span class="count-message fs-12 fw-semibold">25</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Harvey Smith</h6>
                                                <p>Haha oh man 🔥</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">03:15 AM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-pin me-2"></i>
                                                    <span class="count-message fs-12 fw-semibold">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-03.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Lori Broaddus</h6>
                                                <p>Do you know which...</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">02:40 PM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-heart-filled text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-15.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Brian Villalobos</h6>
                                                <p>Do you know which...</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">06:12 AM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-pin me-2"></i>
                                                    <i class="ti ti-checks text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-08.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Linda Ray</h6>
                                                <p><i class="ti ti-photo me-2"></i>Photo</p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">Wednesday</span>
                                                <div class="chat-pin">
                                                    <span class="count-message fs-12 fw-semibold">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-list">
                                    <a href="#" class="chat-user-list">
                                        <div class="avatar avatar-lg online me-2">
                                            <img src="assets/img/profiles/avatar-07.jpg" class="rounded-circle"
                                                alt="image">
                                        </div>
                                        <div class="chat-user-info">
                                            <div class="chat-user-msg">
                                                <h6>Doglas Martini</h6>
                                                <p class="text-success"><i
                                                        class="ti ti-video-plus text-success me-2"></i>Incoming Video Call
                                                </p>
                                            </div>
                                            <div class="chat-user-time">
                                                <span class="time">02:40 PM</span>
                                                <div class="chat-pin">
                                                    <i class="ti ti-heart-filled text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="chat-dropdown">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-pinned me-2"></i>Pin Chats</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- / Chats sidebar -->

            <!-- Chat -->
            <div class="chat chat-messages show" id="middle">
                <div>
                    <div class="chat-header">
                        <div class="user-details">
                            <div class="d-xl-none">
                                <a class="text-muted chat-close me-2" href="#">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                            <div class="avatar avatar-lg online flex-shrink-0">
                                <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="image">
                            </div>
                            <div class="ms-2 overflow-hidden">
                                <h6>Anthony Lewis</h6>
                                <span class="last-seen">Online</span>
                            </div>
                        </div>
                        <div class="chat-options">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="btn chat-search-btn" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Search">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn no-bg" href="#" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a href="#" class="dropdown-item"><i
                                                    class="ti ti-volume-off me-2"></i>Mute Notification</a></li>
                                        <li><a href="#" class="dropdown-item"><i
                                                    class="ti ti-clock-hour-4 me-2"></i>Disappearing Message</a></li>
                                        <li><a href="#" class="dropdown-item"><i
                                                    class="ti ti-clear-all me-2"></i>Clear Message</a></li>
                                        <li><a href="#" class="dropdown-item"><i
                                                    class="ti ti-trash me-2"></i>Delete Chat</a></li>
                                        <li><a href="#" class="dropdown-item"><i
                                                    class="ti ti-ban me-2"></i>Block</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Chat Search -->
                        <div class="chat-search search-wrap contact-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Contacts">
                                    <span class="input-group-text"><i class="ti ti-search"></i></span>
                                </div>
                            </form>
                        </div>
                        <!-- /Chat Search -->
                    </div>
                    <div class="chat-body chat-page-group slimscroll">
                        <div class="messages">
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Hi John, I wanted to update you on a new company policy regarding remote work.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Anthony Lewis<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">08:00 AM</span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Do you have a moment?
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Anthony Lewis<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">08:00 AM</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Sure, Sarah. What’s the new policy?
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">08:00
                                                AM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Starting next month, we’ll be implementing a hybrid work model. Employees can
                                            work from home up to three days a week.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Anthony Lewis<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">08:00 AM</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            That sounds great! Are there any specific requirements for tracking our hours
                                            when working remotely?
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">08:00
                                                AM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                            </div>
                            <div class="chat-line">
                                <span class="chat-date">Today, July 24</span>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Yes, we’ll be using a time-tracking tool to log hours. You’ll need to ensure
                                            you’re available during your usual working hours and keep your manager updated
                                            if anything changes.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Anthony Lewis<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">08:00 AM</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Got it. Do we need to fill out any forms to start working remotely?
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">08:00
                                                AM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle dreams_chat"
                                        alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="message-content">
                                        <span class="animate-typing">is typing
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </span>
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                                            class="ti ti-mood-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="javascript:void(0);"><img
                                                                        src="assets/img/icons/emonji-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:void(0);"><img
                                                                        src="assets/img/icons/emonji-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:void(0);"><img
                                                                        src="assets/img/icons/emonji-06.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:void(0);"><img
                                                                        src="assets/img/icons/emonji-07.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="javascript:void(0);"><img
                                                                        src="assets/img/icons/emonji-08.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                        class="ti ti-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#"><i class="ti ti-arrow-forward-up"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <form class="footer-form">
                        <div class="chat-footer-wrap">
                            <div class="form-item">
                                <a href="#" class="action-circle"><i class="ti ti-microphone"></i></a>
                            </div>
                            <div class="form-wrap">
                                <input type="text" class="form-control" placeholder="Type Your Message">
                            </div>
                            <div class="form-item emoj-action-foot">
                                <a href="#" class="action-circle"><i class="ti ti-mood-smile"></i></a>
                                <div class="emoj-group-list-foot down-emoji-circle">
                                    <ul>
                                        <li><a href="javascript:void(0);"><img src="assets/img/icons/emonji-02.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img src="assets/img/icons/emonji-05.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img src="assets/img/icons/emonji-06.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img src="assets/img/icons/emonji-07.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img src="assets/img/icons/emonji-08.svg"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="javascript:void(0);"><i
                                                    class="ti ti-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-item position-relative d-flex align-items-center justify-content-center ">
                                <a href="#" class="action-circle file-action position-absolute">
                                    <i class="ti ti-folder"></i>
                                </a>
                                <input type="file" class="open-file position-relative" name="files"
                                    id="files">
                            </div>
                            <div class="form-item">
                                <a href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-3">
                                    <a href="#" class="dropdown-item"><i
                                            class="ti ti-camera-selfie me-2"></i>Camera</a>
                                    <a href="#" class="dropdown-item"><i
                                            class="ti ti-photo-up me-2"></i>Gallery</a>
                                    <a href="#" class="dropdown-item"><i class="ti ti-music me-2"></i>Audio</a>
                                    <a href="#" class="dropdown-item"><i
                                            class="ti ti-map-pin-share me-2"></i>Location</a>
                                    <a href="#" class="dropdown-item"><i
                                            class="ti ti-user-check me-2"></i>Contact</a>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn btn-primary" type="submit">
                                    <i class="ti ti-send"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Chat -->
        </div>
    </div>
@endsection

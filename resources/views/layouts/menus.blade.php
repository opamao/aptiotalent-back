 <!-- Sidebar -->
 <div class="sidebar" id="sidebar">
     <!-- Logo -->
     <div class="sidebar-logo">
         <a href="#" class="logo logo-normal">
             <img src="{{ URL::asset('') }}assets/img/logo.svg" alt="Logo">
         </a>
         <a href="#" class="logo-small">
             <img src="{{ URL::asset('') }}assets/img/logo-small.svg" alt="Logo">
         </a>
         <a href="#" class="dark-logo">
             <img src="{{ URL::asset('') }}assets/img/logo-white.svg" alt="Logo">
         </a>
     </div>
     <!-- /Logo -->
     <div class="modern-profile p-3 pb-0">
         <div class="text-center rounded bg-light p-3 mb-4 user-profile">
             <div class="avatar avatar-lg online mb-3">
                 <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg" alt="Img"
                     class="img-fluid rounded-circle">
             </div>
             <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
             <p class="fs-10">System Admin</p>
         </div>
         <div class="sidebar-nav mb-3">
             <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                 <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                 <li class="nav-item"><a class="nav-link border-0" href="#">Chats</a></li>
                 <li class="nav-item"><a class="nav-link border-0" href="#">Inbox</a></li>
             </ul>
         </div>
     </div>
     <div class="sidebar-header p-3 pb-0 pt-2">
         <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
             <div class="avatar avatar-md onlin">
                 <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg" alt="Img"
                     class="img-fluid rounded-circle">
             </div>
             <div class="text-start sidebar-profile-info ms-2">
                 <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                 <p class="fs-10">System Admin</p>
             </div>
         </div>
         <div class="input-group input-group-flat d-inline-flex mb-4">
             <span class="input-icon-addon">
                 <i class="ti ti-search"></i>
             </span>
             <input type="text" class="form-control" placeholder="Search in HRMS">
             <span class="input-group-text">
                 <kbd>CTRL + / </kbd>
             </span>
         </div>
         <div class="d-flex align-items-center justify-content-between menu-item mb-3">
             <div class="me-3">
                 <a href="calendar" class="btn btn-menubar">
                     <i class="ti ti-layout-grid-remove"></i>
                 </a>
             </div>
             <div class="me-3">
                 <a href="{{ url('chat') }}" class="btn btn-menubar position-relative">
                     <i class="ti ti-brand-hipchat"></i>
                     <span
                         class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                 </a>
             </div>
             <div class="me-3 notification-item">
                 <a href="{{ url('activity') }}" class="btn btn-menubar position-relative me-1">
                     <i class="ti ti-bell"></i>
                     <span class="notification-status-dot"></span>
                 </a>
             </div>
             <div class="me-0">
                 <a href="{{ url('email') }}" class="btn btn-menubar">
                     <i class="ti ti-message"></i>
                 </a>
             </div>
         </div>
     </div>
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title"><span>MAIN MENU</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('admin-dashboard') ? 'active subdrop' : '' }}
                                 {{ Request::is('employee-dashboard') ? 'active subdrop' : '' }}
                                  {{ Request::is('deals-dashboard') ? 'active subdrop' : '' }}
                                   {{ Request::is('leads-dashboard') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-smart-home"></i>
                                 <span>Tableau de bord</span>
                                 {{-- <span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span> --}}
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li>
                                     <a href="{{ url('admin-dashboard') }}"
                                         class="{{ Request::is('admin-dashboard') ? 'active' : '' }}">Admin</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('employee-dashboard') }}"
                                         class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Employé</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('deals-dashboard') }}"
                                         class="{{ Request::is('deals-dashboard') ? 'active' : '' }}">Deals</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('leads-dashboard') }}"
                                         class="{{ Request::is('leads-dashboard') ? 'active' : '' }}">Leads</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('chat') ? 'active subdrop' : '' }}
                                 {{ Request::is('call') ? 'active subdrop' : '' }}
                                  {{ Request::is('voice-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('video-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('outgoing-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('call-history') ? 'active subdrop' : '' }}
                                   {{ Request::is('incoming-call') ? 'active subdrop' : '' }}
                                   {{ Request::is('calendar') ? 'active subdrop' : '' }}
                                    ">
                                 <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('chat') }}"
                                         class="{{ Request::is('chat') ? 'active' : '' }}">Chat</a></li>
                                 <li class="submenu submenu-two">
                                     <a href="{{ url('call') }}"
                                         class="{{ Request::is('call') ? 'active subdrop' : '' }}
                                         {{ Request::is('voice-call') ? 'active subdrop' : '' }}
                                          {{ Request::is('video-call') ? 'active subdrop' : '' }}
                                           {{ Request::is('outgoing-call') ? 'active subdrop' : '' }}
                                           {{ Request::is('call-history') ? 'active subdrop' : '' }}
                                            {{ Request::is('incoming-call') ? 'active subdrop' : '' }}">Calls<span
                                             class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('voice-call') }}"
                                                 class="{{ Request::is('voice-call') ? 'active' : '' }}">Voice
                                                 Call</a></li>
                                         <li><a href="{{ url('video-call') }}"
                                                 class="{{ Request::is('video-call') ? 'active' : '' }}">Video
                                                 Call</a></li>
                                         <li><a href="{{ url('outgoing-call') }}"
                                                 class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Outgoing
                                                 Call</a></li>
                                         <li><a href="{{ url('incoming-call') }}"
                                                 class="{{ Request::is('incoming-call') ? 'active' : '' }}">Incoming
                                                 Call</a></li>
                                         <li><a href="{{ url('call-history') }}"
                                                 class="{{ Request::is('call-history') ? 'active' : '' }}">Call
                                                 History</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="{{ url('calendar') }}"
                                         class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="#"
                                 class="{{ Request::is('dashboard') ? 'active subdrop' : '' }}
                                 {{ Request::is('companies') ? 'active subdrop' : '' }}
                                  {{ Request::is('subscription') ? 'active subdrop' : '' }}
                                   {{ Request::is('packages') ? 'active subdrop' : '' }}
                                    {{ Request::is('packages-grid') ? 'active subdrop' : '' }}
                                   {{ Request::is('domain') ? 'active subdrop' : '' }}
                                   {{ Request::is('purchase-transaction') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-user-star"></i><span>Super Admin</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('dashboard') }}"
                                         class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                                 </li>
                                 <li><a href="{{ url('companies') }}"
                                         class="{{ Request::is('companies') ? 'active' : '' }}">Companies</a>
                                 </li>
                                 <li><a href="{{ url('subscription') }}"
                                         class="{{ Request::is('subscription') ? 'active' : '' }}">Subscriptions</a>
                                 </li>
                                 <li><a href="{{ url('packages') }}"
                                         class="{{ Request::is('packages') ? 'active' : '' }}{{ Request::is('packages-grid') ? 'active' : '' }}">Packages</a>
                                 </li>
                                 <li><a href="{{ url('domain') }}"
                                         class="{{ Request::is('domain') ? 'active' : '' }}">Domain</a></li>
                                 <li><a href="{{ url('purchase-transaction') }}"
                                         class="{{ Request::is('purchase-transaction') ? 'active' : '' }}">Purchase
                                         Transaction</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 {{-- <li class="menu-title"><span>PROJECTS</span></li>
                <li>
                    <ul>
                        <li>
                            <a href="clients-grid">
                                <i class="ti ti-users-group"></i><span>Clients</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-box"></i><span>Projects</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="projects-grid">Projects</a></li>
                                <li><a href="tasks">Tasks</a></li>
                                <li><a href="task-board">Task Board</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                 <li class="menu-title"><span>CRM</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('contacts-grid') }}"
                                 class="{{ Request::is('contacts-grid') ? 'active' : '' }}{{ Request::is('contact-details') ? 'active' : '' }}">
                                 <i class="ti ti-user-shield"></i><span>Contacts</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('companies-grid') }}"
                                 class="{{ Request::is('companies-grid') ? 'active' : '' }}">
                                 <i class="ti ti-building"></i><span>Companies</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('deals-grid') }}"
                                 class="{{ Request::is('deals-grid') ? 'active' : '' }}">
                                 <i class="ti ti-heart-handshake"></i><span>Deals</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('leads-grid') }}"
                                 class="{{ Request::is('leads-grid') ? 'active' : '' }}">
                                 <i class="ti ti-user-check"></i><span>Leads</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('pipeline') }}" class="{{ Request::is('pipeline') ? 'active' : '' }}">
                                 <i class="ti ti-timeline-event-text"></i><span>Pipeline</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('analytics') }}"
                                 class="{{ Request::is('analytics') ? 'active' : '' }}">
                                 <i class="ti ti-graph"></i><span>Analytics</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('activity') }}" class="{{ Request::is('activity') ? 'active' : '' }}">
                                 <i class="ti ti-activity"></i><span>Activities</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{-- <li class="menu-title"><span>HRM</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-users"></i><span>Employees</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="employees">Employee Lists</a></li>
                                <li><a href="employees-grid">Employee Grid</a></li>
                                <li><a href="employee-details">Employee Details</a></li>
                                <li><a href="departments">Departments</a></li>
                                <li><a href="designations">Designations</a></li>
                                <li><a href="policy">Policies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-ticket"></i><span>Tickets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="tickets">Tickets</a></li>
                                <li><a href="ticket-details">Ticket Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holidays">
                                <i class="ti ti-calendar-event"></i><span>Holidays</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-time"></i><span>Attendance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Leaves<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="leaves">Leaves (Admin)</a></li>
                                        <li><a href="leaves-employee">Leave (Employee)</a></li>
                                        <li><a href="leave-settings">Leave Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="attendance-admin">Attendance (Admin)</a></li>
                                <li><a href="attendance-employee">Attendance (Employee)</a></li>
                                <li><a href="timesheets">Timesheets</a></li>
                                <li><a href="schedule-timing">Shift & Schedule</a></li>
                                <li><a href="overtime">Overtime</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-school"></i><span>Performance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="performance-indicator">Performance Indicator</a></li>
                                <li><a href="performance-review">Performance Review</a></li>
                                <li><a href="performance-appraisal">Performance Appraisal</a></li>
                                <li><a href="goal-tracking">Goal List</a></li>
                                <li><a href="goal-type">Goal Type</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-edit"></i><span>Training</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="training">Training List</a></li>
                                <li><a href="trainers">Trainers</a></li>
                                <li><a href="training-type">Training Type</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="promotion">
                                <i class="ti ti-speakerphone"></i><span>Promotion</span>
                            </a>
                        </li>
                        <li>
                            <a href="resignation">
                                <i class="ti ti-external-link"></i><span>Resignation</span>
                            </a>
                        </li>
                        <li>
                            <a href="termination">
                                <i class="ti ti-circle-x"></i><span>Termination</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                 <li class="menu-title"><span>RECRUITMENT</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('job-grid') }}" class="{{ Request::is('job-grid') ? 'active' : '' }}">
                                 <i class="ti ti-timeline"></i><span>Jobs</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('candidates-grid') }}"
                                 class="{{ Request::is('candidates-grid') ? 'active' : '' }}">
                                 <i class="ti ti-user-shield"></i><span>Candidates</span>
                             </a>
                         </li>
                         {{-- <li>
                             <a href="{{ url('refferals') }}"
                                 class="{{ Request::is('refferals') ? 'active' : '' }}">
                                 <i class="ti ti-ux-circle"></i><span>Referrals</span>
                             </a>
                         </li> --}}
                     </ul>
                 </li>
                 {{-- <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="estimates">Estimates</a></li>
                                <li><a href="invoices">Invoices</a></li>
                                <li><a href="payments">Payments</a></li>
                                <li><a href="expenses">Expenses</a></li>
                                <li><a href="provident-fund">Provident Fund</a></li>
                                <li><a href="taxes">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-dollar"></i><span>Accounting</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="categories">Categories</a></li>
                                <li><a href="budgets">Budgets</a></li>
                                <li><a href="budget-expenses">Budget Expenses</a></li>
                                <li><a href="budget-revenues">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-cash"></i><span>Payroll</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="employee-salary">Employee Salary</a></li>
                                <li><a href="payslip">Payslip</a></li>
                                <li><a href="payroll">Payroll Items</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                 <li class="menu-title"><span>ADMINISTRATION</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('assetes') ? 'active subdrop' : '' }}
                                 {{ Request::is('asset-categories') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-cash"></i><span>Assets</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li>
                                     <a href="{{ url('assetes') }}"
                                         class="{{ Request::is('assetes') ? 'active' : '' }}">Assets</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('asset-categories') }}"
                                         class="{{ Request::is('asset-categories') ? 'active' : '' }}">Asset
                                         Categories</a>
                                 </li>
                             </ul>
                         </li>
                         {{-- <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('knowledgebase') ? 'active subdrop' : '' }}
                                 {{ Request::is('activity') ? 'active subdrop' : '' }}
                                  ">
                                 <i class="ti ti-headset"></i><span>Help & Supports</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('knowledgebase') }}"
                                         class="{{ Request::is('knowledgebase') ? 'active' : '' }}">Knowledge
                                         Base</a></li>
                                 <li><a href="{{ url('activity') }}"
                                         class="{{ Request::is('activity') ? 'active' : '' }}">Activities</a>
                                 </li>
                             </ul>
                         </li> --}}
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('users') ? 'active subdrop' : '' }}
                                 {{ Request::is('roles-permissions') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-user-star"></i><span>User Management</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('users') }}"
                                         class="{{ Request::is('users') ? 'active' : '' }}">Users</a></li>
                                 <li><a href="{{ url('roles-permissions') }}"
                                         class="{{ Request::is('roles-permissions') ? 'active' : '' }}">Roles &
                                         Permissions</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('expenses-report') ? 'active subdrop' : '' }}
                                 {{ Request::is('invoice-report') ? 'active subdrop' : '' }}
                                  {{ Request::is('payment-report') ? 'active subdrop' : '' }}
                                   {{ Request::is('user-report') ? 'active subdrop' : '' }}
                                   {{ Request::is('employee-report') ? 'active subdrop' : '' }}
                                   {{ Request::is('payslip-report') ? 'active subdrop' : '' }}
                                    ">
                                 <i class="ti ti-user-star"></i><span>Reports</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('expenses-report') }}"
                                         class="{{ Request::is('expenses-report') ? 'active' : '' }}">Expense
                                         Report</a></li>
                                 <li><a href="{{ url('invoice-report') }}"
                                         class="{{ Request::is('invoice-report') ? 'active' : '' }}">Invoice
                                         Report</a></li>
                                 <li><a href="{{ url('payment-report') }}"
                                         class="{{ Request::is('payment-report') ? 'active' : '' }}">Payment
                                         Report</a></li>
                                 <li><a href="{{ url('user-report') }}"
                                         class="{{ Request::is('user-report') ? 'active' : '' }}">User Report</a>
                                 </li>
                                 <li><a href="{{ url('employee-report') }}"
                                         class="{{ Request::is('employee-report') ? 'active' : '' }}">Employee
                                         Report</a></li>
                                 <li><a href="{{ url('payslip-report') }}"
                                         class="{{ Request::is('payslip-report') ? 'active' : '' }}">Payslip
                                         Report</a></li>
                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('clear-cache') ? 'active subdrop' : '' }}
                                 {{ Request::is('profile-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('security-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('notification-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('connected-apps') ? 'active subdrop' : '' }}
                                     {{ Request::is('bussiness-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('seo-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('localization-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('prefixes') ? 'active subdrop' : '' }}
                                   {{ Request::is('preferences') ? 'active subdrop' : '' }}
                                   {{ Request::is('performance-appraisal') ? 'active subdrop' : '' }}
                                   {{ Request::is('language') ? 'active subdrop' : '' }}
                                   {{ Request::is('authentication-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('ai-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('salary-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('approval-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('invoice-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('leave-type') ? 'active subdrop' : '' }}
                                   {{ Request::is('custom-fields') ? 'active subdrop' : '' }}
                                    {{ Request::is('email-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('email-template') ? 'active subdrop' : '' }}
                                  {{ Request::is('sms-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('sms-template') ? 'active subdrop' : '' }}
                                   {{ Request::is('otp-settings') ? 'active subdrop' : '' }}
                                    {{ Request::is('payment-gateways') ? 'active subdrop' : '' }}
                                 {{ Request::is('tax-rates') ? 'active subdrop' : '' }}
                                  {{ Request::is('currencies') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-category') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-type') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-level') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-experience') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-qualification') ? 'active subdrop' : '' }}
                                     ">
                                 <i class="ti ti-settings"></i><span>Settings</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('job-category') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-type') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-level') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-experience') ? 'active subdrop' : '' }}
                                  {{ Request::is('job-qualification') ? 'active subdrop' : '' }}
                                    ">Jobs
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('job-category') }}"
                                                 class="{{ Request::is('job-category') ? 'active' : '' }}">Job
                                                 Category</a>
                                         </li>
                                         <li><a href="{{ url('job-type') }}"
                                                 class="{{ Request::is('job-type') ? 'active' : '' }}">Job Type</a>
                                         </li>
                                         <li><a href="{{ url('job-level') }}"
                                                 class="{{ Request::is('job-level') ? 'active' : '' }}">Job Level</a>
                                         </li>
                                         <li><a href="{{ url('job-experience') }}"
                                                 class="{{ Request::is('job-experience') ? 'active' : '' }}">Job
                                                 Experience</a></li>
                                         <li><a href="{{ url('job-qualification') }}"
                                                 class="{{ Request::is('job-qualification') ? 'active' : '' }}">Job
                                                 Qualification</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('profile-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('security-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('notification-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('connected-apps') ? 'active subdrop' : '' }}
                                    ">General
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('profile-settings') }}"
                                                 class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profile</a>
                                         </li>
                                         <li><a href="{{ url('security-settings') }}"
                                                 class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a>
                                         </li>
                                         <li><a href="{{ url('notification-settings') }}"
                                                 class="{{ Request::is('notification-settings') ? 'active' : '' }}">Notifications</a>
                                         </li>
                                         <li><a href="{{ url('connected-apps') }}"
                                                 class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected
                                                 Apps</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('bussiness-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('seo-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('localization-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('prefixes') ? 'active subdrop' : '' }}
                                   {{ Request::is('preferences') ? 'active subdrop' : '' }}
                                   {{ Request::is('performance-appraisal') ? 'active subdrop' : '' }}
                                   {{ Request::is('language') ? 'active subdrop' : '' }}
                                   {{ Request::is('authentication-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('ai-settings') ? 'active subdrop' : '' }}
                                    ">Website
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('bussiness-settings') }}"
                                                 class="{{ Request::is('bussiness-settings') ? 'active' : '' }}">Business
                                                 Settings</a></li>
                                         <li><a href="{{ url('seo-settings') }}"
                                                 class="{{ Request::is('seo-settings') ? 'active' : '' }}">SEO
                                                 Settings</a></li>
                                         <li><a href="{{ url('localization-settings') }}"
                                                 class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a>
                                         </li>
                                         <li><a href="{{ url('prefixes') }}"
                                                 class="{{ Request::is('prefixes') ? 'active' : '' }}">Prefixes</a>
                                         </li>
                                         <li><a href="{{ url('preferences') }}"
                                                 class="{{ Request::is('preferences') ? 'active' : '' }}">Preferences</a>
                                         </li>
                                         <li><a href="{{ url('performance-appraisal') }}"
                                                 class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Appearance</a>
                                         </li>
                                         <li><a href="{{ url('language') }}"
                                                 class="{{ Request::is('language') ? 'active' : '' }}">Language</a>
                                         </li>
                                         <li><a href="{{ url('authentication-settings') }}"
                                                 class="{{ Request::is('authentication-settings') ? 'active' : '' }}">Authentication</a>
                                         </li>
                                         <li><a href="{{ url('ai-settings') }}"
                                                 class="{{ Request::is('ai-settings') ? 'active' : '' }}">AI
                                                 Settings</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('salary-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('approval-settings') ? 'active subdrop' : '' }}
                                  {{ Request::is('invoice-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('leave-type') ? 'active subdrop' : '' }}
                                   {{ Request::is('custom-fields') ? 'active subdrop' : '' }}
                                    ">App
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('salary-settings') }}"
                                                 class="{{ Request::is('salary-settings') ? 'active' : '' }}">Salary
                                                 Settings</a></li>
                                         <li><a href="{{ url('approval-settings') }}"
                                                 class="{{ Request::is('approval-settings') ? 'active' : '' }}">Approval
                                                 Settings</a></li>
                                         <li><a href="{{ url('invoice-settings') }}"
                                                 class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Invoice
                                                 Settings</a></li>
                                         <li><a href="{{ url('leave-type') }}"
                                                 class="{{ Request::is('leave-type') ? 'active' : '' }}">Leave
                                                 Type</a></li>
                                         <li><a href="{{ url('custom-fields') }}"
                                                 class="{{ Request::is('custom-fields') ? 'active' : '' }}">Custom
                                                 Fields</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('email-settings') ? 'active subdrop' : '' }}
                                 {{ Request::is('email-template') ? 'active subdrop' : '' }}
                                  {{ Request::is('sms-settings') ? 'active subdrop' : '' }}
                                   {{ Request::is('sms-template') ? 'active subdrop' : '' }}
                                   {{ Request::is('otp-settings') ? 'active subdrop' : '' }}
                                    ">System
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('email-settings') }}"
                                                 class="{{ Request::is('email-settings') ? 'active' : '' }}">Email
                                                 Settings</a></li>
                                         <li><a href="{{ url('email-template') }}"
                                                 class="{{ Request::is('email-template') ? 'active' : '' }}">Email
                                                 Templates</a></li>
                                         <li><a href="{{ url('sms-settings') }}"
                                                 class="{{ Request::is('sms-settings') ? 'active' : '' }}">SMS
                                                 Settings</a></li>
                                         <li><a href="{{ url('sms-template') }}"
                                                 class="{{ Request::is('sms-template') ? 'active' : '' }}">SMS
                                                 Templates</a></li>
                                         <li><a href="{{ url('otp-settings') }}"
                                                 class="{{ Request::is('otp-settings') ? 'active' : '' }}">OTP</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('payment-gateways') ? 'active subdrop' : '' }}
                                 {{ Request::is('tax-rates') ? 'active subdrop' : '' }}
                                  {{ Request::is('currencies') ? 'active subdrop' : '' }}
                                    ">Financial
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('payment-gateways') }}"
                                                 class="{{ Request::is('payment-gateways') ? 'active' : '' }}">Payment
                                                 Gateways</a></li>
                                         <li><a href="{{ url('tax-rates') }}"
                                                 class="{{ Request::is('tax-rates') ? 'active' : '' }}">Tax
                                                 Rate</a></li>
                                         <li><a href="{{ url('currencies') }}"
                                                 class="{{ Request::is('currencies') ? 'active' : '' }}">Currencies</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="submenu submenu-two">
                                     <a href="javascript:void(0);"
                                         class="{{ Request::is('clear-cache') ? 'active subdrop' : '' }}">Other
                                         Settings<span class="menu-arrow inside-submenu"></span></a>
                                     <ul>
                                         <li><a href="{{ url('clear-cache') }}"
                                                 class="{{ Request::is('clear-cache') ? 'active' : '' }}">Clear
                                                 Cache</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>CONTENT</span></li>
                 <li>
                     <ul>
                         <li class="submenu">
                             <a href="javascript:void(0);"
                                 class="{{ Request::is('blogs') ? 'active subdrop' : '' }}
                                 {{ Request::is('blog-categories') ? 'active subdrop' : '' }}
                                  {{ Request::is('blog-comments') ? 'active subdrop' : '' }}
                                   {{ Request::is('blog-tags') ? 'active subdrop' : '' }}">
                                 <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul>
                                 <li><a href="{{ url('blogs') }}"
                                         class="{{ Request::is('blogs') ? 'active' : '' }}">All Blogs</a>
                                 </li>
                                 <li><a href="{{ url('blog-categories') }}"
                                         class="{{ Request::is('blog-categories') ? 'active' : '' }}">Categories</a>
                                 </li>
                                 <li><a href="{{ url('blog-comments') }}"
                                         class="{{ Request::is('blog-comments') ? 'active' : '' }}">Comments</a>
                                 </li>
                                 {{-- <li><a href="{{ url('blog-tags') }}"
                                         class="{{ Request::is('blog-tags') ? 'active' : '' }}">Blog Tags</a>
                                 </li> --}}
                             </ul>
                         </li>
                         <li>
                             <a href="{{ url('faq') }}" class="{{ Request::is('faq') ? 'active' : '' }}">
                                 <i class="ti ti-question-mark"></i><span>FAQ’S</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"><span>PAGES</span></li>
                 <li>
                     <ul>
                         <li>
                             <a href="{{ url('pricing') }}" class="{{ Request::is('pricing') ? 'active' : '' }}">
                                 <i class="ti ti-file-dollar"></i><span>Pricing</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('privacy-policy') }}"
                                 class="{{ Request::is('privacy-policy') ? 'active' : '' }}">
                                 <i class="ti ti-file-description"></i><span>Privacy Policy</span>
                             </a>
                         </li>
                         <li>
                             <a href="{{ url('terms-condition') }}"
                                 class="{{ Request::is('terms-condition') ? 'active' : '' }}">
                                 <i class="ti ti-file-check"></i><span>Terms & Conditions</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- /Sidebar -->

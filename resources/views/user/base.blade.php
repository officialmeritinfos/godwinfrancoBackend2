
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('dashboard/user/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('dashboard/user/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('dashboard/user/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('dashboard/user/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/user/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/user/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('dashboard/user/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('dashboard/user/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('dashboard/user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashboard/user/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/user/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/user/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('dashboard/user/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('dashboard/user/css/header-colors.css')}}" />

    <title>{{$pageName}} - {{$siteName}}</title>
</head>

<body onload="info_noti()" >
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('home/images/'.$web->logo)}}" class="logo-icon" alt="logo icon"
                     style="width:40px;">
            </div>
            <div>
                <h4 class="logo-text">{{$siteName}}</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{url('account/dashboard')}}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{url('account/new_investment')}}">
                    <div class="parent-icon"><i class='bx bx-chart'></i>
                    </div>
                    <div class="menu-title">Deposit</div>
                </a>
            </li>
            <li>
                <a href="{{url('account/investments')}}">
                    <div class="parent-icon"><i class='bx bx-file-blank'></i>
                    </div>
                    <div class="menu-title">Deposits</div>
                </a>
            </li>
            <li>
                <a href="{{url('account/withdrawals')}}">
                    <div class="parent-icon"><i class='bx bx-money'></i>
                    </div>
                    <div class="menu-title">Withdrawals</div>
                </a>
            </li>
            <li>
                <a href="{{url('account/new_withdrawals')}}">
                    <div class="parent-icon"><i class='bx bx-send'></i>
                    </div>
                    <div class="menu-title">New Withdrawals</div>
                </a>
            </li>
            <li class="menu-label">UI Elements</li>
            <li>
                <a href="{{url('account/referral')}}">
                    <div class="parent-icon"><i class='bx bx-user-plus'></i>
                    </div>
                    <div class="menu-title">Referrals</div>
                </a>
            </li>
            <li>
                <a href="{{url('account/settings')}}">
                    <div class="parent-icon"><i class='bx bx-cog'></i>
                    </div>
                    <div class="menu-title">Settings</div>
                </a>
            </li>
            @if($user->is_admin==1)
                <li>
                    <a href="{{route('admin.admin.dashboard')}}">
                        <div class="parent-icon"><i class='bx bx-user-check'></i>
                        </div>
                        <div class="menu-title">Admin View</div>
                    </a>
                </li>
            @endif
            <li>
                <a href="{{url('account/logout')}}">
                    <div class="parent-icon"><i class='bx bx-log-out'></i>
                    </div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">

                        </li>
                        <li class="nav-item dropdown dropdown-large">

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">

                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Messages</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-message-list">

                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{$user->name}}" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{$user->name}}</p>
                            <p class="designattion mb-0">Investor</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="{{url('account/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright &copy; {{$siteName}} {{date('Y')}}</p>
    </footer>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="{{asset('dashboard/user/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('dashboard/user/js/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
<!--notification js -->
<script src="{{asset('dashboard/user/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{asset('dashboard/user/plugins/notifications/js/notifications.min.js')}}"></script>
<script src="{{asset('dashboard/user/js/index.js')}}"></script>
<!--app JS-->
<script src="{{asset('dashboard/user/js/app.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
<script>
    new ClipboardJS('.copy');
</script>

<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element">
</div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '100f1f1a7bd9193508ba621dd99312b4a3b300c9';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>

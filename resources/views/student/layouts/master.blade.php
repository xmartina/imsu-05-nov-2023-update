<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

     @include('student.layouts.common.header_script')


    <script>
        @if($isPinReg === 2)

        document.addEventListener('DOMContentLoaded', function() {
            // Get all anchor elements within a <nav> element
            var navElement = document.querySelector('nav'); // Change 'nav' to match the actual selector for your <nav> element
            var anchorElements = navElement.querySelectorAll('a');

            // The URL to replace existing href values
            var newURL = 'https://imsu.quickassistant.me/student';

            // Loop through each anchor element and update the href attribute
            anchorElements.forEach(function(anchorElement) {
                anchorElement.setAttribute('href', newURL);
            });
        });

        @endif
    </script>

</head>

<body>

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav id="addFilterNoCourse" class="@if($isPinReg === 2) course-reg-check  @endif pcoded-navbar active-lightblue title-lightblue navbar-lightblue brand-lightblue navbar-image-4 menu-item-icon-style2 {{\Cookie::get('sidebar')}}">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                @if(isset($setting))
                @if(is_file('uploads/setting/'.$setting->logo_path))
                <a href="{{ route('student.dashboard.index') }}" class="b-brand">
                    <img src="{{ asset('uploads/setting/'.$setting->logo_path) }}" alt="logo">
                </a>
                @endif
                @endif
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>

            <script>
                @if($isPinReg === 2)
                // Show the modal if isPinReg is 2.
                document.getElementById('pinRegistrationModal').classList.add('d-block');
                document.getElementById('addFilterNoCourse').classList.add('course-reg-check');
                @endif
            </script>

            @if(Request::is('student*'))
            <!--- Sidemenu -->
            @include('student.layouts.inc.sidebar')
            <!-- End Sidebar -->
            @endif

        </div>
    </nav>
    <!-- [ navigation menu ] end -->


    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-lightblue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            @if(isset($setting))
            @if(is_file('uploads/setting/'.$setting->logo_path))
            <a href="{{ route('student.dashboard.index') }}" class="b-brand">
                <div class="b-bg">
                    <img src="{{ asset('uploads/setting/'.$setting->logo_path) }}" alt="logo" height="20">
                </div>
            </a>
            @endif
            @endif
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li>
                    <h4 class="topbar-title">{{ $setting->title }}</h4>
                </li>
            </ul>

            <!-- [ Auth Nav ] start -->
            @auth
            <ul class="navbar-nav ms-auto">
                <!-- Language -->
                <li>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            @php
                            $version = App\Models\Language::version();
                            @endphp
                            <i class="fas fa-language"></i> {{ $version->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">{{ trans_choice('module_language', 2) }}</h6>
                            </div>
                            <ul class="noti-body">
                                @foreach($user_languages as $user_language)
                                <li class="notification @if(\Session()->get('locale') == $user_language->code) active @endif">
                                    <a class="language" href="{{ route('version', $user_language->code) }}">{{ $user_language->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- Notification -->
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="icon feather icon-bell">
                            @isset(Auth::guard('student')->user()->unreadNotifications)
                            @if(Auth::guard('student')->user()->unreadNotifications->count() > 0)
                            <span class="notification-active"></span>
                            @endif
                            @endisset
                            </i>
                        </a>
                        @isset(Auth::guard('student')->user()->unreadNotifications)
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">{{ trans_choice('module_notification', 2) }}</h6>
                            </div>
                            <ul class="noti-body">
                                @forelse(Auth::guard('student')->user()->unreadNotifications as $key => $notification)
                                @if($key < 10)
                                @php
                                    $notification_link = 'student.dashboard.index';
                                    $notification_type = '';
                                    if($notification->data['type'] == 'content') {
                                    $notification_link = 'student.download.show';
                                    $notification_type = trans_choice('module_content', 1);
                                    }
                                    elseif( $notification->data['type'] == 'notice') {
                                    $notification_link = 'student.notice.show';
                                    $notification_type = trans_choice('module_notice', 1);
                                    }
                                    elseif($notification->data['type'] == 'assignment'){
                                    $notification_link = 'student.assignment.index';
                                    $notification_type = trans_choice('module_assignment', 1);
                                    }
                                @endphp
                                <li class="notification">
                                    @if($notification->data['type'] == 'assignment')
                                    <a class="media" href="{{ route($notification_link) }}">
                                    @else
                                    <a class="media" href="{{ route($notification_link, $notification->data['id']) }}">
                                    @endif
                                        <div class="media-body">
                                            <p><strong>{{ $notification->data['title'] }}</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>{{ $notification->created_at->diffForHumans() }}</span></p>
                                            <p><i class="fas fa-arrow-circle-right"></i> {{ $notification_type }}</p>
                                        </div>
                                    </a>
                                </li>
                                @endif
                                @empty
                                <li class="notification">{{ __('status_no_notification') }}</li>
                                @endforelse
                            </ul>
                        </div>
                        @endisset
                    </div>
                </li>

                <!-- Profile -->
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('uploads/student/'.Auth::user()->photo) }}" class="img-radius" alt="User Profile" @if(Auth::user()->gender == 1) onerror="this.src='{{ asset('dashboard/images/user/avatar-2.jpg') }}';" @else  onerror="this.src='{{ asset('dashboard/images/user/avatar-1.jpg') }}';" @endif>
                                <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>

                                <a href="javascript:void(0);" class="dud-logout" href="{{ route('student.logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">

                                    <i class="feather icon-log-out"></i>
                                </a>

                                <form id="logout-form" action="{{ route('student.logout') }}" method="POST">
                                    @csrf
                                </form>

                            </div>
                            <ul class="pro-body">
                                <li><a href="{{ route('student.profile.index') }}" class="dropdown-item"><i class="feather icon-user"></i> {{ trans_choice('module_profile', 2) }}</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            @endauth
            <!-- [ Auth Nav ] end -->

        </div>
    </header>
    <!-- [ Header ] end -->


    <!-- [ chat user list ] start -->
    <section class="header-user-list">
        <div class="h-list-header">
            <div class="input-group">
                <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
            </div>
        </div>
        <div class="h-list-body">
            <a href="#!" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
            <div class="main-friend-cont scroll-div">
                <div class="main-friend-list">

                </div>
            </div>
        </div>
    </section>
    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
    <section class="header-chat">
        <div class="h-list-header">
            <h6></h6>
            <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
        </div>
        <div class="h-list-body">
            <div class="main-chat-cont scroll-div">
                <div class="main-friend-chat">
                    <div class="media chat-messages">

                        <div class="media-body chat-menu-content">

                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">

                        </div>
                    </div>
                    <div class="media chat-messages">

                        <div class="media-body chat-menu-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">

                    <!-- start page title -->
                    <!-- Include page breadcrumb -->
                    @include('student.layouts.inc.breadcrumb')
                    <!-- end page title -->


                    <!-- Start Content-->
                    @yield('content')
                    <!-- End Content-->

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


    @include('student.layouts.common.footer_script')

</body>
</html>

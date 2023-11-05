<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @if(isset($setting))
        <!-- App Title -->
        <title>@yield('title') | {{ $setting->meta_title ?? '' }}</title>

        <meta name="description" content="{!! str_limit(strip_tags($setting->meta_description), 160, ' ...') !!}">
        <meta name="keywords" content="{!! strip_tags($setting->meta_keywords) !!}">

        <!-- App favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}"
              type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}" type="image/x-icon">
    @endif


    @if(empty($setting))
        <!-- App Title -->
        <title>@yield('title')</title>
    @endif


    <!-- Social Meta Tags -->
    <link rel="canonical" href="{{ route('home') }}">

    @yield('social_meta_tags')


    <!-- Stylesheets -->

    {{--     Adjusted Import--}}
    <link rel="stylesheet" href="{{ asset('dashboard/tpl/css/adjusted.css') }}">


    @php
        $version = App\Models\Language::version();
    @endphp


    {{--    New template Setting--}}
    <!-- Stylesheet -->
    <link href="{{ asset('web/tpl/css/google-import.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('web/tpl/css/menuzord-skins/menuzord-rounded-boxed.css')}}"
          rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('web/tpl/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('web/tpl/css_extend/slick-slider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/responsive.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/color.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/color-two.css')}}" rel="stylesheet">
    <link href="{{ asset('web/tpl/css_extend/color-three.css')}}" rel="stylesheet">
    <link href="{{ asset('web/tpl/css_extend/color-four.css')}}" rel="stylesheet">
    <link href="{{ asset('web/tpl/css_extend/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/mater.html')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('web/tpl/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('web/tpl/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('web/tpl/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('web/tpl/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('web/tpl/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{ asset('web/tpl/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/lecture.css')}}" rel="stylesheet" type="text/css">


    <link href="{{ asset('web/tpl/css_extend/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/tpl/css_extend/style.css')}}" rel="stylesheet" type="text/css">


    <!-- external javascripts -->
    <script src="{{ asset('web/tpl/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('web/tpl/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('web/tpl/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('web/tpl/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('web/tpl/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('web/tpl/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <link href="{{ asset('web/tpl/css/prince.css" rel="stylesheet') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/tpl/css/prince-2.css')}}">

    <style type="text/css">

        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .dropdown-menu .dropdown-submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu > li:hover > .dropdown-submenu {
            display: block;
        }
    </style>
    {{--    End new Template--}}

</head>

<body class="">
<div id="wrapper" class="clearfix">

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-color-2 sm-text-center p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget no-border m-0">
                            <ul class="styled-icons icon-circled icon-sm pull-left flip sm-pull-none sm-text-center mt-sm-15">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>

                                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                            <ul class="list-inline pull-right">


                            </ul>
                        </div>
                        <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">


                            <div class="widget no-border m-0">
                                <ul class="list-inline font-13 sm-text-center mt-5">
                                    <li>
                                        <div class="dropdown show">

                                            <button class="btn bt-primary dropdown-toggle"
                                                    style="background: #2c724f; color: #fff;" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                Staff
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                                style="background: #202c45; ">

                                                <li>
                                                    <a class="dropdown-item" href="#"
                                                       style="color: #ff9900; font-weight: bold;">
                                                        Academic Staff
                                                    </a>

                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"
                                                       style="color: #ff9900; font-weight: bold;">
                                                        Non-Academic Staff
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Students</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Alumni</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Transcript</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="#">Giving/Donations</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="make-payment.html">Making Payments</a>
                                    </li>

                                    <li>
                                        <div class="dropdown show">
                                            <button class="btn bt-primary dropdown-toggle"
                                                    style="background: #2c724f; color: #fff;"
                                                    id="dropdownMenuLink trigger"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                <span onclick="location.href='tetfund-intervention/index.html';">Tetfund Interv</span><span
                                                    id="trigger1" onmouseover="change()">entions </span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                                style="background: #202c45; ">

                                                <li>
                                                    <a class="dropdown-item" href="#"
                                                       onclick="location.href='tetfund-intervention/index.html';"
                                                       style="color: #ff9900; font-weight: bold;">
                                                        Special Intervention &raquo;
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu"
                                                        style="background: #202c45; ">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Zonal
                                                                Intervention</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Disaster
                                                                Recovery</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">High
                                                                Impact Intervention</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">National
                                                                Research Fund</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"
                                                       style="color: #ff9900; font-weight: bold;"
                                                       onclick="location.href='tetfund-intervention/index.html';">
                                                        Annual Intervention &raquo;
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu"
                                                        style="background: #202c45; ">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Academic
                                                                Manuscript Development</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Entrepreneurship</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Equipment
                                                                Fabrication</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Tetfund
                                                                Project Maintanance</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Academic
                                                                Research Journal</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">ICT
                                                                Support</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Institution
                                                                Based Research</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Teaching
                                                                Practice</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Conference
                                                                Attendance</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Library
                                                                Development</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Academic
                                                                Staff Training</a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               onclick="location.href='tetfund-intervention/index.html';">Physical
                                                                Infrastructure</a>
                                                        </li>


                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <script>
                                        function change() {
                                            document.getElementById("trigger1").click();
                                        }
                                    </script>


                                    <li>
                                        <a class="text-white" href="#">Scholarships</a>
                                    </li>

                                    <li>
                                        <a class="text-white" href="https://webmail.imsu.edu.ng/">Webmail</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lightest xs-text-center">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-5">
                        <div class="widget no-border m-0">
                            <a class="menuzord-brand flip xs-pull-center mb-15" href="/"><img
                                    src="{{ asset('web/tpl/images/imo_logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i>
                                </li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                                    <h5 class="font-14 m-0"> +234 0000000</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-envelope text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">Write us!</a>
                                    <h5 class="font-13 text-black m-0"><a href="cdn-cgi/l/email-protection.html"
                                                                          class="__cf_email__"
                                                                          data-cfemail="bad3d4dcd5fad3d7c9cf94dfdecf94d4dd">[email&#160;protected]</a>
                                    </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                <div class="container">
                    <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                        <ul class="menuzord-menu">


                            <li><a href="javascript:void(0)" onclick="location.href='about-us.html'">About IMSU</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col6">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;"
                                                onclick="location.href='about-us.html'">About us</h4>
                                            <p style="color: #fff;">Imo State University was established in 1981 and has
                                                since grown to become one of the leading universities in the country.
                                                The university offers a wide range of undergraduate and postgraduate
                                                programs in fields. It also has a strong research focus and is known for
                                                its commitment to academic excellence and innovation </p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;"
                                                    onclick="location.href='about-us.html'">About Us</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="history.html">History</a></li>
                                                    <li><a href="leadership.html">Leadership & Organisation</a></li>
                                                    <li><a href="governing-council.html">Governing Council</a></li>
                                                    <!--<li><a href="">Vacancies</a></li>-->
                                                    <li><a href="#">Our Awards</a></li>
                                                    <li><a href="mission.vision.html">Mission & Vision</a></li>
                                                    <!--<li><a href="">The Vice-Chancellor's Vision</a></li>-->


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)">Academics</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">
                                                Academics</h4>
                                            <p style="color: #fff;">Our academic programs are rigorous and carefully
                                                modelled to prepare our students to be ahead. Our nearly 60,000 students
                                                can choose from 80 undergraduate and 110 postgraduate degree programs
                                                plus research and study opportunities across the world. That’s why Imo
                                                State University is the university of first choice and the nations
                                                pride</p>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Faculties</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Faculty of Arts</a></li>
                                                    <li><a href="#">Faculty of Basic Medical Sciences</a></li>
                                                    <li><a href="#">Faculty of Management Sciences</a></li>
                                                    <li><a href="#">Faculty of Clinical Sciences</a></li>
                                                    <li><a href="#">Faculty of Dental Sciences</a></li>
                                                    <li><a href="#">Faculty of Education</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Faculty of Engineering</a></li>
                                                    <li><a href="#">Faculty of of Environmental Sciences</a></li>
                                                    <li><a href="#">Faculty of Law</a></li>
                                                    <li><a href="#">Faculty of Pharmacy</a></li>
                                                    <li><a href="#">Faculty of Social Sciences</a></li>
                                                    <li><a href="#">Faculty of Science</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col3">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Institutes & Colleges</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">College of Medicine</a></li>
                                                    <li><a href="#">Distant Learning Institute</a></li>
                                                    <li><a href="#">Institute of Continuing Education</a></li>

                                                    <li><a href="#">Entrepreneurship & Skill Development Centre
                                                            (ESDC)</a></li>
                                                    <li><a href="#">Institute of Marine Studies</a></li>
                                                    <li><a href="#">Institute Africa & Diaspora Studies</a></li>
                                                    <li><a href="#">School of Postgraduate Studies</a></li>
                                                    <li><a href="#">School of Foundation Studies</a></li>
                                                    <li><a href="#">Library</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="javascript:void(0)">Units</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col4">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">Units</h4>
                                            <p style="color: #fff;">Imo State University Units</p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Units</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Registry</a></li>
                                                    <li><a href="#">Bursary</a></li>
                                                    <li><a href="#">Centre for Housing</a></li>
                                                    <li><a href="#">Centre for Information Technology & Systems</a></li>
                                                    <li><a href="#">Entrepreneurship & Skill Development Centre
                                                            (ESDC)</a></li>
                                                    <li><a href="#">Records</a></li>
                                                    <li><a href="#">Quality Assurance & Servicom</a></li>


                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col4">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Human Resource & Development Centre</a></li>
                                                    <li><a href="#">International Relations Office</a></li>
                                                    <li><a href="#">Works & Physical Planning</a></li>
                                                    <li><a href="#">Student Affairs Division</a></li>
                                                    <li><a href="#">Counselling Unit</a></li>
                                                    <li><a href="#">Staff Club</a></li>
                                                    <li><a href="#">Tetfund</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="#">Research</a></li>


                            <li><a href="javascript:void(0)">Resources</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col4">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">
                                                Resources</h4>
                                            <p style="color: #fff;">Useful Resources</p>
                                        </div>
                                        <div class="col4">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Resources</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Our Campus</a></li>
                                                    <li><a href="#">Addresses</a></li>
                                                    <li><a href="#">Downloads</a></li>
                                                    <li><a href="#">Videos</a></li>
                                                    <li><a href="#">Newsletters</a></li>
                                                    <li><a href="#">Conferences</a></li>
                                                    <li><a href="#">IMSU Magazines</a></li>


                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col4">
                                            <div class="widget dark">

                                                <ul class="list-unstyled">
                                                    <li><a href="#">Public Lectures</a></li>
                                                    <li><a href="#">Inaugurals</a></li>
                                                    <li><a href="#">Journals</a></li>
                                                    <li><a href="#">Publications</a></li>
                                                    <li><a href="#">Institutional Repository</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="javascript:void(0)">Admissions</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">
                                        <div class="col6">
                                            <h4 style="font-weight: bold; color: #ff9900; font-size: 35px;">
                                                Admissions</h4>
                                            <p style="color: #fff;">Imo State University was established in 1981 and has
                                                since grown to become one of the leading universities in the country.
                                                The university offers a wide range of undergraduate and postgraduate
                                                programs in fields. It also has a strong research focus and is known for
                                                its commitment to academic excellence and innovation </p>
                                        </div>
                                        <div class="col6">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Admission</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Foundation</a></li>
                                                    <li><a href="#">Undergraduate</a></li>
                                                    <li><a href="#">Postgraduate</a></li>
                                                    <li><a href="#">Distant Learning Institute</a></li>
                                                    <li><a href="#">Institute of Continuing Education</a></li>


                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </li>


                            <li><a href="javascript:void(0)">Enterprise</a>
                                <div class="megamenu" style="background: #202c45;">
                                    <div class="megamenu-row">

                                        <div class="col6">
                                            <div class="widget dark">
                                                <h4 class="widget-title" style="font-weight: bold; color: #ff9900;">
                                                    Enterprise</h4>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Bookshop</a></li>
                                                    <li><a href="#">Press</a></li>
                                                    <li><a href="#">Water</a></li>
                                                    <li><a href="#">Pharmacy</a></li>
                                                    <li><a href="#">Microfinance Bank</a></li>


                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </li>


                            <li><a href="#">Campuses</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="#">Contact Us</a></li>


                        </ul>
                        <ul class="pull-right flip hidden-sm hidden-xs">
                            <li>
                                <!-- Modal: Book Now Starts -->
                                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15"
                                   href="portal.html">Portal</a>
                                <!-- Modal: Book Now End -->
                            </li>
                        </ul>
                        <div id="top-search-bar" class="collapse">
                            <div class="container">
                                <form role="search" action="#" class="search_form_top" method="get">
                                    <input type="text" placeholder="Type text and press Enter..." name="s"
                                           class="form-control" autocomplete="off">
                                    <span class="search-close"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <style type="text/css">
        .list-unstyled li a {
            line-height: 11px;

        }

        .list-unstyled li a:hover {
            background: #ff9900;
            font-weight: bold;

        }

        .list-unstyled li a:link {
            color: #fff;
            line-height: 11px;

        }

        .dropdown-menu li a {
            color: #fff;
        }

        .dropdown-submenu li a {
            color: #fff;
        }


    </style>


    <script data-cfasync="false"
            src="{{ asset('web/tpl/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script type="text/javascript">

    </script>


    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->


    <!-- footer -->
    <!-- Footer -->
    <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="images/t_bg.jpg"
            style="background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-5 mb-20" alt="" src="images/logo-footer.png">
                        <p style="color: #fff;">Our primarily goals focuses on continuous provision of quality learning
                            environment and producing highly intellectual graduates with reputable character </p>
                        <ul class="list-inline mt-5">
                            <!-- <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li> -->
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a
                                    class="text-gray" href="#"><span class="__cf_email__"
                                                                     data-cfemail="f1989f979eb1989c8284df949584df9f96">[email&#160;protected]</span></a>
                            </li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-color-2 mr-5"></i> <a
                                    class="text-gray" href="#">www.imsu.edu.ng</a></li>
                        </ul>

                        <!-- <div class="widget dark">
                       <h5 class="widget-title mb-10">Connect With Us</h5>
                       <ul class="styled-icons icon-bordered icon-sm" style="padding: 10px;">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-skype"></i></a></li>
                         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                       </ul>
                     </div> -->
                    </div>


                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title" style="font-weight: bold; color: lemonchiffon;">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>

                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Campuses</a></li>
                            <li><a href="#">Giving/Donations</a></li>
                            <li><a href="#">Enterprises</a></li>
                            <li><a href="#">Calenders</a></li>
                            <li><a href="#">Health & Safety</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Global Locations</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title" style="font-weight: bold; color: lemonchiffon;">Tetfund
                            Interventions</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">High Impact</a></li>
                            <li><a href="#">Zonal</a></li>

                            <li><a href="#">Academic Research</a></li>
                            <li><a href="#">ICT Support</a></li>
                            <li><a href="#">Entrepreneurship</a></li>
                            <li><a href="#">Teaching Practice</a></li>
                            <li><a href="#">Library Development</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2"
                            style="font-weight: bold; color: lemonchiffon;">Downloads</h4>
                        <div class="opening-hours">
                            <ul class="list-unstyled">
                                <li><a href="#">2020/2021 Academic Calendar</a></li>
                                <li><a href="#">List of Faculties and Departments</a></li>
                                <li><a href="#">Student Handbook</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10" style="font-weight: bold; color: lemonchiffon;">Call Us Now</h5>
                        <div class="text-gray">
                            +234 0000000
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title" style="font-weight: bold; color: lemonchiffon;">Alumni</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Awards</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Academic Development</a></li>


                        </ul>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title" style="font-weight: bold; color: lemonchiffon;">News</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Media Highlights</a></li>
                            <li><a href="#">Most Recent News</a></li>
                            <li><a href="#">Popular News</a></li>
                            <li><a href="#">Conference Attendance</a></li>
                            <li><a href="#">Institution Based Research</a></li>
                            <li><a href="#">IMSU Events</a></li>


                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2"
                            style="font-weight: bold; color: lemonchiffon;">Stakeholders</h4>
                        <div class="opening-hours">
                            <ul class="list-unstyled">
                                <li><a href="https://tetfund.gov.ng/" target="_blank">Tetfund</a></li>
                                <li><a href="https://nuc.edu.ng/" target="_blank">NUC</a></li>
                                <li><a href="https://education.gov.ng/" target="_blank">Ministry of Education</a></li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0">Copyright &copy;2023 Imo State University. All Rights
                            Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script data-cfasync="false" src="{{ asset('web/tpl/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{ asset('web/tpl/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/tpl/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>


<script type="text/javascript" src="{{ asset('web/tpl/script/slick.slider.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('web/tpl/script/functions.js')}}"></script>
<!-- footer-end -->


<!-- Script JS -->


</body>
</html>

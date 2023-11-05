@extends('web.layouts.master')
@section('title', __('navbar_home'))


@section('content')

    <!-- main-area -->
    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('web/tpl/images/im_slider_011.jpg')}}" data-rotate="0" data-saveperformance="off"
                                data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('web/tpl/images/im_slider_011.jpg')}}" alt="" data-bgposition="center 10%"
                                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                     data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                     id="rs-1-layer-1"

                                     data-x="['left']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-110']"
                                     data-fontsize="['30']"
                                     data-lineheight="['110']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:700; margin-bottom: -45px;">
                                    WELCOME TO IMO STATE UNIVERSITY
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                    id="rs-1-layer-2"

                                    data-x="['left']"
                                    data-hoffset="['35']"
                                    data-y="['middle']"
                                    data-voffset="['-25']"
                                    data-fontsize="['20']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">THE STAR CITADEL OF
                                    LEARNING
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white"
                                     id="rs-1-layer-3"

                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['35']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Your
                                    gateway to knowledge and excellence!
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-1-layer-4"

                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['100']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                        href="#">Read More</a>
                                </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('web/tpl/images/im_slider_013.jpg')}}" data-rotate="0" data-saveperformance="off"
                                data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('web/tpl/images/im_slider_013.jpg')}}" alt="" data-bgposition="center 40%"
                                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                     data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                    id="rs-2-layer-1"

                                    data-x="['center']"
                                    data-hoffset="['0']"
                                    data-y="['middle']"
                                    data-voffset="['-90']"
                                    data-fontsize="['25']"
                                    data-lineheight="['49']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:500; border-radius: 6px;">
                                    DISCOVER THE LIMITLESS POSSIBILITIES IN IMO STATE UNIVERSITY
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                    id="rs-2-layer-2"

                                    data-x="['center']"
                                    data-hoffset="['0']"
                                    data-y="['middle']"
                                    data-voffset="['-20']"
                                    data-fontsize="['48']"
                                    data-lineheight="['70']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"> Your
                                    Citadel of Excellence
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-center"
                                     id="rs-2-layer-3"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['50']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    Bringing out the best in you!
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-2-layer-4"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['115']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply
                                        Now</a>
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('web/tpl/images/im_slider_012.jpg')}}" data-rotate="0" data-saveperformance="off"
                                data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('web/tpl/images/im_slider_012.jpg')}}" alt="" data-bgposition="center center"
                                     data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                     data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                    id="rs-3-layer-1"

                                    data-x="['right']"
                                    data-hoffset="['30']"
                                    data-y="['middle']"
                                    data-voffset="['-90']"
                                    data-fontsize="['64']"
                                    data-lineheight="['72']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">IMSU
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                                    id="rs-3-layer-2"

                                    data-x="['right']"
                                    data-hoffset="['35']"
                                    data-y="['middle']"
                                    data-voffset="['-25']"
                                    data-fontsize="['32']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">A COMMUNITY OF THINKERS
                                    AND DOERS
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-right"
                                     id="rs-3-layer-3"

                                     data-x="['right']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['30']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    Discover the excellence in you!
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-3-layer-4"

                                     data-x="['right']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['95']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                        href="#">Apply Now</a>
                                </div>
                            </li>


                            <!-- SLIDE 4 -->
                            <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('web/tpl/images/custom/sldd.jpg')}}" data-rotate="0" data-saveperformance="off"
                                data-title="Web Show" data-description="" style="cursor:pointer;">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('web/tpl/images/custom/sldd.jpg')}}" alt="" data-bgposition="top center" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                    id="rs-3-layer-1"

                                    data-x="['right']"
                                    data-hoffset="['30']"
                                    data-y="['middle']"
                                    data-voffset="['-90']"
                                    data-fontsize="['64']"
                                    data-lineheight="['72']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;display: none;">IMSU
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                                    id="rs-3-layer-2"

                                    data-x="['right']"
                                    data-hoffset="['35']"
                                    data-y="['middle']"
                                    data-voffset="['-25']"
                                    data-fontsize="['32']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600; display: none;">A community
                                    of thinkers and doers
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-right"
                                     id="rs-3-layer-3"

                                     data-x="['right']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['30']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400; display: none;">
                                    We help you go further than you have ever <br> dreamed with the best university
                                    facility in Africa
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-3-layer-4"

                                     data-x="['middle']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-fontsize="['23']"
                                     data-voffset="['170']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;display: none;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                        href="#">Visit Us</a>
                                </div>
                            </li>


                        </ul>
                    </div><!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function (e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType: "standard",
                            jsFileLocation: "{{ asset('web/tpl/js/revolution-slider/js/')}}",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 7000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [620, 768, 960, 720],
                            lazyType: "none",
                            parallax: "mouse",
                            parallaxBgFreeze: "off",
                            parallaxLevels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->
            </div>
        </section>


        <style type="text/css">
            /*****************************
        Counter
      *****************************/
            .counter {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 20px 0px;
            }

            .counter .counter-icon i {
                color: #ef3139;
                margin-right: 20px;
                font-size: 70px;
                line-height: 20px;
            }

            .counter .counter-content {
                -ms-flex-item-align: center;
                align-self: center;
            }

            .counter .counter-content .timer {
                position: relative;
                font-size: 30px;
                line-height: 30px;
                font-weight: 800;
                font-family: "Archivo", sans-serif;
                color: #ffffff;
                margin-bottom: 10px;
                display: bock;
            }

            .counter .counter-content label {
                font-size: 20px;
                display: boc;
                color: #ffffff;
                margin-bottom: 0;
            }

            /* Counter 02 */
            .counter.counter-02 .counter-content .timer {
                color: #022d62;
            }

            .counter.counter-02 .counter-content label {
                color: #626262;
            }

            .counter.counter-02 .counter-icon i {
                color: #dfdfdf;
            }

            /* Counter 03 */
            .counter.counter-03 {
                background: #ef3139;
                padding: 32px;
                text-align: center;
                display: block;
                border-radius: 5px;
            }
        </style>


        <!-- About Page 1 Area Start Here -->
        <div class="about-page1-area" style="background: #f7f7f7;">
            <div class="container">
                <div class="row about-page1-inner">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="about-page-content-holder">
                            <div class="content-box">
                                <h2>Welcome to Imo State Univeristy</h2>
                                <p>Imo State University was established in 1981 and has since grown to become one of the
                                    leading universities in the country.
                                    The university offers a wide range of undergraduate and postgraduate programs in
                                    fields. It also has a strong research focus and is known for its commitment to
                                    academic excellence and innovation </p>
                                <a class="btn btn-theme-colored btn-flat  mt-10 mb-sm-30" href="about-us.html">Read More
                                    →</a>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-4">

                        <div class="single-item">
                            <div class="lecturers-item-wrapper">
                                <a href="#"><img class="img-responsive" src="{{ asset('web/tpl/images/vcc.jpg')}}" alt="team"></a>

                                <!--   <div class="ed-ad-dec" style="margin-top: -60px; margin-left: 20px; font-size: 18px;">
                                      <a href="" style="font-size: 14px;">Imo State University</a><br>

                                    </div> -->
                                <style>
                                    .lecturers-item-wrapper .lecturers-content-wrapper h3 {
                                        line-height: .8;
                                    }
                                </style>
                                <div class="lecturers-content-wrapper" style="margin-top: 30px; padding-left: 60px;">
                                    <h3><a href="#" style="font-weight: bold; font-size: 12px; line-height:1.1;">Prof
                                            Uchefula Ugonna Chukwumaeze, SAN, FCArb</a></h3>
                                    <span style="font-size: 15px;">Vice Chancellor </span>

                                    <br>
                                </div>


                            </div>
                            <br>

                            <div class="ed-ad-dec" style="margin-top: -70px; margin-left: 90px; font-size: 18px;"><br>

                                <a href="academic-staff-single.html" style="font-size: 14px; background: #2c724f;">View
                                    Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About Page 1 Area End Here -->


        <!--=================================
Pricing -->
        <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/doc.jpg"
                 data-parallax-ratio="0.7">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 pb-4 pb-md-0" style="margin-right: -20px;">
                        <div class="pricing active" style="background: #ff9900; opacity: 0.7; border-radius: 15px;">
                            <div class="counter">
                                <div class="counter-icon">
                                </div>
                                <div class="counter-content">
                                    <div class="funfact text-center">
                                        <i class=" mt-5 text-theme-color-2"></i>
                                        <span data-animation-duration="9000"
                                              style="color: #ffffff; padding: 10px;margin-left: 40px; margin-top: 10px;"
                                              data-value="40000" class="animate-number timer">0</span><span
                                            style="color: #fff; font-size: 35px; font-weight: 900;">+</span>
                                        <label
                                            style="color: #ffffff; margin-left: 10px; margin-top: -10px;">Students</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 pb-4 pb-md-0" style="margin-right: -20px;">
                        <div class="pricing active" style="background: #2c724f; opacity: 0.7; border-radius: 15px;">
                            <div class="counter">
                                <div class="counter-icon">
                                </div>
                                <div class="counter-content">
                                    <div class="funfact text-center">
                                        <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
                                        <span data-animation-duration="9000"
                                              style="color: #ffffff; padding: 10px;margin-left: -60px; margin-top: 10px;"
                                              data-value="23" class="animate-number timer">0</span>
                                        <label
                                            style="color: #ffffff; margin-left: 20px; margin-top: -0px;">Faculties</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 pb-4 pb-md-0" style="margin-right: -20px;">
                        <div class="pricing active" style="background: #202c45; opacity: 0.7; border-radius: 15px;">
                            <div class="counter">
                                <div class="counter-icon">
                                </div>
                                <div class="counter-content">
                                    <div class="funfact text-center">
                                        <i class=" mt-5 text-theme-color-2"></i>
                                        <span data-animation-duration="9000"
                                              style="color: #ffffff; padding: 10px;margin-left: -60px; margin-top: 10px;"
                                              data-value="68" class="animate-number timer">0</span>
                                        <label
                                            style="color: #ffffff; margin-left: 20px; margin-top: -10px;">Departments</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-2 pb-4 pb-md-0">
                        <div class="pricing active">
                            <div class="counter">
                                <div class="counter-icon">
                                </div>
                                <div class="counter-content">
                                    <span class=""
                                          style="font-size: 30px; font-weight: 900; color: lemonchiffon; line-height: 40px;">Unlimited Opportunities  </span>
                                    <!--  <label>+ Jobs</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        <!--=================================
        Pricing -->


        <!-- DISCOVER MORE -->
        <section class="bg-lighter" style="margin-top: -50px;">
            <div class="container pb-60">
                <div class="row">
                    <div class="col-md-12">
                        <div class="con-title">
                            <h2 style="color: #202c45; font-size: 25px;">Explore <span
                                    style="font-size: 25px;"> IMSU</span></h2>
                            <div class="text">
                                <p style="color: black;">Find out what makes our student experience so rich, meaningful
                                    and life-changing. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ed-course">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/alum.jpg')}}" alt="">
                                    <span>IMSU Online Courses</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/aca.jpg')}}" alt="">
                                    <span>Programme of studies</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/res.jpg')}}" alt="">
                                    <span>Research & Development</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/admin.jpg')}}" alt="">
                                    <span>Admission</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/sch.jpg')}}" alt="">
                                    <span>Scholarships</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/aluta.jpg')}}" alt="">
                                    <span>IMSU Alumni</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/ex.jpg')}}" alt="">
                                    <span>IMSU Centers</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in">
                                <a class="course-overlay" href="#">
                                    <img src="{{ asset('web/tpl/images/cam.jpg')}}" alt="">
                                    <span>Campus Life</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!--// Main Section \\-->
        <div class="wm-main-section wm-parallex-two-full "
             style="background-image: url('{{ asset('web/tpl/images/graduate.jpg')}}'); background-size: cover; margin-top: 0px;">
            <span class="wm-light-transparent wm-more-darke-black"></span>
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-parallex-two">
                            <h4 class="wm-color-four" style="color: yellow;">Visit IMSU School of</h4>
                            <h2>Postgraduate Studies</h2>
                            <p>With a reputation for excellence across the humanities, sciences, creative arts,
                                business, engineering and health sciences ...</p>
                            <a href="#" class="wm-apply-btn"
                               style="color: #fff; background: #2a634a;"><span>Read More</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br><br><br>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-learn-listing-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="con-title">
                            <h2 style="color: #202c45; font-size: 25px;">Our Programmes of <span
                                    style="font-size: 25px;"> Studies</span></h2>
                            <div class="text">
                                <p style="color: black;">What do you want to become? Whatever your educational and
                                    career goals, we’ve got you covered at Imo State University: </p>
                            </div>
                        </div>
                        <div class="wm-learn-listing">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/cc3.jpg')}}" alt=""></a>
                                        <figcaption>
                                            <h2>Post Graduate</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/cc4.jpg')}}" alt=""></a>
                                        <figcaption>
                                            <h2>Undergraduate</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/cc1.jpg')}}" alt=""></a>
                                        <figcaption>
                                            <h2>Continuing Education</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/pre.jpg')}}" alt=""></a>
                                        <figcaption>
                                            <h2>Pre-degree</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/cc2.jpg')}}" alt=""></a>
                                        <figcaption>
                                            <h2>JUPEB</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('web/tpl/images/dip.html')}}" alt=""></a>
                                        <figcaption>
                                            <h2>Diploma Programmes</h2>
                                            <a href="#" class="wm-banner-btn">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->


        <!-- UPCOMING EVENTS -->
        <section>
            <div class="container com-sp pad-bot-0">
                <div class="row">
                    <div class="col-md-4">

                        <div class="ho-ev-latest ho-ev-latest-bg-1">
                            <div class="ho-lat-ev">
                                <h4>Upcoming Events</h4>
                                <p>Stay up to date with upcoming events Imo State University.</p>
                            </div>
                        </div>
                        <style type="text/css">
                            .date-fig {
                                font-size: 41px;
                                font-weight: 600;
                                color: #007F00;
                                line-height: 1;
                            }

                            .mon-fig {
                                margin-top: 5px;
                                line-height: 1;
                            }

                            .event-sec-hr {
                                width: 90%;
                                height: 3px;
                                background-color: #007F00;
                            }

                            .event-sec-heading {
                                font-weight: 500;
                                cursor: pointer;
                            }

                            .date-time-wrapper {
                                display: flex;
                                align-items: center;
                                color: #007F00;
                                margin-top: 17px;
                            }

                            .event-sec-time {
                                display: flex;
                                align-items: center;
                            }

                            .event-sec-icon {
                                font-size: 15px;
                                margin-right: 10px;
                            }

                            .mr-10 {
                                margin-right: 11px;
                            }

                            hr.event-sec-hr-full {
                                margin-top: 6px;
                            }
                        </style>
                        <div class="event-sec">
                            <div class="row">
                                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                                    <div class="date-fig">17</div>
                                    <div class="mon-fig">March</div>
                                    <hr class="event-sec-hr">
                                </div>
                                <div class="col-9">
                                    <div class="event-sec-heading">Resumption of Students after Election Break</div>
                                    <div class="date-time-wrapper">
                                        <div class="event-sec-time mr-10"><span
                                                class="material-symbols-outlined event-sec-icon">schedule</span> 7:00 am
                                            - 11:30 pm
                                        </div>
                                        <div class="event-sec-time"><span
                                                class="material-symbols-outlined event-sec-icon">pin_drop</span>IMSU
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-sec-hr-full">
                        </div>
                        <div class="event-sec">
                            <div class="row">
                                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                                    <div class="date-fig">30</div>
                                    <div class="mon-fig">June</div>
                                    <hr class="event-sec-hr">
                                </div>
                                <div class="col-9">
                                    <div class="event-sec-heading">Matriculation of New Students for 2022/2023 Academic
                                        Session
                                    </div>
                                    <div class="date-time-wrapper">
                                        <div class="event-sec-time mr-10"><span
                                                class="material-symbols-outlined event-sec-icon">schedule</span> 12:40
                                            am - 05:30 pm
                                        </div>
                                        <div class="event-sec-time"><span
                                                class="material-symbols-outlined event-sec-icon">pin_drop</span>IMSU
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-sec-hr-full">
                        </div>
                        <div class="event-sec">
                            <div class="row">
                                <div class="col-3 d-flex justify-content-center align-items-center flex-column">
                                    <div class="date-fig">17</div>
                                    <div class="mon-fig">March</div>
                                    <hr class="event-sec-hr">
                                </div>
                                <div class="col-9">
                                    <div class="event-sec-heading">Commencement of First Semester Examination for
                                        2022/2023 Academic Session
                                    </div>
                                    <div class="date-time-wrapper">
                                        <div class="event-sec-time mr-10"><span
                                                class="material-symbols-outlined event-sec-icon">schedule</span> 7:00 am
                                            - 11:30 pm
                                        </div>
                                        <div class="event-sec-time"><span
                                                class="material-symbols-outlined event-sec-icon">pin_drop</span>IMSU
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-sec-hr-full">
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="ho-ev-latest ho-ev-latest-bg-2">
                            <div class="ho-lat-ev">
                                <h4>Important Notice</h4>
                                <p>Stay up to date with important announcement in Imo State University.</p>
                            </div>
                        </div>

                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/alum.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Payment of All Types of Fees to IMSU</div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">pin_drop</span> Imo
                                        State University
                                    </div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>

                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/t_bg.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Course Registration and Examination Card</div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">pin_drop</span> Imo
                                        State University
                                    </div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>

                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/aca.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Instructions to returning students</div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">pin_drop</span> Imo
                                        State University
                                    </div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <style type="text/css">
                            .sec-cont {
                                margin: 32px 0;
                            }

                            .sec-img-wrapper img {
                                width: inherit;
                                height: 78px;
                                object-fit: cover;
                                border-radius: 3px;
                            }

                            .sec-cont-heading {
                                font-size: 15px;
                                font-weight: bold;
                                margin-bottom: 12px;
                                color: #000;
                                cursor: pointer;
                            }

                            .sec-cont-comment {
                                color: rgb(128, 128, 128);
                                font-size: 14px;
                                display: flex;
                                align-items: center;
                                justify-content: space-around;
                            }

                            .sec-cont-pin-icon {
                                font-size: 17px;
                            }

                            .sec-cont-comment-count {
                                color: #00FF00;
                                justify-self: self-start;
                            }
                        </style>

                        <div class="ho-ev-latest ho-ev-latest-bg-3">
                            <div class="ho-lat-ev">
                                <h4>Latest News & Updates </h4>
                                <p>Stay up to date with latest news and updates in Imo State University.</p>
                            </div>
                        </div>

                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/event/1.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Alumni chairman promises to revamp IMSU sports</div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">forum</span> Comment(s)
                                        | <span class="sec-cont-comment-count">43</span></div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>
                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/event/3.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Balance academics with morality, IMSU VC urges
                                        universities
                                    </div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">forum</span> Comment(s)
                                        | <span class="sec-cont-comment-count">160</span></div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>
                        <div class="sec-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="sec-img-wrapper">
                                        <img src="{{ asset('web/tpl/images/event/2.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="sec-cont-heading">Commencement of Pre Degree Admission</div>
                                    <div class="sec-cont-comment"><span
                                            class="material-symbols-outlined sec-cont-pin-icon">forum</span> Comment(s)
                                        | <span class="sec-cont-comment-count">467</span></div>
                                </div>
                            </div>
                            <hr class="sec-cont-hr">
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- main-area-end -->

@endsection

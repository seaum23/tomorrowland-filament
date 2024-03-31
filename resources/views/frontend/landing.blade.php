@extends('layouts.frontend')

@section('content')
    {{-- <section class="slide-container to-top">

        <div id="P_MS659019099ef64"  class="master-slider-parent ms-parent-id-5">

            <div id="MS659019099ef64" class="master-slider ms-skin-default">
                @foreach ($sports as $sport)
                    @if ($sport->is_featured)
                    <div class="ms-slide"
                        data-delay="5"
                        data-fill-mode="fill">
                        <div class="ms-pattern ms-patt-1"
                            style></div>
                        <img src="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/blank.gif"
                            alt
                            title
                            data-src="{{asset('storage/'.$sport->attachments[0])}}" />
                        <img src="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/blank.gif"
                            alt
                            title
                            data-src="{{asset('storage/'.$sport->attachments[1])}}" />
                        <div class="ms-layer heading-button msp-cn-5-3"
                            style
                            data-effect="t(true,n,-150,n,n,n,n,n,n,n,n,n,n,n,n)"
                            data-duration="1062"
                            data-delay="2050"
                            data-ease="easeInOutExpo"
                            data-offset-x="108"
                            data-offset-y="90"
                            data-origin="ml">
                            <a href="{{ route('book.index', $sport->name) }}">Book for {{ $sport->name }} now</a></div>
                        <div class="ms-layer  msp-cn-5-2"
                            style
                            data-effect="t(true,n,-500,n,n,n,n,n,n,n,n,n,n,n,n)"
                            data-duration="1175"
                            data-delay="1087"
                            data-ease="easeInOutExpo"
                            data-offset-x="103"
                            data-offset-y="0"
                            data-origin="ml">
                            Want to play {{ $sport->name }}?</div>
                        <div class="ms-layer  msp-cn-5-1"
                            style
                            data-effect="t(true,-250,n,n,n,n,n,n,n,n,-25,n,n,n,n)"
                            data-duration="1200"
                            data-ease="easeInOutExpo"
                            data-resize="false"
                            data-offset-x="108"
                            data-offset-y="-100"
                            data-origin="ml">
                            Tomorrowland</div>
                    </div>
                    @endif
                @endforeach
            </div>

        </div>

        <script>
            (window.MSReady = window.MSReady || []).push(function($) {

                "use strict";
                var masterslider_ef64 = new MasterSlider();

                // slider controls
                masterslider_ef64.control('arrows', {
                    autohide: true,
                    overVideo: true
                });
                
                // slider setup
                masterslider_ef64.setup("MS659019099ef64", {
                    width: 1400,
                    height: $(window).height(),
                    minHeight: 0,
                    space: 0,
                    start: 1,
                    grabCursor: true,
                    swipe: false,
                    mouse: false,
                    keyboard: false,
                    layout: "halfscreen",
                    wheel: false,
                    autoplay: false,
                    instantStartLayers: false,
                    mobileBGVideo: false,
                    loop: true,
                    shuffle: false,
                    preload: 0,
                    heightLimit: true,
                    autoHeight: false,
                    smoothHeight: true,
                    endPause: false,
                    overPause: true,
                    fillMode: "fill",
                    centerControls: true,
                    startOnAppear: false,
                    layersMode: "center",
                    autofillTarget: "",
                    hideLayers: false,
                    fullscreenMargin: 0,
                    speed: 20,
                    dir: "h",
                    responsive: false,
                    tabletWidth: 768,
                    tabletHeight: null,
                    phoneWidth: 480,
                    phoneHeight: null,
                    sizingReference: window,
                    parallaxMode: 'swipe',
                    view: "basic"
                });


                window.masterslider_instances = window.masterslider_instances || [];
                window.masterslider_instances.push(masterslider_ef64);
            });
        </script>
        <div id="to-bottom" class="to-bottom"><i class="fa fa-angle-down"></i></div>
    </section> --}}
    <div class="sports-banner">
        {{-- @foreach ($sports as $sport) --}}
            {{-- @if ($sport->is_featured) --}}
        <div class="sports-banner-child-featured sports-banner-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url({{ asset('assets/banner.jpg') }});">
            <div class="banner-body">
                {{-- <div class="wpb_wrapper"> --}}
                    {{-- <div class="img-class"><img src="{{ asset('storage/'.$sport->attachments[0]) }}" alt="Men Class"></div> --}}
                    <div class="feature-text">
                        <div class="feature-logo-style slide-in-left ms-layer msp-cn-5-1" style="width: fit-content; margin: 10px 10px 10px 0px">Tomorrowland</div>
                        <div class="">
                            <p class="feature-text-style slide-in-top delay-1">Let's Play Chattogram!</p>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
            {{-- @endif --}}
        {{-- @endforeach --}}
        @php
            $delay = 0;
        @endphp
        @foreach ($sports as $sport)
            @if ($sport->show_on_banner)
                <div onclick="loadPage('{{ route('book.index', $sport->name) }}')" class="sports-banner-child sports-banner-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url({{ asset('storage/'.$sport->attachments[0]) }});cursor:pointer;">
                    <div class="slide-in-top-y heading-button div-heading"><a href="{{ route('book.index', $sport->name) }}">Book for {{ $sport->name }}</a></div>
                    <div style="margin-left: 10px; margin-top: 10px; animation-delay: {{$delay}}ms" class="slide-in-left join"><a href="{{ route('book.index', $sport->name) }}">Book Now</a></div>
                    <div class="banner-body-sports" style="justify-content: end;text-align: end; padding-right: 50px">
                        {{-- <div class="wpb_wrapper"> --}}
                            {{-- <div class="img-class"><img src="{{ asset('storage/'.$sport->attachments[0]) }}" alt="Men Class"></div> --}}
                            <div class="">
                                <div class="title">
                                    <h3 class="slide-in-left title-men" style="color: #dbf227;font-size: 3rem;font-weight: bold; animation-delay: {{$delay+800}}ms">{{ $sport->name }}</h3>
                                </div>
                                <div class="">
                                    <p style="color: #dbf227;font-size: 2rem; animation-delay: {{$delay+1600}}ms" class="slide-in-left ">{{ $sport->description }}</p>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
                @php
                    $delay += 1000;
                @endphp
            @endif
        @endforeach
    </div>
    <div>
        <article id="post-2" class="post-2 page type-page status-publish hentry">
            <div class="entry-content">
                
                <div class="vc_row wpb_row vc_row-fluid about scroll-to vc_custom_1428996205928 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid about-top">
                                    <div class="container">
                                        <div class="row" style="margin-top: 10px">
                                            <video controls width="100%">
                                                {{-- <source src="/media/cc0-videos/flower.webm" type="video/webm" /> --}}
                                              
                                                <source src="{{ asset('assets/landing-video.mp4') }}" type="video/mp4" />
                                              
                                                Download the
                                                {{-- <a href="/media/cc0-videos/flower.webm">WEBM</a> --}}
                                                {{-- or --}}
                                                <a href="{{ asset('assets/landing-video.mp4') }}">MP4</a>
                                                video.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="vc_row wpb_row vc_inner vc_row-fluid about-bottom vc_custom_1425550129782">
                                    <div class="container">
                                        <div class="row">
                                            <div class="hour about-con wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <div class="about-btm-left about-box">
                                                                    <div class="about-bottom-title">
                                                                        <h4>Working hours</h4>
                                                                    </div>
                                                                    <div class="working-hours">
                                                                        <p>Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt</p>
                                                                        <div class="time-hours">
                                                                            <div class="time-hours-item">Monday &#8211; Friday 08:00 &#8211; 16:00</div>
                                                                            <div class="time-hours-item">Saturday 09:30 &#8211; 15:30</div>
                                                                            <div class="time-hours-item">Sunday 09:30 &#8211; 15:30</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news about-con block-item-special wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <div class="about-btm-center about-box">
                                                                    <div class="about-bottom-title">
                                                                        <h4>What&#8217;s News?</h4>
                                                                    </div>
                                                                    <div class="news-content">
                                                                        <ul>
                                                                            <li class="latest-news-item">
                                                                                <div class="news-item-inner">
                                                                                    <div class="news-date">
                                                                                        <div class="news-day">25</div>
                                                                                        <div class="news-month">OCT</div>
                                                                                    </div>
                                                                                    <div class="news-info">
                                                                                        <div class="news-title"><a href="#">Yoga standart new class</a></div>
                                                                                        <div class="news-time">
                                                                                            <p>Room C 9.00 &#8211; 10.00</p>
                                                                                        </div>
                                                                                        <div class="news-name">Amanda Bale</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="latest-news-item">
                                                                                <div class="news-item-inner">
                                                                                    <div class="news-date">
                                                                                        <div class="news-day">28</div>
                                                                                        <div class="news-month">OCT</div>
                                                                                    </div>
                                                                                    <div class="news-info">
                                                                                        <div class="news-title"><a href="#">Boxing new class</a></div>
                                                                                        <div class="news-time">
                                                                                            <p>Room C 9.00 &#8211; 10.00</p>
                                                                                        </div>
                                                                                        <div class="news-name">Alex Krasnow</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-us about-con wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1431500982572">
                                                            <div class="wpb_wrapper">
                                                                <div class="about-btm-right about-box">
                                                                    <div class="about-bottom-title">
                                                                        <h4>Contact Us</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="contact-map about-box">
                                                            <div class="map-contain"
                                                                data-mrk-position="left"
                                                                data-mrk-width="108"
                                                                data-mrk-height="49"
                                                                data-title="Inwavethemes"
                                                                data-image
                                                                data-lat="40.6700"
                                                                data-long="-73.9400"
                                                                data-zoom="11"
                                                                data-info>
                                                                <div class="map-view map-frame"></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                jQuery(document).ready(function() {
                                                                    jQuery(".about-box .map-contain").iwMap();
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="vc_row wpb_row vc_row-fluid training vc_custom_1425550204607">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="parallax-block-wrap-module auto-width"
                                    style="height:400px; width:100%;">
                                    <div id="parallax-block-7139"
                                        class="parallax-block bt-advance-parallax">
                                        <style type="text/css"
                                            scoped>
                                            #parallax-block-7139 .default-pos {
                                                opacity: 1;
                                                transform: translate(0, 0);
                                            }

                                            #parallax-block-7139 h1.default-pos {
                                                transition: all 0.5s ease 0.9s;
                                            }

                                            #parallax-block-7139 p.default-pos {
                                                transition: all 0.5s ease 0.6s;
                                            }

                                            #parallax-block-7139 img.default-pos {
                                                transition: all 0.5s ease 0.3s;
                                            }

                                            #parallax-block-7139 .parallax-block-content.default-pos {
                                                transition: all 0.5s ease 0s;
                                            }

                                            #parallax-block-7139 .in-pos {
                                                opacity: 0;
                                                transform: translateX(-250px);
                                            }

                                            #parallax-block-7139 h1.in-pos {
                                                transition: all 0.5s ease 0.9s;
                                            }

                                            #parallax-block-7139 p.in-pos {
                                                transition: all 0.5s ease 0.6s;
                                            }

                                            #parallax-block-7139 img.in-pos {
                                                transition: all 0.5s ease 0.3s;
                                            }

                                            #parallax-block-7139 .parallax-block-content.in-pos {
                                                transition: all 0.5s ease 0s;
                                            }

                                            #parallax-block-7139 .out-pos {
                                                opacity: 0;
                                                transform: translateX(250px);
                                            }

                                            #parallax-block-7139 h1.out-pos {
                                                transition: all 0.5s ease 0s;
                                            }

                                            #parallax-block-7139 p.out-pos {
                                                transition: all 0.5s ease 0.6s;
                                            }

                                            #parallax-block-7139 img.out-pos {
                                                transition: all 0.5s ease 0.3s;
                                            }

                                            #parallax-block-7139 .parallax-block-content.out-pos {
                                                transition: all 0.5s ease 0.9s;
                                            }
                                        </style>
                                        <div class="control-button">
                                            <div class="nav-wrap hidden">
                                                <div class="nav-wrap-in next">
                                                    <span class="nav-next"></span>
                                                </div>
                                                <div class="nav-wrap-in prev">
                                                    <span class="nav-prev"></span>
                                                </div>
                                            </div>
                                            <div class="button-wrap"
                                                style="display: none;">
                                                <span class="button close-btn"></span>
                                            </div>
                                        </div>
                                        <div class="parallax-background">

                                            <img src="https://athlete.sdemo.site/wp-content/uploads/2015/03/bg_44.jpg"
                                                alt="Image background" />
                                            <div class="parallax-background-overlay"
                                                style=" opacity: 0.8"></div>
                                        </div>
                                        <div class="parallax-block-content"
                                            style="width: 100%">
                                            <div class="parallax-v2 parallax-text">
                                                <p class="start-your default-pos">Start your</p>
                                                <h1 class="training-title default-pos">Training today</h1>
                                                <p><a class="open-btn"
                                                        href="#"><span class="play-now">Play Now</span></a></p>
                                            </div>
                                        </div>
                                        <div class="parallax-content-wrap"
                                            style="display: none;">
                                            <div class="parallax-content hidden video-background">
                                                <div class="parallax-content-in">
                                                </div>
                                            </div>
                                            <div class="content-show-large hidden"
                                                style="display:none;">
                                                <div class="item-contain">
                                                </div>
                                                <div class="loading"><img src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/images/loading-black.gif"
                                                        alt="Loading..." /></div>
                                            </div>
                                        </div>
                                        <div class="overlay-loading"><span class="loading"><img src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/images/loading-black.gif"
                                                    alt="Loading..." /></span></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        jQuery('#parallax-block-7139').btparallaxfix("50%", 0.5);
                                        var options = {
                                            slideSize: {
                                                'type': 'auto',
                                                'size': ''
                                            },
                                            parallaxType: 'dynamic',
                                            parallaxOpenEffect: 'fancy',
                                            parallaxItem: 'start-your-training-today',
                                            speed: 2,
                                            minWidthAllow: 1,
                                            backgroundColor: '',
                                            contentType: 'video'
                                        };
                                        jQuery('#parallax-block-7139').btParallax(options);
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="vc_row wpb_row vc_row-fluid vc_custom_1429775700688">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="iw-events timetable ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="timetable-top">
                                                <div class="col-md-12">
                                                    <div class="title-page title-time">
                                                        <h3>Athlete Timetable</h3>
                                                        <p>Working from home meant we could vary snack and coffee breaks, change our desks or view, goof off, drink on the job, even spend the day in pajamas.</p>
                                                    </div>
                                                </div>
                                                <div class="timetable-content col-md-12">
                                                    <div class="owl-carousel"
                                                        data-nav="t-nav-"
                                                        data-plugin-options="{&quot;autoPlay&quot;:false,&quot;navigation&quot;:false,&quot;singleItem&quot;:true,&quot;autoHeight&quot;:true}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="vc_row wpb_row vc_row-fluid our-pricing vc_custom_1427877527714">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-pricing-title ">
                                    <div class="ch-item">
                                        <div class="ch-info-wrap">
                                            <div class="ch-info">
                                                <div class="ch-info-front">
                                                    <h2>Our</h2>
                                                    <h3>Pricing</h3>
                                                </div>
                                                <div class="ch-info-back">
                                                    <h2>Our</h2>
                                                    <h3>Pricing</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1425887027500">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1425887018095">
                                            <div class="wpb_wrapper">
                                                <div class="boxing-card">
                                                    <div class="our-price">
                                                        <div class="image-price-right"><img src="https://athlete.sdemo.site/wp-content/uploads/2014/12/our-price-1.jpg"
                                                                alt="Boxing Gloves"></div>
                                                        <div class="boxing-card-content">
                                                            <h3>Boxing Gloves</h3>
                                                            <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adi sollicitudin. Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis</p>
                                                            <div class="price"><a class="shopping-buy"
                                                                    href><span>$199</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1425887007138">
                                            <div class="wpb_wrapper">
                                                <div class="yoga-card">
                                                    <div class="our-price">
                                                        <div class="image-price-right"><img src="https://athlete.sdemo.site/wp-content/uploads/2014/12/our-price-2.jpg"
                                                                alt="Yoga monthly card"></div>
                                                        <div class="yoga-content">
                                                            <div class="yoga-card-content">
                                                                <h3>Yoga monthly card</h3>
                                                                <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adi sollicitudin. Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis</p>
                                                                <div class="price"><a class="shopping-buy"
                                                                        href><span>$39</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <section class="classes teachers"
                                            id="classes">
                                            <div class="our-class-main">
                                                <section class="our-trainers"
                                                    id="our-trainers">
                                                    <div class="row">
                                                        <div class="element-item our-trainer-box col-md-4 col-sm-4 col-xs-12">
                                                            <div class="product-image-wrapper">
                                                                <div class="product-content">
                                                                    <div class="product-image product-trainer">
                                                                        <a href="#"><img alt
                                                                                src="{{ asset('assets/lionel-messi.jpg') }}"></a>
                                                                    </div>
                                                                    <div class="info-products">
                                                                        <div style="display: flex;align-items: center;justify-content: center;font-size: 3rem" class="img-trainers">
                                                                            <i style="color: black" class="fa-solid fa-futbol"></i>
                                                                        </div>
                                                                        <div class="product-name">
                                                                            <a href="#">Lionel Messi</a>
                                                                            <div class="product-bottom"></div>
                                                                        </div>
                                                                        <div class="product-info">
                                                                            <p>The day you think there is no improvements to be made is a sad one for any player.</p>
                                                                        </div>
                                                                        {{-- <div class="actions">
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-item our-trainer-box col-md-4 col-sm-4 col-xs-12">
                                                            <div class="product-image-wrapper">
                                                                <div class="product-content">
                                                                    <div class="product-image product-trainer">
                                                                        <a href="#"><img alt
                                                                                src="{{ asset('assets/Sachin-Tendulkar.jpg') }}"></a>
                                                                    </div>
                                                                    <div class="info-products">
                                                                        <div style="display: flex;align-items: center;justify-content: center;font-size: 3rem" class="img-trainers">
                                                                            <i style="color: black" class="fa-solid fa-baseball-bat-ball"></i>
                                                                        </div>
                                                                        <div class="product-name">
                                                                            <a href="#">Sachin Tendulkar</a>
                                                                            <div class="product-bottom"></div>
                                                                        </div>
                                                                        <div class="product-info">
                                                                            <p>People throw stones at you and you convert them into milestones.</p>
                                                                        </div>
                                                                        {{-- <div class="actions">
                                                                            <ul></ul>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-item our-trainer-box col-md-4 col-sm-4 col-xs-12">
                                                            <div class="product-image-wrapper">
                                                                <div class="product-content">
                                                                    <div class="product-image product-trainer">
                                                                        <a href="#"><img alt
                                                                                src="{{ asset('assets/cristiano-ronaldo.jpg') }}"></a>
                                                                    </div>
                                                                    <div class="info-products">
                                                                        <div style="display: flex;align-items: center;justify-content: center;font-size: 3rem" class="img-trainers">
                                                                            <i style="color: black" class="fa-solid fa-futbol"></i>
                                                                        </div>
                                                                        <div class="product-name">
                                                                            <a href="#">Cristiano Ronaldo</a>
                                                                            <div class="product-bottom"></div>
                                                                        </div>
                                                                        <div class="product-info">
                                                                            <p>Dreams are not what you see in your sleep, dreams are things which do not let you sleep.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            {{-- <div class="load-product">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="load-more load-teacher"
                                                            id="load-more-class"><span class="ajax-loading-icon"
                                                                style="margin-right: 10px; display: none;"><i class="fa fa-spinner fa-spin fa-2x"></i></span>Load More</button>
                                                        <div class="post-pagination clearfix"
                                                            style="display: none;"><span aria-current="page"
                                                                class="page-numbers current">1</span>
                                                            <a class="page-numbers"
                                                                href="https://athlete.sdemo.site/?page=2">2</a>
                                                            <a class="page-numbers"
                                                                href="https://athlete.sdemo.site/?page=3">3</a>
                                                            <a class="next page-numbers"
                                                                href="https://athlete.sdemo.site/?page=2">></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </section>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="classes-content ">
                                    <div class="classes-wapper">
                                        <div class="title-page">
                                            <h3 class="module-title-h3">Leetee</h3>
                                            <h4 class="module-title-h4"></h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <section class="classes"
                                        id="classes">
                                        <div class="categories">
                                            <div class="filters button-group"
                                                id="filters">
                                                <button class="filter is-checked"
                                                    data-filter="*">All Class</button><button class="filter"
                                                    data-filter=".boxing">Boxing class</button><button class="filter"
                                                    data-filter=".yoga">Yoga class</button><button class="filter"
                                                    data-filter=".sport-class">Sport class</button><button class="filter"
                                                    data-filter=".fitness-class">Fitness class</button>
                                            </div>
                                        </div>
                                        <div class="our-class-main">
                                            <div class="row">
                                                <div class="classes-athlete">
                                                    <div class="classes-inner">
                                                        <div class="classes-content"
                                                            id="filtering-demo">
                                                            <section class="isotope"
                                                                id="our-class-main">
                                                                <div data-category="sport-class"
                                                                    class="sport-class yoga mix element-item col-xs-12 col-sm-6 col-md-4"
                                                                    style>
                                                                    <div class="box-inner">
                                                                        <img alt
                                                                            src="https://athlete.sdemo.site/wp-content/uploads/2015/04/body_building_for_girl-370x250.jpg">
                                                                        <div class="box-content">
                                                                            <div class="table">
                                                                                <div class="box-cell">
                                                                                    <div class="title">
                                                                                        <a href="https://athlete.sdemo.site/courses/yoga-for-girls/">
                                                                                            <span>Yoga® for girls</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus....</div>
                                                                                    <div class="box-details">
                                                                                        <a href="https://athlete.sdemo.site/courses/yoga-for-girls/">Details</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-category="fitness-class"
                                                                    class="fitness-class yoga mix element-item col-xs-12 col-sm-6 col-md-4"
                                                                    style>
                                                                    <div class="box-inner">
                                                                        <img alt
                                                                            src="https://athlete.sdemo.site/wp-content/uploads/2015/04/yoga_for_girl-370x250.jpg">
                                                                        <div class="box-content">
                                                                            <div class="table">
                                                                                <div class="box-cell">
                                                                                    <div class="title">
                                                                                        <a href="https://athlete.sdemo.site/courses/cardio-fitness-for-girl/">
                                                                                            <span>Cardio Fitness for girl</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus....</div>
                                                                                    <div class="box-details">
                                                                                        <a href="https://athlete.sdemo.site/courses/cardio-fitness-for-girl/">Details</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-category="fitness-class"
                                                                    class="fitness-class yoga mix element-item col-xs-12 col-sm-6 col-md-4"
                                                                    style>
                                                                    <div class="box-inner">
                                                                        <img alt
                                                                            src="https://athlete.sdemo.site/wp-content/uploads/2015/04/aerobics_megaclass1-370x250.jpg">
                                                                        <div class="box-content">
                                                                            <div class="table">
                                                                                <div class="box-cell">
                                                                                    <div class="title">
                                                                                        <a href="https://athlete.sdemo.site/courses/aerobics-megaclass/">
                                                                                            <span>Aerobics megaclass</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus....</div>
                                                                                    <div class="box-details">
                                                                                        <a href="https://athlete.sdemo.site/courses/aerobics-megaclass/">Details</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-category="fitness-class"
                                                                    class="fitness-class yoga mix element-item col-xs-12 col-sm-6 col-md-4"
                                                                    style>
                                                                    <div class="box-inner">
                                                                        <img alt
                                                                            src="https://athlete.sdemo.site/wp-content/uploads/2015/04/advance_fitness1-370x250.jpg">
                                                                        <div class="box-content">
                                                                            <div class="table">
                                                                                <div class="box-cell">
                                                                                    <div class="title">
                                                                                        <a href="https://athlete.sdemo.site/courses/aerobics-megaclass/advance-fitness-for-girl/">
                                                                                            <span>Advance fitness for girl</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus....</div>
                                                                                    <div class="box-details">
                                                                                        <a href="https://athlete.sdemo.site/courses/aerobics-megaclass/advance-fitness-for-girl/">Details</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-category="fitness-class"
                                                                    class="fitness-class sport-class mix element-item col-xs-12 col-sm-6 col-md-4"
                                                                    style>
                                                                    <div class="box-inner">
                                                                        <img alt
                                                                            src="https://athlete.sdemo.site/wp-content/uploads/2015/04/body_building_for_man-370x250.jpg">
                                                                        <div class="box-content">
                                                                            <div class="table">
                                                                                <div class="box-cell">
                                                                                    <div class="title">
                                                                                        <a href="https://athlete.sdemo.site/courses/fitness-for-man/">
                                                                                            <span>Fitness for man</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus....</div>
                                                                                    <div class="box-details">
                                                                                        <a href="https://athlete.sdemo.site/courses/fitness-for-man/">Details</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="load-product">
                                            <button class="load-more load-courses"
                                                id="load-more-class"><span class="ajax-loading-icon"
                                                    style="margin-right: 10px; display: none;"><i class="fa fa-spinner fa-spin fa-2x"></i></span>Load More</button>
                                            <div class="post-pagination clearfix"
                                                style="display: none;"><span aria-current="page"
                                                    class="page-numbers current">1</span>
                                                <a class="page-numbers"
                                                    href="https://athlete.sdemo.site/?paged=2">2</a>
                                                <a class="page-numbers"
                                                    href="https://athlete.sdemo.site/?paged=3">3</a>
                                                <a class="next page-numbers"
                                                    href="https://athlete.sdemo.site/?paged=2">></a>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <footer class="entry-footer ">
            </footer>
        </article>
    </div>
@endsection

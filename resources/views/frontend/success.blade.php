@extends('layouts.frontend')

@section('content')
    <section class="slide-container to-top">
        <div id="P_MS659019099ef64"  class="master-slider-parent ms-parent-id-5" style>
            <div id="MS659019099ef64" class="master-slider ms-skin-default">
                    <div class="ms-slide" data-delay="5" data-fill-mode="fill">
                        <div class="ms-pattern ms-patt-1" style></div>
                        <img src="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/blank.gif"
                            alt
                            title
                            data-src="{{asset('storage/01HM9NVEYEXH4A91YZVVRTP5EG.jpg')}}" />
                        {{-- <img src="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/blank.gif"
                            alt
                            title
                            data-src="{{asset('storage/'.$sport->attachments[1])}}" /> --}}
                            {{-- data-src="https://athlete.sdemo.site/wp-content/uploads/2014/12/bg_2.jpg" /> --}}
                        <div class="ms-layer msp-cn-5-3"
                            style
                            data-effect="front(long)" 
                            data-duration="800" 
                            data-delay="0" 
                            data-hide-effect="fade"
                            data-offset-x="108"
                            data-offset-y="90"
                            data-origin="ml">
                            Please complete payment</div>
                        <div class="ms-layer  msp-cn-5-2"
                            style
                            data-effect="front(long)" 
                            data-duration="800" 
                            data-delay="0" 
                            data-hide-effect="fade"
                            data-offset-x="103"
                            data-offset-y="0"
                            data-origin="ml">
                            Thank you for booking</div>
                        <div class="ms-layer  msp-cn-5-1"
                            style
                            data-effect="t(true,n,n,n,n,n,n,n,n,n,-25,n,n,n,n)"
                            data-duration="1200"
                            data-ease="easeInOutExpo"
                            data-resize="false"
                            data-offset-x="108"
                            data-offset-y="-100"
                            data-origin="ml">
                            Tomorrowland</div>
                    </div>
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
                    height: 768,
                    minHeight: 0,
                    space: 0,
                    start: 1,
                    grabCursor: true,
                    swipe: false,
                    mouse: false,
                    keyboard: false,
                    layout: "fullscreen",
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
                    responsive: true,
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
        {{-- <div id="to-bottom" class="to-bottom"><i class="fa fa-angle-down"></i></div> --}}
    </section>
    <div class="contents-main" id="contents-main">
    </div>
@endsection

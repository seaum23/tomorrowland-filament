<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"
        href="{{ asset('images/favicon.ico') }}"
        type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
        rel="stylesheet"
        type="text/css" />

    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    {{-- <link rel="stylesheet"
        id="wp-block-library-css"
        href="https://athlete.sdemo.site/wp-includes/css/dist/block-library/style.min.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="wc-blocks-vendors-style-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=7.8.3"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="wc-blocks-style-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=7.8.3"
        type="text/css"
        media="all" /> --}}
    <style id="global-styles-inline-css"
        type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    {{-- <link rel="stylesheet"
        id="ap-paralax-css-css"
        href="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/css/adv_parallax_styles.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="custombox-css"
        href="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/css/custombox.min.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="font-awesome-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/font-awesome.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    <style id="font-awesome-inline-css"
        type="text/css">
        [data-font="FontAwesome"]:before {
            font-family: 'FontAwesome' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    {{-- <link rel="stylesheet"
        id="iwicon-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/iwicon.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="iwc-css-css"
        href="https://athlete.sdemo.site/wp-content/plugins/iw_courses/assets/css/iw_courses_style.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="fancybox-css-css"
        href="https://athlete.sdemo.site/wp-content/plugins/iw_courses/assets/lib/fancyBox/source/jquery.fancybox.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="woocommerce-layout-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.7.0"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="woocommerce-smallscreen-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.7.0"
        type="text/css"
        media="only screen and (max-width: 768px)" /> --}}
    {{-- <link rel="stylesheet"
        id="woocommerce-general-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.7.0"
        type="text/css"
        media="all" /> --}}
    <style id="woocommerce-inline-inline-css"
        type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    {{-- <link rel="stylesheet"
        id="woo-variation-swatches-css"
        href="https://athlete.sdemo.site/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=1658590253"
        type="text/css"
        media="all" /> --}}
    <style id="woo-variation-swatches-inline-css"
        type="text/css">
        :root {
            --wvs-tick: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");

            --wvs-cross: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff0000' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
            --wvs-single-product-item-width: 30px;
            --wvs-single-product-item-height: 30px;
            --wvs-single-product-item-font-size: 16px
        }
    </style>
    {{-- <link rel="stylesheet"
        id="athlete-parent-style-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/style.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/frontend/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom.css') }}">
    {{-- @vite(['resources/css/app.css']) --}}
    {{-- <link rel="stylesheet"
        id="athlete-style-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete-child/style.css?ver=6.0.6"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="bootstrap-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/bootstrap.min.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="jquery-custombox-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/jquery.custombox.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="athlete-effect-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/effect.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="athlete-animation-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/animation.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="owl-carousel-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/owl.carousel.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="owl-transitions-css"
        href="https://athlete.sdemo.site/wp-content/themes/athlete/css/owl.transitions.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="athlete-color-css"
        href="https://athlete.sdemo.site/wp-content/uploads/athlete/custom.css?ver=1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="evcal_cal_default-css"
        href="//athlete.sdemo.site/wp-content/plugins/eventON/assets/css/eventon_styles.css?ver=4.1.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="eventon_dynamic_styles-css"
        href="//athlete.sdemo.site/wp-content/plugins/eventON/assets/css/eventon_dynamic_styles.css?ver=4.1.1"
        type="text/css"
        media="all" /> --}}

    {{-- <link rel="stylesheet"
        id="evo_fc_styles-css"
        href="https://athlete.sdemo.site/wp-content/plugins/eventon-full-cal/assets/fc_styles.css?ver=1.1.11"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="js_composer_front-css"
        href="https://athlete.sdemo.site/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.9.0"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="ms-main-css"
        href="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/masterslider.main.css?ver=3.6.1"
        type="text/css"
        media="all" /> --}}
    {{-- <link rel="stylesheet"
        id="ms-custom-css"
        href="https://athlete.sdemo.site/wp-content/uploads/masterslider/custom.css?ver=37.2"
        type="text/css"
        media="all" /> --}}
    <script type="text/javascript"
        src="{{ asset('js/frontend/app.js') }}"
        id="jquery-core-js"></script>
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2"
        id="jquery-migrate-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/iw_courses/assets/lib/fancyBox/source/jquery.fancybox.js?ver=6.0.6"
        id="fancybox-js-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.7.0"
        id="jquery-blockui-js"></script> --}}
    {{-- <script type="text/javascript"
        id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/athlete.sdemo.site\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.7.0"
        id="wc-add-to-cart-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.9.0"
        id="vc_woocommerce-add-to-cart-js-js"></script> --}}
    {{-- <script>
        var ms_grabbing_curosr = 'https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/common/grabbing.cur',
            ms_grab_curosr = 'https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/css/common/grab.cur';
    </script> --}}
    <meta name="generator"
        content="MasterSlider 3.6.1 - Responsive Touch Image Slider" />
    <style>
        .no-pageheading .page-heading {
            display: none;
        }

        .no-pageheading header#header {
            position: relative;
        }

        .no-pageheading header#header.alt {
            margin-top: 0 !important;
        }
    </style>
    <style type="text/css"
        data-type="vc_shortcodes-custom-css">
        .vc_custom_1425549921432 {
            margin: 0px !important;
        }

        .vc_custom_1428996205928 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            /* background-image: url(https://athlete.sdemo.site/wp-content/uploads/2014/12/bg-position-3.jpg?id=1159) !important; */
        }

        .vc_custom_1425550204607 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1429775700688 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1427877527714 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1425464759231 {
            margin-right: 0px !important;
            margin-left: 0px !important;
            border-right-width: 0px !important;
            border-left-width: 0px !important;
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1425464769875 {
            margin-right: 0px !important;
            margin-left: 0px !important;
            border-right-width: 0px !important;
            border-left-width: 0px !important;
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1425550129782 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1431500982572 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1425887027500 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1425887018095 {
            margin: 0px !important;
            padding: 0px !important;
        }

        .vc_custom_1425887007138 {
            margin: 0px !important;
            border-width: 0px !important;
            padding: 0px !important;
        }
        
        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @yield('css')
</head>

<body id="page-top"
    class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-2 page-parent theme-athlete _masterslider _msp_version_3.6.1 woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-athlete-child wvs-show-label wvs-tooltip wpb-js-composer js-comp-ver-6.9.0 vc_responsive"
    data-offset="90"
    data-target=".navigation"
    data-spy="scroll">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRKC4V2"
            height="0"
            width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0 0.49803921568627" />
                    <feFuncG type="table"
                        tableValues="0 0.49803921568627" />
                    <feFuncB type="table"
                        tableValues="0 0.49803921568627" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0 1" />
                    <feFuncG type="table"
                        tableValues="0 1" />
                    <feFuncB type="table"
                        tableValues="0 1" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table"
                        tableValues="0 1" />
                    <feFuncB type="table"
                        tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0 1" />
                    <feFuncG type="table"
                        tableValues="0 0.27843137254902" />
                    <feFuncB type="table"
                        tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0 0" />
                    <feFuncG type="table"
                        tableValues="0 0.64705882352941" />
                    <feFuncB type="table"
                        tableValues="0 1" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0.78039215686275 1" />
                    <feFuncG type="table"
                        tableValues="0 0.94901960784314" />
                    <feFuncB type="table"
                        tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table"
                        tableValues="0 1" />
                    <feFuncB type="table"
                        tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 0 0"
        width="0"
        height="0"
        focusable="false"
        role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB"
                    type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table"
                        tableValues="0.098039215686275 1" />
                    <feFuncG type="table"
                        tableValues="0 0.66274509803922" />
                    <feFuncB type="table"
                        tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table"
                        tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic"
                    operator="in" />
            </filter>
        </defs>
    </svg>
    <div class="wrapper hide-main-content">
        <section class="page cms-home header-option cms-home">

            <div class="menu-wrap">
                <div class="main-menu">
                    <h4 class="title-menu">Main menu</h4>
                    <button class="close-button"
                        id="close-button"><i class="fa fa-times"></i></button>
                </div>
                <ul id="menu-main-menu"
                    class="nav-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-objec   t-page"><a href="{{ route('home') }}">Home</a></li>
                    @foreach ($sports as $sport)
                        <li class="menu-item menu-item-type-post_type menu-item-objec   t-page"><a href="{{ route('book.index', $sport->name) }}">{{ $sport->name }}</a></li>                        
                    @endforeach
                    {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-has-children dropdown selected active "><a href="https://athlete.sdemo.site/"
                            data-toggle="dropdown">Home</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/homepage-v2/">Home v2</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/layer-slider/">Layer Slider</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/homepage-v3/">One page</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/store/">Store</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/boxing/">Boxing</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/sample-page/homepage/">Light Version</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/under-construction/">Under Construction</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                            data-toggle="dropdown">Header Option</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/header-style-1/">Header Style 1</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/header-style-2/">Header Style 2</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/header-style-3/">Header Style 3</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/header-style-4/">Header Style 4</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                                    data-toggle="dropdown">Menu Levels</a><i class="icon-arrow"></i>
                                <ul class="child-nav dropdown-nav">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Menu Level 2</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                                            data-toggle="dropdown">Menu Level 2</a><i class="icon-arrow"></i>
                                        <ul class="child-nav dropdown-nav">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Menu Level 3</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Menu Level 3</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Menu Level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                            data-toggle="dropdown">Page!</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/page/about-us/">About us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/page/our-pricing-table/">Our Pricing Table</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/page/our-classes/">Our Classes</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-iw_courses"><a href="https://athlete.sdemo.site/courses/boxing/">Class detail</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/page/our-classes-2/">Our Trainers</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-iw_teacher"><a href="https://athlete.sdemo.site/teachers/392-2/">Trainer Profile</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                            data-toggle="dropdown">Products</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/shop/">Product Listing</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="?post_type=product&amp;category-layout=row">Product Listing Row</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-product"><a href="https://athlete.sdemo.site/product/life-fitness-g7-home-gym/">Product Detail</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/cart/">Product Cart</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/checkout/">Product Checkout</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                            data-toggle="dropdown">Event Calendar</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/calendar-full-view/">Calendar Full View</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/event-list/">Event Listing</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-ajde_events"><a href="https://athlete.sdemo.site/events/boxing-for-girls-2/">Event Details</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown"><a href="#"
                            data-toggle="dropdown">Blog</a><i class="icon-arrow"></i>
                        <ul class="child-nav dropdown-nav">
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://athlete.sdemo.site/category/success-stories/">Blog Listing</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="?p=347">Blog Detail</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://athlete.sdemo.site/contact-us/">Contact Us</a></li> --}}
                    <li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595"><a href="{{ route('contact.us') }}">Contact Us</a></li>
                    <li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595"><a href="#">About Us</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page landing-avater">
                        <a href="{{ url('customer/bookings') }}" aria-label="User menu" role="button" type="button" style="margin:23px 0;cursor: pointer;">
                            <img style="width: 35px; border-radius: 9999px;" class="fi-avatar object-cover object-center fi-circular rounded-full h-8 w-8 fi-user-avatar" src="https://ui-avatars.com/api/?name={{auth()->user()->initials()}}&color=FFFFFF&background={{ config('app.bg') }}">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content-wrapper">
                <header id="header" class="header header-container header-container-3 alt reveal">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-4 logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="Logo" /></a>
                            </div>
                            <div class="col-md-9 nav-container">

                                <nav class="megamenu collapse navbar-collapse bs-navbar-collapse navbar-right mainnav col-md-10"
                                    role="navigation">
                                    <ul id="menu-main-menu-1"
                                        class="nav-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595 {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                        <li id="menu-item-467" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children @foreach ($sports as $sport) {{ request()->is("book/$sport->name") ? 'active' : '' }} @endforeach">
                                            <a href="#">Sports<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                            @foreach ($sports as $sport)
                                                <li id="menu-item-1248" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent"><a href="{{ route('book.index', $sport->name) }}">{{ $sport->name }}</a></li>
                                            @endforeach
                                            </ul>
                                        </li>
                                        {{-- <li id="menu-item-37"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-has-children menu-item-37 selected active "><a href="https://athlete.sdemo.site/">Home<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-39"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="https://athlete.sdemo.site/sample-page/homepage-v2/">Home v2</a></li>
                                                <li id="menu-item-190"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="https://athlete.sdemo.site/sample-page/layer-slider/">Layer Slider</a></li>
                                                <li id="menu-item-40"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://athlete.sdemo.site/sample-page/homepage-v3/">One page</a></li>
                                                <li id="menu-item-768"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-768"><a href="https://athlete.sdemo.site/sample-page/store/">Store</a></li>
                                                <li id="menu-item-260"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="https://athlete.sdemo.site/sample-page/boxing/">Boxing</a></li>
                                                <li id="menu-item-742"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742"><a href="https://athlete.sdemo.site/sample-page/homepage/">Light Version</a></li>
                                                <li id="menu-item-1151"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1151"><a href="https://athlete.sdemo.site/under-construction/">Under Construction</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li id="menu-item-438"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-438"><a href="#">Header Option<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-441"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-441"><a href="https://athlete.sdemo.site/header-style-1/">Header Style 1</a></li>
                                                <li id="menu-item-440"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-440"><a href="https://athlete.sdemo.site/header-style-2/">Header Style 2</a></li>
                                                <li id="menu-item-439"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439"><a href="https://athlete.sdemo.site/header-style-3/">Header Style 3</a></li>
                                                <li id="menu-item-971"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971"><a href="https://athlete.sdemo.site/header-style-4/">Header Style 4</a></li>
                                                <li id="menu-item-1211"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1211"><a href="#">Menu Levels<i class="icon-arrow"></i></a>
                                                    <ul class="child-nav dropdown-nav">
                                                        <li id="menu-item-1212"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1212"><a href="#">Menu Level 2</a></li>
                                                        <li id="menu-item-1206"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1206"><a href="#">Menu Level 2<i class="icon-arrow"></i></a>
                                                            <ul class="child-nav dropdown-nav">
                                                                <li id="menu-item-1207"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1207"><a href="#">Menu Level 3</a></li>
                                                                <li id="menu-item-1208"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1208"><a href="#">Menu Level 3</a></li>
                                                                <li id="menu-item-1209"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1209"><a href="#">Menu Level 3</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li id="menu-item-45"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-45"><a href="#">Page!<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-259"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-259"><a href="https://athlete.sdemo.site/page/about-us/">About us</a></li>
                                                <li id="menu-item-446"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446"><a href="https://athlete.sdemo.site/page/our-pricing-table/">Our Pricing Table</a></li>
                                                <li id="menu-item-360"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="https://athlete.sdemo.site/page/our-classes/">Our Classes</a></li>
                                                <li id="menu-item-1145"
                                                    class="menu-item menu-item-type-post_type menu-item-object-iw_courses menu-item-1145"><a href="https://athlete.sdemo.site/courses/boxing/">Class detail</a></li>
                                                <li id="menu-item-563"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563"><a href="https://athlete.sdemo.site/page/our-classes-2/">Our Trainers</a></li>
                                                <li id="menu-item-473"
                                                    class="menu-item menu-item-type-post_type menu-item-object-iw_teacher menu-item-473"><a href="https://athlete.sdemo.site/teachers/392-2/">Trainer Profile</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li id="menu-item-467"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-467"><a href="#">Products<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-1248"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1248"><a href="https://athlete.sdemo.site/shop/">Product Listing</a></li>
                                                <li id="menu-item-661"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-661"><a href="?post_type=product&#038;category-layout=row">Product Listing Row</a></li>
                                                <li id="menu-item-662"
                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-662"><a href="https://athlete.sdemo.site/product/life-fitness-g7-home-gym/">Product Detail</a></li>
                                                <li id="menu-item-664"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-664"><a href="https://athlete.sdemo.site/cart/">Product Cart</a></li>
                                                <li id="menu-item-663"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663"><a href="https://athlete.sdemo.site/checkout/">Product Checkout</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595"><a href="{{ route('turfs') }}">Turfs</a></li> --}}
                                        {{-- <li id="menu-item-689"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-689"><a href="#">Event Calendar<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-698"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-698"><a href="https://athlete.sdemo.site/calendar-full-view/">Calendar Full View</a></li>
                                                <li id="menu-item-732"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-732"><a href="https://athlete.sdemo.site/event-list/">Event Listing</a></li>
                                                <li id="menu-item-1218"
                                                    class="menu-item menu-item-type-post_type menu-item-object-ajde_events menu-item-1218"><a href="https://athlete.sdemo.site/events/boxing-for-girls-2/">Event Details</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li id="menu-item-351"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-351"><a href="#">Blog<i class="icon-arrow"></i></a>
                                            <ul class="child-nav dropdown-nav">
                                                <li id="menu-item-352"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-352"><a href="https://athlete.sdemo.site/category/success-stories/">Blog Listing</a></li>
                                                <li id="menu-item-353"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-353"><a href="?p=347">Blog Detail</a></li>
                                            </ul>
                                        </li> --}}
                                        <li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595 {{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}">Contact Us</a></li>
                                        <li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595"><a href="#">About Us</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page landing-avater">
                                            <a href="{{ url('customer/bookings') }}" aria-label="User menu" role="button" type="button" style="margin:23px 0;cursor: pointer;">
                                                <img style="width: 35px; border-radius: 9999px;" class="fi-avatar object-cover object-center fi-circular rounded-full h-8 w-8 fi-user-avatar" src="https://ui-avatars.com/api/?name={{auth()->user()->initials()}}&color=FFFFFF&background={{ config('app.bg') }}">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="menu-button"
                                id="open-button"></button>
                        </div>
                    </div>
                </header>
                @yield('content')
            </div>
        </section>


        <footer class="page-footer ">
            <section>
                <div class="container">
                    <div class="row">
                        <div id="text-4"
                            class="widget_text widget-count-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="textwidget">
                                <div class="copy-right">
                                    <div class="footer-right">
                                        <div class="line1">Copyright &copy; {{ now()->format('Y') }} <a href="#"> Tomorrowland</a></div>
                                        {{-- <div class="line2">Designed and development by <a href="https://sfwebservice.com/"
                                                target="_blank"
                                                class="theme-color"
                                                rel="noopener">SFThemes</a></div> --}}
                                    </div>
                                </div>
                                <div class="social_icon">
                                    <a href="https://www.facebook.com/TomorrowLandctg"><i style="color: white" class="fa fa-facebook"></i></a>
                                    {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
                                    {{-- <a href="#"><i class="fa fa-google-plus"></i></a> --}}
                                    {{-- <a href="#"><i class="fa fa-whatsapp"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div id="text-2"
                            class="widget_text widget-count-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-title">
                                <h4>Our location</h4>
                            </div>
                            <div class="textwidget">
                                <p>
                                    HALISHAHAR BEACH ROAD<br>
                                    CHITTAGONG, BANGLADESH, 4000<br>
                                    Chittagong, Chittagong Division, Bangladesh<br>
                                    {{-- Room 1214&nbsp; #187 Tay Son Building, Dong Da Distr<br>
                                    Ha Noi, Vietnam --}}
                                    Phone : 01306-260750<br>
                                    Email : <a href="mailto:tomorrowlandctg@gmail.com"
                                        class="__cf_email__"
                                        data-cfemail="9af3f4edfbecffeef2fff7ffe9dafdf7fbf3f6b4f9f5f7">tomorrowlandctg@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div id="shortcode-widget-2">
                            <p class="footer-link">Developed by <a href="https://ctgsoft.com" class="textwidget">CTG SOFT</a></p>
                        </div>

                        {{-- <div id="shortcode-widget-2"
                            class="shortcode_widget widget-count-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-title">
                                <h4>Keep in touch</h4>
                            </div>
                            <div class="textwidget">
                                <form name
                                    method="post"
                                    class="main-contact-form">
                                    <div class="info">Lorem ipsum dolor sit amet, consectetur adi sollicitud ante tellus ornare mi, et mollis</div>
                                    <div class="email">
                                        <input type="email"
                                            title="E-mail"
                                            value
                                            name="email"
                                            class="inputbox"
                                            required="required"
                                            placeholder="Your Email">
                                        <input name="action"
                                            type="hidden"
                                            value="sendMessageContact">
                                        <input name="mailto"
                                            type="hidden"
                                            value>
                                        <button class="button"
                                            title="Submit"
                                            type="submit"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                    <div class="contact-ajax-overlay">
                                        <span class="ajax-contact-loading"><i class="fa fa-spinner fa-spin fa-2x"></i></span>
                                    </div>
                                    <div class="contact-ajax-message"></div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
        </footer>
        <div id="copyright">
            <div class="container">
                <div class="back-to-top"><a href="#top"
                        title="Back to top"><i class="fa fa-chevron-up"></i></a></div>
                <div class="clrDiv"></div>
            </div>
        </div>
    </div>

    <div class="style-addition">
        <style scoped></style>
    </div>
    {{-- <script data-cfasync="false"
        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    {{-- <script type="text/javascript"
        alt="evo_map_styles">
        /*<![CDATA[*/
        var gmapstyles = 'default';
        /* ]]> */
    </script> --}}
    <div class="evo_elms"><em class="evo_tooltip_box"></em></div>
    {{-- <script type="text/html" id="wpb-modifications"></script> --}}
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <div id="evo_global_data"
        data-d="{&quot;calendars&quot;:[]}"></div>
    {{-- <div class="evo_lightboxes"
        style="display:block">
        <div class="evo_lightbox eventcard eventon_events_list"
            id>
            <div class="evo_content_in">
                <div class="evo_content_inin">
                    <div class="evo_lightbox_content">
                        <div class="evo_lb_closer">
                            <a class="evolbclose ">X</a>
                        </div>
                        <div class="evo_lightbox_body eventon_list_event evo_pop_body evcal_eventcard"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0"
        id="jquery-selectBox-js"></script> --}}

    <script src="{{ asset('js/frontend/app-bottom.js') }}"></script>
    @yield('js')

    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6"
        id="prettyPhoto-js"></script> --}}

    {{-- skipped --}}
    <script type="text/javascript"
        id="jquery-yith-wcwl-js-extra">
        /* <![CDATA[ */
        var yith_wcwl_l10n = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "enable_ajax_loading": "",
            "ajax_loader_url": "https:\/\/athlete.sdemo.site\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
            "remove_from_wishlist_after_add_to_cart": "1",
            "is_wishlist_responsive": "1",
            "time_to_close_prettyphoto": "3000",
            "fragments_index_glue": ".",
            "reload_on_found_variation": "1",
            "mobile_media_query": "768",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                "load_mobile_action": "load_mobile",
                "delete_item_action": "delete_item",
                "save_title_action": "save_title",
                "save_privacy_action": "save_privacy",
                "load_fragments": "load_fragments"
            },
            "nonce": {
                "add_to_wishlist_nonce": "d5db0e6067",
                "remove_from_wishlist_nonce": "67e563c150",
                "reload_wishlist_and_adding_elem_nonce": "6319690f97",
                "load_mobile_nonce": "e35f47fb0b",
                "delete_item_nonce": "cd35d64936",
                "save_title_nonce": "04b2e50223",
                "save_privacy_nonce": "769294dcd0",
                "load_fragments_nonce": "b91a611d98"
            }
        };
        /* ]]> */
    </script>
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.11.0"
        id="jquery-yith-wcwl-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/js/jquery.parallax-1.1.3.js?ver=1.0.0"
        id="ap-jquery-parallax-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/js/jquery.easing.1.3.js?ver=1.0.0"
        id="jquery-easing-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/js/custombox.min.js?ver=1.0.0"
        id="custombox-js"></script> --}}

    {{-- skipped --}}
    <script type="text/javascript"
        id="ap-parallax-js-js-extra">
        /* <![CDATA[ */
        var btAdvParallaxBackgroundCfg = {
            "siteUrl": "https:\/\/athlete.sdemo.site\/wp-admin\/",
            "baseUrl": "https:\/\/athlete.sdemo.site",
            "ajaxUrl": "https:\/\/athlete.sdemo.site\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/ap-background/assets/js/jquery.apparallax.js?ver=1.0.0"
        id="ap-parallax-js-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/athlete_map.js?ver=1.1"
        id="athlete-map-script-js"></script> --}}
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9rOZeYX--5fiG3aKAIlVsdLRk3OmPe_Q&#038;ver=1.1"
        id="google-maps-js"></script>
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/parallax/scroll.parallax.js?ver=1.1"
        id="scroll-parallax-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/cdtime.js?ver=1.1"
        id="cdtime-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.7.0"
        id="js-cookie-js"></script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.7.0"
        id="woocommerce-js"></script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_4ae2f6287af39548ecbf731ac5c78dbe",
            "fragment_name": "wc_fragments_4ae2f6287af39548ecbf731ac5c78dbe",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.7.0"
        id="wc-cart-fragments-js"></script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-includes/js/underscore.min.js?ver=1.13.3"
        id="underscore-js"></script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script> --}}
    {{-- skipped --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-includes/js/wp-util.min.js?ver=6.0.6"
        id="wp-util-js"></script> --}}
    {{-- <script type="text/javascript"
        id="woo-variation-swatches-js-extra">
        /* <![CDATA[ */
        var woo_variation_swatches_options = {
            "show_variation_label": "1",
            "clear_on_reselect": "",
            "variation_label_separator": ":",
            "is_mobile": "",
            "show_variation_stock": "",
            "stock_label_threshold": "5",
            "cart_redirect_after_add": "no",
            "enable_ajax_add_to_cart": "yes",
            "cart_url": "https:\/\/athlete.sdemo.site\/cart\/",
            "is_cart": ""
        };
        /* ]]> */
    </script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1658590253"
        id="woo-variation-swatches-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/bootstrap.min.js?ver=1.1"
        id="bootstrap-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/jquery-ui.js?ver=1.1"
        id="jquery-ui-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/waypoints.js?ver=1.1"
        id="waypoints-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/shortcode-frontend.js?ver=1.1"
        id="athlete-shortcode-frontend-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/jquery.fitvids.js?ver=1.1"
        id="jquery-fitvids-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/owl.carousel.min.js?ver=1.1"
        id="owl-carousel-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/jquery.custombox.js?ver=1.1"
        id="jquery-custombox-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/dropdown.js?ver=1.1"
        id="athlete-dropdown-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/isotope.pkgd.min.js?ver=1.1"
        id="jquery-isotope-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/filtering.js?ver=1.1"
        id="athlete-filtering-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/theme.js?ver=1.1"
        id="athlete-themes-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/classie.js?ver=1.1"
        id="classie-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/placeholders.min.js?ver=1.1"
        id="placeholders-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/template.js?ver=1.1"
        id="athlete-template-js"></script> --}}

    {{-- skipped --}}
    {{-- <script type="text/javascript"
        id="athlete-main-js-extra">
        /* <![CDATA[ */
        var athleteCfg = {
            "siteUrl": "https:\/\/athlete.sdemo.site\/wp-admin\/",
            "baseUrl": "https:\/\/athlete.sdemo.site",
            "ajaxUrl": "https:\/\/athlete.sdemo.site\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/themes/athlete/js/main.js?ver=1.1"
        id="athlete-main-js"></script> --}}
    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/maps/eventon_gen_maps.js?ver=4.1.1"
        id="eventon_gmaps-js"></script> --}}
    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/eventon_functions.js?ver=4.1.1"
        id="evcal_functions-js"></script> --}}
    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/lib/jquery.easing.1.3.js?ver=1.0"
        id="evcal_easing-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/eventON/assets/js/lib/handlebars.js?ver=4.1.1"
        id="evo_handlebars-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://meet.jit.si/external_api.js?ver=4.1.1"
        id="evo_jitsi-js"></script> --}}
    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/lib/jquery.mobile.min.js?ver=4.1.1"
        id="evo_mobile-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/eventON/assets/js/lib/moment.min.js?ver=4.1.1"
        id="evo_moment-js"></script> --}}
    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/lib/jquery.mousewheel.min.js?ver=4.1.1"
        id="evo_mouse-js"></script> --}}
    {{-- skipped --}}
    <script type="text/javascript"
        id="evcal_ajax_handle-js-extra">
        /* <![CDATA[ */
        var the_ajax_script = {
            "ajaxurl": "https:\/\/athlete.sdemo.site\/wp-admin\/admin-ajax.php",
            "rurl": "https:\/\/athlete.sdemo.site\/wp-json\/",
            "postnonce": "1246605b0d",
            "ajax_method": "ajax",
            "evo_v": "4.1.1"
        };
        var evo_general_params = {
            "ajaxurl": "https:\/\/athlete.sdemo.site\/wp-admin\/admin-ajax.php",
            "rurl": "https:\/\/athlete.sdemo.site\/wp-json\/",
            "n": "1246605b0d",
            "ajax_method": "ajax",
            "evo_v": "4.1.1"
        };
        /* ]]> */
    </script>

    {{-- <script type="text/javascript"
        src="//athlete.sdemo.site/wp-content/plugins/eventON/assets/js/eventon_script.js?ver=4.1.1"
        id="evcal_ajax_handle-js"></script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/masterslider/public/assets/js/masterslider.min.js?ver=3.6.1"
        id="masterslider-core-js"></script> --}}
    {{-- <script type="text/javascript"
        id="wpb_composer_front_js-js-extra">
        /* <![CDATA[ */
        var vcData = {
            "currentTheme": {
                "slug": "athlete"
            }
        };
        /* ]]> */
    </script> --}}
    {{-- <script type="text/javascript"
        src="https://athlete.sdemo.site/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.9.0"
        id="wpb_composer_front_js-js"></script> --}}
</body>

</html>

@extends('layouts.frontend')

@section('css')
    <link rel="stylesheet"
        href="{{ asset('js/app/bootstrap-grid.css') }}">
@endsection

@section('content')
    <section class="page-heading">
        <div class="title-slide">
            <div class="container">
                <div class="banner-content slide-container">
                    <div class="page-title">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content inner-page-full">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li class="home">
                                <a href="{{ url('') }}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><span>//</span></li>
                            <li class="category-2">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <article id="post-567"
            class="post-567 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid our-team-page vc_custom_1427878376319">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="headding-title">
                                            <h4>Our field</h4>
                                            <div class="headding-bottom"></div>
                                        </div>
                                        <ul class="headding-content">
                                            <li class>
                                                <div class="icon-headding"><i class="fa fa-home"></i></div>
                                                <div class="cont-headding">
                                                    <h5>Halishahar Beach Road</h5>
                                                    <h5>Chittagong, Bangladesh, 4000</h5>
                                                    <p>Chittagong, Chittagong Division, Bangladesh</p>
                                                </div>
                                            </li>
                                            {{-- <li class>
                                                <div class="icon-headding"><i class="fa fa-home"></i></div>
                                                <div class="cont-headding">
                                                    <h5>Athlete fitness Studio</h5>
                                                    <p>2046 Blue Spruce Lane Laurel Canada.</p>
                                                </div>
                                            </li> --}}
                                            {{-- <li class>
                                                <div class="icon-headding"><i class="fa fa-home"></i></div>
                                                <div class="cont-headding">
                                                    <h5>Athlete fitness Studio</h5>
                                                    <p>2046 Blue Spruce Lane Laurel Canada.</p>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="headding-title">
                                            <h4>We'd love to hear from you</h4>
                                            <div class="headding-bottom"></div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element headding-content">
                                            <div class="wpb_wrapper">
                                                <p>
                                                    Tomorrow Land is one of the best commercial sports arenas in Chittagong! Turf is  READY! Come play Badminton, Cricket, Football, Table Tennis! Also we have restaurant, kids zone, juice bar for entertainment. Thank you for being with us! Call to book now!
                                                </p>
                                                <p>
                                                    Give us a call at <span class="phone-number">01306-260750</span> or send us a mail at <a href="mailto:tomorrowlandctg@gmail.com">tomorrowlandctg@gmail.com</a></ and we&#8217;ll connect you with a dealer management software expert who can answer<br />
                                                    your questions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="vc_row wpb_row vc_row-fluid contact-form vc_custom_1427788420159">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="contact-submit with-map">
                                    <div class="contact">
                                        <div class="contact-ajax-overlay">
                                            <span class="ajax-contact-loading"><i class="fa fa-spinner fa-spin fa-2x"></i></span>
                                        </div>
                                        <h4>Contact Form</h4>
                                        <div class="headding-bottom"></div>
                                        <form method="post"
                                            name="contact-form"
                                            class="main-contact-form row"
                                            id="main-contact-form">
                                            <div class="form-group col-md-12">
                                                <input type="text"
                                                    value
                                                    placeholder="Your Name"
                                                    required="required"
                                                    class="control"
                                                    name="name" />
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="email"
                                                    value
                                                    placeholder="Your Email"
                                                    required="required"
                                                    class="control"
                                                    name="email" />
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="text"
                                                    title="Phone number"
                                                    value
                                                    name="phone"
                                                    class="control"
                                                    placeholder="Your Phone" />
                                            </div>
                                            <div class="form-group col-md-12">
                                                <textarea placeholder="Your Message"
                                                    rows="8"
                                                    class="control"
                                                    required="required"
                                                    id="message"
                                                    name="message"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input value="1"
                                                    type="checkbox"
                                                    required="required"
                                                    id="gdpr"
                                                    class="iwjmb-checkbox"
                                                    name="gdpr"
                                                    checked="checked" />
                                                <label for="gdpr">I agree submitted infomation</label>
                                            </div>
                                            <div class="form-group form-submit col-md-12">
                                                <input name="action"
                                                    type="hidden"
                                                    value="sendMessageContact" />
                                                <input name="mailto"
                                                    type="hidden"
                                                    value />
                                                <button class="btn-submit"
                                                    name="submit"
                                                    type="submit"><i class="fa fa-envelope-o"></i> Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="contact-map">
                                    <div class="map-contain"
                                        data-mrk-position="center"
                                        data-mrk-width="108"
                                        data-mrk-height="49"
                                        data-title="InwaveThemes"
                                        data-image="https://athlete.sdemo.site/wp-content/uploads/2014/12/pin.png"
                                        data-lat="40.6700"
                                        data-long="-73.9400"
                                        data-zoom="11"
                                        data-info="Athlete - Fitness, Gym and Sport WordPress theme">
                                        <div class="map-view map-frame"></div>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function() {
                                            jQuery(".map-contain").iwMap();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="vc_row wpb_row vc_row-fluid our-partners vc_custom_1427878420510">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="headding-title">
                                            <h4>Our Partner</h4>
                                            <div class="headding-bottom"></div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid brand">
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-02-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-02" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-04-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-04" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-03-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-03" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-05-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-05" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-06-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-06" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="150"
                                                                        height="100"
                                                                        src="https://athlete.sdemo.site/wp-content/uploads/2015/03/home-logo-02-150x100.png"
                                                                        class="vc_single_image-img attachment-thumbnail"
                                                                        alt
                                                                        loading="lazy"
                                                                        title="page - home-logo-02" /></div>
                                                            </figure>
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
            </div>
            <footer style="margin-bottom: 120px;" class="entry-footer"></footer>
        </article>
    </div>
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
@endsection

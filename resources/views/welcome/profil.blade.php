@extends('layouts/main')

@section('title', 'Info Perpustakaan')

@section('container')

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Info Perpustakaan</h2>
            <span class="underline center"></span>
            <!-- <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p> -->
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Contact Us Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="contact-main">
                <div class="contact-us">
                    <div class="container">
                        <div class="contact-location">
                            @foreach ($profil as $prfinfo)
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>{{ $prfinfo->alamat }} </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li>{{ $prfinfo->alamat }} </li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i> Phone </span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li><a href="tel:{{ $prfinfo->tlp }}">{{ $prfinfo->tlp }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="tel:{{ $prfinfo->tlp }}">{{ $prfinfo->tlp }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>{{ $prfinfo->email }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="http://{{ $prfinfo->email }}/">{{ $prfinfo->email }} </a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="contact-area">
                                <div class="container">
                                    <div class="col-md-12 border-gray-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.455405873334!2d107.92161241436646!3d-6.835874968768835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e644e46a6435%3A0xc2adbda35a1a1a52!2sSTMIK%20Sumedang!5e0!3m2!1sid!2sid!4v1607397389001!5m2!1sid!2sid" width="100%" height="530" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-5 border-gray-right">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-form bg-light margin-right">
                                                    <h2>Send us a message</h2>
                                                    <span class="underline left"></span>
                                                    <div class="contact-fields">
                                                        <form id="contact" name="contact" action="http://libraria.demo.presstigers.com/contact.html" method="post">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="First Name" name="first-name" id="first-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Last Name" name="last-name" id="last-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email" id="email" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Phone Number" name="phone" id="phone" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" placeholder="Your message" id="message" aria-required="true"></textarea>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-submit">
                                                                        <input class="btn btn-default" id="submit-contact-form" type="button" name="submit" value="Send Message" />
                                                                    </div>
                                                                </div>
                                                                <div id="success">
                                                                    <span>Your message was sent successfully! Our team will contact you soon.</span>
                                                                </div>

                                                                <div id="error">
                                                                    <span>Something went wrong, try refreshing and submitting the form again.</span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
</div>
<!-- End: Contact Us Section -->


@endsection
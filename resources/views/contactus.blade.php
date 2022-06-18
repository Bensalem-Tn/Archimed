@extends("layouts.app")

@section("wrapper")
    <main class="main">
        <div class="contact-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Get in Touch</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>CONTACT US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-part paddingtb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 pr-lg-0">
                        <div class="add-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.1812836849363!2d144.95343106869794!3d-37.81739907631358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sin!4v1562916623921!5m2!1sen!2sin"   height="585" style="border:0;width:100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 pl-lg-0">
                        <div class="detail-form-title bg-white p-5">
                            <div class="about-desc">
                                <div class="title mb-3">FILL THE FORM.</div>
                                <h3 class="head-two">Let's discuss your project</h3>
                            </div>
                            <div class="form-detail">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                                    </div> <a href="#" class="send">SEND</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-contact-part text-center">
            <div class="container bg-white">
                <div class="row mx-0 py-lg-5 py-4">
                    <div class="col-md-4 col-xs-12">
                        <div class="contact-detail">
                            <img src="images/call.svg" height="30" width="30" alt="call-icon">
                            <h2 class="head-two">Our Phone</h2>
                            <p>+ 91 123 456 789 0</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="contact-detail">
                            <img src="images/map.svg" height="30" width="30" alt="map-icon">
                            <h2 class="head-two">Our Location</h2>
                            <p>869 Lexington Ave, New York, NY 10065, USA</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="contact-detail">
                            <img src="images/envelope.svg" height="30" width="30" alt="envelope-icon">
                            <h2 class="head-two">Our Email</h2>
                            <p>unicode@123gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </main>
  @endsection
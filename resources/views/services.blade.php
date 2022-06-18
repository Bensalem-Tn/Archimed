@extends("layouts.app")

@section("wrapper")
    <main class="main">
        <div class="service-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">What We Do</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>SERVICES</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-detail-part paddingtb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div class="about-desc">
                            <div class="title mb-3">TOP QUALITY</div>
                            <h3 class="head-two">Our Professional Specializations</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <p class="about-detail-p mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-part paddingtb pt-0 services">
            <div class="container px-0 px-md-3 px-lg-0">
                <div class="row service-detail mt-0">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail">
                            <img src="images/quality.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">QUALITY</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail">
                            <img src="images/think.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">EASY ACCESS</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail">
                            <img src="images/software.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">TECHNOLOGY</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail">
                            <img src="images/management.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">THE TEAM WORK</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail">
                            <img src="images/house.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">COMMERCIAL DESIGN</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="services-detail mb-5 mb-md-0 mb-lg-5 mb-xl-0">
                            <img src="images/floor.svg" height="42" width="42" alt="service-img">
                            <h3 class="head-three">FLOOR PLANNING</h3>
                            <p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-investors-part paddingtb px-xl-0 px-3 ">
            <div class="container">
                <div class="row position-r">
                    <div class="section-title px-0">
                        <div class="sec-title float-left"> <span class="sec-span">FEEDBACK FROM</span>
                            <h2 class="head-two col-white">Our investors</h2>
                        </div>
                        <div class="sec-title-line float-left h-84"></div>
                        <div class="sec-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard</div>
                    </div>
                    <div class="col-xs-12">
                        <div class="investor-slider" id="investor-slider">
                            <div class="item">
                                <div class="investors">
                                    <div class="float-left">
                                        <img src="images/investor-img1.png" alt="investor-img">
                                    </div>
                                    <div class="inves-title float-left">
                                        <h3 class="head-three"><a href="#">John Doe</a></h3>
                                        <span class="inves-span">Founder</span>
                                    </div>
                                    <p class="inves-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam veritatis et quasi sunt explicabo.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="investors">
                                    <div class="float-left">
                                        <img src="images/investor-img2.png" alt="investor-img">
                                    </div>
                                    <div class="inves-title float-left">
                                        <h3 class="head-three"><a href="#">John Doe</a></h3>
                                        <span class="inves-span">Student</span>
                                    </div>
                                    <p class="inves-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam veritatis et quasi sunt explicabo.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="investors">
                                    <div class="float-left">
                                        <img src="images/investor-img3.png" alt="investor-img">
                                    </div>
                                    <div class="inves-title float-left">
                                        <h3 class="head-three"><a href="#">John Doe</a></h3>
                                        <span class="inves-span">Founder</span>
                                    </div>
                                    <p class="inves-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam veritatis et quasi sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="future-part paddingtb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div class="future-detail">
                            <div class="about-desc">
                                <div class="title mb-3">OUR SERVICES</div>
                                <h3 class="head-two">We are building for the future.</h3>
                                <p class="future-p">Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been the industry's</p>
                                <h4 class="head-four">Phasellus cursus at elit vel consectetur?</h4>
                                <p class="building-detail-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nisl et diam facilisis auctor vitae vitae risus. Sed faucibus ligula tortor, ac tempor elit hendrerit nec. Phasellus cursus at elit vel consectetur. Mauris faucibus elit lacus, ac placerat odio placerat vitae curabitur vitae massa sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 img-box">
                        <img src="images/future-img.jpg" alt="building-future-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="our-contact-part text-center">
            <div class="container  bg-white">
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
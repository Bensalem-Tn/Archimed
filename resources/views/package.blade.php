@extends("layouts.app")

@section("wrapper")
    <main class="main">
        <div class="package-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Best Plans</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>PRICE</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="package-part paddingtb text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 mb-30">
                        <div class="plans bg-white">
                            <h2 class="package-head-two">Basic Plan</h2>
                            <span class="project-span">For a Regular Budget</span>
                            <div class="package-line"></div>
                            <p class="price">$<span>78</span>
                            </p>
                            <ul class="plan-detail">
                                <li>Plan Sketching</li>
                                <li>Basic Interior Design</li>
                                <li>Maintanance Support</li>
                                <li>Low Budget properties</li>
                                <li>Normal Exterior Design</li>
                                <li>24/7 Customer Help Desk</li>
                            </ul> <a class="purchase-btn" href="#">Purchased</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 mb-30">
                        <div class="plans bg-white">
                            <h2 class="package-head-two">Standard Plan</h2>
                            <span class="project-span">For a Luxury Budget</span>
                            <div class="package-line"></div>
                            <p class="price">$<span>88</span>
                            </p>
                            <ul class="plan-detail">
                                <li>Plan Sketching</li>
                                <li>Basic Interior Design</li>
                                <li>Maintanance Support</li>
                                <li>Low Budget properties</li>
                                <li>Normal Exterior Design</li>
                                <li>24/7 Customer Help Desk</li>
                            </ul> <a class="purchase-btn" href="#">Purchased</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="plans bg-white">
                            <h2 class="package-head-two">Premium Plan</h2>
                            <span class="project-span">For a Royal Budget</span>
                            <div class="package-line"></div>
                            <p class="price">$<span>98</span>
                            </p>
                            <ul class="plan-detail">
                                <li>Plan Sketching</li>
                                <li>Basic Interior Design</li>
                                <li>Maintanance Support</li>
                                <li>Low Budget properties</li>
                                <li>Normal Exterior Design</li>
                                <li>24/7 Customer Help Desk</li>
                            </ul> <a class="purchase-btn" href="#">Purchased</a>
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

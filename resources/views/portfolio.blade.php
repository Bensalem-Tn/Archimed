
@extends("layouts.app")

@section("wrapper")
    <!-- MAIN START -->
    <main class="main">
        <div class="portfolio-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Latest Projects</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>PORTFOLIOS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-part paddingtb px-3 px-xl-0">
            <div class="container">
                <div class="portfolio-category text-center">
                    <button class="workitem btn active p-0" onclick="filterSelection('all')"> <span class="all active">All Projects</span>
                    </button>
                    <button class="workitem btn p-0" onclick="filterSelection('commercial')"> <span class="all">Commercial</span>
                    </button>
                    <button class="workitem btn p-0" onclick="filterSelection('hospitality')"> <span class="all">Hospitality</span>
                    </button>
                    <button class="workitem btn p-0" onclick="filterSelection('industrial')"> <span class="all">Industrial</span>
                    </button>
                    <button class="workitem btn p-0" onclick="filterSelection('interiordesign')"> <span class="all">Interior Design</span>
                    </button>
                    <button class="workitem btn p-0" onclick="filterSelection('residential')"> <span class="all">Residential</span>
                    </button>
                </div>
                <div class="row mt-xl-5 mt-4 img-show">
                    <div class="column residential w-100 mb-lg-5 mb-4 position-r">
                        <div class="">
                            <div class="project-img w-65">
                                <a href="portfolio-detail.html" class="zoom">
                                    <img src="images/project-img1.jpg" alt="project-img">
                                </a>
                            </div>
                            <div class="portfolio-detail"> <span class="portfolio-title">PLANNING</span>
                                <h3 class="portfolio-desc"><a href="portfolio-detail.html">Luxury Modern Hotel</a></h3>
                                <p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="portfolio-detail.html">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="column commercial w-100 position-r mb-lg-5 mb-4">
                        <div class="">
                            <div class="project-img float-right w-65">
                                <a href="portfolio-detail.html" class="zoom">
                                    <img src="images/project-img2.jpg" alt="project-img">
                                </a>
                            </div>
                            <div class="portfolio-detail portfolio-left"> <span class="portfolio-title">COMMERCIAL</span>
                                <h3 class="portfolio-desc"><a href="portfolio-detail.html">Cultural Complex Center</a></h3>
                                <p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="portfolio-detail.html">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="column hospitality w-100 mb-lg-5 mb-4 position-r">
                        <div class="">
                            <div class="project-img w-65">
                                <a href="portfolio-detail.html" class="zoom">
                                    <img src="images/portfolio-img3.jpg" alt="project-img">
                                </a>
                            </div>
                            <div class="portfolio-detail"> <span class="portfolio-title">HOSPITALITY</span>
                                <h3 class="portfolio-desc"><a href="portfolio-detail.html">The Innovation Clinic</a></h3>
                                <p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="portfolio-detail.html">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="column industrial interiordesign w-100 position-r">
                        <div class="">
                            <div class="project-img float-right w-65">
                                <a href="portfolio-detail.html" class="zoom">
                                    <img src="images/portfolio-img4.jpg" alt="project-img">
                                </a>
                            </div>
                            <div class="portfolio-detail portfolio-left"> <span class="portfolio-title">INTERIOR DESIGN</span>
                                <h3 class="portfolio-desc"><a href="#">Grand Office</a></h3>
                                <p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="#">View Project</a>
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
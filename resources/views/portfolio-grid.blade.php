@extends("layouts.app")

@section("wrapper")
    <!-- HEADER END -->
    <!-- MAIN START -->
    <main class="main">
        <div class="portfolio-grid-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Latest Projects</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>PORTFOLIOS GRID</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-part paddingtb">
            <div class="container">
                <div class="portfolio-category text-center">
                    <button class="workitem btn p-0 active" onclick="filterSelection('all')"> <span class="all">All Projects</span>
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
                <div class="row mt-40 img-show">
                    <div class="column residential col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img1.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column commercial col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img2.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column hospitality col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img3.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column industrial col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img4.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column interiordesign col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img5.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column residential col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img6.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column residential col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img7.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column interiordesign col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img8.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column industrial  col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img9.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column hospitality col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img10.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column commercial col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img11.jpg" alt="portfolio-grid-img">
                        </a>
                    </div>
                    <div class="column commercial col-xs-12 col-md-6 col-xl-4 my-3 img-box">
                        <a href="portfolio-detail.html" class="zoom">
                            <img src="images/portfolio-grid-img12.jpg" alt="portfolio-grid-img">
                        </a>
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
        <footer class="footer-part accordion" id="accordionExample">
            <div class="container">
                <div class="row paddingtb">
                    <div class="col-md-4 col-xs-12">
                        <a href="index.html" class="footer-logo">
                            <img src="images/logo.png" alt="footer-logo">
                        </a>
                        <p class="footer-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
                        <div class="social-media">  <a href="#"><i class="fa fa-facebook"></i></a>      <a href="#"><i class="fa fa-twitter"></i></a>   <a href="#"><i class="fa fa-linkedin"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a> 
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 pt-5 pt-sm-0">
                        <div class="card-header" id="headingOne">
                            <h3 class="head-three position-r" data-toggle="collapse" data-target="#collapseOne">MENUS<i class="fa fa-plus d-block d-md-none"></i></h3>
                            <div class="head-line"></div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <ul class="footer-menu">
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="aboutus.html">About</a>
                                    </li>
                                    <li><a href="#">Privacy policy</a>
                                    </li>
                                    <li><a href="#">Sitemap</a>
                                    </li>
                                    <li><a href="#">Careers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 pt-4 pt-sm-0">
                        <div class="card-header" id="headingTwo">
                            <h3 class="head-three position-r" data-toggle="collapse" data-target="#collapseTwo">SERVICES<i class="fa fa-plus d-block d-md-none"></i></h3>
                            <div class="head-line"></div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <ul class="footer-menu">
                                    <li><a href="#">Residential</a>
                                    </li>
                                    <li><a href="#">Commercial</a>
                                    </li>
                                    <li><a href="#">Corporate</a>
                                    </li>
                                    <li><a href="#">Hospitality</a>
                                    </li>
                                    <li><a href="#">Restaurant</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 pt-4 pt-sm-0">
                        <h3 class="head-three">NEWSLETTER</h3>
                        <div class="head-line"></div>
                        <p class="footer-p">Sign up for our mailing list to get latest updates and offers</p>
                        <div class="form-group">
                            <input type="email" class="form-control float-left" id="inputEmail" placeholder="Enter your email" name="name">    <a href="#" class="send float-left"><i class="fa fa-send"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer px-3">
                <div class="container">
                    <div class="row">
                        <div class="bottom-footer-detail w-100 px-0">
                            <div class="copyright float-sm-left text-center">
                                <p>Copyright. All Right Reserved.</p>
                            </div>
                            <div class="design-team float-sm-right text-center">
                                <p>Powered by <a href="https://TemplatesCoder.com/" target="_blank">TemplatesCoder.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <!-- MAIN END -->
 @endsection
@extends("layouts.app")

@section("wrapper")>
<!-- MAIN START -->
    <main class="main">
        <div class="blog-detail-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Blog Detail</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb inline">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>BLOG DETAIL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-detail-part paddingtb pb-0">
            <div class="container">
                <div class="blog-part img-box">
                    <a href="blog.html" class="zoom">
                        <img src="images/blog-detail-img.jpg" alt="blog-detail-img">
                    </a>
                </div>
                <div class="detail-part">
                    <p class="title-p">JOHN DOE &nbsp;&nbsp; | &nbsp;&nbsp; JUL 15,2019</p>
                    <h2 class="title-two"><a href="blog.html">The Beginning of Everything as quexcepturi We know quexcepturi Everything</a></h2>
                    <p class="detail-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,</p>
                    <div class="tag-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</div>
                    <p class="detail-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, sequi nesciunt. Neque porro quisquam</p>
                    <div class="taged">
                        <p><strong>Tagged by</strong>
                            <a href="#">Business</a>
                            <a href="#">Creative</a>
                            <a href="#">One Page</a>
                        </p>
                    </div>
                    <div class="blog-sec-line"></div>
                    <div class="bloger-detail text-center">
                        <img src="images/bloger-img.jpg" alt="bloger-img">
                        <h3 class="bloger-name">John Doe</h3>
                        <p class="bloger-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="social-icon ml-auto"> <a href="#" title="Follow on Facebook"><i class="fa active fa-facebook"></i></a>
                            <a href="#" title="Follow on twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Follow on linkedin"><i class="fa  fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="blog-sec-line"></div>
                    <div class="comments-part">
                        <h3 class="com-head-three">04 Comments</h3>
                        <div class="comment position-r">
                            <div class="comm-img">
                                <img src="images/comments-img1.jpg" class="float-left" alt="comments">
                            </div>
                            <div class="comment-detail">
                                <div class="float-none float-md-left mb-2">
                                    <h4 class="head-four">John Doe</h4>
                                    <p class="date-text">December 25,2019 - 3:33 pm</p>
                                </div>
                                <p class="comment-msg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <a href="#" class="reply-btn">Reply<img src="images/reply-icon.png" alt="reply-icon"></a>
                            </div>
                        </div>
                        <div class="comment position-r">
                            <div class="comm-img">
                                <img src="images/comments-img2.jpg" class="float-left" alt="comments">
                            </div>
                            <div class="comment-detail">
                                <div class="float-none float-md-left mb-2">
                                    <h4 class="head-four">John Doe</h4>
                                    <p class="date-text">December 25,2019 - 3:33 pm</p>
                                </div>
                                <p class="comment-msg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <a href="#" class="reply-btn">Reply<img src="images/reply-icon.png" alt="reply-icon"></a>
                            </div>
                        </div>
                        <div class="comment mb-0 position-r">
                            <div class="comm-img">
                                <img src="images/comments-img3.jpg" class="float-left" alt="comments">
                            </div>
                            <div class="comment-detail">
                                <div class="float-none float-md-left mb-2">
                                    <h4 class="head-four">John Doe</h4>
                                    <p class="date-text">December 25,2019 - 3:33 pm</p>
                                </div>
                                <p class="comment-msg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <a href="#" class="reply-btn">Reply<img src="images/reply-icon.png" alt="reply-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comm-form">
                    <h3 class="comm-head-three">Leave a Comment</h3>
                    <form>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="form-control" placeholder="Your Name*">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="6" placeholder="Review*"></textarea>
                        </div>
                        <button class="btn submit-comment" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="related-part paddingtb pt-0">
            <div class="container">
                <h3 class="related-head-three">Related News</h3>
                <div class="row">
                    <div class="col-xs-12 col-md-4 over-parent">
                        <a href="blog.html" class="img-box overlay">
                            <img src="images/related-news-img1.jpg" alt="related-news-img">
                        </a>
                        <div class="related-news-detail"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                            <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi We Know</h2></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 over-parent">
                        <a href="blog.html" class="img-box overlay">
                            <img src="images/related-news-img2.jpg" alt="related-news-img">
                        </a>
                        <div class="related-news-detail"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                            <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi We Know</h2></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 over-parent">
                        <a href="blog.html" class="img-box overlay">
                            <img src="images/related-news-img3.jpg" alt="related-news-img">
                        </a>
                        <div class="related-news-detail mb-0"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                            <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi We Know</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-contact-part text-center">
            <div class="container">
                <div class="row bg-white mx-0 py-lg-5 py-4">
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
                        <div class="social-media"> <a href="#"><i class="fa fa-facebook"></i></a>  <a href="#"><i class="fa fa-twitter"></i></a>  <a href="#"><i class="fa fa-linkedin"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a> 
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
                            <input type="email" class="form-control float-left" id="inputEmail" placeholder="Enter your email" name="name"> <a href="#" class="send float-left"><i class="fa fa-send"></i></a>
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
   @endsection
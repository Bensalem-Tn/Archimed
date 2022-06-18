@extends("layouts.app")

@section("wrapper")
   <!-- MAIN START -->
    <main class="main">
        <div class="blog-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content w-100 text-center">
                        <h1 class="banner-head-one">Blog</h1>
                        <div class="custom-bread">
                            <ul class="breadcrumb d-ib100">
                                <li><a href="index.html">HOME</a>
                                </li>
                                <li>BLOG</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-part paddingtb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-xs-12 px-0 order-2 order-md-2 order-lg-1 wid pl-lg-3 pl-xl-0">
                        <div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
                            <div class="sidebar-content">
                                <div class="sidebar-category cat-data sidebar-default">
                                    <div class="category-content">
                                        <div class="cat-detail">
                                            <h2 class="cat-title">CATEGORIES</h2>
                                            <ul class="cat-grp pl-0 mb-0">
                                                <li class="cat-item"><a href="#" class="cat-link">Architecture (7)</a>
                                                </li>
                                                <li class="cat-item"><a href="#" class="cat-link">Ceilings (8)</a>
                                                </li>
                                                <li class="cat-item"><a href="#" class="cat-link">Exteriors (4)</a>
                                                </li>
                                                <li class="cat-item"><a href="#" class="cat-link">Flooring (5)</a>
                                                </li>
                                                <li class="cat-item"><a href="#" class="cat-link">Interiors (6)</a>
                                                </li>
                                                <li class="cat-item mb-0"><a href="#" class="cat-link">Landscape (6)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-category sidebar-default">
                                    <div class="category-content">
                                        <div class="category-title"> <span class="cate-heading">GALLERY</span>
                                        </div>
                                        <div class="gal-grp">
                                            <a href="gallery.html">
                                                <img src="images/gallery1.jpg" alt="gallery-img" class="gal-img mb-1 mb-md-2">
                                            </a>
                                            <a href="gallery.html">
                                                <img src="images/gallery2.jpg" alt="gallery-img" class="gal-img mb-1 mb-md-2">
                                            </a>
                                            <a href="gallery.html">
                                                <img src="images/gallery3.jpg" alt="gallery-img" class=" mb-1 mb-md-2">
                                            </a>
                                            <a href="gallery.html">
                                                <img src="images/gallery4.jpg" alt="gallery-img" class="gal-img mb-1 mb-md-2">
                                            </a>
                                            <a href="gallery.html">
                                                <img src="images/gallery5.jpg" alt="gallery-img" class="gal-img mb-1 mb-md-2">
                                            </a>
                                            <a href="gallery.html">
                                                <img src="images/gallery6.jpg" alt="gallery-img" class="mb-1 mb-md-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-category sidebar-default">
                                    <div class="category-content">
                                        <div class="category-title"> <span class="cate-heading">TAGS</span>
                                        </div>
                                        <div class="tags"> <a href="#" class="tag">Home Offices</a>
                                            <a href="#" class="tag">Swimming Pools</a>
                                            <a href="#" class="tag">Patios</a>
                                            <a href="#" class="tag">Kitchens</a>
                                            <a href="#" class="tag">Libraries</a>
                                            <a href="#" class="tag mb-0">Living Rooms</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-category sidebar-default">
                                    <div class="category-content">
                                        <div class="category-title"> <span class="cate-heading">RECENT POSTS</span>
                                        </div>
                                        <div class="recent-post">
                                            <div class="recent img-box d-ib100">
                                                <a href="#">
                                                    <img src="images/post1.jpg" alt="related-prod-img" class="float-left">
                                                </a>
                                                <div class="recent-detail float-left"> <a href="#" class="post-title">Inspiring Presence of Design Thanks</a>
                                                    <span class="post-date">August 2,2019</span>
                                                </div>
                                            </div>
                                            <div class="recent img-box d-ib100">
                                                <a href="#">
                                                    <img src="images/post2.jpg" alt="related-prod-img" class="float-left">
                                                </a>
                                                <div class="recent-detail float-left"> <a href="#" class="post-title">Inspiring Presence of Design Thanks</a>
                                                    <span class="post-date">August 2,2019</span>
                                                </div>
                                            </div>
                                            <div class="recent img-box d-ib100">
                                                <a href="#">
                                                    <img src="images/post3.jpg" alt="related-prod-img" class="float-left">
                                                </a>
                                                <div class="recent-detail float-left"> <a href="#" class="post-title">Inspiring Presence of Design Thanks</a>
                                                    <span class="post-date">August 2,2019</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xs-12 col-lg-8 pad order-1 order-md-1 order-lg-2 wid pr-lg-3 pr-xl-0">
                        <div class="blog-part-inner img-box over-parent">
                            <a href="blog-detail.html" class="overlay">
                                <img src="images/blog-img1.jpg" alt="blog-img">
                            </a>
                            <div class="blog-detail"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                                <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi</h2></a>
                                <p class="blog-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p> <a href="blog-detail.html" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="blog-part-inner img-box over-parent">
                            <a href="blog-detail.html" class="overlay">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                            </a>
                            <div class="blog-detail"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                                <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi</h2></a>
                                <p class="blog-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p> <a href="blog-detail.html" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="blog-part-inner img-box over-parent">
                            <a href="blog-detail.html" class="overlay">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                            </a>
                            <div class="blog-detail"> <span class="blog-span">JOHN DOE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;JUL 15,2019</span>
                                <a href="blog-detail.html"><h2 class="blog-head-two">The Beginning of Everything as quexcepturi</h2></a>
                                <p class="blog-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p> <a href="blog-detail.html" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="page-number">
                            <ul class="pagination">
                                <li class="page-item prev"><a class="page-link" href="#">Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item next"><a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
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
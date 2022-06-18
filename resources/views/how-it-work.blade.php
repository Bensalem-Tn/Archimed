@extends("layouts.app")

@section("wrapper")

	<!-- MAIN START -->
	<main class="main">
		<div class="banner">
			<div class="col-xs-12 text-center">
				<div class="banner-slider" id="banner-slider">
					<div class="item">
						<div class="banner-detail">
							<img src="assets/client/images/banner.jpg" alt="banner">
							<div class="banner-title">
								<h1 class="head-one">UNIQUE</h1>
								<span class="banner-span">BREAK OUT OF YOUR ROUTINE WITH A GLOBAL PRESPECTIVE.</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="banner-detail">
							<img src="assets/client/images/banner-2.jpg" alt="banner">
							<div class="banner-title">
								<h1 class="head-one">CREATIVE</h1>
								<span class="banner-span">MAKE YOUR HOUSE CREATIVE AND UNIQUE.</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="banner-detail">
							<img src="assets/client/images/banner-3.jpg" alt="banner">
							<div class="banner-title">
								<h1 class="head-one">MODERN</h1>
								<span class="banner-span">PROVIDING CUSTOMIZED DESIGN SOLUTIONS THAT FITS EVERY SPACE.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="service-part ml-auto mr-auto">
			<div class="container bg-white">
				<div class="row">
					<div class="service-title-section">
						<div class="service-title">	<span class="what-we-do">WHAT WE DO</span>
							<h2 class="head-two">Architecture 40 year experience</h2>
							<p class="service-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard</p>
						</div>
						<div class="row service-detail">
							<div class="col-xs-12 col-md-6">
								<img src="assets/client/images/quality.svg" height="45" width="45" alt="service-img">
								<h3 class="head-three">QUALITY</h3>
								<p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<img src="assets/client/images/think.svg" height="45" width="45" alt="service-img">
								<h3 class="head-three">EASY ACCESS</h3>
								<p class="detail-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
							</div>
							<div class="col-xs-12 col-md-6 pt-35">
								<img src="assets/client/images/software.svg" height="45" width="45" alt="service-img">
								<h3 class="head-three">TECHNOLOGY</h3>
								<p class="detail-p mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
							</div>
							<div class="col-xs-12 col-md-6 pt-35">
								<img src="assets/client/images/management.svg" height="45" width="45" alt="service-img">
								<h3 class="head-three">THE TEAM WORK</h3>
								<p class="detail-p mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been the industry's</p>
							</div>
						</div>
					</div>
					<div class="service-section-img">
						<div class="service-bg img-box d-none d-lg-block">
							<img src="assets/client/images/services-img.jpg" alt="service-img">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="project-part paddingtb px-3 px-xl-0">
			<div class="container">
				<div class="row mb-xl-5 mb-0">
					<div class="section-title px-0">
						<div class="sec-title float-left">	<span class="sec-span">EXPLORE PORTFOLIOS</span>
							<h2 class="head-two">Latest Projects</h2>
						</div>
						<div class="sec-title-line float-left"></div>
						<div class="sec-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard</div>
					</div>
					<div class="position-r w-100 mb-lg-5 mb-4">
						<div id="project-slider">
							<div class="project-slider w-65">
								<div class="item">
									<div class="project-img">
										<img src="assets/client/images/project-img1.jpg" alt="project-img">
									</div>
								</div>
								<div class="item">
									<div class="project-img">
										<img src="assets/client/images/project-img2.jpg" alt="project-img">
									</div>
								</div>
							</div>
							<div class="proj-nav">
								<div class="slider-counter"></div>
							</div>
							<div class="portfolio-detail">	<span class="portfolio-title">PLANNING</span>
								<h3 class="portfolio-desc"><a href="#">Luxury Modern Hotel</a></h3>
								<p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="#">View Project</a>
							</div>
						</div>
					</div>
					<div class="position-r w-100">
						<div id="project-slider2" class="project-slider-right">
							<div class="project-slider w-65 float-right">
								<div class="item">
									<div class="project-img">
										<img src="assets/client/images/project-img2.jpg" alt="project-img">
									</div>
								</div>
								<div class="item">
									<div class="project-img">
										<img src="assets/client/images/project-img1.jpg" alt="project-img">
									</div>
								</div>
							</div>
							<div class="proj-nav">
								<div class="slider-counter"></div>
							</div>
							<div class="portfolio-detail portfolio-left">	<span class="portfolio-title">COMMERCIAL</span>
								<h3 class="portfolio-desc"><a href="#">Cultural Complex Center</a></h3>
								<p class="portfolio-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Sed ut perspiciatis unde omnis iste perspiciatis eaque ipsa quae</p> <a class="view-project" href="#">View Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-investors-part paddingtb px-xl-0 px-3">
			<div class="container">
				<div class="row position-r">
					<div class="section-title px-0">
						<div class="sec-title float-left">	<span class="sec-span">FEEDBACK FROM</span>
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
										<img src="assets/client/images/investor-img1.png" alt="investor-img">
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
										<img src="assets/client/images/investor-img2.png" alt="investor-img">
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
										<img src="assets/client/images/investor-img3.png" alt="investor-img">
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
										<img src="assets/client/images/investor-img1.png" alt="investor-img">
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
										<img src="assets/client/images/investor-img2.png" alt="investor-img">
									</div>
									<div class="inves-title float-left">
										<h3 class="head-three"><a href="#">John Doe</a></h3>
										<span class="inves-span">Student</span>
									</div>
									<p class="inves-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam veritatis et quasi sunt explicabo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="experts-part paddingtb">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-12 mt-md-5 mt-0">
						<div class="title">ADVISORS</div>
						<h3 class="head-two mt-3">Our Experts Advisors</h3>
						<p class="experts-p">Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been the industry's</p>
					</div>
					<div class="col-md-7 col-xs-12">
						<div class="advisor-slider" id="advisor-slider">
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img1.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img2.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img3.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img2.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img3.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img1.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="advisor-img over-parent">
									<div class="overlay img-box">
										<img src="assets/client/images/expert-img3.jpg" alt="expert-img">
									</div>
									<div class="advisor-detail">
										<h4 class="head-four">John Doe</h4>
										<span class="advisor-span">Founder</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="brand-part paddingtb">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 w-100">
						<div class="brand-slider" id="brand-slider">
							<div class="item">
								<img src="assets/client/images/brand-logo1.png" alt="brand-logo">
							</div>
							<div class="item">
								<img src="assets/client/images/brand-logo2.png" alt="brand-logo">
							</div>
							<div class="item">
								<img src="assets/client/images/brand-logo3.png" alt="brand-logo">
							</div>
							<div class="item">
								<img src="assets/client/images/brand-logo4.png" alt="brand-logo">
							</div>
							<div class="item">
								<img src="assets/client/images/brand-logo5.png" alt="brand-logo">
							</div>
							<div class="item">
								<img src="assets/client/images/brand-logo6.png" alt="brand-logo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="latest-news-part paddingtb position-r">
			<div class="container">
				<div class="row position-r">
					<div class="section-title">
						<div class="sec-title float-left">	<span class="sec-span">INTRODUCE BLOG</span>
							<h2 class="head-two">Latest News</h2>
						</div>
						<div class="sec-title-line float-left"></div>
						<div class="sec-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard</div>
					</div>
					<div class="col-xs-12 px-3 px-xl-0">
						<div class="news-slider" id="news-slider">
							<div class="item">
								<div class="img-box zoom">
									<a href="blog.html">
										<img src="assets/client/images/news-img1.jpg" alt="blog-img">
									</a>
								</div>
								<div class="news-detail">
									<p class="news-p">JOHN DOE<span>|</span> JUL 15,2019</p>	<a href="blog.html"><h3 class="head-three">The Beginning of Everything as quexcepturl We Know</h3></a>
									<a href="blog.html" class="read-more">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="d-flex flex-column">
									<div class="img-box zoom order-xl-2">
										<a href="blog.html">
											<img src="assets/client/images/news-img2.jpg" alt="blog-img">
										</a>
									</div>
									<div class="news-detail order-xl-1">
										<p class="news-p">JOHN DOE<span>|</span> JUL 15,2019</p>	<a href="blog.html"><h3 class="head-three">The Beginning of Everything as quexcepturl We Know</h3></a>
										<a href="blog.html" class="read-more">Read More</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="img-box zoom">
									<a href="blog.html">
										<img src="assets/client/images/news-img3.jpg" alt="blog-img">
									</a>
								</div>
								<div class="news-detail">
									<p class="news-p">JOHN DOE<span>|</span> JUL 15,2019</p>	<a href="blog.html"><h3 class="head-three">The Beginning of Everything as quexcepturl We Know</h3></a>
									<a href="blog.html" class="read-more">Read More</a>
								</div>
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
							<img src="assets/client/images/call.svg" height="30" width="30" alt="call-icon">
							<h2 class="head-two">Our Phone</h2>
							<p>+ 91 123 456 789 0</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="contact-detail">
							<img src="assets/client/images/map.svg" height="30" width="30" alt="map-icon">
							<h2 class="head-two">Our Location</h2>
							<p>869 Lexington Ave, New York, NY 10065, USA</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="contact-detail">
							<img src="assets/client/images/envelope.svg" height="30" width="30" alt="envelope-icon">
							<h2 class="head-two">Our Email</h2>
							<p>unicode@123gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</main>
	<!-- MAIN END -->
	@endsection
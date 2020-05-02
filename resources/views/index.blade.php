@extends('layouts.app')
@section('content')

<body class="home_version_04 ">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
<!-- Preloader -->

<header id="header">
	<div class="header-body">
		<nav class="navbar edu-navbar bg-light" >
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

                        <li><a href="/index"><img src="images/logo.jpg" width="80" height="80" alt=""></a></li>
						 <li><a data-scroll="" href="/index">Home</a></li>
                        <li><a data-scroll="" href="/admission">Admission</a></li>
						<li><a data-scroll="" href="/teacher">Teachers</a></li>
						<li><a data-scroll href="/event">Event</a></li>
                        <li><a href="/gallery">Gallery</a></li>
						<li><a data-scroll href="/blog">Blog</a></li>
						<li><a data-scroll href="/about">About</a></li>
						<li><a data-scroll href="/contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</div>

	<!--==================
		Slider
	===================-->
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider" style="display:none">

            <!-- BEGIN SLIDES LIST -->
            <ul>
				<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slider4.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/slider4.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-1"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-140"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-80"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-p"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>


                </li>

                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slider2.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/slider2.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-160"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-30"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>

                </li>

                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slider3.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/slider3.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-160"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-30"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>

                </li>

                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slider1.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/slider1.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-160"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A batter world
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-30"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>


				</li>
            </ul><!-- END SLIDES LIST -->

        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header>
	<!--  End header section-->




<!-- Start Three section in one -->
<section class="about_vi_e-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 about-content">
				<h3 class="section-h-medium">About Holy Field</h3>
				<div class="about-text">
					<p>Holy Field Private School was founded on the 22<sup>nd</sup> of september 2003 on a temporary site at no 20 Fasina street Baale Akinosi Town, Ifo local government Area of Ogun State.  </p>
					<p>The school started with 30 pupils spread across Kindergaten, Nursery an dPrimary. Within a short space of time the population rose speedily beacuse of the vision of the school which is geared toward qualitative learning and superb moral upbringing.</p>
				</div><!-- Ends: . -->
				<a class="readmore-btn" href="/about">Read More<i class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
			</div>

			<div class=" col-sm-12 col-md-6 video-wapper">
				<h3 class="section-h-medium title-011">About Holy Field</h3>
				<div class="video-play-btn">
					<a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" class="video-iframe"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->


<!--Start Facilities Area Section-->
<section class="facilities-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-sm-4 Facilities-01 Facilities-single-box">
					<img src="images/index-04/facilities-01.jpg" alt="" class="faclilities-img">
					<h2><a href="#">School Facilities</a></h2>
				</div>

				<div class="col-sm-4 Facilities-03 Facilities-single-box">
					<img src="images/index-04/facilities-02.jpg" alt="" class="faclilities-img">
					<h2><a href="#"> Science Laboratory</a></h2>
				</div>

				<div class="col-sm-4 Facilities-02 Facilities-single-box">
					<img src="images/index-04/facilities-03.jpg" alt="" class="faclilities-img">
					<h2><a href="#">Best Libraries</a></h2>
				</div>
			</div>
		</div>
	</div>
</section><!-- Ends: . -->



<!--Start Courses Area Section-->
<section class="Courses-area-04">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Upcoming Events </h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row courses-r-margin-bottom">
			<div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> <del>N</del> 4,000 </span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">School excursion</a></h3>
						<p>Trip to Dubai.</p>
					</div>
				</div><!-- Ends: .single courses -->
			</div>

            <div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> Free</span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">Cowbell Mathematics Competition</a></h3>
						<p>The school is participating in a cowbell competition for the junior category.</p>
					</div>
				</div><!-- Ends: .single courses -->
            </div>

            <div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> <del> N </del> 6,000</span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">National Science Competition</a></h3>
						<p>The school is participating in a Science comptetion. Students are expection to come up with a science project </p>
					</div>
				</div><!-- Ends: .single courses -->
            </div>

            <div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> <del>N</del> 4,000 </span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">School excursion</a></h3>
						<p>Trip to Dubai.</p>
					</div>
				</div><!-- Ends: .single courses -->
			</div>

            <div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> Free</span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">Cowbell Mathematics Competition</a></h3>
						<p>The school is participating in a cowbell competition for the junior category.</p>
					</div>
				</div><!-- Ends: .single courses -->
            </div>

            <div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<a href="#">
						<div class="courses-img">
							<img src="images/index-04/courses-01.jpg" alt="" class="img-responsive">
						</div>
					</a>
					<div class="courses-price">
						<ul class="list-unstyled">

							<li class="price-red">
						 	 	<span> <del> N </del> 6,000</span>
						 	 	<div class="base"></div>
							</li>
						</ul>
					</div>
					<div class="courses-content">
						<h3><a href="#">National Science Competition</a></h3>
						<p>The school is participating in a Science comptetion. Students are expection to come up with a science project </p>
					</div>
				</div><!-- Ends: .single courses -->
            </div>
		</div><!--End .row-->


		<div class="row">
			<div class="col-md-12">
				<div class="view_more_btn">
					<a href="/event" class="view-more-item">view all events</a>
				</div>
			</div>
		</div>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Courses Area section -->


<section class="reg-news_others">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 single-item-box">
				<div class="news-item-box">
					<h3 class="section-h-medium">Latest News</h3>
					<div class="single-item">
						<div class="img-box">
							<img src="images/index-04/latest_news.jpg" alt="" class="img-responsive">
						</div>
						<div class="news-content">
							<h3><a href="#">the future of Web Design</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 July, 2019
								</span>
								<span>
									<i class="fa fa-user"></i>
									John Doe
								</span>
								<span>
									<i class="fa fa-comment"></i>
									12
								</span>
							</p>
						</div>
						<div class="news-content">
							<h3><a href="#">Online Learning Glossary</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 July, 2019
								</span>
								<span>
									<i class="fa fa-user"></i>
									John Doe
								</span>
								<span>
									<i class="fa fa-comment"></i>
									12
								</span>
							</p>
						</div>
					</div>
					<a class="readmore-btn" href="#">View All News<i class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
				</div>
			</div>


			<div class="col-sm-4  single-item-box">
				<div class="success-story">
					<h3 class="section-h-medium"> Meet the founders</h3>
					<div class="success-story-box owl-carousel" id="success-carousel-04">
						<div class="single-item">
							<div class="img-box">
								<img src="images/index-04/author-01.jpg" alt="" class="img-responsive">
							</div>
							<div class="success-author-info">
								<h3 class="section-h-medium"><a href="#">Prof. Akintunde Francis </a></h3>
								<span>Founder,Holy Field Private School</span>
							</div>
						</div>

						<div class="single-item">
							<div class="img-box">
								<img src="images/index-04/author-03.jpg" alt="" class="img-responsive">
							</div>
							<div class="success-author-info">
								<h3 class="section-h-medium"><a href="#"> Mrs Akintunde Temitope</a></h3>
								<span>Proprietress, Holy Field Private Schol</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

<!-- Footer Area section -->

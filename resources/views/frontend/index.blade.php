@extends('frontend.layouts.app')

@section('content')
<!-- WRAPPER ALL -->
<div class="arlo_tm_wrapper_all">

	<div id="arlo_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>

	<!-- PRELOADER -->
	{{-- <div class="arlo_tm_preloader">
		<div class="spinner_wrap">
			<div class="spinner"></div>
		</div>
	</div> --}}
	<!-- /PRELOADER -->

	<!-- MOBILE MENU -->
	<div class="arlo_tm_mobile_header_wrap">
		<div class="main_wrap">
			<div class="arlo_tm_trigger">
				<div class="hamburger hamburger--collapse-r">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="arlo_tm_mobile_menu_wrap">
			<div class="mob_menu">
				<ul class="anchor_nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#experience">Experience</a></li>
					<li><a href="#education">Education</a></li>
					<li><a href="#skill">Skills</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->

	<!-- CONTENT -->
	<div class="arlo_tm_content">

		<!-- LEFTPART -->
		<div class="arlo_tm_leftpart_wrap">
			<div class="leftpart_inner">
				<div class="logo_wrap">
					{{-- <a href="#"><img src="img/logo/desktop-logo.png" alt="" /></a> --}}
				</div>
				<div class="menu_list_wrap">
					<ul class="anchor_nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#experience">Experience</a></li>
						<li><a href="#education">Education</a></li>
						<li><a href="#skill">Skills</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
				<div class="leftpart_bottom">
					<div class="social_wrap">
						<ul>
							<li><a href="#"><i class="fab fa-github"></i></a></li>
							<li style="padding-left: 10px"><a href="#"><i class="fab fa-hackerrank"></i></a></li>
							<li style="padding-left: 10px"><a href="#"><i class="xcon-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<a class="arlo_tm_resize" href="#"><i class="xcon-angle-left"></i></a>
			</div>
		</div>
		<!-- /LEFTPART -->

		<!-- RIGHTPART -->
		<div class="arlo_tm_rightpart">
			<div class="rightpart_inner">
				<div class="arlo_tm_section" id="home">
					<div class="arlo_tm_hero_header_wrap">
						<div class="arlo_tm_universal_box_wrap particle jarallax" data-speed="0.1">
							<div id="particles-js"></div>
							<div class="particle_overlay"></div>
							<div class="inner_content">
								<div class="image_wrap">
									<img src="{{asset('assets/img/hero/img.jpg')}}" alt="" />
								</div>
								<div class="name_holder" style="padding-top: 15px">
									<h3>Rabbil <span>Yasar</span></h3>
								</div>
								<div class="text_typing" style="padding-top: 10px">
									<p>I am a <span class="arlo_tm_animation_text_word"></span></p>
								</div>
							</div>
							<div class="arlo_tm_arrow_wrap bounce anchor">
								<a href="#about"><i class="xcon-angle-double-down"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- ABOUT -->
				<div class="arlo_tm_section relative" id="about">
					<div class="arlo_tm_about_wrapper_all">
						<div class="container">
							<div class="arlo_tm_title_holder">
								<h3>About Me</h3>
								<span>Main informations about me</span>
							</div>
							<div class="arlo_tm_about_wrap">
								<div class="author_wrap">
									<div class="leftbox">
										<div class="about_image_wrap parallax" data-relative-input="true">
											<div class="image layer" data-depth="0.1">
												<img src="{{asset('assets/img/about/550x640.jpg')}}" alt="" />
												<div class="inner" data-img-url="{{asset('assets/img/about/1.jpg')}}"></div>
											</div>
											<div class="border layer" data-depth="0.2">
												<img src="{{asset('assets/img/about/550x640.jpg')}}" alt="" />
												<div class="inner"></div>
											</div>
										</div>
									</div>
									<div class="rightbox justify-content-center">
										<div class="arlo_tm_mini_title_holder">
											<h4>I'm Rabbil Yasar and <span class="arlo_tm_animation_text_word"></span></h4>
										</div>
										<div class="definition">
											<p>Hi! My name is <strong>Rabbil Yasar</strong>. I am a Web Developer, and I'm very passionate
												and dedicated to my work. May not have the experience as others but I do overcome it with my
												dedication to my work. I like when the product gets done and I love the research in the
												middle. I like solving problems but bost importantly I love learning.</p>
										</div>
										<div class="about_short_contact_wrap">
											<ul>
												<li>
													<span><label>Birthday:</label> 12.01.1995</span>
												</li>
												<li>
													<span><label>Age:</label> 24</span>
												</li>
												<li>
													<span><label>City:</label> Dhaka, Bangladesh</span>
												</li>
												<li>
													<span><label>Interests:</label> Football, Drumming, Music</span>
												</li>
												<li>
													<span><label>Mail:</label> <a
															href="mailto:rabbilyasar@gmail.com">rabbilyasar&#64;gmail.com</a></span>
												</li>
												<li>
													<span><label>Phone:</label> <a href="#">+880 1789 357 288</a></span>
												</li>
											</ul>
										</div>
										{{-- <div class="buttons_wrap">
											<ul>
												<li>
													<a href="index.html"><span>Download CV</span></a>
												</li>
												<li class="anchor">
													<a href="#contact"><span>Send Message</span></a>
												</li>
											</ul>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /ABOUT -->

				{{-- EXPERIENCE --}}
				<section class="colorlib-experience arlo_tm_section" data-section="experience" id="experience">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="arlo_tm_title_holder">
								<h3>Experience</h3>
								<span>Meet our amazing services</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="timeline-centered">
									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">

											<div class="timeline-icon color-1">
												<i class="icon-pen2"></i>
											</div>

											<div class="timeline-label">
												<h2><a href="#">Software Engineer Intern</a> <span>Apr, 2019-July, 2019</span></h2>
												<h2>Creative IT</h2>
												<h3>Key Responsibilities</h3>
												<p>
													<ul>
														<li>Make Software as per the company requirements.</li>
														<li> Co-operate with team members to finish projects assigned by the company. </li>
														<li> Assist students to help them understand problems.</li>
														<li> Finding innovative ways to perform day to day problem solving. </li>
														<li> Give briefing to clients on the software and how it works.</li>
													</ul>
												</p>
											</div>
										</div>
									</article>


									{{-- <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-2">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
													unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
													decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-3">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
													unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
													decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-4">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
													unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
													decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-5">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
													unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
													decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article> --}}

									<article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-none">
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</section>

				{{-- EDUCATION --}}
				<section class="colorlib-education arlo_tm_section" data-section="education" id="education">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="arlo_tm_title_holder">
								<h3>Education</h3>
								<span>Meet our amazing services</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
														aria-expanded="false" aria-controls="collapseOne">Web Development (December, 2018 – April, 2018)
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingOne">
												<div class="panel-body">
													<h4>Creative IT</h4>
													<p>Completed my training for the whole course where it included a CRUD functionality using core PHP and an e-commerce site using Laravel</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
														aria-expanded="false" aria-controls="collapseTwo">Web Design (August, 2018 – October, 2018)
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingTwo">
												<div class="panel-body">
													<h4>New Horizon</h4>
													<p>The course included small projects using HTML and CSS. Here I also got familiar with JavaScript. </p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingThree">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
														aria-expanded="false" aria-controls="collapseThree">BA in Business (2018) 
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingTwo">
												<div class="panel-body">
													<h4>University of Wales Trinity Saint David (UWTSD)</h4>
													<p>Majored in Management, this certification taught me the cultures of a business and how to become a valuable asset to any company that I will be working for. I believe by doing BA in Business helped me become better at researching and finding out answers from whatever mean necessary, which in turn helped me become a better web developer. </p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingFour">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
														aria-expanded="false" aria-controls="collapseFour">A’ Level (2013)
													</a>
												</h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingFour">
												<div class="panel-body">
													<h4>British Council (Dhaka)</h4>
													<p>Choice of subjects were Accounting and Mathematics. </p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingFive">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
														aria-expanded="false" aria-controls="collapseFive">O’ Level (2011) 
													</a>
												</h4>
											</div>
											<div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingFive">
												<div class="panel-body">
													<h4> British Council (Dhaka) </h4>
													<p>Choice of subjects were Pure Maths, Algebra, Biology, Chemistry, Physics, Accounting, Bangla, English</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingSix">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
														aria-expanded="false" aria-controls="collapseSix">Web Development (December, 2018 – April, 2018)
													</a>
												</h4>
											</div>
											<div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingSix">
												<div class="panel-body">
													<h4>Creative IT</h4>
													<p>Completed my training for the whole course where it included a CRUD functionality using core PHP and an e-commerce site using Laravel</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<!-- SKILLS -->
				<div class="arlo_tm_section" id="skill">
					<div class="arlo_tm_skills_wrap">
						<div class="container">
							<div class="inner_wrap">
								<div class="leftbox">
									<div class="arlo_tm_mini_title_holder">
										<h4>Some About my Abilities</h4>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
										the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum
										has been the industry's standard dummy text since. Lorem Ipsum is simply.</p>
								</div>
								<div class="rightbox">
									<div class="progress_bar_wrap_total">
										<div class="arlo_tm_progress_wrap" data-size="small" data-round="c" data-strip="off">
											<div class="arlo_tm_progress" data-value="90" data-color="#000">
												<span><span class="label">Laravel - <span class="experience">1 years of
															experience</span></span><span class="number">90%</span></span>
												<div class="arlo_tm_bar_bg">
													<div class="arlo_tm_bar_wrap">
														<div class="arlo_tm_bar"></div>
													</div>
												</div>
											</div>
											<div class="arlo_tm_progress" data-value="70" data-color="#000">
												<span><span class="label">Vue - <span class="experience"> >1 years of
															experience</span></span><span class="number">70%</span></span>
												<div class="arlo_tm_bar_bg">
													<div class="arlo_tm_bar_wrap">
														<div class="arlo_tm_bar"></div>
													</div>
												</div>
											</div>
											<div class="arlo_tm_progress" data-value="85" data-color="#000">
												<span><span class="label">JavaScript - <span class="experience"> >1 years of
															experience</span></span><span class="number">85%</span></span>
												<div class="arlo_tm_bar_bg">
													<div class="arlo_tm_bar_wrap">
														<div class="arlo_tm_bar"></div>
													</div>
												</div>
											</div>
											<div class="arlo_tm_progress" data-value="75" data-color="#000">
												<span><span class="label">HTML - <span class="experience"> 1 years of
															experience</span></span><span class="number">75%</span></span>
												<div class="arlo_tm_bar_bg">
													<div class="arlo_tm_bar_wrap">
														<div class="arlo_tm_bar"></div>
													</div>
												</div>
											</div>
											<div class="arlo_tm_progress" data-value="60" data-color="#000">
												<span><span class="label">CSS - <span class="experience">1 years of
															experience</span></span><span class="number">60%</span></span>
												<div class="arlo_tm_bar_bg">
													<div class="arlo_tm_bar_wrap">
														<div class="arlo_tm_bar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /SKILLS -->

				<!-- SERVICES -->
				<div class="arlo_tm_section" id="services">
					<div class="arlo_tm_services_wrap">
						<div class="container">
							<div class="arlo_tm_title_holder">
								<h3>Amazing Services</h3>
								<span>Meet our amazing services</span>
							</div>
							<div class="list_wrap">
								<ul>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/development.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Web Development</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/design.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Web Design</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/idea.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Innovative Ideas</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/application.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Application</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/software.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Software</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="icon">
												<img class="svg" src="{{asset('assets/img/svg/management.svg')}}" alt="" />
											</div>
											<div class="title_service">
												<h3>Management</h3>
											</div>
											<div class="text">
												<p>Web design is a similar process of creation, with the intention of presenting the content
													on electronic pages ...</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /SERVICES -->


				<!-- PORTFOLIO -->
				<div class="arlo_tm_section relative" id="portfolio">
					<div class="arlo_tm_portfolio_wrapper_all">


						<!-- PORTFOLIO FILTER -->
						<div class="arlo_tm_second_portfolio">
							<div class="container">
								<div class="arlo_tm_portfolio_wrap">
									<div class="arlo_tm_title_holder portfolio">
										<h3>Creative Works</h3>
										<span>Check out our latest creative works</span>
									</div>
									<div class="arlo_tm_portfolio_titles"></div>
									<ul class="arlo_tm_portfolio_filter">
										<li><a href="#" class="current" data-filter="*">All</a></li>
										<li><a href="#" data-filter=".design">Design</a></li>
										<li><a href="#" data-filter=".photography">Photography</a></li>
										<li><a href="#" data-filter=".development">Development</a></li>
									</ul>
									<ul class="arlo_tm_portfolio_list gallery_zoom">
										<li class="design">
											<div class="animate-box" data-animate-effect="fadeInLeft">
												<div class="project" style="background-image: url({{asset('jackson/images/img-1.jpg')}});">
													<div class="desc">
														<div class="con">
															<h3><a href="work.html">Work 01</a></h3>
															<span>Website</span>
															<p class="icon">
																<span><a href="#"><i class="icon-share3"></i></a></span>
																<span><a href="#"><i class="icon-eye"></i> 100</a></span>
																<span><a href="#"><i class="icon-heart"></i> 49</a></span>
															</p>
														</div>
													</div>
												</div>
											</div>
										</li>
										{{-- <li class="photography">
											<div class="entry arlo_tm_portfolio_animation_wrap" data-title="Ind Hed"
												data-category="Photography">
												<a href="portfolio-single-2.html">
													<img src="img/portfolio/600x600.jpg" alt="" />
													<div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/2.jpg"></div>
												</a>
											</div>
										</li>
										<li class="development">
											<div class="entry arlo_tm_portfolio_animation_wrap" data-title="Paper Mockup"
												data-category="Development">
												<a href="portfolio-single-3.html">
													<img src="img/portfolio/600x600.jpg" alt="" />
													<div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/3.jpg"></div>
												</a>
											</div>
										</li>
										<li class="photography">
											<div class="entry arlo_tm_portfolio_animation_wrap" data-title="The Nordic"
												data-category="Photography">
												<a href="portfolio-single-4.html">
													<img src="img/portfolio/600x600.jpg" alt="" />
													<div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/4.jpg"></div>
												</a>
											</div>
										</li>
										<li class="design">
											<div class="entry arlo_tm_portfolio_animation_wrap" data-title="Creatives Castle"
												data-category="Design">
												<a href="portfolio-single-5.html">
													<img src="img/portfolio/600x600.jpg" alt="" />
													<div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/5.jpg"></div>
												</a>
											</div>
										</li>
										<li class="photography">
											<div class="entry arlo_tm_portfolio_animation_wrap" data-title="White Bag"
												data-category="Photography">
												<a href="portfolio-single-6.html">
													<img src="img/portfolio/600x600.jpg" alt="" />
													<div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/6.jpg"></div>
												</a>
											</div>
										</li> --}}
									</ul>
								</div>
							</div>
						</div>
						<!-- /PORTFOLIO FILTER -->

					</div>
				</div>
				<!-- /PORTFOLIO -->

				<!-- TESTIMONIALS -->
				<div class="arlo_tm_section" id="testimonials">
					<div class="arlo_tm_testimonials_wrapper_all">
						<div class="arlo_tm_universal_box_wrap">
							<div class="bg_wrap">
								<div class="overlay_image testimonial jarallax" data-speed="0"></div>
								<div class="overlay_color testimonial"></div>
							</div>
							<div class="content testimonial">
								<div class="arlo_tm_testimonial_wrap">
									<div class="container">
										<div class="carousel_wrap">
											<ul class="owl-carousel">
												<li class="item">
													<div class="inner">
														<div class="quotebox_wrap">
															<i class="xcon-quote-left"></i>
														</div>
														<div class="definitions_wrap">
															<p>“Arlo team are easy to work with and helped me make amazing websites in a short
																amount of time. Thanks guys for works.”</p>
														</div>
														<div class="name_holder">
															<p>Antonio Baraley, CEO Founder</p>
														</div>
													</div>
												</li>
												<li class="item">
													<div class="inner">
														<div class="quotebox_wrap">
															<i class="xcon-quote-left"></i>
														</div>
														<div class="definitions_wrap">
															<p>“We were looking for a logo with a touch of modernism. Arlo grasped our needs and
																produced a stunning design.”</p>
														</div>
														<div class="name_holder">
															<p>Calena Gomez, AOC Designer</p>
														</div>
													</div>
												</li>
												<li class="item">
													<div class="inner">
														<div class="quotebox_wrap">
															<i class="xcon-quote-left"></i>
														</div>
														<div class="definitions_wrap">
															<p>“Awesome to work with Arlo. Good organized, easy to communicate with, responsive
																with next iterations.”</p>
														</div>
														<div class="name_holder">
															<p>Torren Winston, Photographer.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /TESTIMONIALS -->

				<!-- COUNTERBOX -->
				<div class="arlo_tm_section">
					<div class="container">
						<div class="arlo_tm_counter_wrap" data-col="4" data-delay="300">
							<ul class="arlo_tm_counter_list arlo_tm_miniboxes">
								<li>
									<div class="inner arlo_tm_minibox">
										<h3><span><span class="arlo_tm_counter" data-from="0" data-to="2222"
													data-speed="3000">0</span></span></h3>
										<span>Projects Completed</span>
									</div>
								</li>
								<li>
									<div class="inner arlo_tm_minibox">
										<h3><span><span class="arlo_tm_counter" data-from="0" data-to="333"
													data-speed="3000">0</span>K</span></h3>
										<span>Lines of Code</span>
									</div>
								</li>
								<li>
									<div class="inner arlo_tm_minibox">
										<h3><span><span class="arlo_tm_counter" data-from="0" data-to="8888"
													data-speed="3000">0</span></span></h3>
										<span>Happy Clients</span>
									</div>
								</li>
								<li>
									<div class="inner arlo_tm_minibox">
										<h3><span><span class="arlo_tm_counter" data-from="0" data-to="777"
													data-speed="3000">0</span>+</span></h3>
										<span>My Awwwards</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /COUNTERBOX -->


				<!-- CONTACT & FOOTER -->
				<div class="arlo_tm_section" id="contact">
					<div class="container">
						<div class="arlo_tm_title_holder contact">
							<h3>Contact Me</h3>
							<span>Get in touch with me</span>
						</div>
					</div>
					<div class="arlo_tm_footer_contact_wrapper_all">
						<div class="arlo_tm_contact_wrap_all">
							<div class="container">
								<div class="leftbox">
									<div class="arlo_tm_mini_title_holder contact">
										<h4>Get in Touch</h4>
									</div>
									<div class="short_info_wrap">
										<ul>
											<li>
												<p><label>Address:</label><span>123 Qwerty Avenue NYC, USA</span></p>
											</li>
											<li>
												<p><label>Email:</label><span><a href="mailto:example@gmail.com">example@gmail.com</a></span>
												</p>
											</li>
											<li>
												<p><label>Phone:</label><span>+77 022 177 05 05</span></p>
											</li>
											<li>
												<p><label>Website:</label><span><a href="mailto:example@gmail.com">www.yourdomain.com</a></span>
												</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="rightbox">
									<div class="arlo_tm_contact_wrap">
										<div class="main_input_wrap">
											<form action="" method="post" class="contact_form" id="contact_form">
												<div class="returnmessage"
													data-success="Your message has been received, We will contact you soon."></div>
												<div class="empty_notice"><span>Please Fill Required Fields</span></div>
												<div class="wrap">
													<input id="name" type="text" placeholder="Your Name">
												</div>
												<div class="wrap">
													<input id="email" type="text" placeholder="Your Email">
												</div>
												<div class="wrap">
													<textarea id="message" placeholder="Your Message"></textarea>
												</div>
												<div class="arlo_tm_button">
													<a id="send_message" href="#"><span>Send Message</span></a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="arlo_tm_footer_wrap">
							<div class="container">
								<p>&copy; Copyright 2019. All Rights are Reserved.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /CONTACT & FOOTER -->

			</div>
		</div>
		<!-- /RIGHTPART -->

		<a class="arlo_tm_totop" href="#"></a>

	</div>
</div>
<!-- / WRAPPER ALL -->
@endsection
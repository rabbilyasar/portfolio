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
    <div class="arlo_tm_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
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
                            <li><a href="https://github.com/rabbilable" target="none"><i class="fab fa-github"></i></a>
                            </li>
                            <li style="padding-left: 10px"><a href="hackerrank.com/rabbilable" target="none"><i
                                        class="fab fa-hackerrank"></i></a></li>
                            <li style="padding-left: 10px"><a href="https://www.linkedin.com/in/tanvirsajal/"
                                    target="none"><i class="xcon-linkedin"></i></a></li>
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
                                                <div class="inner" data-img-url="{{asset('assets/img/about/1.jpg')}}">
                                                </div>
                                            </div>
                                            <div class="border layer" data-depth="0.2">
                                                <img src="{{asset('assets/img/about/550x640.jpg')}}" alt="" />
                                                <div class="inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rightbox justify-content-center">
                                        <div class="arlo_tm_mini_title_holder">
                                            <h4>I'm Rabbil Yasar and a <span class="arlo_tm_animation_text_word"></span>
                                            </h4>
                                        </div>
                                        <div class="definition">
                                            <p>Hi! My name is <strong>Rabbil Yasar</strong>. <br>
                                                A dedicated and passionate Web Developer, who doesn't get shy to take
                                                new
                                                challenges.I enjoy the thrill of making a program from concept to
                                                reality. I love coding, it give me pleasure to see the code work the way
                                                it is
                                                supposed to and in case it doesn't I always get to learn new thing.
                                                I don't think any line of work can get as fun and as exciting as this.
                                            </p>
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
                                                    <span><label>Phone:</label> <a href="#">+880 1789 35 72
                                                            88</a></span>
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
                <div class="container">
                    <section class="colorlib-experience arlo_tm_section" data-section="experience" id="experience">
                        <div class="colorlib-narrow-content">
                            <div class="row">
                                <div class="arlo_tm_title_holder">
                                    <h3>Experience</h3>
                                    <span>My experiences so far</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="timeline-centered">
                                        <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                            <div class="timeline-entry-inner">

                                                <div class="timeline-icon color-2">
                                                    <i class="icon-pen2"></i>
                                                </div>

                                                <div class="timeline-label">
                                                    <h2><a href="#">Jr. Software Engineer</a> <span>Oct,
                                                            2019-Mar, 2020</span></h2>
                                                    <h2>Nomad Tech bd</h2>
                                                    <h3>Key Responsibilities</h3>
                                                    <p>
                                                        <ul>

                                                            <li> Contributed in the making of Compliance Management
                                                                system. A good number of important features were
                                                                developed and
                                                                designed by me, maintaining good coding practices.
                                                            </li>
                                                            <li> Tasked with making a cheque printing software meeting
                                                                client's need.
                                                            </li>
                                                            <li> Fixed bugs by reading codes written by other
                                                                developers and improved them if needed.
                                                            </li>
                                                            <li> Designed database to store information using various
                                                                methods appropriately and optimized it accordingly.
                                                            </li>

                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                            <div class="timeline-entry-inner">

                                                <div class="timeline-icon color-1">
                                                    <i class="icon-pen2"></i>
                                                </div>

                                                <div class="timeline-label">
                                                    <h2><a href="#">Software Engineer Intern</a> <span>Apr, 2019-July,
                                                            2019</span></h2>
                                                    <h2>Creative IT</h2>
                                                    <h3>Key Responsibilities</h3>
                                                    <p>
                                                        <ul>
                                                            <li>Developed a full fledged Inventory Management System
                                                                with very little supervision and made it client ready
                                                                for Creative
                                                                IT.</li>
                                                            <li> Implemented multiple roles functionality and designed
                                                                database for the whole system. </li>
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

                                        <article class="timeline-entry begin animate-box"
                                            data-animate-effect="fadeInBottom">
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
                </div>

                {{-- EDUCATION --}}
                <div class="container">
                    <section class="colorlib-education arlo_tm_section" data-section="education" id="education">
                        <div class="colorlib-narrow-content">
                            <div class="row">
                                <div class="arlo_tm_title_holder">
                                    <h3>Education</h3>
                                    <span>My qualifications on paper</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="fancy-collapse-panel">
                                        <div class="panel-group" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseOne"
                                                            aria-expanded="false" aria-controls="collapseOne">Web
                                                            Development (December, 2018 – April,
                                                            2018)
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <h4>Creative IT</h4>
                                                        <p>Completed my training for the whole course where it included
                                                            a CRUD functionality using
                                                            core PHP and an e-commerce site using Laravel</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">Web Design
                                                            (August, 2018 – October,
                                                            2018)
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <h4>New Horizon</h4>
                                                        <p>The course included small projects using HTML and CSS. Here I
                                                            also got familiar with
                                                            JavaScript. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">BA in
                                                            Business (2018)
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <h4>University of Wales Trinity Saint David (UWTSD)</h4>
                                                        <p>Majored in Management, this certification taught me the
                                                            cultures of a business and how to
                                                            become a valuable asset to any company that I will be
                                                            working for. I believe by doing BA
                                                            in Business helped me become better at researching and
                                                            finding out answers from whatever
                                                            mean necessary, which in turn helped me become a better web
                                                            developer. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">A’ Level
                                                            (2013)
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
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">O’ Level
                                                            (2011)
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                        <h4> British Council (Dhaka) </h4>
                                                        <p>Choice of subjects were Pure Maths, Algebra, Biology,
                                                            Chemistry, Physics, Accounting,
                                                            Bangla, English</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSix">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">IELTS
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                        <h4>Wings International </h4>
                                                        <p>Score 6.5.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>



                <!-- SKILLS -->
                <div class="arlo_tm_section" id="skill">
                    <div class="arlo_tm_skills_wrap">
                        <div class="container">
                            <div class="inner_wrap">
                                <div class="leftbox">
                                    <div class="arlo_tm_mini_title_holder">
                                        <h4>Some About my Abilities</h4>
                                    </div>
                                    <p> <q>Any fool can write code that a computer can understand. Good programmers
                                            write code that humans can understand.</q>

                                        ― Martin Fowler</p>
                                </div>
                                <div class="rightbox">
                                    <div class="progress_bar_wrap_total">
                                        <div class="arlo_tm_progress_wrap" data-size="small" data-round="c"
                                            data-strip="off">
                                            <div class="arlo_tm_progress" data-value="70" data-color="#000">
                                                <span><span class="label">Python - <span class="experience">
                                                            < 1 year of experience</span> </span> <span class="number">
                                                                70%
                                                        </span></span>
                                                    <div class="arlo_tm_bar_bg">
                                                        <div class="arlo_tm_bar_wrap">
                                                            <div class="arlo_tm_bar"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="90" data-color="#000">
                                                <span><span class="label">Django - <span class="experience">
                                                            < 1 year of experience</span> </span> <span class="number">
                                                                70%
                                                        </span></span>
                                                    <div class="arlo_tm_bar_bg">
                                                        <div class="arlo_tm_bar_wrap">
                                                            <div class="arlo_tm_bar"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="90" data-color="#000">
                                                <span><span class="label">Laravel - <span class="experience">1 year of
                                                            experience</span></span><span
                                                        class="number">90%</span></span>
                                                <div class="arlo_tm_bar_bg">
                                                    <div class="arlo_tm_bar_wrap">
                                                        <div class="arlo_tm_bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="70" data-color="#000">
                                                <span><span class="label">Vue - <span class="experience">
                                                            < 1 year of experience</span> </span> <span class="number">
                                                                70%
                                                        </span></span>
                                                    <div class="arlo_tm_bar_bg">
                                                        <div class="arlo_tm_bar_wrap">
                                                            <div class="arlo_tm_bar"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="85" data-color="#000">
                                                <span><span class="label">JavaScript - <span class="experience">
                                                            1.5 year of experience</span> </span> <span class="number">
                                                        85%
                                                    </span></span>
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
                                <span>Get Familiar with the services I provide</span>
                            </div>
                            <div class="list_wrap">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="far fa-file-code fa-3x"></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Backend</h3>
                                            </div>
                                            <div class="text">
                                                <p>Technologies I can work with are PHP, Laravel which I can use for API
                                                    development and other backend related task per market demand....</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="fas fa-palette fa-3x"></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Frontend</h3>
                                            </div>
                                            <div class="text">
                                                <p>Strong frontend knowledge of HTML, CSS, Bootstrap, JavaScript and
                                                    Vue. Which I can use with Laravel to build a fullstack app...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="fas fa-database fa-3x"></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Database</h3>
                                            </div>
                                            <div class="text">
                                                <p>I can work with SQL databases like MySQL, MariaDB and also has
                                                    experience working on NoSQL database such firestore...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="fas fa-mobile-alt fa-3x"></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Application</h3>
                                            </div>
                                            <div class="text">
                                                <p>Capable of making any type of web application, following the current
                                                    market trend and design concept meeting clients demand ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="fas fa-laptop-code fa-3x"></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Software</h3>
                                            </div>
                                            <div class="text">
                                                <p>I have experience working on HR softwares which are currently being
                                                    used by company for their daily usage to handle their day to day
                                                    operations ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon" style="color: #E3872D">
                                                <i class="fas fa-people-carry fa-3x  "></i>
                                            </div>
                                            <div class="title_service">
                                                <h3>Management</h3>
                                            </div>
                                            <div class="text">
                                                <p>I have a degree on management so I am more than capable of managing
                                                    an organization if needed with my expertise and my knowledge ...</p>
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
                                        <span>Check out all my projects</span>
                                    </div>
                                    <div class="arlo_tm_portfolio_titles"></div>
                                    <ul class="arlo_tm_portfolio_filter">
                                        <li><a href="#" class="current" data-filter="*">All</a></li>
                                        <li><a href="#" data-filter=".django">Django</a></li>
                                        <li><a href="#" data-filter=".laravel">Laravel</a></li>
                                        <li><a href="#" data-filter=".python">Python</a></li>
                                        <li><a href="#" data-filter=".javascript">JavaScript</a></li>
                                        <li><a href="#" data-filter=".vue">Vue</a></li>
                                    </ul>
                                    <ul class="arlo_tm_portfolio_list gallery_zoom">
                                        <li class="laravel">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/creative_inventory.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="http://inventory.buscoms.com/login"
                                                                    target="blank">Creative Inventory</a></h3>
                                                            <span>Laravel </span>
                                                            <div class="text">
                                                                <p>A dynamice inventory management system for creative
                                                                    IT. .</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/creativeinventory_v2"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="http://inventory.buscoms.com/login"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="vue">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/movie_app.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://moviethings.herokuapp.com/"
                                                                    target="blank">MovieThings</a></h3>
                                                            <span>Vue, Laravel, TMDB API, Axios, Vue-Router </span>
                                                            <div class="text">
                                                                <p>A dynamic Web Application for watching movie trailers
                                                                    and to get movie information.</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/movie-stuffs"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://moviethings.herokuapp.com/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="javascript">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/chat_app.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://rabbilable.github.io/liveChat/"
                                                                    target="blank">ChatApp</a></h3>
                                                            <span>JavaScript,Firestore </span>
                                                            <div class="text">
                                                                <p>A chat app using javascript oop.</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/liveChat"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/liveChat/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="javascript">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/digital_clock.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://rabbilable.github.io/simpleDigitalClock/"
                                                                    target="blank">DigitalClock</a></h3>
                                                            <span>JavaScript </span>
                                                            <div class="text">
                                                                <p>A simple digital clock using JavaScript Date object.
                                                                </p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/simpleDigitalClock"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/quizApp/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="javascript">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/quiz_app.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://rabbilable.github.io/simpleDigitalClock/"
                                                                    target="blank">QuizApp</a></h3>
                                                            <span>JavaScript </span>
                                                            <div class="text">
                                                                <p>A simple 4 question quiz app using Vanilla
                                                                    JavaScript.</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/quizApp"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/quizApp/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="javascript">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/simple_to_do.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://rabbilable.github.io/simpleToDoList/"
                                                                    target="blank">SimpleToDoList</a></h3>
                                                            <span>JavaScript </span>
                                                            <div class="text">
                                                                <p>A simple ToDo list with vanilla JavaScript.</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/simpleToDoList"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/simpleToDoList/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="javascript">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/img-7.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://rabbilable.github.io/weatherApp/"
                                                                    target="blank">WeatherApp</a></h3>
                                                            <span>JavaScript, Accuweather API </span>
                                                            <div class="text">
                                                                <p>A simple weather app using AccuWeather Api and
                                                                    vanilla JavaScript.</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/weatherApp"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/weatherApp/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="vue">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/img-8.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://github.com/rabbilable/larticle-app"
                                                                    target="blank">Vurud</a></h3>
                                                            <span>Laravel, Vue </span>
                                                            <div class="text">
                                                                <p>Full-stack CRUD app using vue and laravel. .</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/larticle-app"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://rabbilable.github.io/weatherApp/"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="laravel">
                                            <div class="animate-box" data-animate-effect="fadeInLeft">
                                                <div class="project"
                                                    style="background-image: url({{asset('jackson/images/img-9.jpg')}});">
                                                    <div class="desc">
                                                        <div class="con">
                                                            <h3><a href="https://github.com/rabbilable/role_management_software"
                                                                    target="blank">Role Management Software</a></h3>
                                                            <span>Laravel, Spatie/permission </span>
                                                            <div class="text">
                                                                <p>Software to manage roles using Laravel Spatie
                                                                    package. .</p>
                                                            </div>
                                                            <p class="icon">
                                                                <span><a href="https://github.com/rabbilable/role_management_software"
                                                                        target="blank"><i
                                                                            class="icon-social-github"></i>Source</a></span>
                                                                <span><a href="https://github.com/rabbilable/role_management_software"
                                                                        target="blank"><i
                                                                            class="icon-link-outline"></i>Website</a></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

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
                                                            <p>“when you don't create things, you become defined by your
                                                                tastes rather than ability. your tastes only narrow &
                                                                exclude people. so create.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>Why The Lucky Stiff</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“Always code as if the guy who ends up maintaining your
                                                                code will be a violent psychopath who knows where you
                                                                live”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>John Woods</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“Programs must be written for people to read, and only
                                                                incidentally for machines to execute.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>Harold Abelson, Structure and Interpretation of Computer
                                                                Programs</p>
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
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="730"
                                                    data-speed="3000">0</span>+</span></h3>
                                        <span>Sunrise</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="333"
                                                    data-speed="3000">0</span>K+</span></h3>
                                        <span>Lines of Code</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="500"
                                                    data-speed="3000">0</span>+</span></h3>
                                        <span>Cups of Coffees</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="730"
                                                    data-speed="3000">0</span>+</span></h3>
                                        <span>Days of Learning</span>
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
                                                <p><label>Address:</label><span>Dhanmondi 15, Dhaka</span></p>
                                            </li>
                                            <li>
                                                <p><label>Email:</label><span><a
                                                            href="mailto:rabbilyasar@gmail.com">rabbilyasar@gmail.com</a></span>
                                                </p>
                                            </li>
                                            <li>
                                                <p><label>Phone:</label><span>+880 178 935 72 88</span></p>
                                            </li>
                                            {{-- <li>
												<p><label>Website:</label><span><a href="mailto:example@gmail.com">www.yourdomain.com</a></span>
												</p>
											</li> --}}
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="rightbox">
									<div class="arlo_tm_contact_wrap">
										<div class="main_input_wrap">
											<form action="{{route('contact.send')}}" method="post" class="contact_form" id="contact_form">
                                @csrf
                                <div class="returnmessage"
                                    data-success="Your message has been received, We will contact you soon."></div>
                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                <div class="wrap">
                                    <input id="name" type="text" placeholder="Your Name" name="name">
                                </div>
                                <div class="wrap">
                                    <input id="email" type="text" placeholder="Your Email" name="email">
                                </div>
                                <div class="wrap">
                                    <textarea id="message" placeholder="Your Message" name="message"></textarea>
                                </div>
                                <div class="arlo_tm_button">
                                    <a href="" id="send_message"
                                        onclick="document.getElementById('contact_form').submit();"><span>Send
                                            Message</span></a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
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

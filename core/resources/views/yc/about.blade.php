<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/yc/imgs/template/favicon.svg')}}">
  <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
  <link href="{{asset('assets/yc/css/vendors/aos.css')}}" rel="stylesheet">
  <title>About</title>
  <style>
  .col-1-5 {
    flex: 0 0 auto;
    width: 20%;
  }

  @media (max-width: 991.98px) {
    .col-1-5 {
      width: 50%;
    }
  }

  @media (max-width: 575.98px) {
    .col-1-5 {
      width: 100%;
    }
  }

  .item-article {
    display: none;
  }
  .ctnr{
    background-color:#ffefd1;
  }

  .item-article.active {
    display: block;
  }
</style>
</head>

<body>
  @include('layouts.preload')
  @include('layouts.header')
  <main class="main">
    <!-- <section class="section banner-service bg-grey-60 pb-30 position-relative">
      <div class="box-banner-abs">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-7 col-lg-12">
              <div class="box-banner-service">
              <span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">About Young Chanakya</span>
                <h3 class="color-brand-1 mb-20 mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                  Shaping Leaders of Tomorrow
                </h3>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">

                    <p class="font-md color-grey-500 mb-10">
                      Young Chanakya helps students and young professionals grow through mentorship, internships, and
                      entrepreneurship support. We provide the right opportunities to learn, build skills, and succeed.
                    </p>
                    <ul class="list-style-checked color-grey-500 font-md mt-20 mb-20">
                      <li class="mb-2"><svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Comprehensive Skill Development & Expert Mentorship</li>
                      <li class="mb-2"><svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Exclusive Internship & Job Placement Opportunities</li>
                      <li class="mb-2"><svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Strategic Entrepreneurial Guidance & Startup Support</li>
                      <li class="mb-2"><svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Powerful Networking & Professional Growth</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 pr-0">
          <div class="d-none d-xxl-block pr-50 mt-30">
            <div class="img-reveal">
              <img class="w-100 d-block" src="{{asset('assets/yc/imgs/page/blog/banner.png')}}" alt="YC">
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section banner-team">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Shaping Leaders of Tomorrow</h2>
                <p class="font-md color-grey-500 mb-25 wow animate__animated animate__fadeIn" data-wow-delay=".4s">Young Chanakya helps students and young professionals grow through mentorship, internships, and entrepreneurship support. We provide the right opportunities to learn, build skills, and succeed.</p>
                <div class="box-button mt-30 mb-60 wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="btn btn-brand-1 hover-up" href="#">Contact Us</a><a class="btn btn-default font-sm-bold hover-up" href="#">Support Center
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
                
                <!-- <div class="box-author wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a href="#"><img src="assets/yc/imgs/page/team/author.png" alt="YC"></a>
                  <div class="author-info"><a href="#"><span class="font-md-bold color-brand-1 author-name">Bessie Cooper</span></a>
                    <div class="rating d-inline-block"><img src="assets/imgs/template/icons/star.svg" alt="YC"><img src="assets/yc/imgs/template/icons/star.svg" alt="YC"><img src="assets/imgs/template/icons/star.svg" alt="YC"><img src="assets/imgs/template/icons/star.svg" alt="YC"><img src="assets/imgs/template/icons/star.svg" alt="YC"></div>
                  </div>
                </div> -->
              </div>
              <div class="col-lg-7 d-none d-lg-block">
                <div class="box-banner-team">
                  <div class="arrow-down-banner shape-1"></div>
                  <div class="arrow-right-banner shape-2"></div>
                  <div class="banner-col-1">
                    <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img src="assets/yc/imgs/page/team/banner1.png" alt="YC"></div>
                  </div>
                  <div class="banner-col-2">
                    <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".2s"><img src="assets/yc/imgs/page/team/banner2.png" alt="YC"></div>
                    <div class="img-banner hasBorder wow animate__animated animate__zoomIn" data-wow-delay=".4s"><img src="assets/yc/imgs/page/team/banner3.png" alt="YC"></div>
                  </div>
                  <div class="banner-col-3">
                    <div class="img-banner hasBorder2 wow animate__animated animate__zoomIn" data-wow-delay=".6s"><img src="assets/yc/imgs/page/team/banner4.png" alt="YC"></div>
                    <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".8s"><img src="assets/yc/imgs/page/team/banner5.png" alt="YC" style="height: 200px"></div>
                    {{-- <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay="1s"><img src="assets/yc/imgs/page/team/banner6.png" alt="YC"></div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    {{-- <section class="section mt-50 pt-50 pb-40">
      <div class="container">
        <div class="box-cover-border">
          <div class="row align-items-center">
            <!-- Left: Image -->
            <div class="col-lg-6">
              <div class="img-reveal">
                <img class="d-block img-fluid rounded-4"
                  src="{{asset('assets/yc/imgs/page/about/kishore-yc.jpg')}}" alt="Founder Talk" style="height:600px; width:700px; background-size: cover;">
              </div>
            </div>

            <!-- Right: Text -->
            <div class="col-lg-6">
              <div class="box-info-video">
                <span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Founder
                  Talk</span>
                <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                  Building a Community of Innovators
                </h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                  Dear Visionaries,<br><br>
                  Welcome to Young Chanakya! A movement to shape the next generation of startup leaders.
                  Entrepreneurship is more than ideas; it’s about execution, resilience, and leadership. We aim to
                  cultivate modern-day Chanakyas—strategic thinkers who drive impact.<br><br>

                  If you’re ready to dream big and hustle, Young Chanakya is for you. Let’s build, innovate, and lead
                  together.
                </p>
                <p class="fw-bold mt-4 mb-0">Kishorekumar Chandrasekaran</p>
                <p class="mb-0">Founder, Young Chanakya</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <section class="section mt-30 mb-30 bg-brand-1 pt-70 pb-70 bg-explore">
      <div class="container">
       
        <div class="mt-10 mb-30">
          
          <div class="tab-content wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="tab-pane fade active show" id="tab-explore-1" role="tabpanel" aria-labelledby="tab-explore-1">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="{{asset('assets/yc/imgs/page/about/kishore-yc.jpg')}}" alt="YC" style="height:600px; width:700px; background-size: cover;"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Founder Talk</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Building a Community of Innovators</h3>
                      <p class="font-md color-grey-400">Dear Visionaries,<br><br>
                        Welcome to Young Chanakya! A movement to shape the next generation of startup leaders.
                        Entrepreneurship is more than ideas; it’s about execution, resilience, and leadership. We aim to
                        cultivate modern-day Chanakyas—strategic thinkers who drive impact.<br><br>
      
                        If you’re ready to dream big and hustle, Young Chanakya is for you. Let’s build, innovate, and lead
                        together.</p>
                      {{-- <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>


    <section class="section mt-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">The Growth of a
              True Leader</h2>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              Every great leader begins as a seed – full of potential but needing the right support to grow.
            </p>
          </div>
        </div>
        <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-4">
              <div class="swiper-wrapper">

                <!-- Seed Stage -->
                <div class="mx-3 hi">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Seed Stage">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Seed Stage</h4>
                        <p class="font-sm color-grey-500">Curiosity & Learning</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                        A leader’s journey begins with curiosity — the drive to learn, observe, and grow. With the right
                        mindset and mentors, they take root.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Sprout Stage -->
                <div class="mx-3 hi head-bg-brand-2">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Sprout Stage">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Sprout Stage</h4>
                        <p class="font-sm color-grey-500">Taking Small Steps</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                        Like a sprout pushing through tough soil, leaders face early challenges. Each failure
                        strengthens their resolve and helps them grow.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Sapling Stage -->
                <div class="mx-3 hi head-bg-2">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Sapling Stage">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Sapling Stage</h4>
                        <p class="font-sm color-grey-500">Skills & Strength</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                        As roots deepen, a leader builds wisdom and starts inspiring others. Like a sapling, they offer
                        shade while continuing to grow.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Tree Stage -->
                <div class="mx-3 hi">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Seed Stage">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Trees Stage</h4>
                        <p class="font-sm color-grey-500">Become a Leader</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                        A leader’s journey begins with curiosity — the drive to learn, observe, and grow. With the right
                        mindset and mentors, they take root.
                      </p>
                    </div>
                  </div>
                </div>

              </div> <!-- swiper-wrapper -->
            </div> <!-- swiper-container -->
          </div> <!-- box-swiper -->
        </div> <!-- mt-50 -->
      </div> <!-- container -->
    </section>

    <!-- next -->
    <!-- <section class="section pt-100 pb-100 bg-2">
      <div class="container">
        <div class="box-story box-story-1">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video">
                <div class="img-reveal"><img class="bd-rd8 d-block"
                    src="{{asset('assets/yc/imgs/page/about/img3.png')}}" alt="YC"></div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn"
                  data-wow-delay=".0s">Our Vision</span>
                <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  Bridging Learning and Entrepreneurship<br class="d-none d-lg-block">interesting story</h3>
                <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  Our vision is to shape a world driven by innovation and entrepreneurial spirit.
                  We are committed to bridging academic learning with real-world business experience,
                  empowering students to lead and thrive in the dynamic startup landscape.
                </p>
                <ul class="list-dots mt-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  <li>A world driven by innovation and entrepreneurial spirit.</li>
                  <li>Bridging academic learning with real-world business experience.</li>
                  <li>Empowering students to lead in the dynamic startup landscape.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="box-story box-story-2">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video mt-30 mb-30">
                <span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Our Mission</span>
                <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  Leadership Program for Future Leaders
                </h3>
                <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  Our mission is to build future-ready leaders through a six-month program that develops business,
                  innovation, and strategic thinking.
                  We blend rigorous coursework with mentorship and real-world industry engagement, shaping leaders
                  equipped with creative problem-solving
                  and visionary thinking for long-term success.
                </p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video">
                <div class="img-reveal">
                  <img class="bd-rd8 d-block" src="{{asset('assets/yc/imgs/page/about/img4.png')}}" alt="YC">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
      <section class="section mt-50">
        <div class="container">
          <div class="mt-30 mb-60">
            <ul class="list-buttons">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click active" href="#" data-type="vision">Vision</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click" href="#" data-type="mision">Mission</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-55">
              <div class="col-lg-12 mb-60 item-article vision wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <section class="section pb-90">
                  <div class="container">
                    <div class="bg-brand-1 box-cover-video">
                      <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                          <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="YC"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                          <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Vision</span>
                            <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Our Vision</h3>
                           <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">To redefine business education by creating leaders who drive innovation, inspire change, and build sustainable solutions for a better tomorrow.
</p> 
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-12 mb-50 item-article mision wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <section class="section mision pb-30">
                  <div class="container">
                    <div class="bg-brand-1 box-cover-video box-cover-video-revert">
                      <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                          <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeIn accordion-item" data-wow-delay=".0s">Mission</span>
                            <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeIn accordion-item" data-wow-delay=".1s">Our Mission</h3>
                            <p class="font-md color-white wow animate__animated animate__fadeIn accordion-item" data-wow-delay=".2s">To provide a comprehensive, real-world business education that empowers students through mentorship, networking, and exposure to the latest industry trends, fostering entrepreneurs and business leaders who are ready to lead and innovate in an ever-changing world.</p>
                           
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6"><img class="d-block" src="assets/yc/imgs/page/homepage4/img-video.png" alt="YC"></div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>



    <section class="section ctnr mt-30 pt-50 pb-50" >
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-12 text-center">
            <p class="font-lg wow animate__animated animate__fadeInUp mb-3 " data-wow-delay=".2s">Who We Empower</p>
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Empowering the
              NextGen of Startup Leaders</h2>

          </div>
          <section class="section mt-20 pt-30 ctnr pb-15 bg-grey-80">
        <div class="container ctnr">
          <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon1.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Knowledge Base</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon2.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Community Forums</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon3.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Documentation</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon1.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Knowledge Base</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon2.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Community Forums</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
              <div class="card-guide">
                <div class="card-image">
                  <img src="assets/yc/imgs/page/help/icon3.svg" alt="YC">
                </div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Documentation</h5>
                  <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          
          <!-- <div class="row mt-50">
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Startup
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Mentorship
                  </h6>
                  <p class="font-md color-grey-400 d-flex justify-content-center">Learn from experts success and failure
                  </p>
                </div>


                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Live
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Projects
                  </h6>
                  <p class="font-md text-lg-center color-grey-400 d-flex justify-content-center">Solve challenges
                    hands-on work.</p>
                </div>

                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>

              </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Business
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Workshops
                  </h6>
                  <p class="font-md text-lg-center color-grey-400 d-flex justify-content-center">Gain insights and
                    strategies .</p>
                </div>


                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Leadership
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Training
                  </h6>
                  <p class="font-md text-lg-center color-grey-400 d-flex justify-content-center">Strengthen decision
                    making </p>
                </div>


                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Investor
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Access
                  </h6>
                  <p class="font-md text-lg-center color-grey-400 d-flex justify-content-center">Connect with VCs angel
                    investors.</p>
                </div>


                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC">
                  </div>


                </div>
                <div class="info-plan">
                  <h6 class="color-brand-1 d-flex justify-content-center ">Industry
                  </h6>
                  <h6 class="color-brand-1 d-flex justify-content-center mb-20">Networking
                  </h6>
                  <p class="font-md text-lg-center color-grey-400 d-flex justify-content-center">Meet mentors & business
                    persons.</p>
                </div>


                <div class="mt-20"><a class="btn hover-up" href="#">
                  </a></div>
              </div>
            </div>
          </div> -->
        </div>
    </section>


    <section class="section mt-90">
      <div class="container">
        <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn text-center" data-wow-delay=".0s">Board members</h6>
        <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeIn text-center" data-wow-delay=".2s">Together we are
          strong</h2>
          <div class="mt-80 mb-50 wow animate__animated animate__fadeIn">
            <div class="container">
              <div class="row">
                <div class="col-1-5 mb-4">
                  <div class="card-member-2">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage8/member.png" alt="YC"></div>
                    <div class="card-info bg-1">
                      <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                      <div class="d-flex align-items-center">
                        <p class="font-xs color-grey-200">Graphic Designer</p>
                        <div class="list-socials mt-0">
                          <a class="icon-socials icon-facebook" href="#"></a>
                          <a class="icon-socials icon-twitter" href="#"></a>
                          <a class="icon-socials icon-instagram" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-1-5 mb-4">
                  <div class="card-member-2">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage8/member.png" alt="YC"></div>
                    <div class="card-info bg-1">
                      <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                      <div class="d-flex align-items-center">
                        <p class="font-xs color-grey-200">Graphic Designer</p>
                        <div class="list-socials mt-0">
                          <a class="icon-socials icon-facebook" href="#"></a>
                          <a class="icon-socials icon-twitter" href="#"></a>
                          <a class="icon-socials icon-instagram" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-1-5 mb-4">
                  <div class="card-member-2">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage8/member.png" alt="YC"></div>
                    <div class="card-info bg-1">
                      <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                      <div class="d-flex align-items-center">
                        <p class="font-xs color-grey-200">Graphic Designer</p>
                        <div class="list-socials mt-0">
                          <a class="icon-socials icon-facebook" href="#"></a>
                          <a class="icon-socials icon-twitter" href="#"></a>
                          <a class="icon-socials icon-instagram" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-1-5 mb-4">
                  <div class="card-member-2">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage8/member.png" alt="YC"></div>
                    <div class="card-info bg-1">
                      <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                      <div class="d-flex align-items-center">
                        <p class="font-xs color-grey-200">Graphic Designer</p>
                        <div class="list-socials mt-0">
                          <a class="icon-socials icon-facebook" href="#"></a>
                          <a class="icon-socials icon-twitter" href="#"></a>
                          <a class="icon-socials icon-instagram" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-1-5 mb-4">
                  <div class="card-member-2">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage8/member.png" alt="YC"></div>
                    <div class="card-info bg-1">
                      <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                      <div class="d-flex align-items-center">
                        <p class="font-xs color-grey-200">Graphic Designer</p>
                        <div class="list-socials mt-0">
                          <a class="icon-socials icon-facebook" href="#"></a>
                          <a class="icon-socials icon-twitter" href="#"></a>
                          <a class="icon-socials icon-instagram" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

                <!-- Repeat this col-1-5 block for each card -->
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="section mt-50 mb-50">
      <div class="container">
        <div class="box-radius-border box-radius-border-help">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/about/Elite circle.jpg')}}"
                alt="YC" style="width:800px; height:350px;"></div>
            <div class="col-xl-6 col-lg-6">
              <div class="box-info-answer"><span class="btn btn-tag">More help</span>
                <h2 class="color-brand-1 mt-10 mb-15">Join the Elite Circle</h2>
                <p class="color-grey-500 font-md">Connect with leaders, entrepreneurs and innovators.</p>
                <p class="color-grey-500 font-md">Create opportunities, drive growth, and shape the future.</p>
                <div class="box-button mt-30"> <a class="btn btn-brand-1 hover-up" href="#">Become a Member</a><a
                    class="btn btn-default font-sm-bold hover-up" href="#">
                    Become a Sponsor
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('layouts.footer')
  @include('layouts.script')
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button-click");
    const articles = document.querySelectorAll(".item-article");

    // Show only the first (Vision) on load
    articles.forEach(article => article.classList.remove("active"));
    document.querySelector(".item-article.vision").classList.add("active");

    buttons.forEach(button => {
      button.addEventListener("click", function (e) {
        e.preventDefault();

        // Remove 'active' from all buttons
        buttons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        // Show corresponding article
        const type = this.getAttribute("data-type");
        articles.forEach(article => {
          if (article.classList.contains(type)) {
            article.classList.add("active");
          } else {
            article.classList.remove("active");
          }
        });
      });
    });
  });
</script>

</body>

</html>
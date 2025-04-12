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
</head>

<body>
  @include('layouts.preload')
  @include('layouts.header')
  <main class="main">
    <section class="section banner-service bg-grey-60 pb-30 position-relative">
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
              <img class="w-100 d-block" src="{{asset('assets/yc/imgs/page/blog/banner.png')}}" alt="iori">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50 pt-50 pb-40">
      <div class="container">
        <div class="box-cover-border">
          <div class="row align-items-center">
            <!-- Left: Image -->
            <div class="col-lg-6">
              <div class="img-reveal">
                <img class="d-block img-fluid rounded-4"
                  src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="Founder Talk">
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
    </section>



    <section class="section mt-100">
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
    <section class="section pt-100 pb-100 bg-2">
      <div class="container">
        <div class="box-story box-story-1">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video">
                <div class="img-reveal"><img class="bd-rd8 d-block"
                    src="{{asset('assets/yc/imgs/page/about/img3.png')}}" alt="iori"></div>
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
                  <img class="bd-rd8 d-block" src="{{asset('assets/yc/imgs/page/about/img4.png')}}" alt="iori">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="section mt-50 bg-grey-80 bg-plan pt-110 pb-110">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp mb-3" data-wow-delay=".2s">What We
              Offer</p>
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Empowering the
              NextGen of Startup Leaders</h2>

          </div>

          <div class="row mt-50">
            <div class="col-xl-2 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan hover-up">
                <div class="card-image-plan d-flex justify-content-center mb-20">
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="iori">
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
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="iori">
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
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="iori">
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
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="iori">
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
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="iori">
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
                  <div class="icon-plan "><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="iori">
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
          </div>
        </div>
    </section>
    <section class="section mt-90">
      <div class="container">
        <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Board members</h6>
        <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Together we are
          strong</h2>
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member1.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Darrell Steward</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member2.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Guy Hawkins</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member3.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Darlene Robertson</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member4.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Ronald Richards</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member5.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Kathryn Murphy</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member6.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Cameron Williamson</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member7.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Floyd Miles</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member8.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Devon Lane</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member9.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Albert Flores</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member10.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Jenny Wilson</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member11.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Arlene McCoy</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
              <div class="card-top">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/team/member12.png')}}" alt="iori"></div>
                <div class="card-info"><span class="font-lg-bold color-brand-1">Theresa Webb</span>
                  <p class="font-xs color-grey-200">Product Designer</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a
                      class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                      href="#"></a></div>
                </div>
              </div>
              <div class="card-bottom">
                <p class="font-xs color-grey-500">Joined since 2012, when we were just established. He is a great
                  companion.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50 mb-30">
      <div class="container">
        <div class="box-radius-border box-radius-border-help">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/help/answer.png')}}"
                alt="iori"></div>
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
</body>

</html>
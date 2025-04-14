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
  <title>Program</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <!-- Hero Banner -->
    <section class="section banner-10">
      <div class="box-banner-home10">
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
              <h1 class="color-brand-1 mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">We Are<br
                  class="d-none d-lg-block">Leading Digital<br class="d-none d-lg-block">University</h1>
              <p class="font-md color-grey-500 mb-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                Enable highly motivating non-cash micropayments and offer<br class="d-none d-lg-block">in-demand prepaid
                solutions – with a single connection.</p>
              <div class="box-button mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a
                  class="btn btn-brand-1 hover-up" href="#">Download App</a>
                  {{-- <a
                  class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg></a> --}}
                </div>
              {{-- <div class="box-count-number">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-start mb-20">
                    <h3 class="color-brand-1"><span class="count">469</span><span>k</span></h3>
                    <p class="font-lg color-brand-1">Social followers</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-start mb-20">
                    <h3 class="color-brand-1"><span class="count">25</span><span>k+</span></h3>
                    <p class="font-lg color-brand-1">Happy Clients</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-start mb-20">
                    <h3 class="color-brand-1"><span class="count">756</span><span>+</span></h3>
                    <p class="font-lg color-brand-1">Project Done</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-start mb-20">
                    <h3 class="color-brand-1"><span class="count">100</span><span>+</span></h3>
                    <p class="font-lg color-brand-1">Global branch</p>
                  </div>
                </div>
              </div> --}}
            </div>
            <div class="col-lg-6 mb-30">
              <div class="text-center wow animate__animated animate__fadeIn"><img
                  src="{{ asset('assets/yc/imgs/page/homepage10/banner.png') }}" alt="YC"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- criteria -->
    <!-- <section class="section mt-40 pt-50 pb-15" style="background-color: #024430;">
      <div class="container">
        <div class="box-swiper">
          <div class="swiper-container swiper-group-3">
            <div class="swiper-wrapper">
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon1.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Knowledge Base</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    <div class="mt-10"><a class="btn btn-default font-sm-bold pl-0" href="#">Get Started
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                  </div>
                </div>
              </div>
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon2.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Community Forums</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    <div class="mt-10"><a class="btn btn-default font-sm-bold pl-0" href="#">Get Started
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                  </div>
                </div>
              </div>
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon3.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Documentation</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    <div class="mt-10"><a class="btn btn-default font-sm-bold pl-0" href="#">Get Started
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
        </div>
      </div>
    </section> -->
    <!-- life at yc -->
    <!-- <section class="section mt-50 pt-50 pb-90">
      <div class="container">
        <div class="bg-brand-1 box-cover-video">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
              <div class="img-reveal"><img class="d-block"
                  src="{{ asset('assets/yc/imgs/page/homepage1/img-video.png') }}" alt="YC"></div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp"
                  data-wow-delay=".0s">Business</span>
                <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                  Integrate with over 1,000 project management apps</h3>
                <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Excepteur
                  sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis
                  lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box"
                  thinking.</p>
                <div class="box-button-video wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a
                    class="btn btn-play font-sm-bold popup-youtube hover-up"
                    href="https://www.youtube.com/watch?v=sVPYIRF9RCQ">Play Video</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- What they will learn -->
    <section class="section banner-5">
      <div class="container">
        <div class="mt-65 mb-50">
          <div class="row align-items-end">
            <div class="col-lg-6 mb-20"><span class="title-line color-brand-2 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Great sales platform</span>
              <h2 class="color-brand-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">#1
                What makes YC learning unique</h2>
            </div>
            <div class="col-lg-6 mb-20">
              <p class="font-md color-grey-50 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">We're
                lively, not corporate. We have the energy and boldness of a startup and the expertise and pragmatism of
                a scale-up. All in one place.</p>
            </div>
          </div>
          <div class="box-video-banner">
            <div class="image-banner-5 wow animate__animated animate__fadeIn"><img
                src="{{ asset('assets/yc/imgs/page/homepage5/banner.png') }}" alt="YC"></div>
          </div>
        </div>
      </div>
    </section>
    <!--What we offer-->
    <section class="section">
      <div class="container">
        {{-- <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">What We Offer
            </h2>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".02s">What makes
              us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy, design &
              technology.</p>
          </div>
          <div class="col-lg-4 col-md-4 text-md-end text-start"><a
              class="btn btn-default font-sm-bold pl-0 wow animate__animated animate__fadeInUp"
              data-wow-delay=".04s">Learn More
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg></a></div>
        </div> --}}
        <div class="row mt-50">
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Cross-Platform</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross2.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Business strategy</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Local Marketing</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross4.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Social Media</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross5.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Brand Identity</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage1/cross6.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Digital Marketing</h4>
                <p class="font-md color-grey-500 mb-15">Discover powerful features to boost your productivit. You are
                  always welcome to visit our little den. Professional in teir craft! All products were super amazing
                  with strong attension to details, comps and overall vibe.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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

    <section class="section mt-50">
      <div class="container">
        <div class="row text-center align-items-end">
          <div class="col-lg-12 col-md-12">
            <h2 class="color-brand-1 mb-20">Explore Our Programs</h2>
            <p class="font-lg color-gray-500">Get industry-ready with our specialized academic offerings. Find your path below.</p>
          </div>
          
        </div>

        <div class="row mt-50">
          <!-- UG Program Card -->
          <div class="col-lg-6 col-md-6 mb-4">
          <div class="mx-3 hi">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{ asset('assets/yc/imgs/page/homepage1/quote.svg') }}" alt="Seed Stage">
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
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
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
          </div>

          <!-- PG Program Card -->
          <div class="col-lg-6 col-md-6 mb-4">
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
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
          <div class="mx-3 hi head-bg-5">
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
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Application Progress -->
    <section class="section mt-20">
      <div class="container">
        <div class="row mt-50 align-items-center card-no-border">
          <div class="col-lg-6 mb-30">
            <div class="title-line mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Application Process</div>
            <h2 class="color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">We facilitate the
              creation of strategy and design</h2>
              
          </div>
          <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10"><a class="color-brand-1"
                    href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Employee
                    Assessments</a></h4>
                <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner
                  pages using our ready demos.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="mb-20">


            </div>
          </div>
          <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10"><a class="color-brand-1"
                    href="Share updates instantly within our project management software, and get the entire team collaborating">Collaborative
                    to the core.</a></h4>
                <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner
                  pages using our ready demos.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div>


            </div>
          </div>
          <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10"><a class="color-brand-1"
                    href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Unlimited
                    ways to work</a></h4>
                <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner
                  pages using our ready demos.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
    <!-- fees Structure -->
    <section class="section mt-100 mb-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">4 Year Fee Structure
              </h2>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Program Fee
              </p>
          </div>
        </div>
        <div class="table-box-help mt-50">
          <div class="table-responsive">
            <table class="table table-forum">
              <thead>
                <tr>
                  <th class="width-50 font-lg-bold">
                  Year</th>
                  <th class="width-16 font-lg-bold">Base Fees</th>
                  <th class="width-16 font-lg-bold">Additional Costs</th>
                  <th class="width-18 font-lg-bold">Notes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Year 1
                  </td>
                  <td>	₹17,00,000</td>
                  <td>₹6,00,000</td>
                  <td>
                    <div class="box-author"><span></span>
                      <div class="author-info"><span class="font-sm color-brand-1 author-name">Additional costs mentioned here are travel & stay costs - to be borne by students</span></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    Year 2
                  </td>
                  <td>₹12,00,000</td>
                  <td>-</td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Year 3
                  </td>
                  <td>₹12,00,000</td>
                  <td>-</td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                  Year 4
                  </td>
                  <td>₹7,00,000</td>
                  <td>-</td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="item-forum">

                      <div class="item-info">
                       
                        <p class="font-md color-grey-500">Total</p>
                      </div>
                    </div>
                  </td>
                  <td>₹48,00,000</td>
                  <td>₹6,00,000</td>
                  <td>
                    <div class="box-author">
                      <div class="author-info"><span class="font-lg color-brand-1 author-name">Includes GST</span></div>
                    </div>
                  </td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- Key dates and deadlines -->
  <!-- <section class="section mt-100 mb-100"> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
          Application Timeline and Process
        </h2>
        <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
          Join The Program
        </p>
      </div>
    </div>
    <div class="table-box-help mt-50">
      <div class="table-responsive">
        <table class="table table-forum">
          <thead>
            <tr>
              <th class="font-lg-bold">Rounds</th>
              <th class="font-lg-bold">Dates</th>
              <th class="font-lg-bold">Online Scholarship Test</th>
              <th class="font-lg-bold">Interviews</th>
              <th class="font-lg-bold">Application Fees</th>
              <th class="font-lg-bold">Status</th>
              <th class="font-lg-bold">Commencement</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Round 1</td>
              <td>Oct '24 – Nov '24</td>
              <td>Nov/Dec '24</td>
              <td>Dec '24</td>
              <td>INR 2,500/-</td>
              <td><span class="badge bg-danger">CLOSED</span></td>
              <td>Aug '25</td>
            </tr>
            <tr>
              <td>Round 2</td>
              <td>Dec '24 – 28th Feb '25</td>
              <td>Mar/Apr/May '25</td>
              <td>Mar/Apr/May '25</td>
              <td>INR 3,000/-</td>
              <td><span class="badge bg-danger">CLOSED</span></td>
              <td>Aug '25</td>
            </tr>
            <tr>
              <td>Round 3</td>
              <td>15th Mar '25 – 14th May '25</td>
              <td>Mar/Apr/May '25</td>
              <td>Mar/Apr/May '25</td>
              <td>INR 3,500/-</td>
              <td><span class="badge bg-success">ACTIVE</span> <a href="#" class="btn mr-20 ">Apply now</a></td>
              <td>Aug '25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section> -->

    <!--Form-->
    <section class="section banner-4">
      <div class="container"><a class="scrollbar shape-1" href="#"></a>
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Chanakya Connect</span>
              <h3 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Ready to Begin Your Journey?</h3>
              
            </div>
            <div class="col-lg-5 text-start position-relative wow animate__animated animate__fadeIn"><span
                class="arrow-down-banner shape-1"></span><span class="arrow-right-banner shape-2"></span>
              <div class="box-signup">
                <h4 class="color-brand-1 mb-30">Sign up for free</h4>
                <div class="form-group mb-25">
                  <label class="font-sm color-grey-900 mb-10">Your email *</label>
                  <input class="form-control" type="text" placeholder="stevenjob@gmail.com">
                </div>
                <div class="form-group mb-25">
                  <label class="font-sm color-grey-900 mb-10">Your password</label>
                  <input class="form-control" type="password" placeholder="********">
                </div>
                <div class="form-group mb-25">
                  <label>
                    <input class="form-cb" type="checkbox">Remeber me
                  </label>
                </div>
                <div class="form-group mb-15">
                  <button class="btn btn-brand-1-full" type="submit">Sign In</button>
                </div>
                <div class="form-group mb-25"><a class="btn btn-border btn-full signin-google" href="#"><img
                      src="{{ asset('assets/yc/imgs/page/homepage4/google.png') }}" alt="YC">Sign in with Google</a>
                </div>
                <div class="text-already text-center"><span class="font-xs color-grey-400">Already have an
                    account?</span><a class="color-brand-1 font-xs" href="#">Sign in</a><span
                    class="font-xs color-grey-400">.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA for membership -->
    <section class="section mt-90 mb-90  0">
      <div class="container">
        <div class="box-radius-border box-radius-border-help">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
              <img class="d-block" src="{{asset('assets/yc/imgs/page/help/answer.png')}}" alt="Membership">
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="box-info-answer">
                <span class="btn btn-tag">Become a Member</span>
                <h2 class="color-brand-1 mt-10 mb-15">Ready to Elevate Your Journey?</h2>
                <p class="color-grey-500 font-md">Unlock exclusive learning access, community benefits, and insider
                  events by joining our membership program today.</p>
                <div class="box-button mt-30">
                  <a class="btn btn-brand-1 hover-up" href="#">Join Now</a>
                  <a class="btn btn-default font-sm-bold hover-up" href="#">
                    View Plans
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </a>
                </div>
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
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

     <section class="section mt-50 mb-50 bg-brand-1 pt-100 pb-100 bg-explore">
      <div class="container">
        <div class="text-center"><span
            class="font-xl-bold color-white text-uppercase wow animate__animated animate__fadeInUp"
            data-wow-delay=".0s">Explore Our Programs</span>
          <h2 class="color-brand-2 mb-60 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Get industry-ready with our specialized academic offerings. Find your path below.</h2>
        </div>
        <div class="mt-30 mb-60">
          <ul class="list-buttons list-buttons-circle nav nav-tabs" role="tablist">
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active"
                href="#tab-explore-1" data-bs-toggle="tab" role="tab" aria-controls="tab-explore-1"
                aria-selected="true">Idea to Market</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a href="#tab-explore-2"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-2" aria-selected="true">Business in Marketing Psychology</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a href="#tab-explore-3"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-3" aria-selected="true">Family Business & Legacy Management</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><a href="#tab-explore-4"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-4" aria-selected="true">Technology in Marketing</a>
            </li>
            
          </ul>
          <div class="tab-content wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="tab-pane fade active show" id="tab-explore-1" role="tabpanel" aria-labelledby="tab-explore-1">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="{{ asset('assets/yc/imgs/page/homepage10/img-tab.png') }}"
                      alt="YC"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">UG Program</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Idea to Market</h3>
                      <p class="font-md color-grey-400">This course equips aspiring entrepreneurs with the tools to transform ideas into real-world ventures by teaching market research, product design, and launch strategies. Participants will develop business models, validate customer needs, and pitch to investors under expert guidance.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Market Research
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Business Model
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Product Strategy
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Customer Validation
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Investor Pitching
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Startup Launch
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-2" role="tabpanel" aria-labelledby="tab-explore-2">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/blog2/img1.png" alt="YC">
                  </div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">UG Program</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Business in Marketing Psychology</h3><p class="font-md color-grey-400" >Dive into the psychology behind marketing to understand how emotions, perception, and decision-making influence consumer behavior. Learn to craft persuasive campaigns that connect deeply and convert effectively using scientifically proven strategies
                        .</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Consumer Behavior
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Emotional Branding
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Decision Triggers
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Value Perception
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Message Framing
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Persuasive Design
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-3" role="tabpanel" aria-labelledby="tab-explore-3">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/homepage10/img-tab.png"
                      alt="YC"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">PG Program</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Family Business & Legacy Management</h3>
                      <p class="font-md color-grey-400">Designed for next-gen leaders, this course addresses succession, governance, and innovation in family-run enterprises. It focuses on preserving legacy while adapting to modern challenges and nurturing long-term vision and sustainability.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Succession Planning
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Family Governance
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Conflict Management
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Strategic Renewal
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Legacy Building
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Vision Alignment
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-4" role="tabpanel" aria-labelledby="tab-explore-4">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/blog2/img1.png" alt="YC">
                  </div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">PG Program</span>
                      <h3 class="color-brand-1 mt-10 mb-15"> Technology in Marketing</h3>
                      <p class="font-md color-grey-400">Master the integration of modern technologies in marketing through data-driven tools, automation, and personalization. Learn to craft intelligent strategies that enhance brand reach and customer engagement in the digital era.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Digital Analytics
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>AI Marketing
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>CRM Strategy
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Content Automation
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>SEO Optimization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Tech Integration
                          </li>
                        </ul>
                      </div>
                    </div>
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
    <div class="row align-items-center card-no-border">
      <!-- Left Part -->
      <div class="col-lg-6 mb-30">
        <div class="title-line mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          Application Process
        </div>
        <h2 class="color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          We facilitate the creation of strategy and design
        </h2>
        <div class="mt-50">
          <img class="bd-rd16" style="height:350px; width:600px"src="{{ asset('assets/yc/imgs/page/homepage10/img-tab.png') }}" alt="YC">
        </div>
      </div>
      <!-- Right Part -->
      <div class="col-lg-6 mt-20">
        <div class="row ">
          <!-- First Card -->
          <div class="col-md-12 col-lg-12 mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-offer card-we-do hover-up mb-10">
              <div class="card-image">
                <img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10">
                  <a class="color-brand-1" href="#">Employee Assessments</a>
                </h4>
                <p class="font-md color-grey-500 mb-5">
                  Your site is not complete with only landings. Get essential inner pages using our ready demos.
                </p>
                <div class="box-button-offer">
                  <a class="btn btn-default font-sm-bold pl-0 color-brand-1">
                    Learn More
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
          <!-- Second Card -->
          <div class="col-md-12 col-lg-12 mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-we-do hover-up mb-10">
              <div class="card-image">
                <img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10">
                  <a class="color-brand-1" href="#">Collaborative to the core</a>
                </h4>
                <p class="font-md color-grey-500 mb-5">
                  Your site is not complete with only landings. Get essential inner pages using our ready demos.
                </p>
                <div class="box-button-offer">
                  <a class="btn btn-default font-sm-bold pl-0 color-brand-1">
                    Learn More
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
          <!-- Third Card -->
          <div class="col-md-12 col-lg-12 mb-1  0 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-offer card-we-do hover-up mb-10">
              <div class="card-image">
                <img src="{{ asset('assets/yc/imgs/page/homepage2/we-do3.png') }}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-10">
                  <a class="color-brand-1" href="#">Unlimited ways to work</a>
                </h4>
                <p class="font-md color-grey-500 mb-5">
                  Your site is not complete with only landings. Get essential inner pages using our ready demos.
                </p>
                <div class="box-button-offer">
                  <a class="btn btn-default font-sm-bold pl-0 color-brand-1">
                    Learn More
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
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-6"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Chanakya Connect</span>
              <h3 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Ready to Begin Your Journey?</h3>
              
            </div>
            <div class="col-lg-6 text-start position-relative wow animate__animated animate__fadeIn">
            <form class="box-form-contact bg-white wow animate__animated animate__fadeIn" action="{{ route('Course') }}" method="POST" data-wow-delay=".6s">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-user"  name="name" type="text" placeholder="Your name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-email" name="email" type="text" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-phone"  name="phone" type="text" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-company" name="college"  type="text" placeholder="College / University">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                      <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn URL">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                    
                    <select class="form-control select pb-10" name="course" id="somethingSelect">
                    <option value="" disabled selected>Course Name</option>
                      <option value="Title Sponsor">Idea to Market Program</option>
                      <option value="Business in Marketing Psychology">Business in Marketing Psychology</option>
                      <option value="Family Business & Legacy Management">Family Business & Legacy Management</option>
                      <option value="Technology in Marketing">Technology in Marketing</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-9">
                    <div class="form-group">
                      <button class="btn btn-brand-1-full font-sm" type="submit">Submit
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
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
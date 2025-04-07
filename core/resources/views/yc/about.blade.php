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
      <section class="section pt-90 banner-about">
        <div class="container text-center">
          <h6 class="color-grey-400 mb-15">Who we are</h6>
          <h2 class="color-brand-1 mb-15">We are a digital agency that tackles<br class="d-none d-lg-block">all your online challenges.</h2>
          <p class="font-md color-grey-400 mb-30">Social media networks are open to all. Social media is typically used for social interation and<br class="d-none d-lg-block">access to news and information, and decison making.</p>
          <div class="box-radius-border mt-50">
            <div class="box-list-numbers">
              <div class="item-list-number">
                <div class="box-image-bg"><img src="{{asset('assets/yc/imgs/page/homepage3/dispersal.png')}}" alt="iori"></div>
                <h2 class="color-brand-1"><span class="count">469</span><span>K+</span></h2>
                <p class="color-brand-1 font-lg">Social followers</p>
              </div>
              <div class="item-list-number">
                <div class="box-image-bg"><img src="{{asset('assets/yc/imgs/page/homepage3/certification.png')}}" alt="iori"></div>
                <h2 class="color-brand-1"><span class="count">25</span><span>k+</span></h2>
                <p class="color-brand-1 font-lg">Happy Clients</p>
              </div>
              <div class="item-list-number">
                <div class="box-image-bg"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="iori"></div>
                <h2 class="color-brand-1"><span class="count">756</span><span>+</span></h2>
                <p class="color-brand-1 font-lg">Project Done</p>
              </div>
              <div class="item-list-number">
                <div class="box-image-bg"><img src="{{asset('assets/yc/imgs/page/homepage3/research.png')}}" alt="iori"></div>
                <h2 class="color-brand-1"><span class="count">100</span><span>+</span></h2>
                <p class="color-brand-1 font-lg">Global branch</p>
              </div>
              <div class="item-list-number">
                <div class="box-image-bg"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                <h2 class="color-brand-1"><span class="count">240</span><span>+</span></h2>
                <p class="color-brand-1 font-lg">Conference</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90 pb-50 bg-core-value">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="item-core mb-30">
                <div class="item-image"><img src="{{asset('assets/yc/imgs/page/about/img1.png')}}" alt="iori"></div>
                <div class="item-desc">
                  <p class="font-md color-grey-400 mb-15">“Whether you’re working from home, at the office or at the job site, we provide flexible tools so you can connect and collaborate on waterfall projects, agile projects and everything in between.”</p>
                  <h6 class="color-brand-1">Ralph Edwards</h6><span class="color-grey-500 font-xs">Chairman of the board</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item-core mb-30">
                <div class="item-image"><img src="{{asset('assets/yc/imgs/page/about/img2.png')}}" alt="iori"></div>
                <div class="item-desc">
                  <p class="font-md color-grey-400 mb-15">“We created a revolutionary online knowledge and competencies assessment solution. It empowers thousands of organizations worldwide to grow by allowing them to get a broader picture and draw better conclusions”</p>
                  <h6 class="color-brand-1">Ralph Edwards</h6><span class="color-grey-500 font-xs">Chairman of the board</span>
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
                    <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">What We Offer
                    </h2>
                    <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">What makes
                        us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy,
                        design & technology.</p>
                </div>
            </div>
            <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4">
                        <div class="swiper-wrapper">
                            <div class="mx-3 hi">
                                <div class="card-offer-style-3">
                                    <div class="card-head">
                                        <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross.png')}}" alt="iori">
                                        </div>
                                        <div class="carrd-title">
                                            <h4 class="color-brand-1">Cross-Platform</h4>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your
                                            productivit. You are always welcome to visit our little den. Professional in
                                            teir craft! All products were super amazing with strong attension to details,
                                            comps and overall vibe.</p>
                                        <div class="box-button-offer"><a
                                                class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 hi head-bg-brand-2">
                                <div class="card-offer-style-3">
                                    <div class="card-head">
                                        <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="iori">
                                        </div>
                                        <div class="carrd-title">
                                            <h4 class="color-brand-1">Business strategy</h4>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your
                                            productivit. You are always welcome to visit our little den. Professional in
                                            teir craft! All products were super amazing with strong attension to details,
                                            comps and overall vibe.</p>
                                        <div class="box-button-offer"><a
                                                class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 hi head-bg-2">
                                <div class="card-offer-style-3">
                                    <div class="card-head">
                                        <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/business.svg')}}"
                                                alt="iori"></div>
                                        <div class="carrd-title">
                                            <h4 class="color-brand-1">Local Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your
                                            productivit. You are always welcome to visit our little den. Professional in
                                            teir craft! All products were super amazing with strong attension to details,
                                            comps and overall vibe.</p>
                                        <div class="box-button-offer"><a
                                                class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 hi head-bg-brand-2">
                                <div class="card-offer-style-3">
                                    <div class="card-head">
                                        <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="iori">
                                        </div>
                                        <div class="carrd-title">
                                            <h4 class="color-brand-1">Business strategy</h4>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="font-sm color-grey-500 mb-15">Discover powerful features to boost your
                                            productivit. You are always welcome to visit our little den. Professional in
                                            teir craft! All products were super amazing with strong attension to details,
                                            comps and overall vibe.</p>
                                        <div class="box-button-offer"><a
                                                class="btn btn-default font-sm-bold pl-0 color-brand-1 hover-up">Learn More
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
        </div>
    </section>
      <!-- next -->
      <section class="section pt-100 pb-100 bg-2">
        <div class="container">
          <div class="box-story box-story-1">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="box-info-video">
                  <div class="img-reveal"><img class="bd-rd8 d-block" src="{{asset('assets/yc/imgs/page/about/img3.png')}}" alt="iori"></div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">OUR STORY</span>
                  <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Behind every brand is an<br class="d-none d-lg-block">interesting story</h3>
                  <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Ea nostrum temporibus ex nulla totam qui galisum quae a adipisci modi. In exercitationem culpa sed blanditiis corrupti sit doloremque maxime eos iusto molestiae ex laborum nulla in quas dignissimos 33 dolorum quis.</p>
                  <ul class="list-dots mt-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <li>Aut voluptate iste ex esse earum.</li>
                    <li>Sed placeat nostrum eum voluptas tenetu</li>
                    <li>Et reprehenderit fugit et unde voluptate</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="box-story box-story-2">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">OUR MISSION</span>
                  <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">We have a mission to help businesses grow the best with existing conditions</h3>
                  <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Ea nostrum temporibus ex nulla totam qui galisum quae a adipisci modi. In exercitationem culpa sed blanditiis corrupti sit doloremque maxime eos iusto molestiae ex laborum nulla in quas dignissimos 33 dolorum quis. Est dolor autem et voluptate autem id enim optio vel incidunt alias.</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="box-info-video">
                  <div class="img-reveal"><img class="bd-rd8 d-block" src="{{asset('assets/yc/imgs/page/about/img4.png')}}" alt="iori"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90">
        <div class="container">
          <div class="text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".s"> Everything will become One</h2>
            <p class="font-lg color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".s"><a class="font-lg-bold color-brand-1" href="#">Iori Platform</a>lets you take control of your money, balance your<br class="d-none d-lg-block">income and expenses, and understand where your money goes.</p>
          </div>
          <div class="row mt-75 align-items-center">
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-become">
                <div class="card-title text-end">
                  <h6 class="color-brand-1 mb-15"><span>Total control</span><img class="ml-15" src="{{asset('assets/yc/imgs/page/homepage8/icon1.png')}}" alt="iori"></h6>
                </div>
                <div class="card-desc">
                  <p class="text-end color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-end">
                  <h6 class="color-brand-1 mb-15"><span>Rapid experimentation</span><img class="ml-15" src="{{asset('assets/yc/imgs/page/homepage8/icon2.png')}}" alt="iori"></h6>
                </div>
                <div class="card-desc">
                  <p class="text-end color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-end">
                  <h6 class="color-brand-1 mb-15"><span>Secure transfer</span><img class="ml-15" src="{{asset('assets/yc/imgs/page/homepage8/icon3.png')}}" alt="iori"></h6>
                </div>
                <div class="card-desc">
                  <p class="text-end color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-end">
                  <h6 class="color-brand-1 mb-15"><span>Activity statistics</span><img class="ml-15" src="{{asset('assets/yc/imgs/page/homepage8/icon4.png')}}" alt="iori"></h6>
                </div>
                <div class="card-desc">
                  <p class="text-end color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 text-center wow animate__animated animate__fadeIn" data-wow-delay=".s"><img src="{{asset('assets/yc/imgs/page/homepage8/phone2.png')}}" alt="iori"></div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-become">
                <div class="card-title text-start">
                  <h6 class="color-brand-1 mb-15"><img class="mr-15" src="{{asset('assets/yc/imgs/page/homepage8/icon5.png')}}" alt="iori"><span>Track your spending</span></h6>
                </div>
                <div class="card-desc">
                  <p class="text-start color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-start">
                  <h6 class="color-brand-1 mb-15"><img class="mr-15" src="{{asset('assets/yc/imgs/page/homepage8/icon6.png')}}" alt="iori"><span>Fast Response</span></h6>
                </div>
                <div class="card-desc">
                  <p class="text-start color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-start">
                  <h6 class="color-brand-1 mb-15"><img class="mr-15" src="{{asset('assets/yc/imgs/page/homepage8/icon7.png')}}" alt="iori"><span>AI automation</span></h6>
                </div>
                <div class="card-desc">
                  <p class="text-start color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
              <div class="card-become">
                <div class="card-title text-start">
                  <h6 class="color-brand-1 mb-15"><img class="mr-15" src="assets/imgs/page/homepage8/icon8.png" alt="iori"><span>Budget that works</span></h6>
                </div>
                <div class="card-desc">
                  <p class="text-start color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-bottom mt-100"></div>
      </section>
      <section class="section mt-150">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6"><span class="title-line line-48 wow animate__animated animate__fadeInUp">Why using our app</span>
              <h3 class="color-brand-1 mb-20 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Our app is great for individuals, startups and enterprises. It have never been easier to manage your finances</h3>
              <div class="row">
                <div class="col-lg-9">
                  <p class="font-sm color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">Eos eveniet nesciunt et accusamus suscipit est magnam consequatur aut quisquam perferendis a reprehenderit quis aut voluptatem repellat est beatae reiciendis? Cum omnis corrupti cum incidunt veritatis vel libero provident aut reiciendis animi ut quod quaerat et velit animi et omnis illo. Sit quae harum eos incidunt sequi eum iste fugit ex omnis aliquam a explicabo quam.</p>
                </div>
              </div>
              <div class="mt-35">
                <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-6 col-6 mb-20">
                    <h2 class="color-brand-1"><span class="count">469</span><span>k</span></h2>
                    <p class="font-lg color-brand-1">Social followers</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-6 col-6 mb-20">
                    <h2 class="color-brand-1"><span class="count">25</span><span>k+</span></h2>
                    <p class="font-lg color-brand-1">Happy Clients</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 text-center">
              <div class="box-charts">
                <div class="box-chart-1 text-end">
                  <div class="box-number-2 bg-brand-2">
                    <h2 class="color-brand-1"><span class="count">756</span><span>+</span></h2>
                    <p class="font-lg color-brand-1 wow animate__animated animate__fadeInUp" data-wow-delay=".6s"> Project Done</p>
                  </div>
                </div>
                <div class="box-chart-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                  <div class="item-chart-inner"><img src="assets/imgs/page/homepage8/chart1.png" alt="iori"></div>
                </div>
              </div>
              <div class="box-charts">
                <div class="box-chart-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                  <div class="item-chart-inner"><img src="assets/imgs/page/homepage8/chart2.png" alt="iori"></div>
                </div>
                <div class="box-chart-2 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                  <div class="item-chart-inner"><img src="assets/imgs/page/homepage8/chart3.png" alt="iori"></div>
                </div>
              </div>
              <div class="box-charts">
                <div class="box-reviews">
                  <div class="item-chart-inner">
                    <div class="row">
                      <div class="col-lg-6 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                        <div class="card-comment">
                          <div class="card-image"><img src="assets/imgs/page/homepage8/author1.png" alt="iori"></div>
                          <div class="card-info">
                            <div class="card-title"><span class="font-md-bold color-brand-1 title-comment">Bessie Cooper</span>
                              <div class="rating"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"></div>
                            </div>
                            <p class="font-xs color-grey-500">Duis justo nulla, pulvinar at dolor dapibus, finibus cursus massa</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                        <div class="card-comment">
                          <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage8/author2.png')}}" alt="iori"></div>
                          <div class="card-info">
                            <div class="card-title"><span class="font-md-bold color-brand-1 title-comment">Albert Flores</span>
                              <div class="rating"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"><img src="{{asset('assets/yc/imgs/template/icons/star.svg')}}" alt="iori"></div>
                            </div>
                            <p class="font-xs color-grey-500">Vivamus hendrerit molestie mi, a volutpat ipsum vol</p>
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
        <div class="border-bottom mt-90"></div>
      </section>
      <section class="section mt-90">
        <div class="container">
          <div class="row align-items-start">
            <div class="col-lg-6">
              <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Our leadership team</h6>
              <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Meet the amazing team behind Iori</h2>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col-lg-3 col-md-4 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{asset('assets/imgs/page/about/team1.png')}}" alt="iori"></div>
                <div class="card-info"><a class="font-lg" href="#">Devon Lane</a>
                  <p class="font-xs color-grey-200 mb-10">CEO</p>
                  <p class="font-xs color-grey-400">Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/about/team2.png')}}" alt="iori"></div>
                <div class="card-info"><a class="font-lg" href="#">Jennie Tho</a>
                  <p class="font-xs color-grey-200 mb-10">Finance Manager</p>
                  <p class="font-xs color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus.</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/about/team3.png')}}" alt="iori"></div>
                <div class="card-info"><a class="font-lg" href="#">Symon Lesin</a>
                  <p class="font-xs color-grey-200 mb-10">Technology Manager</p>
                  <p class="font-xs color-grey-400">In a professional context it often happens that private or corporate clientsorder a publication to publish news. Excepteur sint occaecat cupidatat non proident,</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50 pt-50 pb-40">
        <div class="container">
          <div class="box-cover-border">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="iori"></div>
              </div>
              <div class="col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Get in touch</span>
                  <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Want to talk to a marketing expert?</h2>
                  <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                  <div class="box-button text-start mt-65 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-brand-1 hover-up" href="#">Contact Us</a><a class="btn btn-default font-sm-bold hover-up" href="#">Support Center
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
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
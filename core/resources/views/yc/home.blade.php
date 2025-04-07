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
  <title>Home - Youngchanakya</title>
</head>

<body>
@include('layouts.header')
@include('layouts.preload')
  <main class="main">
    <section class="section">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <h1 class="color-brand-1 mb-20 text-anim">The data layer between your business and its potential.</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                  <p class="font-md color-grey-500 mb-30">Optimize write performance with a document data model that
                    maps to your application’s access patterns. Meet a wide range of query requirements via a single
                    query API that supports everything from simple lookups to complex processing pipelines for data
                    analytics and transformations.</p>
                </div>
              </div>
              <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a
                  class="btn btn-brand-1 hover-up" href="{{route('about')}}">Learn more</a>
                  <!-- <a
                  class="btn btn-default font-sm-bold hover-up" href="#">
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg></a>-->
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
              <object data="{{asset('assets/yc/imgs/page/homepage1/hero-banner.svg')}}" type="image/svg+xml"></object>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="box-radius-bottom">
        <div class="container">
          <div class="text-center">
            <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Loved By
              Developers, Trusted By Enterprises</h3>
            <p class="font-lg color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">We helped
              these brands turn online assessments into success stories.<br class="d-none d-lg-block">Join them. Elevate
              your testing.</p>
          </div>
          <div class="mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="box-swiper">
              <div class="swiper-container swiper-group-8">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/placed.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/cuebiq.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/factual.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/placeiq.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/airmeet.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/spen.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/klippa.png')}}" alt="iori"></div>
                  <div class="swiper-slide"><img src="{{asset('assets/yc/imgs/page/homepage1/matrix.png')}}" alt="iori"></div>
                </div>
                <div class="swiper-pagination swiper-pagination-group-8"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50 overflow-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center mb-30">
            <div class="box-phones">
              <div class="box-phones-inner">
                <div class="img-phone-1 wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img
                    src="{{asset('assets/yc/imgs/page/homepage8/phone1.png')}}" alt="iori"></div>
                <div class="img-phone-2 wow animate__animated animate__zoomIn" data-wow-delay=".4s"><img
                    src="{{asset('assets/yc/imgs/page/homepage8/phone2.png')}}" alt="iori"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30">
            <div class="box-our-app"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Why Youngchanakya</span>
              <h3 class="color-brand-1 mb-20 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Our app
                is great for individuals, startups and enterprises. It have never been easier to manage your finances
              </h3>
              <p class="font-sm color-grey-500 mb-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Eos
                eveniet nesciunt et accusamus suscipit est magnam consequatur aut quisquam perferendis a reprehenderit
                quis aut voluptatem repellat est beatae reiciendis? Cum omnis corrupti cum incidunt veritatis vel libero
                provident aut reiciendis animi ut quod quaerat et velit animi et omnis illo. Sit quae harum eos incidunt
                sequi eum iste fugit ex omnis aliquam a explicabo quam.</p>
              <div class="box-item-comment wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="image-comment"><img src="{{asset('assets/yc/imgs/page/homepage8/author.png')}}" alt="iori"></div>
                <div class="info-comment">
                  <p class="font-lg-bold color-grey-500 comment-quote mb-15">Et corporis quia est iusto delectus ea
                    consequuntur sapiente in quia totam ut internos architecto. Eos deleniti dolore eos enim totam et
                    eaque nisi.</p><span class="font-md-bold color-brand-1">Albert Flores</span>
                  <p class="font-xs color-grey-500">Bank of America</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-110">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-6 mb-20">
            <h2 class="color-brand-1 mb-0 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Mindset of Community.</h2>
          </div>
          <div class="col-lg-6 mb-20">
            <p class="color-grey-500 font-md mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Discover
              powerful features to boost your productivit. You are always welcome to visit our little den. Professional
              in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.
            </p><a class="btn btn-default p-0 font-sm-bold hover-up" href="#">Contact Us
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg></a>
          </div>
        </div>
        <div class="row mt-45">
          <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-human">
              <div class="card-image mb-15"><img src="{{asset('assets/yc/imgs/page/homepage12/human1.png')}}" alt="iori"></div>
              <div class="card-info mb-30">
                <h4 class="color-brand-1 mt-15 mb-10">Cross Platform</h4>
                <p class="font-sm color-grey-500">Discover powerful features to boost your productivit. You are always
                  welcome to visit our little den.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-human">
              <div class="card-info mb-30">
                <h4 class="color-brand-1 mt-15 mb-10">Cross Platform</h4>
                <p class="font-sm color-grey-500">Discover powerful features to boost your productivit. You are always
                  welcome to visit our little den.</p>
              </div>
              <div class="card-image mb-15"><img src="{{asset('assets/yc/imgs/page/homepage12/human2.png')}}" alt="iori">
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-human">
              <div class="card-image mb-15"><img src="{{asset('assets/yc/imgs/page/homepage12/human3.png')}}" alt="iori"></div>
              <div class="card-info mb-30">
                <h4 class="color-brand-1 mt-15 mb-10">Cross Platform</h4>
                <p class="font-sm color-grey-500">Discover powerful features to boost your productivit. You are always
                  welcome to visit our little den.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pt-0 pb-50 bg-core-value bg-7 mb-40 mt-100">
      <div class="container">
        <div class="row box-list-core-value">
          <div class="col-lg-4 mb-70">
            <div class="box-core-value pl-0">
              <h1 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Why Membership
              </h1>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".2s">We break down
                barriers so teams can focus on what matters – working together to create products their customers love.
              </p>
              <div class="mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a
                  class="btn btn-white-circle font-sm-bold border-brand" href="#">JOIN OUR TEAM TODAY</a></div>
            </div>
          </div>
          <div class="col-lg-4">
            <ul class="list-core-value list-core-value-white">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Customers First</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">Our company exists to help merchants sell more. We make every
                    decision and measure every outcome based on how well it serves our customers.</p>
                </div>
              </li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Act With Integrity</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">We’re honest, transparent and committed to doing what’s best
                    for our customers and our company. We openly collaborate in pursuit of the truth. We have no
                    tolerance for politics, hidden agendas or passive-aggressive behavior.</p>
                </div>
              </li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Make a Difference Every Day</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">Our company exists to help merchants sell more. We make every
                    decision and measure every outcome based on how well it serves our customers.</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <ul class="list-core-value list-core-value-white">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Think Big</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">Being the world's leading commerce platform requires unrivaled
                    vision, innovation and execution. We never settle. We challenge our ideas of what’s possible in
                    order to better meet the needs of our customers.</p>
                </div>
              </li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Do the right thing</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">Integrity is the foundation for everything we do. We are
                    admired and respected for our commitment to honesty, trust, and transparency.</p>
                </div>
              </li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><span class="ticked"></span>
                <h5 class="color-brand-1 mb-5">Stronger united</h5>
                <div class="box-border-dashed">
                  <p class="font-md color-grey-500 mb-20">We’ve created a positive and inclusive culture that fosters
                    open, honest, and meaningful relationships.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
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
              <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Student</span>
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
              <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Volunteer</span>
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
        <div class="box-story box-story-1">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video">
                <div class="img-reveal"><img class="bd-rd8 d-block" src="{{asset('assets/yc/imgs/page/about/img3.png')}}" alt="iori"></div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="box-info-video mt-30 mb-30"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Startup</span>
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
      </div>
    </section>
    <section class="members">
      <h1></h1>
      <div class="image-slideshow">
        <div class="mover-1"></div>
        <div class="mover-2"></div>
      </div>
    </section>
    <section class="container py-5 mb-lg-2 mt-lg-3 my-xl-4 my-xxl-5">
      <div class="d-md-flex align-items-center justify-content-between pt-2 pt-sm-3 pb-3 mt-md-3 mb-3 mb-lg-4">
        <div class="d-flex align-items-center mb-4 mb-md-0">
          <h2 class="h1 mb-0">Event schedule</h2>
          <div class="text-warning flex-shrink-0 ps-sm-1 ms-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z">
              </path>
            </svg>
          </div>
        </div>
        <ul class="nav nav-tabs flex-nowrap mb-0" role="tablist">
          <li class="nav-item me-1">
            <a class="nav-link px-3 px-sm-4 active" href="#dayOne" data-bs-toggle="tab" role="tab">Day one (Nov 15)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 px-sm-4" href="#dayTwo" data-bs-toggle="tab" role="tab">Day two (Nov 16)</a>
          </li>
        </ul>
      </div>
      <div class="tab-content border-top border-bottom mb-3 mb-sm-4 mb-lg-5">

        <!-- Day 1 tab -->
        <div class="tab-pane fade show active" id="dayOne" role="tabpanel">
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Opening party &amp; registration</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit
                metus turpis enim urna nec risus vehicula pharetra diam erat ac proin donec.</p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/05.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/08.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/09.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-1 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/12.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">What are the top ideas for startup in 2023</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et euismod et tellus.
              </p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/10.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/06.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Coffee break</h3>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Workshop: leading UI/UX design trends</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce convallis.
                Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula scelerisque. </p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/19.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Group discussion: How to align and empower cross-team success</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit
                metus.</p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/08.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/06.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/09.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Day 2 tab -->
        <div class="tab-pane fade" id="dayTwo" role="tabpanel">
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Workshop: How Blockchain affects modern IT market</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce convallis.
                Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula scelerisque. </p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/19.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">The future of front-end frameworks</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit
                metus turpis enim urna nec risus vehicula pharetra diam erat ac proin donec.</p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/05.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/08.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/09.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-1 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/12.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Coffee break</h3>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">Group discussion: How good UI desig influences our perception</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit
                metus.</p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/08.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/06.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/09.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row py-3 my-2 my-md-3">
            <div class="col-md-3">
              <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
            </div>
            <div class="col-md-6">
              <h3 class="h4 mb-0">What are the top ideas for startup in 2024</h3>
              <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et euismod et tellus.
              </p>
            </div>
            <div class="col-md-3 text-md-end">
              <div class="d-inline-flex">
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/10.jpg')}}" width="48" alt="Avatar">
                </div>
                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3" style="padding: 3px;">
                  <img class="rounded-circle" src="{{asset('assets/yc/img/avatar/06.jpg')}}" width="48" alt="Avatar">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Resources</h2>
          </div>
        </div>
        <div class="mt-30 mb-60">
          <ul class="list-buttons">
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click active"
                href="#" data-type="all">All resources</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="button-click" href="#"
                data-type="featured">Podcasts</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a class="button-click" href="#"
                data-type="company">Blogs</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a class="button-click" href="#"
                data-type="product-news">Case Studies</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><a class="button-click" href="#"
                data-type="customer-stories">Videos</a></li>
          </ul>
        </div>
        <div class="box-list-blogs">
          <div class="row mt-55">
            <div class="col-lg-12 mb-60 item-article featured wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="item-1">
                <div class="box-cover-border">
                  <div class="row align-items-center">
                    <div class="col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}"
                        alt="iori"></div>
                    <div class="col-lg-6">
                      <div class="box-info-video"><span class="btn btn-tag">Featured</span><a href="#">
                          <h3 class="color-brand-1 mt-15 mb-20">7 Things To Keep In Mind When Starting A Business</h3>
                        </a>
                        <div class="mb-25 mt-10"><span class="font-xs-color-grey-500">November 17, 2022</span><span
                            class="font-xs-color-grey-500 icon-read">2 min read</span></div>
                        <p class="font-md color-grey-500">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                          qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform
                          magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                        <div class="box-button text-start mt-45"><a class="btn btn-default font-sm-bold pl-0 hover-up"
                            href="#">Read more
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
            <div class="col-lg-6 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img1.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Marketting</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">How to save money - 8 simple ways to start saving money every month</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30 item-article guides wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img2.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Technology</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Essential Steps to Building And Refining an Effective UX Portfolio</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article customer-stories wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img3.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Marketting</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">10 Content Proofreading Tips to Catch More Avoidable Goofs</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article product-news wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img4.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Tutorial</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Everything a Beginner Blogger Needs to Know for 2023</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article company wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img5.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Team work</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Bad Email Marketing and Nickelback Don’t Have Much in Common</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="box-ads-1 mb-70">
                <h3 class="color-brand-1 font-shippori title-ads mb-5">Get our free marketing books</h3>
                <p class="font-xs color-grey-500 mb-10">We synthesize all the tips and trends about online marketing in
                  valuable books</p><a class="btn btn-default font-sm-bold color-grey-900 pl-0" href="#">Register now
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img6.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Writing</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">7 Copywriting Strategies the Great Copywriters Wish You Knew</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img7.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Blogging</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">What Is the Main Action a Writer Takes When Proofreading?</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img8.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Marketting</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">The Betty Crocker Secret to an Email Marketing Strategy People Enjoy</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img9.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Business</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Email Autoresponders: Meet the Lazy Marketer’s Best Friend</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img10.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Marketting</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Stop Wondering About How to Respond to Criticism</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn"
              data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-3 hover-up">
                <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img11.png')}}"
                      alt="iori"></a>
                  <label class="lbl-border">Blogging</label>
                </div>
                <div class="card-info"><a href="blog-detail.html">
                    <h4 class="color-brand-1">Top 5 Content Marketing Mistakes You’ll Wish You Fixed Sooner</h4>
                  </a>
                  <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span
                      class="font-xs color-grey-500 icon-read">2 min read</span></div>
                  <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                    growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-20 mb-30 text-center wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a
              class="btn btn-brand-1 font-sm-bold" href="#">Load More...</a></div>
        </div>
      </div>
    </section>

    <!-- program -->
    <section class="section mt-50">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h2 class="color-brand-1 mb-20">Explore Our Programs</h2>
            <p class="font-lg color-gray-500">Get industry-ready with our specialized academic offerings.<br
                class="d-none d-lg-block">Find your path below.</p>
          </div>
          <div class="col-lg-4 col-md-4 text-md-end text-start">
            <a class="btn btn-default font-sm-bold pl-0">View All
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </a>
          </div>
        </div>

        <div class="row mt-50">
          <!-- UG Program Card -->
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card-offer hover-up p-4 h-100" style="min-height: 360px;">
              <div class="card-image mb-3">
                <img src="{{asset('assets/yc/imgs/page/job-detail/senior.png')}}" alt="UG Program">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Undergraduate Programme in Business Management</h4>
                <p class="font-md color-grey-500 mb-15">
                  A 3-year UG degree built to shape the next-gen business leaders. Combines modern management
                  fundamentals with practical entrepreneurship exposure, helping students turn ideas into action.
                </p>
                <div class="box-button-offer">
                  <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- PG Program Card -->
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card-offer hover-up p-4 h-100" style="min-height: 360px;">
              <div class="card-image mb-3">
                <img src="{{asset('assets/yc/imgs/page/job-detail/senior.png')}}" alt="PG Program">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Postgraduate Programme in Business Management (MBA)</h4>
                <p class="font-md color-grey-500 mb-15">
                  A 2-year MBA programme focused on innovation, leadership, and startup thinking. Designed for aspiring
                  entrepreneurs and professionals aiming for high-impact business careers.
                </p>
                <div class="box-button-offer">
                  <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <!-- nextgen impact -->
    <section class="section mt-100">
      <div class="container">
        <div class="box-radius-16 pl-0 pr-0 pb-0 overflow-hidden bg-7">
          <div class="box-container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">NextGen Impacts</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Access advanced order types including limit, market, stop limit and dollar cost averaging. Track your total asset holdings, values and equity over time. Monitor markets, manage your portfolio, and trade crypto on the go.</p>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-6 col-sm-6 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="box-image-bg-60">
                      <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage3/personal.svg')}}" alt="iori"></div>
                    </div>
                    <h6 class="color-brand-1 mb-15">Personal</h6>
                    <p class="font-sm color-grey-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada felis eget finibus placerat. Aliquam sit amet vestibulum felis, sit amet porta neque</p>
                  </div>
                  <div class="col-lg-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="box-image-bg-60">
                      <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage3/building.svg')}}" alt="iori"></div>
                    </div>
                    <h6 class="color-brand-1 mb-15">Enterprise</h6>
                    <p class="font-sm color-grey-500">Duis tincidunt dui a felis tincidunt, vehicula ornare diam auctor. Integer id libero id est efficitur mattis. Nunc suscipit consectetur diam a imperdiet. Suspendisse imperdiet</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center mt-60">
            <div class="col-lg-6">
              <div class="img-reveal"><img class="d-block w-100" src="{{asset('assets/yc/imgs/page/homepage5/img.png')}}" alt="iori"></div>
            </div>
            <div class="col-lg-6">
              <div class="box-business-inner"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Business</span>
                <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Integrate with over 1,000 project management apps</h3>
                <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                <div class="mt-20">
                  <ul class="list-ticks wow animate__animated animate__fadeIn" data-wow-delay=".0s">
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
                </div>
                <div class="mt-50 text-start wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="btn btn-brand-1 hover-up" href="#">Download App</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA for membership -->
    <section class="section mt-50 mb-30">
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
                  <a class="btn btn-brand-1 hover-up" href="{{route('membership')}}">Join Now</a>
                  <a class="btn btn-default font-sm-bold hover-up" href="{{route('membership')}}">
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
    <!-- FAQ -->
    <section class="section pt-80 mb-30">
      <div class="container">
        <div class="text-center">
          <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Frequently asked questions</h2>
          <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Feeling inquisitive? Have a read through some of our FAQs or<br class="d-none d-lg-block"> contact our supporters for help</p>
        </div>
        <div class="row mt-50 mb-50">
          <div class="col-xl-2 col-lg-2"></div>
          <div class="col-xl-8 col-lg-8 position-relative">
            <div class="box-author-1"><img src="{{asset('assets/yc/imgs/page/homepage6/author.png')}}" alt="iori"></div>
            <div class="box-author-2"><img src="{{asset('assets/yc/imgs/page/homepage6/author2.png')}}" alt="iori"></div>
            <div class="box-author-3"><img src="{{asset('assets/yc/imgs/page/homepage6/author3.png')}}" alt="iori"></div>
            <div class="accordion" id="accordionFAQ">
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingOne">
                  <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Where is my order? Quisque molestie</button>
                </h5>
                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Vel tenetur officiis ab reiciendis dolor aut quae doloremque est ipsum natus et consequatur animi aut sunt dolores ut quasi rerum. Aut velit velit id quasi velit eum reiciendis laudantium quo galisum incidunt aut velit animi hic temporibus blanditiis sit odit iure. Eum laborum dolores ea molestias fuga qui temporibus accusantium qui soluta aliquid ab vero soluta.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingTwo">
                  <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I return an item purchased online?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum officiis id.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingThree">
                  <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I cancel or change my order?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Aut architecto consequatur sit error nemo sed dolorum suscipit 33 impedit dignissimos ut velit blanditiis qui quos magni id dolore dignissimos. Sit ipsa consectetur et sint harum et dicta consequuntur id cupiditate perferendis qui quisquam enim. Vel autem illo id error excepturi est dolorum voluptas qui maxime consequatur et culpa quibusdam in iusto vero sit amet Quis.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingFour">
                  <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">I have promotional or discount code?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Eos nostrum aperiam ab enim quas sit voluptate fuga. Ea aperiam voluptas a accusantium similique 33 alias sapiente non vitae repellat et dolorum omnis eos beatae praesentium id sunt corporis. Aut nisi blanditiis aut corrupti quae et accusantium doloribus sed tempore libero a dolorum beatae.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingFive">
                  <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What are the delivery types you use?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Et beatae quae ex minima porro aut nihil quia sed optio dignissimos et voluptates deleniti et nesciunt veritatis et suscipit quod. Est sint voluptate id unde nesciunt non deleniti debitis. Ut dolores tempore vel placeat nemo quo enim reprehenderit eos corrupti maiores et minima quaerat. Quo sequi eaque eum similique sint et autem perspiciatis cum Quis exercitationem quo quos excepturi non ducimus ducimus eos natus velit.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingSix">
                  <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">How can I pay for my purchases?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Qui quas itaque ut molestias culpa vel culpa voluptas eos fugit sint ex veritatis totam cum unde maxime! Qui eius fugiat qui veritatis cumque a nesciunt nemo. Id numquam rerum est molestiae quia ut nisi architecto a officiis itaque eum quod repellat ut dolorem dolorem aut ipsam ipsa.</div>
                </div>
              </div>
              <div class="accordion-item wow animate__animated animate__fadeIn">
                <h5 class="accordion-header" id="headingSeven">
                  <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Can I cancel my order?</button>
                </h5>
                <div class="accordion-collapse collapse" id="collapseSeven" aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">Sed assumenda minus est omnis internos nam corrupti eius non perferendis vero. Est ratione dolor ab veniam quas ex praesentium consequatur ut vero rerum est impedit nihil vel Quis consequatur ut vero sapiente. Ut optio ipsum ad temporibus voluptates et alias numquam eos reiciendis voluptatum. Id omnis modi est vero adipisci qui omnis ipsum rem necessitatibus perspiciatis aut modi iste ab dolores sequi.</div>
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
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
  @php
  $hero = \App\HeroSection::getContent();
  @endphp
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <h1 class="color-brand-1 mb-20 text-anim">India's Premier Startup
                Leadership Business School.</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                  <p class="font-md color-grey-500 mb-30">Guide passionate undergrads through a 6-month journey of
                    hands-on learning, workshops, and mentorship.</p>
                </div>
              </div>
              <div class="d-flex justify-between gap-4">
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a
                    class="btn btn-brand-1 hover-up" href="{{route('about')}}">Become a Chanakya <svg
                      class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
                    </svg></a>

                </div>
                <div class="box-button mt-35 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn  hover-up" style=" color: #024430;" href="{{route('about')}}">
                    <b> Become a Member </b>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="#024430" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
                    </svg>
                  </a>
                </div>

              </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
              <object data="{{asset('assets/yc/imgs/page/homepage1/hero-banner.svg')}}" type="image/svg+xml"></object>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Second Section -->
    <section class="section mt-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 text-center">

            <ul class="tabs-plan change-price-plan" role="tablist">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active" href="#"
                  data-type="workshop">Upcoming Workshops</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#"
                  data-type="webinars">Upcoming Webinars</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#"
                  data-type="conclaves">Upcoming Conclaves</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-50">
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card1-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card1-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card1-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="border-bottom mt-30"></div>
      </div>
    </section>

    <section class="section mt-50">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Master Business
              Skills for
              Lasting Success</h3>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Learn
              strategies to grow a successful business in a competitive landscape..<br class="d-none d-lg-block">Gain
              expertise in operations and strategy for long-term impact.</p>
          </div>
        </div>
        <div class="row mt-55">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news1.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Strategically Plan for Long-Term Business Growth</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20">Learn to craft long-term business strategies that align with
                  market demands and competitive landscapes, ensuring your vision turns into action.</p>

              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news2.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Master Financial Insights for Smarter Decisions</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20">Develop a strong understanding of financial principles to ensure
                  profitability and sound fiscal management for informed confident decisions.</p>

              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news3.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Optimize Operations for Business Efficiency</h6>
                </a>
                <p class="font-sm color-grey-500 mt-45">Master process optimization techniques to enhance productivity
                  and reduce operational costs, helping sustainable business practices.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Build and Scale
              Your
              Startup Successfully</h3>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Enhance the
              mindset, skills, and strategies to launch and expand your startup.<br class="d-none d-lg-block">Learn how
              to adapt, secure funding, and create a scalable business model.</p>
          </div>
        </div>
        <div class="row mt-55">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news1.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Develop Agile Strategies for Startup Success</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20">Discover dynamic strategies for adapting business models to
                  evolving market conditions, so your startup stays relevant and resilient.</p>

              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news2.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Secure Investor Trust and Funding Deals</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20 mb-20">Learn to engage investors effectively, crafting compelling
                  pitches and securing funding to fuel your growth journey.</p>

              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news3.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Scale Your Startup Without Losing Focus</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20">Develop expansion strategies that maintain efficiency while
                  increasing market reach, ensuring your startup thrives without losing its core identity.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
              Lead with Confidence and
              Entrepreneurial Mindset</h3>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Sharpen
              leadership skills to navigate challenges and inspire growth.<br class="d-none d-lg-block">Develop
              decision-making agility, and storytelling for sustainability.</p>
          </div>
        </div>
        <div class="row mt-55">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news1.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Make Quick, Confident Business Decisions Daily</h6>
                </a>
                <p class="font-sm color-grey-500 mt-20">Enhance rapid decision-making skills for handling uncertainties
                  and business risks, so you can stay ahead of the curve with confidence.</p>

              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news2.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Tell Brand Stories That Inspire Audiences</h6>
                </a>
                <p class="font-sm color-grey-500 mt-45">Learn to craft authentic brand narratives that connect
                  emotionally with audiences, turning customers into loyal advocates.</p>

              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="card-blog-grid card-blog-grid-2 hover-up">
              <div class="card-image img-reveal"><a href="blog-detail.html"><img
                    src="{{ asset('assets/yc/imgs/page/homepage2/news3.png') }}" alt="YC"></a></div>
              <div class="card-info"><a href="blog-detail.html">
                  <h6 class="color-brand-1">Stay Resilient Through Failures and Challenges</h6>
                </a>
                <p class="font-sm color-grey-500 mt-45">Build mental resilience to overcome failures through
                  entrepreneurial challenges, ensuring setbacks become stepping stones to success.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- next section-->
    <section class="section mt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <b>
              <p class="color-brand-1 mb-20">Chanakya Growth Path</p>
            </b>
            <h3 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              From Ideation to Acceleration</h3>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Ideation – Sparking Innovative Ideas</h5>
                <p class="font-md text-white">Kickstart the journey by generating creative solutions through
                  brainstorming and workshops, identifying real-world problems, and forming the foundation for ventures.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Market Research – Insight Validations</h5>
                <p class="font-md text-white">With initial ideas, students conduct thorough research to assess market
                  feasibility. They analyze trends, audience needs, and competitors to validate ideas and define unique
                  value proposition.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Prototyping – Shaping Ideas to Reality</h5>
                <p class="font-md text-white">Students build tangible prototypes or MVPs, focusing on hands-on
                  development. They test, gather feedback, and refine models to ensure functional, user-centered
                  solutions.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Go-to-Market – Strategizing Launches</h5>
                <p class="font-md text-white">Strategic plans for product positioning, marketing, and distribution. This
                  ensures impactful market entry by targeting the right audience with effective tactics.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Growth – Scaling Ventures Sustainably</h5>
                <p class="font-md text-white">Shift focus to scaling operations and expanding market presence. Implement
                  adaptive strategies to enhance reach, optimize efficiency, and drive sustainable growth.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
            <div class="card-guide" style="background-color: #024430;">

              <div class="card-info ">
                <h5 class="text-white mb-15">Acceleration – Fueling Impact</h5>
                <p class="font-md text-white">Learn fundraising essentials, craft compelling pitches, and connect with
                  investors. Leverage mentorship and networks to accelerate growth and solidify venture success.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our team -->
    <section class="section mt-90">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-lg-6">
            <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Industry Experts
            </h6>
            <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Meet the
              Chanakya's</h2>
          </div>
        </div>
        <div class="row align-items-start">
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team1.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Devon Lane</a>
                <p class="font-xs color-grey-200 mb-10">CEO</p>
                <p class="font-xs color-grey-400">Sharing content online allows you to craft an online persona that
                  reflects your personal values and professional skills. Even if you only use social media occasionally
                </p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team2.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Jennie Tho</a>
                <p class="font-xs color-grey-200 mb-10">Finance Manager</p>
                <p class="font-xs color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia deserunt mollit laborum — semper quis lectus.</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team3.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Symon Lesin</a>
                <p class="font-xs color-grey-200 mb-10">Technology Manager</p>
                <p class="font-xs color-grey-400">In a professional context it often happens that private or corporate
                  clientsorder a publication to publish news. Excepteur sint occaecat cupidatat non proident,</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team1.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Virginia Aguilar</a>
                <p class="font-xs color-grey-200 mb-10">Director of People</p>
                <p class="font-xs color-grey-400">In a professional context it often happens that private or corporate
                  clientsorder a publication to publish news. Excepteur sint occaecat cupidatat non proident,</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team1.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Devon Lane</a>
                <p class="font-xs color-grey-200 mb-10">CEO</p>
                <p class="font-xs color-grey-400">Sharing content online allows you to craft an online persona that
                  reflects your personal values and professional skills. Even if you only use social media occasionally
                </p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team2.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Jennie Tho</a>
                <p class="font-xs color-grey-200 mb-10">Finance Manager</p>
                <p class="font-xs color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia deserunt mollit laborum — semper quis lectus.</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team3.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Symon Lesin</a>
                <p class="font-xs color-grey-200 mb-10">Technology Manager</p>
                <p class="font-xs color-grey-400">In a professional context it often happens that private or corporate
                  clientsorder a publication to publish news. Excepteur sint occaecat cupidatat non proident,</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-team mb-30">
              <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/about/team1.png') }}" alt="YC"></div>
              <div class="card-info"><a class="font-lg" href="#">Virginia Aguilar</a>
                <p class="font-xs color-grey-200 mb-10">Director of People</p>
                <p class="font-xs color-grey-400">In a professional context it often happens that private or corporate
                  clientsorder a publication to publish news. Excepteur sint occaecat cupidatat non proident,</p>
                <div class="list-socials"><a class="icon-socials icon-linkedin" href="#"></a><a
                    class="icon-socials icon-instagram" href="#"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-bottom mt-30"></div>
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
    <!-- nextgen Leader -->
    <section class="section mt-50">
      <div class="container">
        <div class="row mt-50 align-items-center">

          <div class="col-lg-12 text-center">
            <b>
              <p class="color-brand-1 mb-20">Vision Into a Scalable Business</p>
            </b>
            <h3 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              Empowering the NextGen of Startup Leaders</h3>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">Visionary
                    Mindset</a></h5>
                <p class="font-md color-grey-500 mb-5">Inspiring bold, innovative ideas for future ventures.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do4.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">
                    Strategic Mentoring</a></h5>
                <p class="font-md color-grey-500 mb-5">Guided with expert-driven and seasoned mentors.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do2.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">Startup
                    Simulations</a></h5>
                <p class="font-md color-grey-500 mb-5">Turning startup ignitions into successful realities.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do5.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-25"><a class="color-brand-1">Growth Blueprint for Success</a></h5>
                <p class="font-md color-grey-500 mb-15">Equipping leaders for exponential growth.

                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">Leadership Edge</a></h5>
                <p class="font-md color-grey-500 mb-5">Shaping future leaders with skills for lasting impact.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do4.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">
                    Capital Strategy</a></h5>
                <p class="font-md color-grey-500 mb-5">Preparing startups to secure vital early funding.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do2.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">Brand Elevation</a></h5>
                <p class="font-md color-grey-500 mb-5">Building strong brand identity for market positioning.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__animated animate__fadeIn">
            <div class="card-offer card-we-do hover-up">
              <div class="card-image"><img src={{ asset('assets/yc/imgs/page/homepage2/we-do5.png') }} alt="YC"></div>
              <div class="card-info">
                <h5 class="color-brand-1 mb-10"><a class="color-brand-1">
                    Global Perspectives</a></h5>
                <p class="font-md color-grey-500 mb-5">Broaden horizons for business expansion.

                </p>

              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    <!--Chanakya Guide-->
    <section class="section mt-50">
      <div class="container">
        <div class="row mt-50 align-items-center">
          <div class="col-lg-12 text-center">
            <b>
              <p class="color-brand-1 mb-20">True Stories, Meaningful Change</p>
            </b>
            <h3 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            Chanakya’s Guide From Sound to Scripted Wisdom
            </h3>
          </div>

          <!-- Card 1 -->
          <div class="col-lg-6 wow animate__animated animate__fadeIn mb-4">
            <div class="card d-flex flex-row justify-content-between align-items-start p-4"
              style="background-color: #fff2e9; border-radius: 20px; min-height: 320px; position: relative;">
              <div class="card-body pe-4 mt-30">
                <h5 class="text-uppercase font-sm color-brand-1 mt-5 mb-20">Voice of Chanakya</h5>
                <h4 class="color-brand-1 mb-3">Innovators Speak: <br> Tales of Pioneers</h4>
                <a href="#" class="btn btn-brand-1 rounded-pill">Discover More →</a>
              </div>
              <div class="card-image align-self-end" style="margin-bottom: -30px;">
                <img src="{{ asset('assets/yc/imgs/page/homepage1/popular-men-2.png') }}" alt="YC" class="img-fluid"
                  style="max-height: 300px; width: auto;">
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-6 wow animate__animated animate__fadeIn mb-4">
            <div class="card d-flex flex-row justify-content-between align-items-start p-4"
              style="background-color: #fff2e9; border-radius: 20px; min-height: 320px; position: relative;">
              <div class="card-body pe-4 mt-30">
                <h5 class="text-uppercase font-sm color-brand-1 mb-20">The Chanakya Journal</h5>
                <h4 class="color-brand-1 mb-3">Beyond Theory: <br> Real-World Lessons</h4>
                <a href="#" class="btn btn-brand-1 rounded-pill">Explore More →</a>
              </div>
              <div class="card-image align-self-end" style="margin-bottom: -30px;">
                <img src="{{ asset('assets/yc/imgs/page/homepage1/blogs.png') }}" alt="YC" class="img-fluid"
                  style="max-height: 300px; width: auto;">
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- Featured Courses -->
    <section class="section mt-100">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">

            <b>
              <h6 class="color-brand-1 mb-20">Top Class Courses</h6>
            </b>
            <h2 class="color-brand-1 mb-20">Explore Featured Courses</h2>

          </div>
          <div class="col-lg-4 col-md-4 text-md-end text-start">
            <ul class="tabs-plan change-price-plan" role="tablist">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active" href="#"
                  data-type="workshop">Industry Study </a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#"
                  data-type="webinars">Unicorn Study</a></li>

            </ul>
          </div>
        </div>
        <div class="row mt-50">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card1-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card1-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card1-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan-style-2 hover-up">
              <div class="card-plan">
                <!-- Event Image -->
                <img src="{{  asset('assets/yc/imgs/page/homepage1/event-09.jpg')}}"
                  alt="From Bootstrapping to VC Funding" class="rounded-lg w-100 mb-3">

                <!-- Event Location -->
                <p class="text-sm text-orange-500 font-medium mb-1">
                  <i class="fa fa-map-marker-alt mr-1 text-price-card-location"></i> Coimbatore
                </p>

                <!-- Event Title -->
                <h5 class="font-bold text-gray-800 mb-2 text-type-card-title">
                  From Bootstrapping to VC Funding
                </h5>

                <!-- Event Date and Button -->
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <span class="text-sm text-gray-600">
                    <i class="fa fa-calendar-alt mr-1  text-type-card-date"></i> October 16, 2027
                  </span>
                  <a href="#"
                    class="btn btn-sm border border-orange-400 text-orange-500 rounded-lg px-3 py-1 hover:bg-orange-50 font-semibold"
                    style="font-size: 0.875rem;">
                    ATTEND
                  </a>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="border-bottom mt-30"></div>
      </div>
    </section>

    <!--business leader-->
    <section class="section mt-50">
        <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">

            <b>
              <h6 class="color-brand-1 mb-20">Top Class Courses</h6>
            </b>
            <h2 class="color-brand-1 mb-20">Explore Featured Courses</h2>

          </div>
          <div class="col-lg-4 col-md-4 text-md-end text-start">
          <a href="#" class="btn btn-brand-1 rounded-pill">Explore Our Plans  →</a>
          </div>
        </div>
          <div class="row mt-50">
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    
                    <div class="info-plan">
                      
                      <p class="font-md color-grey-400 mb-10">Students</p>
                      <h4 class="color-brand-1 mb-5">Young Leaders</h4>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="mt-30 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Startup exposure
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Founder mentorship
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Entrepreneur network
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Business summits
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    
                    <div class="info-plan">
                      
                      <p class="font-md color-grey-400 mb-10">Entrepreneurs</p>
                      <h4 class="color-brand-1 mb-5">Impact Makers</h4>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="mt-30 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Startup scaling
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Mentorship from leaders
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Pitch to investors
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Business collaborations
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    
                    <div class="info-plan">
                      
                      <p class="font-md color-grey-400 mb-10">CXOs</p>
                      <h4 class="color-brand-1 mb-5">C-Suite Innovators</h4>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="mt-30 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Elite networking
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Leadership summits
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Mentorship & influence
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Investment insights
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    
                    <div class="info-plan">
                      
                      <p class="font-md color-grey-400 mb-10">Business People</p>
                      <h4 class="color-brand-1 mb-5">Strategic Thinkers</h4>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="mt-30 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Growth Strategies
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> B2B networking
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg> Expert mentorship
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Funding opportunities
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="border-bottom mt-30"></div>
        </div>
      </section>


    <!-- CTA for membership -->
    <section class="section mt-50 pt-50 pb-40">
        <div class="container">
          <div class="box-cover-border">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="img-reveal"><img class="d-block" src={{ asset('assets/yc/imgs/page/homepage2/img-marketing.png') }} alt="YC"></div>
              </div>
              <div class="col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Become a Sponsor</span>
                  <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Support Innovation-
                  Watch possibilities become realities</h2>
                  <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Join us to shape the future of startup leadership with visionary entrepreneurs and industry leaders. Together, we’ll create opportunities, drive growth, and pave the way for the next generation of businesses.</p>
                  <div class="box-button text-start mt-65 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-brand-1 hover-up" href="#">Contact With Us <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
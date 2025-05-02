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
 <link rel="icon" type="image/svg+xml" href="{{ asset('assets/yc/imgs/template/favicon.svg') }}">
  <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
  <title>Membership</title>
</head>


<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <!-- <section class="section banner-2">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <h1 class="color-brand-1 mb-20 text-anim">Power Up Your Journey
                with the Perfect
                Membership Plan</h1>


              
            </div>
            <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn"><img
                src="{{asset('assets/yc/imgs/page/homepage2/banner.png')}}" alt="YC"></div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section banner-4">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Get Started</span>
              <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Step Into a Community of Builders, Doers & Leaders</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <p class="font-md color-grey-500"> Gain access to structured growth paths, strategic networks, leadership programs, and exclusive opportunities built for emerging and established changemakers</p>
                </div>
              </div>

            </div>
            <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
              <object data="{{asset('assets/yc/imgs/page/about/hero.svg')}}" type="image/svg+xml"></object>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50 bg-plan-2 pt-50 pb-50">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-12 text-center">
    <ul class="tabs-plan change-price-plan" role="tablist">
        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <a class="active" href="#" data-type="monthly">Monthly</a>
        </li>
        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <a href="#" data-type="yearly">Yearly</a>
        </li>
    </ul>
</div>
        </div>
        <div class="row mt-50">
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">
              <!-- <label class="popular">Popular</label> -->
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC">
                </div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Student / Volunteer Membership</h5>

                </div>
              </div>
              <div class="box-day-trial box-trial-two row">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-students">₹499</span><span
                    class="font-md color-grey-500 text-type-standards">/ month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="row">
                  <p class="font-xs color-grey-400 mt-10 mb-10">For undergraduates, freshers, and community-first
                    learners who want to grow</p>
                </div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access to Leadership webinars
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Free Chanakya Learning Kit
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Certificate Courses on Startup

                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Entry to Summits & Local Chapters
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Priority Selection for Internships

                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Mentorship from Chanakya's
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Intractive Q&A session with Experts
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access Startup Success Stories
                  </li>

                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Podcasts & Real-world Insights
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> LinkedIn Badge & Certificate
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Event volunteer opportunities
                  </li>

                </ul>
              </div>
              <div class="mt-20">
    <a id="get-started-btn" class="btn btn-brand-1-full hover-up" href="#"
        data-route="{{ route('student-plan', ['plan' => 'student', 'type' => 'monthly']) }}">
        Get Started
        <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </a>
</div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-plan card-plan-2 hover-up">
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="YC">
                </div>
                <div class="info-plan">
                  <h5 class="color-brand-1"> Startup Membership</h5>
                </div>
              </div>
              <div class="box-day-trial box-trial-two row">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-enterprises">₹999
                  </span><span class="font-md color-grey-500 text-type-enterprises">/ month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="row">
                  <p class="font-xs color-grey-400 mt-10 mb-10">For entrepreneurs serious about growing their startup
                    with guidance</p>
                </div>

              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access to Startup Bootcamps
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Kickstart with Launchpad Access
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Learn Fundraising Strategies
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Build Investor-Ready Pitch Decks
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Attend Monthly Demo Days Free
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access to CXO Mentorship
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Get Legal & Financial Support
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access Product Development Help
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Pitch Your Idea to Chanakya VCs
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Expand Your Network
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Resources for Business Growth
                  </li>

                </ul>
              </div>
              <div class="mt-20">
                <a id="get-started-startup-btn" class="btn btn-brand-1-full hover-up" href="#"
                  data-route="{{ route('startup-plan', ['plan' => 'startup', 'type' => 'monthly']) }}">
                  Get Started
                  <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">
              <!-- <label class="popular">Popular</label> -->
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC">
                </div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Business / Entrepreneur Membership</h5>
                </div>
              </div>
              <div class="box-day-trial box-trial-two row">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-CXOs">₹1999 </span><span
                    class="font-md color-grey-500 text-type-CXOs">/ month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="row">
                  <p class="font-xs color-grey-400 mt-10 mb-10">For business owners, solo entrepreneurs, and MSMEs ready
                    to scale</p>
                </div>

              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Join Business Scaling Workshops
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Learn Modern Branding Techniques
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Get Legal & Accounting Support
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Connect with Startup Networks
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access Business Matchmaking
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Promote Your Brand Locally
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access Exclusive Promotion Slots
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Participate in BizTalk Series
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Be Part of Expert Roundtables
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Use Ready-to-Go Digital Toolkits
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Startup-to-Business Growth Track
                  </li>

                </ul>
              </div>
              <div class="mt-20">
                <a id="get-started-entrepreneur-btn" class="btn btn-brand-1-full hover-up" href="#"
                  data-route="{{ route('business-plan', ['plan' => 'entrepreneur', 'type' => 'monthly']) }}">
                  Get Started
                  <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">

              <div class="card-image-plan">
                <div class="icon-plan bg-1"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC">
                </div>
                <div class="info-plan">
                  <h5 class="color-brand-1"> Executive Membership</h5>
                </div>
              </div>
              <div class="box-day-trial box-trial-two row">
                <div class="trial-col-1"><span
                    class="font-lg-bold color-brand-1 text-price-Businesses">₹4999</span><span
                    class="font-md color-grey-500 text-type-Businesses">/ month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="row">
                  <p class="font-xs color-grey-400 mt-10 mb-10">For professionals looking to mentor, invest, or
                    transition into entrepreneurship</p>
                </div>

              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access to Founder's Lounge
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Join Exclusive Investment Forums
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Become a Young Chanakya Mentor
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Invitations to Summits and Panels
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Speaking Slots Opportunity
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access to Executive Roundtables
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Gain Sector-Specific Insights
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Explore BTS Access to Startups
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Exclusive CXO Networking Events
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Co-create Educational Curriculum
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Become a Program Advisor
                  </li>
                </ul>
              </div>
              <div class="mt-20">
                <a id="get-started-executive-btn" class="btn btn-brand-1-full hover-up" href="#"
                  data-route="{{ route('executive-plan', ['plan' => 'executive', 'type' => 'monthly']) }}">
                  Get Started
                  <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <div class="no-bg-faqs">
      <section class="section pt-50 mb-30 bg-faqs">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-8 col-md-8">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Frequently
                asked questions</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Feeling
                inquisitive? Have a read through some of our FAQs or<br class="d-none d-lg-block"> contact our
                supporters for help</p>
            </div>
          </div>
          <div class="row mt-50 mb-100">
            <div class="col-xl-3 col-lg-4">
              <ul class="list-faqs nav nav-tabs" role="tablist">
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a class="active"
                    href="#tab-support" data-bs-toggle="tab" role="tab" aria-controls="tab-support"
                    aria-selected="true"><span>Student </span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-order"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-order"
                    aria-selected="true"><span>Volunteer</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-download"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-download" aria-selected="true"><span>Startup &
                      Entrepreneur</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-technology"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-technology" aria-selected="true"><span>CXO</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-account"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-account" aria-selected="true"><span>Business
                    </span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
              </ul>
            </div>
            <div class="col-xl-9 col-lg-8">
              <div class="tab-content tab-content-slider">
                <div class="tab-pane fade active show" id="tab-support" role="tabpanel" aria-labelledby="tab-support">
                  <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What kind of
                          startup courses are included?</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Our startup courses cover fundamentals like business modeling,
                          product-market fit, marketing, and early-stage funding, designed especially for beginners.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo"> How do the virtual mentorship sessions work?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">You’ll be matched with experienced mentors who provide guidance
                          through scheduled virtual meetings.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">Can I attend the networking events online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Yes! While some events are physical, virtual options are always
                          provided to ensure all members can participate.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                          aria-controls="collapseFour"> What kind of internships can I expect?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">You’ll get access to internships with early-stage startups and
                          community projects, ideal for hands-on experience.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-order" role="tabpanel" aria-labelledby="tab-order">
                  <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-1">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-1" aria-labelledby="headingOne-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">vv</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false"
                          aria-controls="collapseTwo-1">How can I return an item purchased online? Are the workshops
                          live or recorded?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-1" aria-labelledby="headingTwo-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Both! Most workshops are live but also recorded so you can revisit
                          them anytime.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-1">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-1" aria-expanded="false"
                          aria-controls="collapseThree-1"> What does the certification include?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-1" aria-labelledby="headingThree-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">You’ll receive a digital certificate with project details and a
                          recommendation letter to boost your portfolio.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-1" aria-expanded="false"
                          aria-controls="collapseFour-1">How do ideathons work?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-1" aria-labelledby="headingFour-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Ideathons are short innovation challenges where you team up to solve
                          real problems and pitch your solutions to experts.</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="tab-download" role="tabpanel" aria-labelledby="tab-download">
                  <div class="accordion" id="accordionFAQ3">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-2">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">What kind
                          of scaling strategies are taught?</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-2" aria-labelledby="headingOne-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">We cover go-to-market plans, hiring strategies, customer retention
                          models, and investor readiness.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false"
                          aria-controls="collapseTwo-2"> Who provides the 1-on-1 mentorship?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-2" aria-labelledby="headingTwo-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body"> You’ll get personalized sessions with successful entrepreneurs,
                          VCs, and domain experts.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-2">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false"
                          aria-controls="collapseThree-2">What happens at the summits?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-2" aria-labelledby="headingThree-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Summits include startup showcases, panel talks, investor Q&As, and
                          exclusive networking with peers and leaders.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-2" aria-expanded="false"
                          aria-controls="collapseFour-2"> Is legal and financial advice included in the
                          membership?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-2" aria-labelledby="headingFour-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Yes, you’ll have access to startup-focused legal and financial
                          advisors through scheduled sessions.</div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="tab-technology" role="tabpanel" aria-labelledby="tab-technology">
                  <div class="accordion" id="accordionFAQ4">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-3">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3"> What does
                          VIP leadership access include?</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-3" aria-labelledby="headingOne-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">It gives you front-row access to high-level panels, private
                          networking lounges, and invitation-only think tanks.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false"
                          aria-controls="collapseTwo-3">Who will I connect with at networking events?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-3" aria-labelledby="headingTwo-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">You’ll meet top-tier investors, industry veterans, and other C-level
                          executives across sectors.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-3">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-3" aria-expanded="false"
                          aria-controls="collapseThree-3">What kind of workshops are available?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-3" aria-labelledby="headingThree-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Workshops focus on strategic leadership, innovation, scaling
                          operations, and emerging tech trends.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-3" aria-expanded="false"
                          aria-controls="collapseFour-3"> How exclusive are the industry events?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-3" aria-labelledby="headingFour-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">These events are curated for CXOs and high-impact leaders, often
                          invite-only, ensuring valuable connections.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-order">
                  <div class="accordion" id="accordionFAQ5">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-4">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">What makes
                          this plan suitable for long-term mentorship?</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-4" aria-labelledby="headingOne-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">It includes sustained 1-on-1 mentorships, project collaborations,
                          and follow-ups tailored to your business growth journey.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false"
                          aria-controls="collapseTwo-4"> What is included in 24/7 personalized support?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-4" aria-labelledby="headingTwo-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">You get direct access to a dedicated advisor via chat/email for
                          strategy, growth planning, or help with resources.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-4">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-4" aria-expanded="false"
                          aria-controls="collapseThree-4">Can I bring my team to trade events?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-4" aria-labelledby="headingThree-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Yes, members get access passes and can request additional slots for
                          co-founders or team leads.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-4" aria-expanded="false"
                          aria-controls="collapseFour-4">How does funding access work?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-4" aria-labelledby="headingFour-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">You'll be prYCtized for pitch events and introduced to curated
                          investor circles based on your startup profile.</div>
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

  </main>
  @include('layouts.footer')
  @include('layouts.script')
</body>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tabs-plan li a");

    // Prices for Enterprise
    const enterpriseMonthlyPrice = "₹999";
    const enterpriseYearlyPrice = "₹9999";
    const enterpriseMonthlyText = "/ month";
    const enterpriseYearlyText = "/ year";

    // Prices for Students
    const studentMonthlyPrice = "₹499";
    const studentYearlyPrice = "₹3999";
    const studentMonthlyText = "/ month";
    const studentYearlyText = "/ year";

    // Prices for CXO / Entrepreneur
    const CXOMonthlyPrice = "₹1999";
    const CXOYearlyPrice = "₹19999";
    const CXOMonthlyText = "/ month";
    const CXOYearlyText = "/ year";

    // Prices for Executive
    const executiveMonthlyPrice = "₹4999";
    const executiveYearlyPrice = "₹49999";
    const executiveMonthlyText = "/ month";
    const executiveYearlyText = "/ year";

    // Get Billed Text Element for Enterprise
    const billedTextEnterprise = document.querySelector(".text-price-enterprises")?.closest('.box-day-trial')?.querySelector(".font-xs");

    // Get Billed Text Element for CXO
    const billedTextCXO = document.querySelector(".text-price-CXOs")?.closest('.box-day-trial')?.querySelector(".font-xs");

    // Get Billed Text Element for Executive
    const billedTextExecutive = document.querySelector(".text-price-Businesses")?.closest('.box-day-trial')?.querySelector(".font-xs");

    tabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
        e.preventDefault();

        // Switch active tab
        tabs.forEach(t => t.classList.remove("active"));
        this.classList.add("active");

        const type = this.getAttribute("data-type");

        // Update Enterprise Plan
        const enterprisePriceEl = document.querySelector(".text-price-enterprises");
        const enterpriseTypeEl = document.querySelector(".text-type-enterprises");
        if (enterprisePriceEl && enterpriseTypeEl) {
          if (type === "monthly") {
            enterprisePriceEl.textContent = enterpriseMonthlyPrice;
            enterpriseTypeEl.textContent = enterpriseMonthlyText;
            if (billedTextEnterprise) billedTextEnterprise.textContent = "Billed monthly";
          } else if (type === "yearly") {
            enterprisePriceEl.textContent = enterpriseYearlyPrice;
            enterpriseTypeEl.textContent = enterpriseYearlyText;
            if (billedTextEnterprise) billedTextEnterprise.textContent = "Billed annually";
          }
        }

        // Update Students Plan
        const studentPriceEl = document.querySelector(".text-price-students");
        const studentTypeEl = document.querySelector(".text-type-standards");
        if (studentPriceEl && studentTypeEl) {
          if (type === "monthly") {
            studentPriceEl.textContent = studentMonthlyPrice;
            studentTypeEl.textContent = studentMonthlyText;
          } else if (type === "yearly") {
            studentPriceEl.textContent = studentYearlyPrice;
            studentTypeEl.textContent = studentYearlyText;
          }
        }

        // Update CXO/Entrepreneur Plan
        const CXOPriceEl = document.querySelector(".text-price-CXOs");
        const CXOTypeEl = document.querySelector(".text-type-CXOs");
        if (CXOPriceEl && CXOTypeEl) {
          if (type === "monthly") {
            CXOPriceEl.textContent = CXOMonthlyPrice;
            CXOTypeEl.textContent = CXOMonthlyText;
            if (billedTextCXO) billedTextCXO.textContent = "Billed monthly";
          } else if (type === "yearly") {
            CXOPriceEl.textContent = CXOYearlyPrice;
            CXOTypeEl.textContent = CXOYearlyText;
            if (billedTextCXO) billedTextCXO.textContent = "Billed annually";
          }
        }

        // Update Executive Plan
        const executivePriceEl = document.querySelector(".text-price-Businesses");
        const executiveTypeEl = document.querySelector(".text-type-Businesses");
        if (executivePriceEl && executiveTypeEl) {
          if (type === "monthly") {
            executivePriceEl.textContent = executiveMonthlyPrice;
            executiveTypeEl.textContent = executiveMonthlyText;
            if (billedTextExecutive) billedTextExecutive.textContent = "Billed monthly";
          } else if (type === "yearly") {
            executivePriceEl.textContent = executiveYearlyPrice;
            executiveTypeEl.textContent = executiveYearlyText;
            if (billedTextExecutive) billedTextExecutive.textContent = "Billed annually";
          }
        }

      });
    });
  });
  document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".tabs-plan a");
        const planMessage = document.querySelector('.mb-2 strong');

        const studentGetStartedBtn = document.getElementById("get-started-btn");
        const startupGetStartedBtn = document.getElementById("get-started-startup-btn");
        const entrepreneurGetStartedBtn = document.getElementById("get-started-entrepreneur-btn");
        const executiveGetStartedBtn = document.getElementById("get-started-executive-btn");

        // Function to update the plan link and selected plan message
        function updatePlanDetails(planType) {
            const planTypes = ['monthly', 'yearly'];

            // Update the links for all the membership types dynamically
            const newRoute = (route, planType) => {
                if (!route) return '#';
                // Replace only the 'type' query parameter value in the URL
                const url = new URL(route, window.location.origin);
                url.searchParams.set('type', planType);
                return url.pathname + url.search;
            };

            // Update the href of all the "Get Started" buttons
            if (studentGetStartedBtn) studentGetStartedBtn.href = newRoute(studentGetStartedBtn.getAttribute('data-route'), planType);
            if (startupGetStartedBtn) startupGetStartedBtn.href = newRoute(startupGetStartedBtn.getAttribute('data-route'), planType);
            if (entrepreneurGetStartedBtn) entrepreneurGetStartedBtn.href = newRoute(entrepreneurGetStartedBtn.getAttribute('data-route'), planType);
            if (executiveGetStartedBtn) executiveGetStartedBtn.href = newRoute(executiveGetStartedBtn.getAttribute('data-route'), planType);

            // Update the displayed selected plan
            if (planMessage) {
                planMessage.innerHTML = `${planType.charAt(0).toUpperCase() + planType.slice(1)} Plan`; // Display Plan Name with Capitalized First Letter
            }
        }

        // Set default plan type on page load (assuming 'monthly' is the default)
        updatePlanDetails('monthly');

        // Add event listener for each tab (Monthly/Yearly)
        tabs.forEach(tab => {
            tab.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent default link action
                const selectedPlanType = tab.getAttribute("data-type"); // Get the selected plan type (monthly/yearly)

                // Update all buttons' links with the selected plan type and change the message
                updatePlanDetails(selectedPlanType);

                // Toggle active class for the selected tab
                tabs.forEach(t => t.classList.remove("active"));
                tab.classList.add("active");
            });
        });
    });
    


</script>





</html>
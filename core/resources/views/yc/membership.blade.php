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
                src="{{asset('assets/yc/imgs/page/homepage2/banner.png')}}" alt="iori"></div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section banner-4">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center">
              <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Get Started</span>
                <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Start for free<br class="d-none d-lg-block">Pay as you Grow</h1>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <p class="font-md color-grey-500">Collaborate, plan projects and manage resources with powerful features that your whole team can use.  The latest news, tips and advice to help you run your business with less fuss.</p>
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
    <section class="section mt-50 bg-plan-2 pt-110 pb-110">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 text-center">
           
            <ul class="tabs-plan change-price-plan" role="tablist">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active" href="#"
                  data-type="monthly">Monthly</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#"
                  data-type="yearly">Yearly</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-50">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">
              <!-- <label class="popular">Popular</label> -->
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}"
                    alt="iori"></div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Student</h5>
                  <p class="font-md color-grey-400 mt-10 mb-10">Designed to provide students with a launchpad for their startup journey</p>
                </div>
              </div>
              <div class="box-day-trial box-trial-two">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-student">₹499</span><span
                    class="font-md color-grey-500 text-type-standard">- user / month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Now
                    <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Startup courses & business modules
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>2 annual networking events
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Virtual mentorship from experts  
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Internship & project opportunities
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Leadership & problem-solving events

                  </li>
                 
                </ul>
              </div>

            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">
              <!-- <label class="popular">Popular</label> -->
              <div class="card-image-plan">
                <div class="icon-plan bg-1"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}"
                    alt="iori"></div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Volunteer</h5>
                  <p class="font-md color-grey-400 mt-10 mb-10">Perfect for those looking to build industry experience and connections</p>
                </div>
              </div>
              <div class="box-day-trial box-trial-two">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-standard">₹699</span><span
                    class="font-md color-grey-500 text-type-standard">- user / month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Now
                    <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Assist startups & community projects
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access workshops & resources
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Work on real case studies
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Get a certificate & recommendation
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access to summits & ideathons
                  </li>
                 
                </ul>
              </div>

            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-plan card-plan-2 hover-up">
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}"
                    alt="iori"></div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Startup & Entrepreneur</h5>
                  <p class="font-md color-grey-400 mt-10 mb-10">For entrepreneurs serious about growing their startup with guidance</p>
                </div>
              </div>
              <div class="box-day-trial box-trial-two">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-enterprise">₹899
                  </span><span class="font-md color-grey-500 text-type-enterprise">- user / month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Now
                    <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Scaling strategies & investor meetups
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> 1-on-1 mentorship from experts
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Access to 4 summits & showcases
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Legal & financial advisory
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Priority pitching & funding access
                  </li>
                  
                </ul>
              </div>

            </div>
          </div>
          
          
        </div>
        <div class="row mt-50 d-flex  justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">
              <!-- <label class="popular">Popular</label> -->
              <div class="card-image-plan">
                <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}"
                    alt="iori"></div>
                <div class="info-plan">
                  <h5 class="color-brand-1">CXO</h5>
                  <p class="font-md color-grey-400 mt-10 mb-10">Ideal for executives seeking elite networking to stay ahead</p>
                </div>
              </div>
              <div class="box-day-trial box-trial-two">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-CXO">₹1999 </span><span
                    class="font-md color-grey-500 text-type-CXO">- user / month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Now
                    <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>VIP leadership access 
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>6 exclusive networking events
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Connect with top investors & leaders
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> High-impact workshops
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> High-visibility industry events
                  </li>
                 
                </ul>
              </div>

            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-plan card-plan-2 hover-up">

              <div class="card-image-plan">
                <div class="icon-plan bg-1"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}"
                    alt="iori"></div>
                <div class="info-plan">
                  <h5 class="color-brand-1">Business</h5>
                  <p class="font-md color-grey-400 mt-10 mb-10">For entrepreneurs seeking high-value connections & long-term mentorship</p>
                </div>
              </div>
              <div class="box-day-trial box-trial-two">
                <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-Business">₹4999</span><span
                    class="font-md color-grey-500 text-type-Business">- user / month</span><br><span
                    class="font-xs color-grey-500">Billed annually</span></div>
                <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Now
                    <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="mt-30 mb-30">
                <ul class="list-ticks list-ticks-2">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Access to all summits & networking events
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> 1-on-1 mentorship with industry leaders
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Join business projects & trade events
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> Premium resources on funding & expansion
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg> 24/7 personalized support
                  </li>
                 
                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
    <div class="no-bg-faqs">
        <section class="section pt-80 mb-30 bg-faqs">
          <div class="container">
            <div class="row align-items-end">
              <div class="col-lg-8 col-md-8">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Frequently asked questions</h2>
                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Feeling inquisitive? Have a read through some of our FAQs or<br class="d-none d-lg-block"> contact our supporters for help</p>
              </div>
            </div>
            <div class="row mt-50 mb-100">
              <div class="col-xl-3 col-lg-4">
                <ul class="list-faqs nav nav-tabs" role="tablist">
                  <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a class="active" href="#tab-support" data-bs-toggle="tab" role="tab" aria-controls="tab-support" aria-selected="true"><span>Student </span>
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></li>
                  <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-order" data-bs-toggle="tab" role="tab" aria-controls="tab-order" aria-selected="true"><span>Volunteer</span>
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></li>
                  <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-download" data-bs-toggle="tab" role="tab" aria-controls="tab-download" aria-selected="true"><span>Startup & Entrepreneur</span>
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></li>
                  <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-technology" data-bs-toggle="tab" role="tab" aria-controls="tab-technology" aria-selected="true"><span>CXO</span>
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></li>
                  <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-account" data-bs-toggle="tab" role="tab" aria-controls="tab-account" aria-selected="true"><span>Business </span>
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></li>
                </ul>
              </div>
              <div class="col-xl-9 col-lg-8">
                <div class="tab-content tab-content-slider">
                  <div class="tab-pane fade active show" id="tab-support" role="tabpanel" aria-labelledby="tab-support">
                    <div class="accordion" id="accordionFAQ">
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingOne">
                          <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What kind of startup courses are included?</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body">Our startup courses cover fundamentals like business modeling, product-market fit, marketing, and early-stage funding, designed especially for beginners.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingTwo">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How do the virtual mentorship sessions work?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body">You’ll be matched with experienced mentors who provide guidance through scheduled virtual meetings.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingThree">
                          <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I attend the networking events online?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body">Yes! While some events are physical, virtual options are always provided to ensure all members can participate.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingFour">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What kind of internships can I expect?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body">You’ll get access to internships with early-stage startups and community projects, ideal for hands-on experience.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-order" role="tabpanel" aria-labelledby="tab-order">
                    <div class="accordion" id="accordionFAQ2">
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingOne-1">
                          <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">Where is my order? Quisque molestie</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne-1" aria-labelledby="headingOne-1" data-bs-parent="#accordionFAQ2">
                          <div class="accordion-body">vv</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingTwo-1">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">How can I return an item purchased online? Are the workshops live or recorded?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo-1" aria-labelledby="headingTwo-1" data-bs-parent="#accordionFAQ2">
                          <div class="accordion-body">Both! Most workshops are live but also recorded so you can revisit them anytime.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingThree-1">
                          <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree-1" aria-expanded="false" aria-controls="collapseThree-1"> What does the certification include?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree-1" aria-labelledby="headingThree-1" data-bs-parent="#accordionFAQ2">
                          <div class="accordion-body">You’ll receive a digital certificate with project details and a recommendation letter to boost your portfolio.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingFour-1">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-1" aria-expanded="false" aria-controls="collapseFour-1">How do ideathons work?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFour-1" aria-labelledby="headingFour-1" data-bs-parent="#accordionFAQ2">
                          <div class="accordion-body">Ideathons are short innovation challenges where you team up to solve real problems and pitch your solutions to experts.</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="tab-download" role="tabpanel" aria-labelledby="tab-download">
                    <div class="accordion" id="accordionFAQ3">
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingOne-2">
                          <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">What kind of scaling strategies are taught?</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne-2" aria-labelledby="headingOne-2" data-bs-parent="#accordionFAQ3">
                          <div class="accordion-body">We cover go-to-market plans, hiring strategies, customer retention models, and investor readiness.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingTwo-2">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2"> Who provides the 1-on-1 mentorship?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo-2" aria-labelledby="headingTwo-2" data-bs-parent="#accordionFAQ3">
                          <div class="accordion-body"> You’ll get personalized sessions with successful entrepreneurs, VCs, and domain experts.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingThree-2">
                          <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">What happens at the summits?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree-2" aria-labelledby="headingThree-2" data-bs-parent="#accordionFAQ3">
                          <div class="accordion-body">Summits include startup showcases, panel talks, investor Q&As, and exclusive networking with peers and leaders.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingFour-2">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-2" aria-expanded="false" aria-controls="collapseFour-2"> Is legal and financial advice included in the membership?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFour-2" aria-labelledby="headingFour-2" data-bs-parent="#accordionFAQ3">
                          <div class="accordion-body">Yes, you’ll have access to startup-focused legal and financial advisors through scheduled sessions.</div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-technology" role="tabpanel" aria-labelledby="tab-technology">
                    <div class="accordion" id="accordionFAQ4">
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingOne-3">
                          <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3"> What does VIP leadership access include?</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne-3" aria-labelledby="headingOne-3" data-bs-parent="#accordionFAQ4">
                          <div class="accordion-body">It gives you front-row access to high-level panels, private networking lounges, and invitation-only think tanks.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingTwo-3">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">Who will I connect with at networking events?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo-3" aria-labelledby="headingTwo-3" data-bs-parent="#accordionFAQ4">
                          <div class="accordion-body">You’ll meet top-tier investors, industry veterans, and other C-level executives across sectors.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingThree-3">
                          <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">What kind of workshops are available?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree-3" aria-labelledby="headingThree-3" data-bs-parent="#accordionFAQ4">
                          <div class="accordion-body">Workshops focus on strategic leadership, innovation, scaling operations, and emerging tech trends.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingFour-3">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-3" aria-expanded="false" aria-controls="collapseFour-3"> How exclusive are the industry events?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFour-3" aria-labelledby="headingFour-3" data-bs-parent="#accordionFAQ4">
                          <div class="accordion-body">These events are curated for CXOs and high-impact leaders, often invite-only, ensuring valuable connections.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-order">
                    <div class="accordion" id="accordionFAQ5">
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingOne-4">
                          <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">What makes this plan suitable for long-term mentorship?</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne-4" aria-labelledby="headingOne-4" data-bs-parent="#accordionFAQ5">
                          <div class="accordion-body">It includes sustained 1-on-1 mentorships, project collaborations, and follow-ups tailored to your business growth journey.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingTwo-4">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4"> What is included in 24/7 personalized support?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo-4" aria-labelledby="headingTwo-4" data-bs-parent="#accordionFAQ5">
                          <div class="accordion-body">You get direct access to a dedicated advisor via chat/email for strategy, growth planning, or help with resources.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingThree-4">
                          <button class="accordion-button text-heading-5 collapsed text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree-4" aria-expanded="false" aria-controls="collapseThree-4">Can I bring my team to trade events?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree-4" aria-labelledby="headingThree-4" data-bs-parent="#accordionFAQ5">
                          <div class="accordion-body">Yes, members get access passes and can request additional slots for co-founders or team leads.</div>
                        </div>
                      </div>
                      <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <h5 class="accordion-header" id="headingFour-4">
                          <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-4" aria-expanded="false" aria-controls="collapseFour-4">How does funding access work?</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFour-4" aria-labelledby="headingFour-4" data-bs-parent="#accordionFAQ5">
                          <div class="accordion-body">You'll be prioritized for pitch events and introduced to curated investor circles based on your startup profile.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="border-bottom"></div>
        </section>
      </div>

  </main>
  @include('layouts.footer')
  @include('layouts.script')
</body>

</html>
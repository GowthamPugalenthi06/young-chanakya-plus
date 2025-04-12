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
    <section class="section banner-2">
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
                  <h5 class="color-brand-1">Standard</h5>
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

  </main>
  @include('layouts.footer')
  @include('layouts.script')
</body>

</html>
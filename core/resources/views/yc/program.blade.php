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
      <section class="section banner-service bg-grey-60 position-relative">
        <div class="box-banner-abs">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xxl-6 col-xl-7 col-lg-12">
                <div class="box-banner-service">
                  <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">All the important insights, guidance and news you need to know.</h2>
                  <div class="row">
                    <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                      <p class="font-lg color-grey-500">Keep up-to-date with all our latest company news and business content. The latest news, tips and advice to help you run your business with less fuss</p>
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
            <div class="d-none d-xxl-block pl-70">
              <div class="img-reveal"><img class="w-100 d-block" src="{{asset('assets/yc/imgs/page/blog/banner.png')}}" alt="iori"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- criteria -->
      <section class="section mt-50 mb-30">
        <div class="container">
          <div class="text-center mb-70">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">High quality projects finished and awarded<br class="d-none d-xl-block">on conferences around the globe.</h2>
          </div>
          <div class="row mt-50 mb-100">
            <div class="col-xl-7 col-lg-6">
              <div class="box-images-project">
                <div class="box-images mt-50"><img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage1/project1.png')}}" alt="iori">
                  <div class="image-2 shape-3"><img src="{{asset('assets/yc/imgs/page/homepage1/finger.png')}}" alt="iori"></div>
                  <div class="image-3 shape-1"><img src="{{asset('assets/yc/imgs/page/homepage1/circle.png')}}" alt="iori"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business</span>
              <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Integrate with over 1,000 project management apps</h3>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
              <div class="mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
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
              </div>
              <div class="mt-50 text-start wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a class="btn btn-brand-1 hover-up" href="#">Download App</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
          </div>
          <div class="row mb-100 mt-50 project-revert">
            <div class="col-xl-5 col-lg-6"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business</span>
              <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Build your brand and reach out to social followers</h3>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally, what you create, share or react to feeds into this public narrative. How you conduct yourself online is now just as important as your behavior offline especially when it comes to your digital marketing career.</p>
              <div class="mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                <ul class="list-ticks">
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Send & Schedule Posts
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Live Chat Request
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Push Notification
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Create fully integrated campaigns
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Online Visitors
                  </li>
                  <li>
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>Directly send or schedule posts
                  </li>
                </ul>
              </div>
              <div class="mt-50 text-start wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a class="btn btn-brand-1 hover-up" href="#">Download App</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
            <div class="col-xl-7 col-lg-6">
              <div class="box-images-project">
                <div class="box-images mt-50"><img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage1/project2.png')}}" alt="iori">
                  <div class="image-2 shape-3"><img src="{{asset('assets/yc/imgs/page/homepage1/Union.png')}}" alt="iori"></div>
                  <div class="image-3 shape-1"><img src="{{asset('assets/yc/imgs/page/homepage1/eye.png')}}" alt="iori"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-bottom"></div>
      </section>
      <!-- life at yc -->
      <section class="section mt-50"> 
        <div class="container">
          <div class="row mt-50">
            <div class="col-xl-6 col-lg-5">
              <div class="box-images-project">
                <div class="title-line mb-10 wow animate__animated animate__fadeIn">Life at YoungChanakya</div>
                <h2 class="color-brand-1 mb-25 wow animate__animated animate__fadeIn">Where learning meets leadership, and ideas come alive</h2>
                <p class="color-grey-500 mb-15 wow animate__animated animate__fadeIn">
                  From brainstorming ideas with like-minded peers to engaging with real-world challenges, life at YoungChanakya is dynamic, ambitious, and full of purpose. We’re building changemakers, not just professionals.
                </p>
                <p class="color-grey-500">
                  Whether you're attending a leadership summit, pitching your startup, or joining an industry expert panel—every moment here empowers you to grow. It’s more than just a campus. It’s a movement of young visionaries shaping the future.
                </p>
                <div class="box-button text-start mt-40 wow animate__animated animate__fadeIn">
                  <a class="btn btn-brand-1 hover-up" href="#">Be a Chanakya</a>
                  <a class="btn btn-default font-sm-bold hover-up" href="#">Explore Campus
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-7">
              <div class="row pt-40">
                <div class="col-lg-6 col-md-6">
                  <div class="cardNumber hasBorder mt-50 wow animate__animated animate__zoomIn" data-wow-delay=".0s">
                    <div class="card-head">465k</div>
                    <div class="card-description">Social Supporters</div>
                  </div>
                  <div class="cardNumber bg-brand-2 wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                    <div class="card-head">150+</div>
                    <div class="card-description">Workshops Hosted</div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="cardNumber bg-2 wow animate__animated animate__zoomIn" data-wow-delay=".4s">
                    <div class="card-head">5000+</div>
                    <div class="card-description">Students Impacted</div>
                  </div>
                  <div class="cardNumber bg-4 wow animate__animated animate__zoomIn" data-wow-delay=".5s">
                    <div class="card-head">100%</div>
                    <div class="card-description">Growth Mindset Culture</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What they will learn -->
      <section class="section pb-50 bg-core-value">
        <div class="container">
          <div class="row box-list-core-value">
            <div class="col-lg-4 mb-70">
              <div class="box-core-value">
                <div class="shape-left shape-1"></div>
                <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">What You Will Learn</h3>
                <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  Our curriculum is designed to empower learners with practical skills and core knowledge to thrive in the modern business and tech world.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <ul class="list-core-value">
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Customer-Centric Strategies</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Learn how to prioritize customer needs in product development, marketing.</p>
                  </div>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Business Ethics & Integrity</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Understand the role of transparency, ethics, and trust in building a successful and sustainable organization.</p>
                  </div>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Daily Impact Mindset</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Develop a proactive approach to solve problems and contribute meaningful value every single day.</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-lg-4">
              <ul class="list-core-value">
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Innovative Thinking</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Learn to think creatively and push boundaries in pursuit of business solutions and scalable impact.</p>
                  </div>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Leadership with Purpose</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Gain the confidence and clarity to lead with values, make ethical decisions, and inspire teams.</p>
                  </div>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><span class="ticked"></span>
                  <h5 class="color-brand-1 mb-5">Team Building & Collaboration</h5>
                  <div class="box-border-dashed">
                    <p class="font-md color-grey-500 mb-20">Master the art of working in diverse teams and cultivating a positive, inclusive work environment.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- outcomes -->
      <section class="section mt-100 box-testimonial-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 text-start pt-50">
              <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Outcomes</span>
              <h2 class="color-brand-1 mb-20 mt-15 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                What you’ll achieve<br class="d-none d-lg-block">after completing our programs
              </h2>
              <div class="row">
                <div class="col-lg-10 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                  <p class="font-md color-gray-500 mb-30">
                    Unlock new career paths, gain entrepreneurial confidence, and develop practical skills. Here's what our students walk away with:
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 bg-testimonials position-relative">
              <div class="ml-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-testimonial-list">
                  <div class="d-flex align-items-center">
                    <div class="box-author mb-10">
                      <img src="{{asset('assets/yc/imgs/page/homepage1/author.png')}}" alt="Outcome 1" />
                      <div class="author-info">
                        <span class="font-md-bold color-brand-1 author-name">Leadership Skills</span>
                        <span class="font-xs color-grey-500 department">Lead with confidence</span>
                      </div>
                    </div>
                  </div>
                  <p class="font-md color-grey-500">Develop strategic thinking and decision-making abilities to lead teams and projects effectively.</p>
                </div>
              </div>
      
              <div class="ml-100 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <div class="card-testimonial-list">
                  <div class="d-flex align-items-center">
                    <div class="box-author mb-10">
                      <img src="{{asset('assets/yc/imgs/page/homepage2/author2.png')}}" alt="Outcome 2" />
                      <div class="author-info">
                        <span class="font-md-bold color-brand-1 author-name">Entrepreneurial Mindset</span>
                        <span class="font-xs color-grey-500 department">Think like a founder</span>
                      </div>
                    </div>
                  </div>
                  <p class="font-md color-grey-500">Learn to identify opportunities, validate ideas, and build solutions that create impact.</p>
                </div>
              </div>
      
              <div class="wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                <div class="card-testimonial-list">
                  <div class="d-flex align-items-center">
                    <div class="box-author mb-10">
                      <img src="{{asset('assets/yc/imgs/page/homepage2/author3.png')}}" alt="Outcome 3" />
                      <div class="author-info">
                        <span class="font-md-bold color-brand-1 author-name">Real-World Experience</span>
                        <span class="font-xs color-grey-500 department">Learn by doing</span>
                      </div>
                    </div>
                  </div>
                  <p class="font-md color-grey-500">Work on live projects, business case studies, and collaborative challenges with peers and mentors.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Application Progress -->
      <section class="section mt-100 pt-50 pb-100 ">
        <div class="container">
          <div class="content-detail"> 
            <div class="row"> 
              <div class="col-lg-10 col-11 m-auto "> 
                <div class="box-detail-content"> 
                  <div class="row align-items-center mb-40"> 
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                      <h3 class="color-brand-1 mb-10 mt-0">Application Process</h3>
                      <p class="font-md color-grey-500">Follow these simple steps to apply for the role and begin your journey with us.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-start text-md-end">
                      <a class="btn btn-brand-1 btn-apply" href="#">
                        <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                          </path>
                        </svg>Apply Now
                      </a>
                    </div>
                  </div>
      
                  <div class="application-steps">
                    <div class="step mb-30">
                      <h5 class="color-brand-1">Step 1: Submit Your Application</h5>
                      <p>Click the "Apply Now" button and fill in your personal details, resume, and other required information.</p>
                    </div>
                    <div class="step mb-30">
                      <h5 class="color-brand-1">Step 2: Initial Screening</h5>
                      <p>Our HR team will review your application and shortlist candidates based on qualifications and experience.</p>
                    </div>
                    <div class="step mb-30">
                      <h5 class="color-brand-1">Step 3: Interview Rounds</h5>
                      <p>Shortlisted candidates will go through one or more rounds of interviews, which may be technical or HR-focused.</p>
                    </div>
                    <div class="step mb-30">
                      <h5 class="color-brand-1">Step 4: Offer & Onboarding</h5>
                      <p>Successful candidates will receive an offer letter and guidance for onboarding into the company.</p>
                    </div>
                  </div>
      
                  <div class="box-info-bottom mt-40"> 
                    <div class="row align-items-center"> 
                      <div class="col-lg-6 col-md-6 col-sm-5 col-12 mb-30">
                        <a class="btn btn-brand-1 btn-apply" href="#">
                          <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                          </svg>Apply Now
                        </a>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-7 col-12 text-start text-sm-end mb-30">
                        <a class="btn btn-tag mb-10" href="#">Application</a>
                        <a class="btn btn-tag ml-10 mb-10" href="#">Process</a>
                        <a class="btn btn-tag ml-10 mb-10" href="#">Steps</a>
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
      <section class="section mt-100">
        <div class="container"> 
          <h2 class="color-brand-1 mb-60">Fee Structure</h2>
          <h6 class="font-2xl color-brand-1 mb-15">Program Fee Details</h6>
          <div class="row"> 
            <div class="col-lg-6"> 
              <div class="table-responsive"> 
                <table class="table table-product-info"> 
                  <tr> 
                    <th>Program Name</th>
                    <td>Executive Program in Business Management</td>
                  </tr>
                  <tr> 
                    <th>Duration</th>
                    <td>6 Months</td>
                  </tr>
                  <tr> 
                    <th>Mode</th>
                    <td>Online / Offline Hybrid</td>
                  </tr>
                  <tr> 
                    <th>Total Fee</th>
                    <td>₹60,000</td>
                  </tr>
                  <tr> 
                    <th>Registration Fee</th>
                    <td>₹5,000 (Non-refundable)</td>
                  </tr>
                  <tr> 
                    <th>Installment Option</th>
                    <td>Available in 3 parts</td>
                  </tr>
                  <tr> 
                    <th>Scholarship Available</th>
                    <td>Yes, up to 30%</td>
                  </tr>
                  <tr> 
                    <th>Payment Gateway</th>
                    <td>PayU / Razorpay</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-lg-6"> 
              <div class="box-info-product">
                <ul class="list-dots mt-5"> 
                  <li class="font-md">Early bird offer: ₹5,000 off for the first 20 students</li>
                  <li class="font-md">Corporate sponsorships available upon eligibility</li>
                  <li class="font-md">Internship opportunity included with no extra fee</li>
                  <li class="font-md">Certificate issued by reputed institution after completion</li>
                  <li class="font-md">EMI facility available via partner banks and fintechs</li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="row mt-30"> 
            <div class="col-lg-6 mb-30"> 
              <h6 class="font-2xl color-brand-1 mb-15">Installment Plan</h6>
              <div class="table-responsive"> 
                <table class="table table-product-info"> 
                  <tr> 
                    <th>Installment 1</th>
                    <td>₹20,000 - On Admission</td>
                  </tr>
                  <tr> 
                    <th>Installment 2</th>
                    <td>₹20,000 - After 2 Months</td>
                  </tr>
                  <tr> 
                    <th>Installment 3</th>
                    <td>₹20,000 - After 4 Months</td>
                  </tr>
                  <tr> 
                    <th>Late Payment Fee</th>
                    <td>₹500 per week</td>
                  </tr>
                  <tr> 
                    <th>Refund Policy</th>
                    <td>Refer to T&C - Partial refund on valid reasons</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-lg-6 mb-30"> 
              <h6 class="font-2xl color-brand-1 mb-15">Additional Benefits</h6>
              <div class="table-responsive"> 
                <table class="table table-product-info"> 
                  <tr> 
                    <th>Learning Resources</th>
                    <td>Free eBooks & LMS Access</td>
                  </tr>
                  <tr> 
                    <th>Workshops</th>
                    <td>2 Free Weekend Bootcamps</td>
                  </tr>
                  <tr> 
                    <th>Mentorship</th>
                    <td>1-on-1 Monthly Sessions</td>
                  </tr>
                  <tr> 
                    <th>Certificate Validity</th>
                    <td>Lifelong, globally recognized</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Key dates and deadlines -->
      <section class="section mt-40 pt-50 pb-15 bg-grey-80">
        <div class="container">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-3">
              <div class="swiper-wrapper">
                <!-- Application Opens -->
                <div class="swiper-slide">
                  <div class="card-guide">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/help/icon-calendar.svg')}}" alt="calendar"></div>
                    <div class="card-info">
                      <h5 class="color-brand-1 mb-15">Applications Open</h5>
                      <p class="font-xs color-grey-500">Start submitting your application from <strong>April 10, 2025</strong>.</p>
                      
                    </div>
                  </div>
                </div>
      
                <!-- Early Bird Deadline -->
                <div class="swiper-slide">
                  <div class="card-guide">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/help/icon-clock.svg')}}" alt="deadline"></div>
                    <div class="card-info">
                      <h5 class="color-brand-1 mb-15">Early Bird Deadline</h5>
                      <p class="font-xs color-grey-500">Submit by <strong>April 25, 2025</strong> for discounted registration and priority review.</p>
                    </div>
                  </div>
                </div>
      
                <!-- Final Submission Deadline -->
                <div class="swiper-slide">
                  <div class="card-guide">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/help/icon-deadline.svg')}}" alt="submission"></div>
                    <div class="card-info">
                      <h5 class="color-brand-1 mb-15">Final Submission</h5>
                      <p class="font-xs color-grey-500">All applications must be submitted by <strong>May 5, 2025</strong> at 11:59 PM.</p>
                    </div>
                  </div>
                </div>
      
                <!-- Results Announcement -->
                <div class="swiper-slide">
                  <div class="card-guide">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/help/icon-bell.svg')}}" alt="announcement"></div>
                    <div class="card-info">
                      <h5 class="color-brand-1 mb-15">Results Announcement</h5>
                      <p class="font-xs color-grey-500">Shortlisted candidates will be announced on <strong>May 15, 2025</strong>.</p>
                    </div>
                  </div>
                </div>
      
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA for membership -->
    <section class="section mt-90 mb-20  0">
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
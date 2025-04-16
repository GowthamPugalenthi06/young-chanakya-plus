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
    <title>Institution Collaboration</title>
  </head>
  <body>
@include('layouts.header')
@include('layouts.preload')
    <main class="main">
      <section class="section banner-3">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 pt-40 pb-50"><span class="title-line line-48 wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><span>Institution Collaboration</span></span>
                <h2 class="color-brand-1 mb-20 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Collaborate for <br>Industry-Led Learning</h2>
                <p class="font-md color-grey-500 mb-15">Partner with Young Chanakya to bring industry-aligned <br>and real-world learning to your campus.</p>
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn btn-brand-1 hover-up" href="{{ route('about') }}">
                      Partner With Us
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 d-none d-lg-block position-relative">
                <div class="box-image-main wow animate__animated animate__fadeIn" data-wow-delay=".0s"><img class="image-banner-main d-block" src="{{asset('assets/yc/imgs/page/homepage3/banner.png')}}" alt="YC"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-100 mb-100">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-12 text-center">
              <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s"> Why Collaborate With Us</h3>
              <p class="font-md color-grey-500 mb-5">A New Way to Elevate Your Campus</p>
            </div>
          </div>
          <div class="text-center mt-25 mb-65 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="box-social-media">
              <ul class="tabs-plan change-media" role="tablist">
                <li><a class="active" href="#" data-type="personal">Students</a></li>
                <li><a href="#" data-type="enterprise">Institution</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 social-media enterprise">
                <div class=" wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Expert Training for Students</a></h4>
                      <p class="font-md color-grey-500 mb-5">Train your students through real-time sessions led by our industry professionals.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 social-media enterprise">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Upskill Your Faculty</a></h4>
                      <p class="font-md color-grey-500 mb-5">Provide development programs to enhance faculty expertise and industry alignment.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 social-media enterprise">
                <div class=" wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1"> Build Institutional Reputation</a></h4>
                      <p class="font-md color-grey-500 mb-5">Boost your college’s credibility through collaboration with industry-backed initiatives.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 social-media enterprise">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Bridge Academia & Industry</a></h4>
                      <p class="font-md color-grey-500 mb-5">Expose students to real-world business environments and case-based learning.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 social-media personal">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Learn from Industry Leaders</a></h4>
                      <p class="font-md color-grey-500 mb-5">Receive direct mentorship from professionals, experts, and industry leaders.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 social-media personal">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Apply Knowledge Practically</a></h4>
                      <p class="font-md color-grey-500 mb-5">Gain hands-on experience through detailed case studies and live projects.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 social-media personal">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Explore Startup Paths</a></h4>
                      <p class="font-md color-grey-500 mb-5">Join leadership, innovative startup programs, and entrepreneurial-focused initiatives.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 social-media personal">
                <div class="wow animate__animated animate__fadeIn">
                  <div class="card-offer card-we-do hover-up">
                    <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                    <div class="card-info">
                      <h4 class="color-brand-1 mb-10"><a class="color-brand-1">Grow Your Network</a></h4>
                      <p class="font-md color-grey-500 mb-5">Connect with mentors, entrepreneurs, business leaders, and industry professionals.</p>
                      <!-- <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg></a>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section pt-80 pb-80" style="background-color:#024430">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3 class="text-white wow animate__animated animate__fadeIn d-flex justify-content-center align-items-center" style="padding-bottom:60px;">Collaboration Journey</h3>
              <div class="row">
                <div class="col-md-6 mb-4 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <div class="item-number hover-up">
                    <div class="num-ele">1</div>
                    <div class="info-num">
                        <h5 class="mb-2 text-white">Submit Interest</h5>
                        <p class="font-md color-grey-200">Fill the form, connect with our team.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <div class="item-number hover-up">
                    <div class="num-ele">2</div>
                    <div class="info-num">
                        <h5 class="mb-2 text-white">Student Selection</h5>
                        <p class="font-md color-grey-200">We interview and select top talent.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <div class="item-number hover-up">
                    <div class="num-ele">3</div>
                    <div class="info-num">
                        <h5 class="mb-2 text-white">Campus Setup</h5>
                        <p class="font-md color-grey-200">YC space launched inside your campus.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                  <div class="item-number hover-up">
                    <div class="num-ele">4</div>
                    <div class="info-num">
                        <h5 class="mb-2 text-white">Begin Learning</h5>
                        <p class="font-md color-grey-200">Hands-on sessions by industry experts.</p>
                    </div>
                  </div>
                </div>
              </div> <!-- end row -->
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="text-center justify-content-end">
                <img 
                  src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" 
                  alt="YC" 
                  style="width:100%; max-width:500px; height:370px; border-radius:15px; ">
              </div>
            </div>
          </div> <!-- end row -->
        </div> <!-- end container -->
      </section>
      <section class="section mt-80 mb-80">
        <div class="container">
          <div class="box-newsletter">
            <div class="row align-items-center">
              <div class="col-lg-5 col-md-12">
                <div class="box-image-newsletter">
                  <div class="wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img class="img-main" src="{{asset('assets/yc/imgs/template/newsletter_img.png')}}" alt="YC"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <h2 class="color-brand-1 mb-15 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Join Us to Make Impact
                  
                </h2>
                
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn"  data-wow-delay=".2s">Young Chanakya collaborates with institutions to enhance MBA programs with a structured curriculum, expert-led workshops, and faculty development, ensuring students receive industry-relevant training and practical business knowledge.</p>
                <!-- <div class="form-newsletter mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                  <form action="#">
                    <input type="text" placeholder="Enter you mail ..">
                    <button class="btn btn-submit-newsletter" type="submit">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg>
                    </button>
                  </form>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section pt-100 pb-100" style="background-color:#ffefd1;">
        <div class="container">
          <div class="row align-items-end mb-4">
            <div class="col-lg-8 col-md-8">
              <h3 class="color-brand-1 mb-10 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Our Engagement Model</h3>
              <!-- <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".02s">
                  What makes us different from others? We give holistic solutions   <br class="d-none d-lg-block"> with strategy, design & technology.
              </p> -->
            </div>
            <div class="col-lg-4 col-md-4 text-md-end text-start">
              <a class="btn btn-default font-sm-bold pl-0 wow animate__animated animate__fadeInUp" data-wow-delay=".04s">Join Now
                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4">
            <div class="col">
              <div class="card-offer hover-up text-center">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross.png')}}" alt="Cross-Platform"></div>
                <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Structured<br> Curriculum</h5>
                    <p class="font-md color-grey-500 mb-15">Industry-aligned content integrated with academic programs.</p>
                    <!-- <div class="box-button-offer">
                      <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div> -->
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card-offer hover-up text-center">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="Business Strategy"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Faculty <br>Training</h5>
                    <p class="font-md color-grey-500 mb-15">Equipping educators with practical teaching and leadership skills.</p>
                    <!-- <div class="box-button-offer">   
                      <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div> -->
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card-offer hover-up text-center">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="Business Strategy"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Monthly <br>Events</h5>
                    <p class="font-md color-grey-500 mb-15">Ongoing events to boost engagement and hands-on learning.</p>
                    <!-- <div class="box-button-offer">
                      <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div> -->
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card-offer hover-up text-center">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="Business Strategy"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Practical<br> Learning</h5>
                    <p class="font-md color-grey-500 mb-15">Real-world exposure through projects and startup simulations.</p>
                    <!-- <div class="box-button-offer">
                      <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div> -->
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card-offer hover-up text-center">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross2.png')}}" alt="Business Strategy"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Campus<br> Selection</h5>
                    <p class="font-md color-grey-500 mb-15">Identifying and nurturing student leaders within campuses.</p>
                    <!-- <div class="box-button-offer">
                      <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div> -->
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 ">
              <h2 class="color-brand-1 mb-15">Join the Young Chanakya</h2>
              <p class="font-sm color-grey-500">Partnering with us means empowering your students with industry exposure, leadership skills<br> and the mindset to innovate and lead in the real world.</p>
              
            </div>
            <div class="col-lg-6">
              <div class="box-form-contact wow animate__animated animate__fadeIn" data-wow-delay=".6s">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-user" type="text" placeholder="Your name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-email" type="text" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-phone" type="text" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-company" type="text" placeholder="College">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                      <input class="form-control" type="text" placeholder="Website URL">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                    
                    <select class="form-control select pb-10" id="somethingSelect">
                    <option value="" disabled selected>Sponsorship Level Selection</option>
                      <option value="Option One">Title Sponsor</option>
                      <option value="Option Two">Co-Sponsor</option>
                      <option value="Option Three">Media Sponsor</option>
                      <option value="Option Four">Digital Sponsor</option>
                      <option value="Option Four">Event Sponsor</option>
                      <option value="Option Four">Technology Sponsor</option>
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
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
    <title>Become a Chanakya</title>
    <script>
      // JavaScript to toggle between step 1 and step 2
      function nextstep(){
      
        // Hide Step 1 and show Step 2
        document.querySelector(".step-1").style.display = "none";
        document.querySelector(".step-2").style.display = "block";
      };
    </script>
  </head>
  <body>
@include('layouts.preload')
@include('layouts.header')
    
    <main class="main">
      <!-- <section class="section banner-2">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <h1 class="color-brand-1 mb-20 text-anim">YC dashboard will help your payments fast and secure</h1>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <p class="font-md color-grey-500">Social media networks are open to all. Social media is typically used for social interaction and access to news and information, and decision making.</p>
                  </div>
                </div>
                <div class="mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                  <h5 class="color-brand-1">Available on</h5>
                </div>
                <div class="box-button mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a class="btn-app mb-15 hover-up" href="#"><img src="{{asset('assets/yc/imgs/template/appstore-btn.png')}}" alt="YC"></a><a class="btn-app mb-15 hover-up" href="#"><img src="{{asset('assets/yc/imgs/template/google-play-btn.png')}}" alt="YC"></a><a class="btn btn-default mb-15 pl-10 font-sm-bold hover-up" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn"><img src="{{asset('assets/yc/imgs/page/homepage2/banner.png')}}" alt="YC"></div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- hero banner -->
      <section class="section">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <h1 class="color-brand-1 mb-20 text-anim">Lead, Inspire, and Build Tomorrow’s Innovators</h1>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <p class="font-md color-grey-500 mb-30">Share your passion and expertise with emerging business minds. Mentor, teach, and inspire the next generation of leaders to shape their futures.</p>
                  </div>
                </div>
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a class="btn btn-brand-1 hover-up" href="#">Become a Chanakya</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
                <object data="assets/yc/imgs/page/homepage1/hero-banner.svg" type="image/svg+xml"></object>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50 mb-50 bg-brand-1 pt-100 pb-100 bg-explore">
        <div class="container">
          <div class="text-center">
            {{-- <span class="font-xl-bold color-white text-uppercase wow animate__animated animate__fadeInUp" data-wow-delay=".0s">explore network</span> --}}
            <h2 class="color-brand-2 mb-60 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Ready to capture every wonderful moment</h2>
          </div>
          <div class="mt-30 mb-60">
            
            <div class="tab-content wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="tab-pane fade active show" id="tab-explore-1" role="tabpanel" aria-labelledby="tab-explore-1">
                <div class="box-tab-32">
                  <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/imgs/page/homepage10/img-tab.png" alt="YC"></div>
                    <div class="col-xl-6 col-lg-7">
                      <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                        <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                        <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                        <div class="mt-20">
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 text-center">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp">Become a Chanakya</h2>
                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp">Pick your plan. Change whenever you want.<br class="d-none d-lg-block">No switching fees between packages</p>
                
              </div>
            </div> 
          <div class="row align-items-center mt-50">
            <div class="col-lg-4 mb-30" data-wow-delay=".0s">
              <div class="card-guide bg-4">
                <div class="card-image"><img src="assets/imgs/page/homepage7/payment.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Secure payment</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30" data-wow-delay=".2s">
              <div class="card-guide bg-5">
                <div class="card-image"><img src="assets/imgs/page/homepage7/money.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Save money</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30" data-wow-delay=".4s">
              <div class="card-guide bg-7">
                <div class="card-image"><img src="assets/imgs/page/homepage7/support.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Quick support</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-4 mb-30" data-wow-delay=".0s">
              <div class="card-guide bg-4">
                <div class="card-image"><img src="assets/imgs/page/homepage7/payment.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Secure payment</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30" data-wow-delay=".2s">
              <div class="card-guide bg-5">
                <div class="card-image"><img src="assets/imgs/page/homepage7/money.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Save money</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30" data-wow-delay=".4s">
              <div class="card-guide bg-7">
                <div class="card-image"><img src="assets/imgs/page/homepage7/support.png" alt="YC"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Quick support</h5>
                  <p class="font-md color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus</p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="section mt-100">
        <div class="container">
          <div class="row mt-50 align-items-center">
            <div class="col-lg-6 mb-30">
              <div class="title-line mb-10 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">What We Do, What You Get</div>
              <h2 class="color-brand-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">We facilitate the creation of strategy and design</h2>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do3.png')}}" alt="YC"></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Employee Assessments</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do.png')}}" alt="YC"></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="No lag time, no lost effort when prYCties change, no email black hole. As team collaboration improves">Smart Installation Tools</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do4.png')}}" alt="YC"></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="Share updates instantly within our project management software, and get the entire team collaborating">Collaborative to the core.</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do2.png')}}" alt="YC"></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">Manage budgets and resources</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeIn">
              <div class="card-offer card-we-do hover-up">
                <div class="card-image"><img src="{{asset('assets/yc/imgs/page/homepage2/we-do5.png')}}" alt="YC"></div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Unlimited ways to work</a></h4>
                  <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                  <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-button text-center mt-10 wow animate__animated animate__fadeIn"><a class="btn btn-brand-1 hover-up" href="#">Download App</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg></a></div>
        </div>
      </section> -->
      <!-- why become a chanakya -->
     
      <!-- <section class="section mt-100">
        <div class="container">
          <div class="row mt-50 align-items-center">
            <div class="col-lg-6">
              <div class="box-images-project">
                <div class="box-images wow animate__animated animate__fadeIn"><img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage2/img2.png')}}" alt="YC">
                  <div class="shape-1 image-4"><img src="{{asset('assets/yc/imgs/page/homepage2/certify.png')}}" alt="YC"></div>
                  <div class="shape-2 image-5"><img src="{{asset('assets/yc/imgs/page/homepage2/fly.png')}}" alt="YC"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="title-line mb-10 wow animate__animated animate__fadeIn">How to start?</div>
              <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn">Bring your target users together on social media</h2>
              <div class="item-number hover-up">
                <div class="num-ele">1</div>
                <div class="info-num">
                  <h5 class="color-brand-1 mb-15">Create an account</h5>
                  <p class="font-md color-grey-500">What makes us different from others? We give holistic solutions with strategy, design &amp; technology.</p>
                </div>
              </div>
              <div class="item-number hover-up">
                <div class="num-ele">2</div>
                <div class="info-num">
                  <h5 class="color-brand-1 mb-15">Build your founding team</h5>
                  <p class="font-md color-grey-500">What makes us different from others? We give holistic solutions with strategy, design &amp; technology.</p>
                </div>
              </div>
              <div class="item-number hover-up">
                <div class="num-ele">3</div>
                <div class="info-num">
                  <h5 class="color-brand-1 mb-15">Launch and Scale</h5>
                  <p class="font-md color-grey-500">What makes us different from others? We give holistic solutions with strategy, design &amp; technology.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      {{-- <section class="section mt-100">
        <div class="container">
          <!-- Tab Navigation -->
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item mr-10" role="presentation">
              <a class="nav-link active btn btn-brand-1" id="facilitator-tab" data-bs-toggle="tab" href="#facilitator" role="tab" aria-controls="facilitator" aria-selected="true">Facilitator</a>
            </li>
            <li class="nav-item mr-10" role="presentation">
              <a class="nav-link btn btn-brand-1" id="advisor-tab" data-bs-toggle="tab" href="#advisor" role="tab" aria-controls="advisor" aria-selected="false">Advisor</a>
            </li>
            <li class="nav-item mr-10" role="presentation">
              <a class="nav-link btn btn-brand-1" id="insight-leader-tab" data-bs-toggle="tab" href="#insight-leader" role="tab" aria-controls="insight-leader" aria-selected="false">Insight Leader</a>
            </li>
          </ul>

          <!-- Tab Content -->
          <div class="tab-content mt-4" id="myTabContent">
            <!-- Facilitator Tab -->
            <div class="tab-pane fade show active" id="facilitator" role="tabpanel" aria-labelledby="facilitator-tab">
              <!-- Content for Facilitator Tab (same as the original content) -->
              <div class="row mt-50 align-items-center">
                <div class="col-lg-6">
                  <div class="box-images-project">
                    <div class="box-images wow animate__animated animate__fadeIn">
                      <img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage2/img2.png')}}" alt="YC">
                      <div class="shape-1 image-4"><img src="{{asset('assets/yc/imgs/page/homepage2/certify.png')}}" alt="YC"></div>
                      <div class="shape-2 image-5"><img src="{{asset('assets/yc/imgs/page/homepage2/fly.png')}}" alt="YC"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="title-line mb-10 wow animate__animated animate__fadeIn">Expert Guidance</div>
                  <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn">Guiding You to Success</h2>
                  <div class="item-number hover-up">
                    <div class="num-ele">1</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Instruct & Empower</h5>
                      <p class="font-md color-grey-500">Lead impactful workshops that combine real-world insights with practical learning</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">2</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">How We Support You</h5>
                      <p class="font-md color-grey-500">We create engaging course materials and customize sessions for future business leaders</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">3</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Time Commitment</h5>
                      <p class="font-md color-grey-500">A flexible visiting engagement designed to fit your schedule</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Advisor Tab -->
            <div class="tab-pane fade" id="advisor" role="tabpanel" aria-labelledby="advisor-tab">
              <!-- Content for Advisor Tab (same as the original content) -->
              <div class="row mt-50 align-items-center">
                <div class="col-lg-6 order-lg-2">
                  <div class="box-images-project">
                    <div class="box-images wow animate__animated animate__fadeIn">
                      <img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage2/img2.png')}}" alt="YC">
                      <div class="shape-1 image-4"><img src="{{asset('assets/yc/imgs/page/homepage2/certify.png')}}" alt="YC"></div>
                      <div class="shape-2 image-5"><img src="{{asset('assets/yc/imgs/page/homepage2/fly.png')}}" alt="YC"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="title-line mb-10 wow animate__animated animate__fadeIn">Expert Guidance</div>
                  <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn">Guiding You to Success</h2>
                  <div class="item-number hover-up">
                    <div class="num-ele">1</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Mentor & Guide</h5>
                      <p class="font-md color-grey-500">Offer personalized coaching and strategy to help entrepreneurs overcome challenges and growth</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">2</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">How We Support You</h5>
                      <p class="font-md color-grey-500">We create engaging course materials and customize sessions for future business leaders</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">3</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Time Commitment</h5>
                      <p class="font-md color-grey-500">Engagements ranging from occasional consultations to regular mentoring sessions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Insight Leader Tab -->
            <div class="tab-pane fade" id="insight-leader" role="tabpanel" aria-labelledby="insight-leader-tab">
              <!-- Content for Insight Leader Tab (same as the original content) -->
              <div class="row mt-50 align-items-center">
                <div class="col-lg-6">
                  <div class="box-images-project">
                    <div class="box-images wow animate__animated animate__fadeIn">
                      <img class="img-main-2" src="{{asset('assets/yc/imgs/page/homepage2/img2.png')}}" alt="YC">
                      <div class="shape-1 image-4"><img src="{{asset('assets/yc/imgs/page/homepage2/certify.png')}}" alt="YC"></div>
                      <div class="shape-2 image-5"><img src="{{asset('assets/yc/imgs/page/homepage2/fly.png')}}" alt="YC"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="title-line mb-10 wow animate__animated animate__fadeIn">Expert Guidance</div>
                  <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeIn">Guiding You to Success</h2>
                  <div class="item-number hover-up">
                    <div class="num-ele">1</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Inspire & Influence</h5>
                      <p class="font-md color-grey-500">Share your journey through keynotes, fireside chats, or panels that spark innovation</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">2</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">How We Support You</h5>
                      <p class="font-md color-grey-500">We handle event logistics and create an engaging platform to connect with a vibrant community</p>
                    </div>
                  </div>
                  <div class="item-number hover-up">
                    <div class="num-ele">3</div>
                    <div class="info-num">
                      <h5 class="color-brand-1 mb-15">Time Commitment</h5>
                      <p class="font-md color-grey-500">Typically one-hour sessions, scheduled at your convenience</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <section class="section mt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 ">
              <h2 class="color-brand-1 mb-15">Become a Chanakya</h2>
              <p class="font-sm color-grey-500">Your sponsorship isn’t just support – it’s an investment in the future, shaping minds that will drive tomorrow’s success.</p>
              
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
                      <input class="form-control icon-company" type="text" placeholder="Company">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-25">
                      <input class="form-control" type="text" placeholder="LinkedIn URL">
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
      <!-- <section class="section mt-50 bg-plan-2 pt-110 pb-110">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s"> Choose The Best Plan</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s"> Pick your plan. Change whenever you want.<br class="d-none d-lg-block">No switching fees between packages</p>
              <ul class="tabs-plan change-price-plan" role="tablist">
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active" href="#" data-type="monthly">Monthly</a></li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#" data-type="yearly">Yearly</a></li>
              </ul>
            </div>
          </div>
          <div class="row mt-50">
            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan card-plan-2 hover-up">
                <div class="card-image-plan">
                  <div class="icon-plan"><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="YC"></div>
                  <div class="info-plan">
                    <h4 class="color-brand-1">Trial Plan</h4>
                    <p class="font-md color-grey-400">Protect for testing</p>
                  </div>
                </div>
                <div class="box-day-trial box-trial-two">
                  <div class="trial-col-1"><span class="font-lg-bold color-brand-1">FREE</span><span class="font-md color-grey-500">- 30 days trial<br></span><span class="font-xs color-grey-500">No Credit card required</span></div>
                  <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Try for free
                      <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
                <div class="mt-30 mb-30">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Brand Awareness Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Retargeting Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Contextual, Demographic
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Facebook Advertising
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>Global Certificates
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>Snapchat Advertising
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>TikTok Advertising
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>Advanced List Building
                    </li>
                  </ul>
                </div>
                <div class="mt-20"><a class="btn btn-default font-sm-bold" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-plan card-plan-2 hover-up">
                <label class="popular">Popular</label>
                <div class="card-image-plan">
                  <div class="icon-plan bg-1"><img src="{{asset('assets/yc/imgs/page/homepage1/standard.svg')}}" alt="YC"></div>
                  <div class="info-plan">
                    <h4 class="color-brand-1">Standard</h4>
                    <p class="font-md color-grey-400">Advanced project</p>
                  </div>
                </div>
                <div class="box-day-trial box-trial-two">
                  <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-standard">$29</span><span class="font-md color-grey-500 text-type-standard">- user / month</span><br><span class="font-xs color-grey-500">Billed annually</span></div>
                  <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Started
                      <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
                <div class="mt-30 mb-30">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Brand Awareness Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Retargeting Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Contextual, Demographic
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Facebook Advertising
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Global Certificates
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Snapchat Advertising
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>TikTok Advertising
                    </li>
                    <li class="mutted">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>Advanced List Building
                    </li>
                  </ul>
                </div>
                <div class="mt-20"><a class="btn btn-default font-sm-bold" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
              <div class="card-plan card-plan-2 hover-up">
                <div class="card-image-plan">
                  <div class="icon-plan bg-2"><img src="{{asset('assets/yc/imgs/page/homepage2/creation.png')}}" alt="YC"></div>
                  <div class="info-plan">
                    <h4 class="color-brand-1">Enterprise</h4>
                    <p class="font-md color-grey-400">Protect for testing</p>
                  </div>
                </div>
                <div class="box-day-trial box-trial-two">
                  <div class="trial-col-1"><span class="font-lg-bold color-brand-1 text-price-enterprise">$299</span><span class="font-md color-grey-500 text-type-enterprise">- user / month</span><br><span class="font-xs color-grey-500">Billed annually</span></div>
                  <div class="trial-col-2"><a class="btn btn-brand-1-full hover-up" href="#">Get Started
                      <svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
                <div class="mt-30 mb-30">
                  <ul class="list-ticks list-ticks-2">
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Brand Awareness Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Retargeting Ads
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Contextual, Demographic
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Facebook Advertising
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Global Certificates
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Snapchat Advertising
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>TikTok Advertising
                    </li>
                    <li>
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>Advanced List Building
                    </li>
                  </ul>
                </div>
                <div class="mt-20"><a class="btn btn-default font-sm-bold" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="box-button text-center mt-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="btn btn-brand-1 hover-up" href="#">Contact Us</a><a class="btn btn-default font-sm-bold hover-up" href="#">Compare Plans
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg></a></div>
        </div>
      </section> -->
      {{-- <section class="section mt-50 pt-50 pb-40">
        <div class="container">
          <div class="box-cover-border">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="YC" style="width: 800px; height: 350px;"></div>
              </div>
              <div class="col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Get in touch</span>
                  <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lessons from Chanakya</h2>
                  <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Learn Chanakya’s timeless strategies for leadership and success. His wisdom continues to inspire growth and decision-making.</p>
                  <div class="box-button text-start mt-65 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-brand-1 font-sm-bold hover-up" href="#">Learn More
                      <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}


      
    </main>
@include('layouts.footer')
@include('layouts.script')
  </body>

</html>
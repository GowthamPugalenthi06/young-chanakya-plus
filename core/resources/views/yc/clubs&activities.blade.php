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
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/yc/imgs/template/favicon.svg')}}')}}">
  <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
  <title>Clubs & Activities</title>
  <style>
    .item-article, .item-article1 {
    display: none;
  }
  .ctnr{
    background-color:#ffefd1;
  }

  .item-article.active, .item-article1.active {
    display: block;
  }
  .list-buttons li a{
    background-color: #024430;
    color:#ffffff;
    border:1px solid #024430;
  }
  .list-buttons li a:hover, .list-buttons li a.active {
  background-color:  #024430;
  border: 1px solid #024430;
  color:#eaa674;
  }
  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section mb-50"  style="background-color:#e0f1f4">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center" >
              <div class="col-lg-7" >
                <h1 class="color-brand-1 mb-20 text-anim">Dive into a Dynamic World of Clubs & Activities</h1>
              </div>            
              <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
                <object data="assets/yc/imgs/page/homepage1/hero-banner.svg" type="image/svg+xml"></object>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section mt-50 mb-30">
        <div class="container">
          <div class="text-center mb-70">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Discover Community, Creativity, <br class="d-none d-xl-block">and Collaboration</h2>
          </div>
          <div class="row mt-50 mb-100">
            <div class="col-xl-7 col-lg-6">
              <div class="box-images-project">
                <div class="box-images mt-50"><img class="img-main-2" src="assets/yc/imgs/page/homepage1/project1.png" alt="youngchanakya">
                  <div class="image-2 shape-3"><img src="assets/yc/imgs/page/homepage1/finger.png" alt="youngchanakya"></div>
                  <div class="image-3 shape-1"><img src="assets/yc/imgs/page/homepage1/circle.png" alt="youngchanakya"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 mt-150"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">YC Gatherings</span>
              <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Clubs, Competitions & Community</h3>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Get in on the action with business clubs like marketing, fintech, and data science, or unleash your creative side through art and recreation clubs—ranging from music and comedy to literature and theatre</p>
            </div>
          </div>
        </div>
    </section>
 
    <section class="section mt-10">
        <div class="container">
        <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business Clubs</h2>
          <div class="mt-30 mb-0 rounded-pill" style="background-color:#024430">
            <ul class="list-buttons d-flex justify-content-evenly align-items-center pt-1">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click active" href="#" data-type="vision">For UG Programme</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click" href="#" data-type="mision">For PG Programme</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-25">
              <div class="col-lg-12 mb-20 item-article vision wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="no-bg-faqs">
                  <section class="section mt-10 ">
                    <div class="container">
                      <div class="row mt-10 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
                        <div class="container-fluid mt-4">
                          <div class="row">
                            <!-- Vertical Tabs -->
                            <div class="col-xl-3 col-lg-4">
                          <ul class="list-faqs nav nav-tabs" role="tablist">
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab"><span>Entrepreneurship & Innovation Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2" type="button" role="tab"><span>Consulting & Strategy Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3" type="button" role="tab"><span>Data Analytics Society</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab4" type="button" role="tab"><span>Marketing & Branding Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tab5" type="button" role="tab"><span>Finance & Investment Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                          </ul>
                        </div>

                            <!-- Tab Content -->
                            <div class="col-md-9">
                              <div class="tab-content" id="v-tabsContent">
                                 <!-- Tab 1 Content -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                  <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Entrepreneurship & Innovation Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Promotes entrepreneurial thinking through startup bootcamps, pitch events, mentorship programs, and hands-on innovation challenges that prepare students to launch or manage new ventures.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 2 Content -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Consulting & Strategy Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Offers case study workshops, strategy simulations, and industry networking to help students build critical thinking, business analysis, and professional consulting skills for competitive environments.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 3 Content -->
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Data Analytics Society</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Provides practical experience with data tools, real-time analytics projects, and guest lectures from industry experts to enhance data interpretation, visualization, and decision-making abilities.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content -4 -->
                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Marketing & Branding Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Engages students in brand strategy development, digital marketing campaigns, creative promotions, and market research initiatives to build strong communication and consumer engagement skills.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content - 5 -->
                                <div class="tab-pane fade" id="tab5"  role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Finance & Investment Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Focuses on financial literacy, portfolio management, stock analysis, and investment strategies through simulations, workshops, and peer-led learning to foster smart money management.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
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
                  </section>
                </div>
              </div>
              <div class="col-lg-12 mb-50 item-article mision wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <section class="section mt-10 ">
                    <div class="container">
                      <div class="row mt-10 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
                        <div class="container-fluid mt-4">
                          <div class="row">
                            <!-- Vertical Tabs -->
                            <div class="col-xl-3 col-lg-4">
                          <ul class="list-faqs nav nav-tabs" role="tablist">
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab11" type="button" role="tab"><span>Advanced Consulting Forum</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab21" type="button" role="tab"><span>Product Management Association</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab31" type="button" role="tab"><span>FinTech & Blockchain Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab41" type="button" role="tab"><span>Global Business & Strategy Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tab51" type="button" role="tab"><span>Healthcare Management Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                          </ul>
                          
                        </div>

                            <!-- Tab Content -->
                            <div class="col-md-9">
                              <div class="tab-content" id="v-tabsContent">
                                <!-- Tab 1 Content -->
                                <div class="tab-pane fade show active" id="tab11" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Advanced Consulting Forum</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Offers advanced consulting practice through real-world case analysis, project collaboration, and industry engagement to refine problem-solving, presentation, and advisory skills for consulting careers.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 2 Content -->
                                <div class="tab-pane fade" id="tab21" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Product Management Association</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Concentrates on product lifecycle, agile development, and UX design, offering hands-on experience in product strategy, innovation, and cross-functional team leadership.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 3 Content -->
                                <div class="tab-pane fade" id="tab31" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">FinTech & Blockchain Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Explores cutting-edge financial technologies, blockchain solutions, and digital currencies with sessions, workshops, and networking to understand emerging disruptions in the finance industry.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content -4 -->
                                <div class="tab-pane fade" id="tab41" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Global Business & Strategy Club </h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Analyzes international strategies, market trends, and global business models, helping students gain insights into cross-border management and competitive strategy development.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content - 5 -->
                                <div class="tab-pane fade" id="tab51" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Healthcare Management Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Investigates healthcare systems, policies, and operations through discussions, expert talks, and research, preparing students for leadership roles in healthcare management.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
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

                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  
    <section class="section mt-10">
        <div class="container">
         <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Holistic Development Clubs</h2>
          <div class="mt-30 mb-0 rounded-pill" style="background-color:#024430">
            <ul class="list-buttons d-flex justify-content-evenly align-items-center pt-1">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click1 active" href="#" data-type="visio">For UG Programme</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click1" href="#" data-type="misio">For PG Programme</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-25">
              <div class="col-lg-12 mb-20 item-article1 visio wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="no-bg-faqs">
                  <section class="section mt-10 ">
                    <div class="container">
                      <div class="row mt-10 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
                        <div class="container-fluid mt-4">
                          <div class="row">
                            <!-- Vertical Tabs -->
                            <div class="col-xl-3 col-lg-4">
                          <ul class="list-faqs nav nav-tabs" role="tablist">
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab01" type="button" role="tab"><span>Technology & Innovation Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab02" type="button" role="tab"><span>Operations & Supply Chain Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab03" type="button" role="tab"><span>Human Resources & Leadership Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab04" type="button" role="tab"><span>Social Impact & Sustainability Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tab05" type="button" role="tab"><span>Arts & Culture Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                          </ul>
                        </div>

                            <!-- Tab Content -->
                            <div class="col-md-9">
                              <div class="tab-content" id="v-tabsContent">
                                 <!-- Tab 1 Content -->
                                <div class="tab-pane fade show active" id="tab01" role="tabpanel">
                                  <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Technology & Innovation Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Encourages exploration of emerging tech, product innovation, and digital transformation through hands-on projects and tech-focused discussions with professionals and peers.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 2 Content -->
                                <div class="tab-pane fade" id="tab02" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Operations & Supply Chain Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Delves into logistics, process optimization, and end-to-end supply chain management through simulations, workshops, and site visits with industry leaders.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 3 Content -->
                                <div class="tab-pane fade" id="tab03" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Human Resources & Leadership Club
                                        </h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Builds leadership and interpersonal skills through HR simulations, peer learning, and expert interactions focused on talent management and organizational culture.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content -4 -->
                                <div class="tab-pane fade" id="tab04" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Social Impact & Sustainability Club
                                        </h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Promotes responsible innovation, community service, and sustainable development through initiatives, campaigns, and events focused on global and local impact.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content - 5 -->
                                <div class="tab-pane fade" id="tab05"  role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Arts & Culture Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Celebrates global cultures through performances, festivals, and creative workshops that promote inclusion, diversity, and artistic expression within the student community.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
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
                  </section>
                </div>
              </div>
              <div class="col-lg-12 mb-50 item-article1 misio wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <section class="section mt-10 ">
                    <div class="container">
                      <div class="row mt-10 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
                        <div class="container-fluid mt-4">
                          <div class="row">
                            <!-- Vertical Tabs -->
                            <div class="col-xl-3 col-lg-4">
                          <ul class="list-faqs nav nav-tabs" role="tablist">
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tabs1" type="button" role="tab"><span>Real Estate & Urban Development Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tabs2" type="button" role="tab"><span>Corporate Social Responsibility (CSR) Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tabs3" type="button" role="tab"><span>Women in Business Network</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tabs4" type="button" role="tab"><span>Alumni Relations & Networking Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                            <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tabs5" type="button" role="tab"><span>Research & Publications Club</span>
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></li>
                          </ul>
                          
                        </div>

                            <!-- Tab Content -->
                            <div class="col-md-9">
                              <div class="tab-content" id="v-tabsContent">
                                <!-- Tab 1 Content -->
                                <div class="tab-pane fade show active" id="tabs1" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Real Estate & Urban Development Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Studies real estate markets, investment strategies, and urban planning trends through speaker series, workshops, and case studies on sustainable property development.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 2 Content -->
                                <div class="tab-pane fade" id="tabs2" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Corporate Social Responsibility (CSR) Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Advocates ethical business practices, sustainability, and corporate accountability through community engagement, awareness campaigns, and collaboration with industry leaders.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Tab 3 Content -->
                                <div class="tab-pane fade" id="tabs3" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Women in Business Network</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Empowers women professionals through leadership development programs, mentorship networks, and events promoting gender equity and inclusive workplace practices.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content -4 -->
                                <div class="tab-pane fade" id="tabs4" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Alumni Relations & Networking Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Builds strong alumni ties, organizes networking opportunities, and facilitates mentorship programs to support career development and lifelong learning.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tab content - 5 -->
                                <div class="tab-pane fade" id="tabs5" role="tabpanel">
                                <div class="container my-4">
                                    <div class="row align-items-center shadow p-4 rounded bg-white">
                                      <div class="col-md-6">
                                        <h4 class="fw-bold">Research & Publications Club</h4>
                                        <hr style="width: 80px; border: 2px solid #f4a261; margin-top: 0;">
                                        <p>
                                        Supports academic writing, research dissemination, and thought leadership through publication opportunities, paper presentations, and interdisciplinary collaboration.
                                        </p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <img src="assets/yc/imgs/page/about/Elite circle.jpg" style="height:250px" alt="SEVA Club Members" class="img-fluid rounded shadow-sm">
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

                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section mt-50 p-50" style="background-color: #fdffd4;">
            <div class="container">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp mt-25" data-wow-delay=".0s">Committees</h2>
              <div class="row mt-0 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
                <div class="container-fluid mt-4">
                  <div class="row">
                    <!-- Vertical Tabs -->
                    <div class="col-xl-3 col-lg-4">
                  <ul class="list-faqs nav nav-tabs" role="tablist">
                    <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab12" type="button" role="tab"><span>Governance & Ethics</span>
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></li>
                    <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab22" type="button" role="tab"><span>Career & Innovation</span>
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></li>
                    <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab32" type="button" role="tab"><span>Academic Excellence
                    </span>
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></li>
                    <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab42" type="button" role="tab"><span> Cultural & Social Engagement</span>
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></li>
                    <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tab52" type="button" role="tab"><span>Outreach & Communication</span>
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></li>
                  </ul>

                </div>

                    <!-- Tab Content -->
                    <div class="col-md-9">
                      <div class="tab-content" id="v-tabsContent">
                        <!-- Tab 1 Content -->
                        <div class="tab-pane fade show active" id="tab12" role="tabpanel">
                        <div class="col-lg-12 mb-4">
                          <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                              <!-- Banner Image -->
                              <img src="{{ asset('assets/yc/imgs/page/about/image.jpeg') }}" alt="POSH Banner" class="img-fluid w-100" style="object-fit: cover; height:250px">

                              <!-- Text Content -->
                              <div class="p-4 bg-black ">
                                  <h5 class="fw-bold mb-3">
                                  Upholding Values, Leading with Integrity
                                  </h5>
                                 
                                  <ul>
  <li><strong>Ethics & Compliance Committee:</strong> Ensures adherence to the community's ethical standards and addresses any violations.</li>
  <li><strong>Student Council:</strong> Represents the student body, facilitating communication between members and leadership.</li>
  <li><strong>Hostel & Facilities Committee:</strong> Oversees accommodation and campus facilities, ensuring a conducive living environment.</li>
</ul>

                                  </p>
                              </div>
                          </div>
                        </div>

                        </div>

                        <!-- Tab 2 Content -->
                        <div class="tab-pane fade" id="tab22" role="tabpanel">
                         <div class="col-lg-12 mb-4">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                                <!-- Banner Image -->
                                <img src="{{ asset('assets/yc/imgs/page/about/image.jpeg') }}" alt="POSH Banner" class="img-fluid w-100" style="object-fit: cover; height:250px">

                                <!-- Text Content -->
                                <div class="p-4 bg-black ">
                                    <h5 class="fw-bold mb-3">
                                    From Ideas to Industry Impact
                                    </h5>
                                    <ul>
  <li><strong>Career Advancement Committee:</strong> Organizes workshops, mentorships, and networking events to enhance career prospects.</li>
  <li><strong>Innovation & Entrepreneurship Lab:</strong> Supports startup ideas through resources, mentorship, and incubation programs.</li>
  <li><strong>Placement Committee:</strong> Coordinates with industry partners to facilitate job placements and internships.</li>
</ul>
                                </div>
                            </div>
                        </div>

                        </div>

                        <!-- Tab 3 Content -->
                        <div class="tab-pane fade" id="tab32" role="tabpanel">
                        <div class="col-lg-12 mb-4">
                            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                                <!-- Banner Image -->
                                <img src="{{ asset('assets/yc/imgs/page/about/image.jpeg') }}" alt="POSH Banner" class="img-fluid w-100" style="object-fit: cover; height:250px">

                                <!-- Text Content -->
                                <div class="p-4 bg-black ">
                                    <h5 class="fw-bold mb-3">
                                    Excellence in Learning and Discovery
                                    </h5>
                                   
                                    <ul>
  <li><strong>Academic Council:</strong> Monitors academic programs, ensuring quality and relevance in the curriculum.</li>
  <li><strong>Research & Publications Committee:</strong> Encourages scholarly research and oversees publication initiatives.</li>
</ul>
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- tab content -4 -->
                        <div class="tab-pane fade" id="tab42" role="tabpanel">
                        <div class="col-lg-12 mb-4">
                          <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                              <!-- Banner Image -->
                              <img src="{{ asset('assets/yc/imgs/page/about/image.jpeg') }}" alt="POSH Banner" class="img-fluid w-100" style="object-fit: cover; height:250px">

                              <!-- Text Content -->
                              <div class="p-4 bg-black ">
                                  <h5 class="fw-bold mb-3">
                                  Unite in Rhythm, Play, Spirit
                                  </h5>
                                  <ul>
  <li><strong>Cultural Committee:</strong> Organizes festivals, cultural nights, and other events to celebrate diversity.</li>
  <li><strong>Arts & Performance Committee:</strong> Manages clubs related to music, dance, theatre, and visual arts.</li>
  <li><strong>Sports & Wellness Committee:</strong> Promotes physical health through sports events and wellness programs.</li>
</ul>
                              </div>
                          </div>
                        </div>

                        </div>
                        <!-- tab content - 5 -->
                        <div class="tab-pane fade" id="tab52" role="tabpanel">
                        <div class="col-lg-12 mb-4">
                          <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                              <!-- Banner Image -->
                              <img src="{{ asset('assets/yc/imgs/page/about/image.jpeg') }}" alt="POSH Banner" class="img-fluid w-100" style="object-fit: cover; height:250px">

                              <!-- Text Content -->
                              <div class="p-4 bg-black">
                                  <h5 class="fw-bold mb-3">
                                  Connect, Communicate, Welcome, and Grow
                                  </h5>
                                  <ul>
                                    <li><strong>Public Relations Committee:</strong> Handles internal and external communications, including social media and press releases.</li>
                                    <li><strong>Alumni Relations Committee:</strong> Maintains connections with alumni, facilitating mentorship and networking opportunities.​</li>
                                    <li><strong>Admissions & Orientation Committee:</strong> Assists in the admissions process and organizes orientation programs for new members.​</li>
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
    <section class="section">
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
      </div>
    </section>
  </main>
  @include('layouts.footer')
  @include('layouts.script')
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button-click1");
    const articles = document.querySelectorAll(".item-article1");

    // Show only the first (Vision) on load
    articles.forEach(article => article.classList.remove("active"));
    const firstArticle = document.querySelector(".item-article1.active");
    if (!firstArticle && articles.length) articles[0].classList.add("active");

    buttons.forEach(button => {
      button.addEventListener("click", function (e) {
        e.preventDefault();

        buttons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        const type = this.getAttribute("data-type");
        articles.forEach(article => {
          if (article.classList.contains(type)) {
            article.classList.add("active");
          } else {
            article.classList.remove("active");
          }
        });
      });
    });
  });


  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button-click");
    const articles = document.querySelectorAll(".item-article");

    // Show only the first (Vision) on load
    articles.forEach(article => article.classList.remove("active"));
    const firstArticle = document.querySelector(".item-article.active");
    if (!firstArticle && articles.length) articles[0].classList.add("active");

    buttons.forEach(button => {
      button.addEventListener("click", function (e) {
        e.preventDefault();

        buttons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        const type = this.getAttribute("data-type");
        articles.forEach(article => {
          if (article.classList.contains(type)) {
            article.classList.add("active");
          } else {
            article.classList.remove("active");
          }
        });
      });
    });
  });

</script>
</body>

</html>
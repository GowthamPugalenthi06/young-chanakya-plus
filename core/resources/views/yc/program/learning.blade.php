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
    <link href="{{asset('assets/yc/css/vendors/aos.css')}}" rel="stylesheet">
    <title>Learning</title>
    <style>
        .blue-bg{
            background-color: #DFF9F3;
            }

        .v-bg {
            background-color: #fdffd4;
            }

        .o-bg {
            background-color: #FFEADE;
            }
    </style>
    
</head>

<body>
    @include('layouts.preload')
    @include('layouts.header')
    <main>
        <section class="section banner-service bg-grey-60 position-relative">
            <div class="box-banner-abs">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-7 col-lg-12">
                            <div class="box-banner-service">
                                <h2 class="color-brand-1 mb-5 p-2 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                What makes YoungChanakya’s pedagogy unique?
                                </h2>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                        YoungChanakya’s pedagogy blends ancient wisdom with modern strategies, nurturing holistic growth through experiential learning, mentorship, and real-world application.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-xxl-5 col-xl-7 col-lg-6"></div>
                <div class="col-xxl-7 col-xl-5 col-lg-6 pr-0">
                    <div class="d-none d-xxl-block pl-70">
                        <div class="img-reveal">
                            <img class="w-100 d-block" src="assets/yc/imgs/page/service/banner.png" alt="iori">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="no-bg-faqs">
            <section class="section mt-50 bg-faqs">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-8 col-md-8">
                            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Learning Outcomes</h2>
                            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                                Discover and register for exciting upcoming events, workshops,<br class="d-none d-lg-block"> and networking opportunities near you.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-50 mb-100 d-flex flex-wrap-wrap ml-30" style="flex-direction:column">
                        <div class="container-fluid ">
                            <div class="row">
                                <!-- Vertical Tabs -->
                                <div class="col-xl-3 col-lg-4">
                                    <ul class="list-faqs nav nav-tabs" role="tablist">
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab">
                                                <span>
                                                Data-driven decision making</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2" type="button" role="tab">
                                                <span>
                                                Customer Obsession</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3" type="button" role="tab">
                                                <span>
                                                Effective Communications</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab4" type="button" role="tab">
                                                <span>
                                                First Principles Problem Solving</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab5" type="button" role="tab">
                                                <span>
                                                Business Acumen</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab6" type="button" role="tab">
                                                <span>
                                                Agile Product Thinking</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab7" type="button" role="tab">
                                                <span>
                                                Sales</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab8" type="button" role="tab">
                                                <span>
                                                Process Thinking</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab9" type="button" role="tab">
                                                <span>
                                                Sector Understanding</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab10" type="button" role="tab">
                                                <span>
                                                Proficiency with New-age Technologies</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab Content -->
                                <div class="col-md-9 mt-20 pl-50">
                                    <div class="tab-content" id="v-tabsContent">
                                        <!-- Tab 1 Content -->
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                        <h3 class="fw-semibold mb-3">Making decisions driven by data                </h3>
                                                        <h6 class="fw-semibold mb-3 text-gray">In today’s world, intuition alone isn’t enough. Decisions backed by strong data lead to better outcomes, smarter strategies, and faster growth.
                                                        <span class="text-success"> Learning to navigate, understand, and use data is now a superpower.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" > At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Identify relevant data points to solve real-world problems and unlock insights.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Communicate data stories through clear visuals and compelling narratives.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Make strategic business decisions backed by data analysis.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Master tools like Excel, SQL, PowerBI, and Python for real-world applications..</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Work hands-on with datasets from startups and leading companies.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Receive live mentorship and feedback to refine your data-driven thinking.</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 2 Content -->
                                        <div class="tab-pane fade show " id="tab2" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Prioritizing customer needs</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">In any successful business, the customer is at the center.
                                                        <span class="text-success"> Building a mindset that consistently listens to and acts on customer feedback can transform products, services, and relationships.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn techniques to deeply understand customer pain points and desires.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Prioritize solutions that create maximum value for the customer.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build strategies that foster loyalty and long-term growth.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Use frameworks like Jobs-to-be-Done and Customer Journey Mapping.</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Analyze real-world case studies to sharpen customer-centric thinking.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Get direct feedback from industry mentors to refine your approach.</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 3 Content -->
                                        <div class="tab-pane fade show " id="tab3" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Communicating with impact</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Clear, persuasive communication isn't optional — it's a competitive advantage. 

                                                        <span class="text-success">Crafting the right message and delivering it with precision can inspire action, drive decisions, and align teams..</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Master the art of structuring ideas for clarity and persuasion.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build visual storytelling skills to make data and ideas memorable.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Practice communicating confidently across diverse audiences and formats.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Learn frameworks for structured communication and storytelling</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Present real-world projects and receive expert feedback.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Engage in roleplays, mock pitches, and leadership communication workshops</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 4 Content -->
                                        <div class="tab-pane fade show " id="tab4" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Solving problems from first principles</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">The best solutions often come from stripping away assumptions and building from the ground up
                                                        <span class="text-success"> First principles thinking empowers you to redefine challenges and craft original, effective solutions</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Break down complex problems into fundamental elements.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Challenge conventional approaches to uncover better alternatives.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Develop innovative, structured solutions with confidence.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Learn first principles frameworks used by top innovators and leaders.</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Apply thinking models to real-world startup and business challenges.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Engage in case studies, live simulations, and problem-solving sprints.</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 5 Content -->
                                        <div class="tab-pane fade show " id="tab5" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Developing strong business judgment</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Strong business judgment isn't built overnight — it’s shaped through practice, pattern recognition, and understanding what truly matters in different situations.
                                                        <span class="text-success">It’s about seeing opportunities, avoiding pitfalls, and making decisions that move businesses forward.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Strengthen your ability to weigh risks and rewards.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand the nuances behind smart business decisions.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build instincts that align short-term actions with long-term success.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Study real-world case studies across industries and sectors</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Develop frameworks for making high-stakes decisions.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Learn directly from leaders who have navigated complex business </h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 6 Content -->
                                        <div class="tab-pane fade show " id="tab6" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Thinking with an agile product mindset</h3>
                                                        <h6 class="fw-semibold mb-3 text-gray">TIn a fast-changing world, the ability to think like a product leader is vital. An agile mindset means adapting quickly, learning from feedback,. 
                                                        <span class="text-success">Tand always focusing on creating real value for users and businesses.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Develop a sharp focus on user needs and experiences.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn how to build, test, and refine ideas with speed.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Make smart choices about when to pivot, persevere, or rethink.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Practice rapid experimentation and decision-making</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Build products that solve meaningful problems/h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Work with mentors who’ve led agile teams across industries.</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 7 Content -->
                                        <div class="tab-pane fade show " id="tab7" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Mastering sales</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Sales is not just about closing deals; it's about understanding people, solving their problems, and building lasting trust. 
                                                        <span class="text-success"> Strong sales skills are at the core of any successful leader’s journey.
                                                        </span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn how to identify customer needs and offer real solutions</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build confidence in presenting and negotiating.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand the strategies that drive long-term client relationships.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Practice real-world selling techniques.</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Learn from top sales leaders and business builders.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Understand how to sell ideas, products, and yourself.</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 8 Content -->
                                        <div class="tab-pane fade show " id="tab8" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Managing processes efficiently</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">A strong foundation in managing systems and workflows ensures that goals are achieved on time without losing focus on quality.
                                                        <span class="text-success">Efficient processes allow leaders to handle complexity with clarity.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn to design, optimize, and monitor key business processes.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand how to delegate tasks effectively and track progress.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build habits that drive consistency and long-term performance.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Create workflows that deliver results</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Learn tools to organize and lead projects.</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Develop the discipline to scale operations smoothly</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 9 Content -->
                                        <div class="tab-pane fade show " id="tab9" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Gaining deep sector knowledge</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Understanding the nuances of an industry builds confidence and sharpens decision-making. 
                                                        <span class="text-success">Deep sector knowledge helps you identify patterns, predict shifts, and lead with authority.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Develop a strong grip on industry structures, challenges, and opportunities.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn how to research, map, and analyze sectors thoroughly.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Gain insights that help you spot trends and move ahead faster.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Move beyond surface-level understanding and dive deep into your industry</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Master the drivers, challenges, and trends that shape the future</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Be the person who knows what’s next</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                        <!-- Tab 10 Content -->
                                        <div class="tab-pane fade show " id="tab10" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3"> Getting hands-on with emerging technologies</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Today’s leaders don’t just understand technology — they work with it directly
                                                        <span class="text-success"> First-hand experience brings clarity, improves decision-making, and drives innovation.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build comfort with fast-changing technologies across industries.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn how to evaluate and apply new tools for real-world impact.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Stay prepared for the future by constantly adapting and experimenting.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <section class="section ">
                                                            <div class="">
                                                            <div class="row align-items-end">
                                                                <!-- <div class="col-lg-8 col-md-8">
                                                                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
                                                                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
                                                                </div> -->
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Work with technology directly, not from the sidelines.</h6></a>
                                                                   
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Experiment, build, and stay ahead of the curve</h6></a>
                                                                 
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-blog-grid card-blog-grid-2 hover-up">
                                                                    <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                                                                    <div class="card-info"><a href="blog-detail.html">
                                                                        <h6 class="color-brand-1">Turn new tech into real-world advantages</h6></a>
                                                                  
                                                                    <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                        </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                                                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                        </svg>3 mins read</span></div> -->
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="section mt-30">
            <div class="container">
            <!-- <div class="row justify-content-center align-items-end">
                <div class="col-lg-8 col-md-8 d-flex justify-content-center align-items-center row">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">What We Offer</h2>
                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".02s">What makes us different from others? We give holistic solutions<br class="d-none d-lg-block">with strategy, design & technology.</p>
                </div>
            </div> -->
            <div class="row justify-content-center align-items-end" >
                <div class="col-lg-8 col-md-8 text-center">
                    <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                    4 Different Methods of Learning
                    </h2>
                    <!-- <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".02s">
                    What makes us different from others? We give holistic solutions
                    <br class="d-none d-lg-block">with strategy, design & technology.
                    </p> -->
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                <div class="card-offer hover-up">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></div>
                    <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Business Fundamentals</h4>
                    <p class="font-md color-grey-500 mb-15">Build a strong foundation across strategy, marketing, operations, finance, and accounting, guided by experienced educators.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1" href="#section1">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <div class="card-offer hover-up">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></div>
                    <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Startup <br>Exposure</h4>
                    <p class="font-md color-grey-500 mb-15">Learn directly from founders and industry leaders by diving into real-world challenges and decision-making.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1" href="#section2">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="card-offer hover-up">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross3.png" alt="iori"></div>
                    <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Create and Grow Real Businesses</h4>
                    <p class="font-md color-grey-500 mb-15">Learn by launching, operating, and growing your own business from the ground up.  And Create your own Empire</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1" href="#section3">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                <div class="card-offer hover-up">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></div>
                    <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Sector-Specific & Functional Expertise</h4>
                    <p class="font-md color-grey-500 mb-15">Gain deeper insights into industries and functions through focused workshops, challenges, and masterclasses.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1 " href="#section4">Learn More
                        <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
      </section>
      <!-- section - 1 -->
      <section class="section mt-50 pt-50 pb-50" style="background-color:#fdffd4" id="section1">
        <div class="container">
          <div class="v-bg">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori"  style="height:350px; width: 100%"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag color-brand-1 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business Fundamentals</span>
                  <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Integrate with strategy, marketing, operations, finance, and accounting</h3>
                  <p class="font-md  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Dive deep into the essentials that lay the groundwork for successful ventures. Learn to combine core business principles with real-world insights. Empower yourself with the tools to navigate complex business landscapes while making data-backed decisions that drive success.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="no-bg-faqs">
            <section class="section mt-50 bg-faqs">
                <div class="container">
                    <div class="row align-items-end">
                        <!-- <div class="col-lg-8 col-md-8">
                            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Learning Outcomes</h2>
                            <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                                Discover and register for exciting upcoming events, workshops,<br class="d-none d-lg-block"> and networking opportunities near you.
                            </p>
                        </div> -->
                    </div>
                    <div class="row mt-50 mb-100 d-flex flex-wrap-wrap ml-30" style="flex-direction:column">
                        <div class="container-fluid ">
                            <div class="row">
                                <!-- Vertical Tabs -->
                                <div class="col-xl-3 col-lg-4">
                                    <ul class="list-faqs nav nav-tabs" role="tablist">
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab11" type="button"
                                                role="tab">
                                                <span>
                                                    Power of Brands</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab12" type="button"
                                                role="tab">
                                                <span>
                                                    Business Storytelling</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab13" type="button"
                                                role="tab">
                                                <span>
                                                    VC Essentials</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab14" type="button"
                                                role="tab">
                                                <span>
                                                    Data-Driven Decision Making</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab15" type="button"
                                                role="tab">
                                                <span>
                                                    Sales & Partnerships</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab16" type="button"
                                                role="tab">
                                                <span>
                                                    Operations Management</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab17" type="button"
                                                role="tab">
                                                <span>
                                                    Product Management</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab18" type="button"
                                                role="tab">
                                                <span>
                                                    Pricing Strategies</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab19" type="button"
                                                role="tab">
                                                <span>
                                                    Digital Marketing</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab20" type="button"
                                                role="tab">
                                                <span>
                                                    Gen AI Mastery Course</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab Content -->
                                <div class="col-md-9 mt-20 pl-50">
                                    <div class="tab-content" id="vc-tabsContent">
                                        <!-- Tab 1 Content -->
                                        <div class="tab-pane fade show active " id="tab11" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Power of Brands</h5>
                                                        <p class="mb-0 text-muted">This is a short descriptiUnderstanding the importance of brand recognition and identity in today’s competitive market. Learn how brands influence customer perception and build long-term loyalty.on on the second line.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                      
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Understanding the Psychology of Branding</h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how consumers emotionally connect with brands through subconscious signals like colors, logos, and storytelling. Understand why strong brands can influence purchasing behavior beyond product features.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5> Strategies for Brand Differentiation  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Explore how to position your brand uniquely in a competitive market. You'll learn the elements that make a brand stand out, including visual identity, brand voice, and customer experience.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                       
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5> Leveraging Brand Loyalty and Trust  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Master how to build consistent and trustworthy experiences that foster loyalty. Understand techniques for customer retention through emotional connection and reward programs.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 2 Content -->
                                        <div class="tab-pane fade show  " id="tab12" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Business StoryTelling</h5>
                                                        <p class="mb-0 text-muted">Learn how to craft compelling business stories that engage and inspire audiences, helping to drive decisions and build relationships</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Building a Story That Resonates With Your Audience  
                                                        </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to structure narratives that create emotional resonance. Discover techniques to align stories with customer pain points and aspirations, making your brand more relatable.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Storytelling for Marketing and Leadership </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Explore how storytelling can be used to inspire teams, persuade stakeholders, and craft marketing campaigns that drive engagement and conversions.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Using Emotional Appeal in Business Communications  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand the psychology behind emotional triggers. Learn how to craft communications that spark empathy, trust, and lasting customer relationships.</p>
                                                    

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 3 Content -->
                                        <div class="tab-pane fade show " id="tab13" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">VC Essentials </h5>
                                                        <p class="mb-0 text-muted">Dive into the essentials of venture capital, focusing on funding, pitching, and managing investments to help grow startups successfully.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Stages of Venture Capital Funding </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Gain clarity on seed funding, Series A, B, and beyond. Understand how funding stages align with business growth and what milestones investors expect at each round.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                     
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Key Factors That Influence Investor Decisions </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Explore what venture capitalists look for: scalable business models, strong founding teams, market size, and traction. Learn how to present your business in the most compelling way.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                       

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Developing a Pitch That Attracts Investors  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Master the art of storytelling in pitching. Learn to communicate your vision, market opportunity, competitive advantage, and financial projections clearly and persuasively.
                                                        </p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 4 Content -->
                                        <div class="tab-pane fade show  " id="tab14" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Data-Driven Decision Making
                                                        </h5>
                                                        <p class="mb-0 text-muted">Learn how to leverage data to make informed business decisions, enhancing strategy, performance, and operational efficiency.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5> Data Collection and Analysis Methods  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand different types of data (qualitative vs quantitative) and how to gather it through surveys, interviews, analytics tools, and customer behavior tracking.</p>
                                                   

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Creating Visualizations That Communicate Insights  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to transform complex datasets into understandable visuals like dashboards, graphs, and charts to support strategic business conversations.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Aligning Business Decisions With Data-Driven Insights  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Master how to interpret patterns, trends, and metrics to make smarter business decisions, reduce risks, and identify growth opportunities.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                       

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 5 Content -->
                                        <div class="tab-pane fade show  " id="tab15" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Sales & Partnerships</h5>
                                                        <p class="mb-0 text-muted"> Focus on building effective sales strategies and forming partnerships that can drive business growth and open new markets.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Creating a Sales Pipeline and Closing Deals  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand the sales funnel, from prospecting and nurturing leads to closing deals effectively. Learn techniques to manage your pipeline and prioritize high-value opportunities..</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                   

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Negotiation Techniques and Managing Client Relationships  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Develop your negotiation skills to create win-win situations. Also, learn the art of maintaining long-term relationships that result in repeat business and referrals.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                       
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Building Strategic Partnerships for Growth  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to identify potential partners, negotiate terms, and maintain collaborations that can open up new markets and increase revenue streams.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->

                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 6 Content -->
                                        <div class="tab-pane fade show " id="tab16" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Operations Management
                                                        </h5>
                                                        <p class="mb-0 text-muted">Learn the fundamentals of managing business operations to ensure efficiency, quality, and cost-effectiveness in delivering products and services.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Process Optimization and Workflow Management</h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn methods like Lean, Six Sigma, and Agile to streamline processes. Understand how to identify inefficiencies and improve operational productivity.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5> Managing Supply Chains and Inventory  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Master the essentials of managing vendors, logistics, and inventory to ensure timely delivery of products while minimizing costs and wastage.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Implementing Lean Management Principles  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Explore the principles of eliminating waste, optimizing resources, and creating value from a customer’s perspective to boost organizational performance..</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 7 Content -->
                                        <div class="tab-pane fade show  " id="tab17" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Product Management</h5>
                                                        <p class="mb-0 text-muted"> Master the art of product management, from ideation to launch, ensuring your products meet market needs and deliver exceptional value.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5> Developing and Managing the Product Lifecycle </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand the phases of a product from ideation to decline. Learn how to plan product roadmaps, manage iterations, and extend product lifespans.</p>
                                                   
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5> Product-Market Fit and Customer Feedback Loops  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to assess if your product meets market needs. Use continuous feedback from users to refine offerings and achieve better product-market alignment.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Prioritizing Features and Enhancements</h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Master techniques like MoSCoW and RICE frameworks to prioritize feature development based on customer needs, business goals, and technical feasibility.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 8 Content -->
                                        <div class="tab-pane fade show  " id="tab18" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Pricing Strategies
                                                        </h5>
                                                        <p class="mb-0 text-muted">Explore effective pricing strategies that drive profitability, customer satisfaction, and competitive advantage in the marketplace.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Setting Optimal Pricing Based on Market Conditions  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to analyze competitors, customer expectations, and costs to develop pricing models that drive profitability without losing competitiveness.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                   
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Dynamic Pricing Strategies and Customer Segmentation</h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand how to implement flexible pricing strategies that adapt to demand, seasons, or different customer segments to maximize revenues.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Measuring the Impact of Pricing Decisions on Profitability  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Explore how changes in pricing affect revenue streams, customer perception, and profitability metrics using real-world data and A/B testing.
                                                        </p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 9 Content -->
                                        <div class="tab-pane fade show  " id="tab19" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Digital Marketing</h5>
                                                        <p class="mb-0 text-muted"> Get hands-on with the latest digital marketing strategies and tools to effectively promote your brand in the digital era.
                                                        </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Developing a Comprehensive Digital Marketing Plan  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn how to create end-to-end marketing strategies across platforms like Google, Facebook, LinkedIn, and Instagram to generate awareness and conversions.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Leveraging SEO, Content, and Social Media Strategies  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand how to drive organic traffic with SEO, build thought leadership with content marketing, and engage audiences through social media campaigns.</p>
                                                    
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Tracking and Optimizing Campaign Performance </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn to measure digital marketing success using KPIs like CTR, CAC, and ROI. Master tools like Google Analytics and A/B testing to refine your strategies.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 10 Content -->
                                        <div class="tab-pane fade show  " id="tab20" role="tabpanel">
                                            <div class="col-lg-12">
                                                <div class="container my-4">
                                                    <div class="row align-items-center border rounded p-3">
                                                        <div class="col-3">
                                                        <img src="assets\yc\imgs\page\about\img1.png" alt="Image" class="img-fluid rounded" style='height:150px'>
                                                        </div>
                                                        <div class="col-9">
                                                        <h5 class="mb-1">Gen AI Mastery Course</h5>
                                                        <p class="mb-0 text-muted"> A comprehensive course on generative AI, focusing on its applications, tools, and strategies for business growth and innovation.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="d-flex gap-2 flex-row  h-100">
                                                    <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>
                                                        <h5>Basics of Generative AI and Its Applications  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Get introduced to the fundamentals of Generative AI, including language models, image generation, and real-world applications across industries.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                       

                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Using AI Tools for Creative and Business Tasks  </h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Learn to practically use AI platforms like ChatGPT, Midjourney, and DALL-E to enhance marketing, design, customer support, and even content creation.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                        
                                                    </div>
                                                    <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                        <div class="icon-plan pb-10 pt-10"><img
                                                                src="assets/yc/imgs/page/homepage1/free.svg" alt="iori">
                                                        </div>

                                                        <h5>Integrating AI Into Existing Business Models for Innovation</h5>
                                                        <p class="lh-base mt-15 font-md color-grey-400">Understand how to embed AI into your workflows, from automating mundane tasks to personalizing customer experiences, thus driving innovation and efficiency.</p>
                                                        <!-- <h6 class="lh-base mt-15 font-md color-grey-400 mb-5 fw-semibold">Points.</h6> -->
                                                
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
      <!-- section-2 -->
      <section class="section mt-50 mb-50 blue-bg pt-50 pb-50"  id="section2">
        <div class="container">
          <div class="blue-bg">
            <div class="row align-items-center">  
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Startup Exposure</span>
                  <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Business fundamentals taught by those who built from scratch</h3>
                  <p class="font-md  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Learn the principles of building, scaling, and sustaining businesses directly from leaders who have navigated every stage from inception to market leadership</p>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori"  style="height:350px; width: 100%"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <!-- <div class="row align-items-center">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Choose The Best Plan</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Pick your plan. Change whenever you want.<br class="d-none d-lg-block">No switching fees between packages</p>
          </div> -->
          <div class="row mt-50">
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Solve Operational Challenges</h4>
                     
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Work hands-on with real startup operations by identifying unmet market needs, designing scalable and efficient business models, optimizing internal workflows, managing limited resources, and crafting actionable growth roadmaps that respond to dynamic business environments.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Access Strategic Mentorship</h4>
                  
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Gain direct access to seasoned founders, startup operators, and business mentors who’ve faced the ups and downs of entrepreneur. Learn how to navigate strategic inflection points, make high-impact decisions under pressure, and build businesses with long-term resilience and clarity of purpose.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Build Core Startup Capabilities</h4>
                   
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Deepen your expertise in critical startup functions including iterative product development, customer discovery and validation, lean revenue generation strategies, systems-driven operational excellence, and high-performance leadership to take ventures from concept to scale.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Network & Industry Practitioners</h4>
                      
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Engage with a dynamic community of startup founders, venture capitalists, ecosystem mentors, and experienced operators. Build meaningful connections, gain cross-sector insights, explore collaboration opportunities, and stay at the forefront of emerging trends and startup innovation.</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section-3 -->
      <section class="section mt-50 mb-50 bg-1 pb-50 pt-50" id="section3">
        <div class="container">
          <div class="bg-1">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori" style="height:350px; width: 100%"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Create and Grow Real Businesses</span>
                  <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Start Your Business From the Ground Up</h3>
                  <p class="font-md wow animate__animated animate__fadeInUp" data-wow-delay=".2s">True learning happens through action. At Young Chanakya, you will get the chance to create and manage real businesses. Apply the concepts you learn to overcome real business challenges and scale up your entrepreneurial ventures with practical insights and hands-on experience.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section ">
        <div class="container">
          <div class="row align-items-end">
            <!-- <div class="col-lg-8 col-md-8">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">From our blog</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Aenean velit nisl, aliquam eget diam eu, rhoncus tristique dolor.<br class="d-none d-lg-block">Aenean vulputate sodales urna ut vestibulum</p>
            </div> -->
          </div>
          <div class="row mt-55">
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-blog-grid card-blog-grid-2 hover-up">
                <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news1.png" alt="iori"></a></div>
                <div class="card-info"><a href="blog-detail.html">
                    <h6 class="color-brand-1">Discover Markets & Needs</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Analyze industry trends, assess competitive landscapes, and identify underserved market segments by interviewing real customers, mapping pain points, and uncovering high-impact problems worth solving in today's dynamic business environment.</p>
                  <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Technology</a><span class="date-post font-xs color-grey-300 mr-15">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span></div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
              <div class="card-blog-grid card-blog-grid-2 hover-up">
                <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news2.png" alt="iori"></a></div>
                <div class="card-info"><a href="blog-detail.html">
                    <h6 class="color-brand-1">Secure Resources & Capital</h6></a>
                    <p class="font-sm color-grey-500 mt-20">Formulate a go-to-market plan, build reliable supply partnerships, and structure smart funding strategies through early-stage financial modeling, lean resource planning, and hands-on experience with real-world sourcing and operational constraints.</p>
                  <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Marketting</a><span class="date-post font-xs color-grey-300 mr-15">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span></div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-blog-grid card-blog-grid-2 hover-up">
                <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage1/news2.png" alt="iori"></a></div>
                <div class="card-info"><a href="blog-detail.html">
                    <h6 class="color-brand-1">Master Business Essentials</h6></a>
                    <p class="font-sm color-grey-500 mt-20">Participate in expert-led workshops focused on essential startup foundations, from revenue modeling and pricing strategies to customer acquisition, operations planning, key metrics, and managing key growth metrics. </p>
                  <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">Media</a><span class="date-post font-xs color-grey-300 mr-15">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span></div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
              <div class="card-blog-grid card-blog-grid-2 hover-up">
                <div class="card-image img-reveal"><a href="blog-detail.html"><img src="assets/yc/imgs/page/homepage2/news3.png" alt="iori"></a></div>
                <div class="card-info"><a href="blog-detail.html">
                    <h6 class="color-brand-1">Pitch & Raise Capital</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Present your venture to real investors, receive strategic feedback from seasoned industry experts, and unlock milestone-based funding tied to execution, traction, and your ability to demonstrate market demand and business viability.</p>
                  <!-- <div class="mt-20 d-flex align-items-center border-top pt-20"><a class="btn btn-border-brand-1 mr-15" href="blog.html">SEO</a><span class="date-post font-xs color-grey-300 mr-15">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span></div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section-4 -->
      <section class="section mt-50 mb-50 pt-50 pb-50" style="background-color:#024430" id="section4">
        <div class="container">
          <div class="bg-brand-1 ">
            <div class="row align-items-center">  
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Sector-Specific & Functional Expertise</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Become an Expert in Tomorrow’s Leading Sectors</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Deepen your expertise in high-demand sectors with action-packed boot camps, real-world challenges, and skill-building workshops.</p>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori"  style="height:350px; width: 100%"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
            <div class="row">
            <!-- <div class="col-lg-12 text-center">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">What We Offer</h2>
                <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                What makes us different from others? We give holistic solutions<br class="d-none d-lg-block">
                with strategy, design & technology.
                </p>
            </div> -->
            </div>
            <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 head-bg-brand-2">
                <div class="card-offer-style-3 ">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Sector-focused Mastery </h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">Gain hands-on expertise in vital areas like product metrics, financial modeling, retail operations, and retention marketing to set yourself apart in any sector.</p>
                    
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                <div class="card-offer-style-3 head-bg-brand-2">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Lead with Future Technologies</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">Gain hands-on expertise in vital areas like product metrics, financial modeling, retail operations, and retention marketing to set yourself apart in any sector.</p>
                   
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 head-bg-2">
                <div class="card-offer-style-3 ">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/business.svg" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1"> Winning Sales Experiences</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">Take a product to market, engage with real buyers, and refine your ability to sell, pitch, and close deals while navigating the fast-paced challenges of real-world commerce.</p>
                  
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 head-bg-5">
                <div class="card-offer-style-3 ">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Industry-Focused Events</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">Attend sector-specific events, panel discussions, and expert-led sessions that offer deep insights into industries such as fintech, e-commerce, health, etc., helping you grow in your domain.</p>
                   
                    </div>
                </div>
                </div>
            </div> <!-- End row -->
            </div>
        </div>
      </section>


    </main>

    @include('layouts.footer')
    @include('layouts.script')

</body>

</html>

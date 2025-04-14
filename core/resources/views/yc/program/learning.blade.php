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
                                                        <h3 class="fw-semibold mb-3">Master Data Skills for Impact</h3>
                                                        <h6 class="fw-semibold mb-3 text-gray">In today’s digital era, data is omnipresent
                                                        <span class="text-success">and knowing how to leverage it can be a game-changer.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" > At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn to identify key data, extract and analyze datasets, and uncover meaningful insights</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Master the art of visual storytelling to clearly present your findings</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Use data-driven insights to guide strategic decisions, experiments, and impactful business actions</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Industry-Standard Tools</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Personalized Mentorship</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Hands-on <br>Experience</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 2 Content -->
                                        <div class="tab-pane fade show " id="tab2" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Understand Customers to Build Solutions</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">One of Amazon’s key leadership principles is deeply understanding your customer—their pain points, motivations, and alternatives—
                                                        <span class="text-success">as the foundation for building effective solutions.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Define and communicate clear customer personas for a product or service.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Conduct thorough user research, interpret insights, and understand customer messaging.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Use frameworks like JTBD (Job-To-Be-Done), User Stories, and User Quotes to define user requirements</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Learn from Experts</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Real Customer Interactions</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Customer Discovery Experience</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 3 Content -->
                                        <div class="tab-pane fade show " id="tab3" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master Communication for Career Growth</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Effective communication with team members, senior leadership, and external stakeholders is the most important predictor of career growth
                                                        <span class="text-success">especially as automation increases. This skill will serve you for life.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Confidently represent yourself and your ideas with clear and concise articulation.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Write compelling, brief, and purpose-driven documents.</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Influence without authority at the workplace.</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Business Storytelling</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Public Speaking Practice</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">1:1 Coaching on Presence</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 4 Content -->
                                        <div class="tab-pane fade show " id="tab4" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master the Art of Problem-Solving</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">This is “the only thing worth mastering.” Understanding problems at their core, identifying key components,
                                                        <span class="text-success">and building solutions is vital in startups’ ambiguous environments.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Deeply understand and communicate core problems</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Break down problems using frameworks like MECE and 80/20</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Identify key problem-solving levers and prioritize efforts on identified issues</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">100+ Business Case Breakdowns</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">50+ Hours of Problem-Solving Workshops</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Group Discussions on Business Trends</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 5 Content -->
                                        <div class="tab-pane fade show " id="tab5" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master Core Business Thinking</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">“What will it really take for this business to be successful?” is a nuanced question,
                                                        <span class="text-success">the answer to which lies at the intersection of core business domains</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Grasp and apply essential business frameworks and concepts</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand core business models, metrics, and flywheels</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Analyze revenue, cost, LTV, CAC, and other levers that move the needle</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">500+ Hours of Expert Lectures</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Live Startup Projects with Founders</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">100+ Business Case Studies in Teams</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 6 Content -->
                                        <div class="tab-pane fade show " id="tab6" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Build & Launch Like a Startup</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">To succeed in high-growth startups, the key is to launch fast, fail fast, listen to customers, and continuously iterate on your product. 
                                                        <span class="text-success">This agile approach contrasts with traditional methods but is fundamental to the success of every major tech startup.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Define hypotheses, launch experiments, and build solutions based on customer needs</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Develop a Minimum Viable Product (MVP) and craft a GTM strategy to secure your first 100 customers</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Create clear success metrics, track them, and iterate solutions based on feedback</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">40+ Hours of PM Coursework</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Launch Real Products with YC Startup Lab</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Agile Scrum Certification Included</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 7 Content -->
                                        <div class="tab-pane fade show " id="tab7" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master the Science of Selling</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Learn how to sell confidently in both B2C and B2B contexts, using practical strategies that drive results.
                                                        <span class="text-success">From building funnels to real-world revenue generation, this module prepares you for any sales challenge..</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand the sales process across both B2C and B2B landscapes</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build effective sales funnels by working backwards from the audience and product</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Design a practical sales strategy to acquire the first 100 customers</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">40+ Hours of Sales Coursework</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">1-Day Sales Challenges with Top Brands</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Earn 5L+ Through Dropshipping Challenge</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 8 Content -->
                                        <div class="tab-pane fade show " id="tab8" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master End-to-End Execution</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Startups thrive on action-takers—those who plan, own, and deliver outcomes.
                                                        <span class="text-success">Learn to build and manage business processes from scratch and become truly indispensable at the workplace.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Understand how to set up and manage business processes independently</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Break down customer journeys and define interventions at each conversion stage</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build trackers, success metrics, and task flows for smooth execution</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">25+ Hours of Process Management Workshops</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Internship Opportunities Owning Real Startup Processes</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Manage Live Business Processes in Term 1</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 9 Content -->
                                        <div class="tab-pane fade show " id="tab9" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Master Sector-Specific Insights.</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">To thrive as a founder or startup leader, understanding how sectors operate, 
                                                        <span class="text-success">including business models and key levers, is essential for building successful ventures.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Grasp major business drivers and levers across sectors</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Explore leading business models within specific industries</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Learn how to evaluate a startup’s potential for success in a sector</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Sector Thesis Writing with Top VC Partners</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Student-Led Sector-Specific Business Clubs</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">including business models and key levers, is essential for building successful ventures.</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab 10 Content -->
                                        <div class="tab-pane fade show " id="tab10" role="tabpanel">
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                         <h3 class="fw-semibold mb-3">Embrace the Power of AI</h>
                                                        <h6 class="fw-semibold mb-3 text-gray">Artificial Intelligence is transforming industries and shaping the future.
                                                        <span class="text-success"> Stay ahead by mastering core AI concepts and their real-world applications.</span></h6>
                                                        <div class="mb-3 mt-10" style="font-size: 1.2em;" >At Young Chanakya, by the end of the program, you will:</div>
                                                        <ul style="list-style-type: none; padding-left: 20px;">
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Grasp the foundational principles behind AI technologies</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Analyze real-world use cases and their impact</span>
                                                            </li>
                                                            <li style="font-size: 1.2em; margin-bottom: 10px; position: relative; padding-left: 30px;">
                                                                <span class="lh-sm"><span style="position: absolute; left: 0; top: 0; font-size: 1.2em; color: green;" class="mr-3">&#10003;</span>Build and launch prototypes for micro-SaaS AI products</span>
                                                            </li>
                                                        </ul>
                                                        <!-- Image Cards -->
                                                        <div class="row mt-50">
                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/certification.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Participate in AI-Focused Hackathons</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/conference.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Develop Gen AI Products at the Mesa AI Lab</h6>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                                                <div class="card-small">
                                                                    <div class="card-image">
                                                                        <a href="#">
                                                                            <div class="box-image"><img src="assets/yc/imgs/page/homepage3/research.png" alt="iori"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="card-info">
                                                                        <a href="#">
                                                                            <h6 class="color-brand-1 icon-up">Network with Leading AI Experts from India’s Startup Ecosystem</h6>
                                                                        </a>
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
                    <p class="font-md color-grey-500 mb-15">Gain in-depth knowledge of marketing, finance, and accounting—core principles essential for establishing a strong foundation.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
                    <h4 class="color-brand-1 mb-15">Hands-on Startup Experience</h4>
                    <p class="font-md color-grey-500 mb-15">Work closely with founders and business leaders to gain insight into real-world decision-making processes..</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
                    <p class="font-md color-grey-500 mb-15">The best learning comes from direct experience. Build, operate, and scale businesses at Young Chanakya.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
                    <p class="font-md color-grey-500 mb-15">Explore distinct industries and functions through specialized workshops, boot camps, and practical challenges.</p>
                    <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
      <section class="section mt-50 pt-50 pb-50" style="background-color:#024430">
        <div class="container">
          <div class="bg-brand-1">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori" style=" width: auto;"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business Fundamentals</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Integrate with strategy, marketing, operations, finance, and accounting</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Dive deep into the essentials that lay the groundwork for successful ventures. Learn to combine core business principles with real-world insights. Empower yourself with the tools to navigate complex business landscapes while making data-backed decisions that drive success.</p>

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
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab11" type="button" role="tab">
                                                <span>
                                                Power of Brands</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab12" type="button" role="tab">
                                                <span>
                                                Business Storytelling</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab13" type="button" role="tab">
                                                <span>
                                                VC Essentials</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab14" type="button" role="tab">
                                                <span>
                                                Data-Driven Decision Making</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab15" type="button" role="tab">
                                                <span>
                                                Sales & Partnerships</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab16" type="button" role="tab">
                                                <span>
                                                Operations Management</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab17" type="button" role="tab">
                                                <span>
                                                Product Management</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab18" type="button" role="tab">
                                                <span>
                                                Pricing Strategies</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab19" type="button" role="tab">
                                                <span>
                                                Digital Marketing</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                                            <a id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab20" type="button" role="tab">
                                                <span>
                                                Gen AI Mastery Course</span>
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
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
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Harness the Power of Branding</h5>
                                                <p class="lh-base mt-15">Understand how branding can either elevate or undermine a product, and learn how to build strong customer connections through enhanced brand touchpoints.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Develop a Strategic Brand Portfolio</h5>
                                                <p class="lh-base mt-15">Discover best practices in managing a brand portfolio, differentiate between launching a new brand or extending an existing one, and choose the right approach for introducing new products.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Track and Grow Your Brand</h5>
                                                <p class="lh-base mt-15">Learn to measure brand health, track awareness and market share, and construct strategic plans to defend against competitors and drive growth.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 2 Content -->
                                        <div class="tab-pane fade show  " id="tab12" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Master Conflict & Change Management through Storytelling</h5>
                                                <p class="lh-base mt-15">Navigate challenging situations like conflict and change by applying storytelling techniques that build empathy and understanding.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Level-Up Your Communication with Data-Driven Stories</h5>
                                                <p class="lh-base mt-15">Learn to create impactful stories with data visualization, and leverage personal branding to position yourself as an influential communicator.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Grasp the Indian VC Landscape and Investment Strategies</h5>
                                                <p class="lh-base mt-15">Gain insights into the Indian venture capital ecosystem, understanding how VCs operate, their investment focus areas, and the strategies that drive funding decisions.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 3 Content -->
                                        <div class="tab-pane fade show " id="tab13" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Craft Business Narratives with Neuroscience Insights:</h5>
                                                <p class="lh-base mt-15">Use neuroscience-backed storytelling techniques to create powerful narratives that resonate with audiences & influences decision making.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Build Expertise in Pitch Decks and Investor Engagement</h5>
                                                <p class="lh-base mt-15">Learn the key components of creating compelling pitch decks that capture investor attention. Understand how to tailor your pitch to different types of investors and funding stages to maximize your chances of success.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Develop Advanced Skills in Funding, Valuation, and Investment Terms</h5>
                                                <p class="lh-base mt-15">Identify the stages of funding and various types of investors, from angel investors to institutional VCs. Deep dive into startup valuation methods, investment terms, and learn to craft investment strategies that align with market dynamics.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 4 Content -->
                                        <div class="tab-pane fade show  " id="tab14" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Master Data Trends and Analytical Techniques</h5>
                                                <p class="lh-base mt-15">Understand core data concepts like trends, variability, and correlation, building a strong foundation in data analysis that’s essential for decision-making.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Apply Data to Real-World Business Challenges</h5>
                                                <p class="lh-base mt-15">Leverage data analysis tools such as regression and hypothesis testing to solve real-world problems, driving better business strategy and entrepreneurial decisions.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Develop Confidence in Data-Driven Strategy</h5>
                                                <p class="lh-base mt-15">Learn to transform data into actionable insights, using advanced analytical methods to make informed decisions that directly impact business growth and research outcomes.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 5 Content -->
                                        <div class="tab-pane fade show  " id="tab15" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Master the Method of Modern Selling</h5>
                                                <p class="lh-base mt-15">Learn a structured, repeatable sales method designed to help anyone sell tech-based products confidently, regardless of their background..</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Excel in Customer-Facing Roles</h5>
                                                <p class="lh-base mt-15">Build the skills and confidence to thrive in future client-facing roles and navigate the complexities of selling rapidly evolving tech products and services.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Tackle the Complexities of Tech Sales</h5>
                                                <p class="lh-base mt-15">Understand the unique challenges of selling tech-based products, such as explaining non-tangible benefits, handling fast product evolution, and overcoming low brand recall.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 6 Content -->
                                        <div class="tab-pane fade show " id="tab16" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Strategic Importance of Operations</h5>
                                                <p class="lh-base mt-15">Understand how operational decisions impact a firm’s overall strategy, integrating with key areas like finance, marketing, and product delivery to drive competitive advantage.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Master Process Mapping & Flow Management:</h5>
                                                <p class="lh-base mt-15">Learn how to visualize and manage business process flows, identify bottlenecks, and enhance process efficiency to meet organizational goals.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Continuous Improvement Systems</h5>
                                                <p class="lh-base mt-15">Develop the ability to implement a culture of continuous improvement within operations, ensuring that processes remain responsive, efficient, and adaptable over time.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 7 Content -->
                                        <div class="tab-pane fade show  " id="tab17" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Navigate the Full Product Lifecycle</h5>
                                                <p class="lh-base mt-15">Understand the entire product lifecycle, from conceptualization to market launch, and master essential Product Management skills needed to turn ideas into reality.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Craft Customer-Centric Solutions</h5>
                                                <p class="lh-base mt-15">Learn how to connect deeply with customers, derive insights, develop product strategies, and build MVPs while considering user psychology and design.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Master Practical PM Skills</h5>
                                                <p class="lh-base mt-15">Gain hands-on experience in building wireframes, managing stakeholders, tracking product metrics, and leveraging data—all while honing interview skills and industry frameworks to succeed as a PM.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 8 Content -->
                                        <div class="tab-pane fade show  " id="tab18" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Master Pricing Strategies for Growth</h5>
                                                <p class="lh-base mt-15">Learn to overcome monetization mindset barriers and design effective pricing structures to align with business goals and maximize revenue.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Positioning and Packaging for Competitive Edge</h5>
                                                <p class="lh-base mt-15">Understand the role of positioning in pricing strategies and develop customer-aligned packaging to enhance product value and market competitiveness.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Data-Driven Pricing Decisions</h5>
                                                <p class="lh-base mt-15">Gain expertise in using pricing research methods and selecting optimal price variables to make informed, profitability-driven decisions.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 9 Content -->
                                        <div class="tab-pane fade show  " id="tab19" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Campaign Objectives & Goals</h5>
                                                <p class="lh-base mt-15">Learn to analyze consumer funnels using the RACE framework (Reach, Act, Convert, Engage). Work with ads from companies like CRED, Epigamia, and Mesa to identify objectives and align campaign goals..</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Consumer Journey Mapping</h5>
                                                <p class="lh-base mt-15">Understand ad effectiveness by exploring landing pages, building consumer personas, and plotting the ideal customer journey across platforms.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>Media Planning & Budgeting</h5>
                                                <p class="lh-base mt-15">Master media selection, planning, and budget allocation while linking these decisions to campaign funnels. Includes hands-on exercises for media design, digital metrics, and content strategy.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Tab 10 Content -->
                                        <div class="tab-pane fade show  " id="tab20" role="tabpanel">
                                        <div class="col-lg-12">
                                            <div class="d-flex gap-2 flex-row  h-100">
                                            <div class="flex-fill cards-bg col-lg-4  blue-bg p-4 rounded ">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                <h5>Master Advanced Generative AI Techniques & Applications</h5>
                                                <p class="lh-base mt-15">Dive deep into advanced prompt engineering, model capabilities, sector-specific use cases, and real-world integration challenges. Hands-on exercises will build expertise in tailoring AI solutions across industries.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  v-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                               
                                                <h5>Custom GPT Development & Enterprise AI Tools</h5>
                                                <p class="lh-base mt-15">Learn to design, develop, and deploy custom GPT models as internal tools, manage the AI development lifecycle, and tackle user acceptance and testing..</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
                                            </div>
                                            <div class="flex-fill cards-bg col-lg-4  o-bg p-4 rounded">
                                                <div class="icon-plan pb-10 pt-10"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                                                
                                                <h5>AI Strategy & Leadership</h5>
                                                <p class="lh-base mt-15">Gain insights into integrating AI into executive decision-making, evaluate AI startups, and lead agile AI initiatives through action sprints, iterative refinement, and strategic planning.</p>
                                                <!-- <h6 class="lh-base mt-15 mb-5 fw-semibold">Points.</h6> -->
                                                <!--<ul class="mt-15 mb-5">
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hello world hello world</li>
                                                    <li class="mb-1">
                                                    <svg class="w-6 h-6 icon-16 me-2" fill="none" stroke="green" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>hwllo world hello world</li>
                                                </ul>-->
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
      <section class="section mt-50 mb-50 pt-50 pb-50" style="background-color:#024430">
        <div class="container">
          <div class="bg-brand-1 ">
            <div class="row align-items-center">  
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Hands-on Startup Experience</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Collaborate with founders and startup leaders</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Gain direct exposure to the dynamic world of startups. Through hands-on experience, interact with entrepreneurs and senior leaders, immersing yourself in real decision-making processes. Build a strong understanding of the challenges faced by startups and how to tackle them with innovative solutions.</p>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori" style=" width: auto;"></div>
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
                      <h4 class="color-brand-1">Startup Case on Campus</h4>
                      <p class="font-md color-grey-400">Real Startup<br> Sprint</p>
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Work hands-on with a real-world case handed to you by a startup leader. Over four days, brainstorm with your team, build strategic solutions, present to the founder, and refine your ideas based on live feedback—all in a dynamic classroom setup.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Business Strategy Lab</h4>
                      <p class="font-md color-grey-400">Strategic Thinking Mastery</p>
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Tackle an actual business challenge from a startup CXO over four weeks. Research deeply, collaborate with mentors, and craft a strategy that you’ll present to the startup team—sharpening your problem-solving and strategic thinking in the process.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">VC Analyst Practicum</h4>
                      <p class="font-md color-grey-400">Investor Mindset Training</p>
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Step into the shoes of a venture capitalist by selecting a pre-seed startup and building a solid investment thesis. With mentorship from a real VC, you’ll present your case to investors and gain valuable critique through immersive feedback sessions.</span></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-plan-style-2 hover-up">
                <div class="card-plan">
                  <div class="card-image-plan">
                    <div class="icon-plan"><img src="assets/yc/imgs/page/homepage1/free.svg" alt="iori"></div>
                    <div class="info-plan">
                      <h4 class="color-brand-1">Mesa Startup Lab</h4>
                      <p class="font-md color-grey-400">Build &<br> Launch</p>
                    </div>
                  </div>
                  <div class="box-day-trial"><span class="font-md color-grey-500">Launch a real business from scratch, define a GTM strategy, and acquire your first users. With mentorship, resources, and a structured approach, you’ll get hands-on experience in ideating, building, launching, and scaling your very own venture.</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section-3 -->
      <section class="section mt-50 mb-50 pb-50 pt-50" style="background-color:#024430">
        <div class="container">
          <div class="bg-brand-1">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori" style=" width: auto;"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Create and Grow Real Businesses</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Develop, manage, and scale your own businesses</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">True learning happens through action. At Young Chanakya, you will get the chance to create and manage real businesses. Apply the concepts you learn to overcome real business challenges and scale up your entrepreneurial ventures with practical insights and hands-on experience.</p>

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
                    <h6 class="color-brand-1">Identify Market Opportunities & Customer Pain Points</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Develop a keen eye for spotting market gaps and understanding real customer pain points. Learn to leverage these insights to create solutions that resonate with your target audience./p>
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
                    <h6 class="color-brand-1">Secure Supply & Funding</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Apply your skills in a high-stakes environment, aiming for a ₹5 lakh revenue target. Gain hands-on sales experience at our annual flea market, where you’ll pitch directly to customers, sharpen your sales tactics, and navigate real-world challenges.</p>
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
                    <h6 class="color-brand-1">Workshops for Business Fundamentals</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Strengthen your core business knowledge through interactive workshops covering marketing, content strategy, and sales. These sessions will equip you with actionable strategies to drive success. </p>
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
                    <h6 class="color-brand-1">Pitch to Investors & Unlock Milestone-Based Funding</h6></a>
                  <p class="font-sm color-grey-500 mt-20">Learn to pitch like a pro by presenting your ideas to an Investment Committee. Unlock milestone-based funding and practice communicating your vision clearly and confidently.</p>
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
      <section class="section mt-50 mb-50 pt-50 pb-50" style="background-color:#024430">
        <div class="container">
          <div class="bg-brand-1 ">
            <div class="row align-items-center">  
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Sector-Specific & Functional Expertise</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Deep dive into specialized industries and functions</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Expand your expertise by engaging in workshops, boot camps, and challenges tailored to specific sectors and business functions. Gain sector-specific knowledge and apply these insights to drive impactful business strategies, positioning yourself as a leader in your chosen field.</p>

                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori" style=" width: auto;"></div>
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
                        <h4 class="color-brand-1">Sector-specific immersions</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">stay ahead of the curve by accessing new-age tech, from building AI chatbots to leveraging Generative AI, to mastering tools like Tableau.</p>
                    
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                <div class="card-offer-style-3 head-bg-brand-2">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Cutting-edge tools & concepts</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">stay ahead of the curve by accessing new-age tech, from building AI chatbots to leveraging Generative AI, to mastering tools like Tableau.</p>
                   
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 head-bg-2">
                <div class="card-offer-style-3 ">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/business.svg" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Real-world sales challenges</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">get hands-on experience by taking a product into the market and learning how to sell to real customers making real revenue.</p>
                  
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 head-bg-5">
                <div class="card-offer-style-3 ">
                    <div class="card-head" style="border-radius:8px">
                    <div class="card-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></div>
                    <div class="carrd-title">
                        <h4 class="color-brand-1">Industry-focused hackathons</h4>
                    </div>
                    </div>
                    <div class="card-info">
                    <p class="font-sm color-grey-500 mb-15">these 36+ hour immersions offer deep sector insights, pushing you to innovate & deliver solutions while building expertise in high-demand fields.</p>
                   
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

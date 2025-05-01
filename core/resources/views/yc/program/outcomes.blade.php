
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
    <title>Outcomes</title>
</head>
<style>
    .card-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
    }
    .card-column {
        flex: 0 0 calc(20% - 16px); /* 5 cards per row with spacing */
        max-width: calc(20% - 16px);
    }

    @media (max-width: 992px) {
        .card-column {
            flex: 0 0 48%;
            max-width: 48%;
        }
    }

    @media (max-width: 576px) {
        .card-column {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
<body>
    <!-- @include('layouts.preload') -->
    @include('layouts.header')
    <main>
        <!-- hero -->
        <section class="section banner-6">
            <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6 d-none d-xl-block">
                <div class="box-banner-6">
                    <div class="img-testimonials-1 shape-1"><img src="assets/yc/imgs/page/homepage6/testimonial.png" alt="yc"></div>
                    <div class="img-testimonials-2 shape-2"><img src="assets/yc/imgs/page/homepage6/testimonial2.png" alt="yc"></div><img class="img-main" src="assets/yc/imgs/page/blog/Outcome_hero.png" alt="yc">
                </div>
                </div>
                <div class="col-xl-6">
                <div class="box-banner-right-home6"><span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".s">Innovation. Leadership. Startups.</span>
                    <h1 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Shaping the Next Generation of Leaders</h1>
                    <div class="row">
                    <div class="col-lg-10">
                        <p class="font-md color-grey-500 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Young Chanakya builds entrepreneurial talent, equipping future founders and leaders to launch successful ventures or lead key initiatives at top-tier startups. </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Our Vision of Success -->
        <section class="section mt-50 mb-50">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s"> Our Vision of Success</span>
                <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s"> Building Bold Thinkers for a Changing World</h3>
                <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Young Chanakya blends real-world execution with modern business thinking to prepare future leaders and founders to lead, scale, and innovate in dynamic markets, going far beyond the limits of traditional education.</p>
                <div class="mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <ul class="list-ticks">
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Empowering leadership
                    </li>
                    <li>  
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Real-world experience
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Growth mindset
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Cross-industry exposure
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Community building
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Cutting-edge technology
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Strong networking
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Data-driven decisions
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Data-driven decisions
                    </li>
                    <li>
                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>Future-ready skills
                    </li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-7">
                <div class="box-imgs-branding text-end">
                    <div class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><img class="img-round-top" src="assets/yc/imgs/page/homepage10/img.png" alt="yc"></div>
                    <div class="img-branding-small wow animate__animated animate__fadeIn" data-wow-delay=".4s"><img class="img-round-top-small" src="assets/yc/imgs/page/homepage10/img2.png" alt="yc"></div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- journey -->
        <section class="section mt-100" style="background-color: #024430;">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-50">
                <h2 class="text-white mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Your Roadmap to Startup Success</h2>
                <p class="font-lg text-white wow animate__animated animate__fadeIn" data-wow-delay=".2s">Our step-by-step journey will guide you from ideation to scaling your startup, ensuring you have all the tools and <br class="d-none d-lg-block">guidance necessary for every stage of your business development</p>
                </div>
            </div>
            
            <div class="mt-50">
    <div class="card-row">
        <!-- Card 1 -->
        <div class="card-column wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-offer-2 p-3 hover-up" style="background-color:#ffffff">
                <div class="card-image-bottom mb-35">
                    <img class="w-100 bd-rd16" src="assets/yc/imgs/page/homepage11/img2.png" alt="yc">
                </div>
                <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Ideation</h4>
                    <p class="font-sm color-grey-500 mb-15">Learn to identify viable startup ideas and evaluate them against critical criteria. Ask the essential questions every startup founder should consider and refine your problem-solving approach with the help of experienced mentors and grow your ideas </p>
                     
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card-column wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-offer-2 p-3 hover-up" style="background-color:#ffffff">
                <div class="card-image-bottom mb-35">
                    <img class="w-100 bd-rd16" src="assets/yc/imgs/page/homepage11/img2.png" alt="yc">
                </div>
                <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Market Research</h4>
                    <p class="font-sm color-grey-500 mb-15">Dive deep into understanding your target market, customer needs, and competitive landscape. Analyze trends, gather insights, and assess the potential demand for your solution to ensure you’re building something that truly resonates with your audience.</p>
                     
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card-column wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-offer-2 p-3 hover-up" style="background-color:#ffffff">
                <div class="card-image-bottom mb-35">
                    <img class="w-100 bd-rd16" src="assets/yc/imgs/page/homepage11/img2.png" alt="yc">
                </div>
                <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Prototyping</h4>
                    <p class="font-sm color-grey-500 mb-15">Develop your MVP (Minimum Viable Product) and validate your idea through user feedback. We provide the tools, guidance, and resources you need to create a solution that addresses real-world problems and can evolve based on feedback.</p>
                     
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card-column wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-offer-2 p-3 hover-up" style="background-color:#ffffff">
                <div class="card-image-bottom mb-35">
                    <img class="w-100 bd-rd16" src="assets/yc/imgs/page/homepage11/img2.png" alt="yc">
                </div>
                <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Go-to-Market</h4>
                    <p class="font-sm color-grey-500 mb-15">Acquire your first customers through a combination of digital and offline channels such as social media, performance marketing, and direct sales. Benefit from personalized mentors to refine your strategy, optimize outreach, & ensure customer engagement.
                    </p>
                     
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card-column wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer card-offer-2 p-3 hover-up" style="background-color:#ffffff">
                <div class="card-image-bottom mb-35">
                    <img class="w-100 bd-rd16" src="assets/yc/imgs/page/homepage11/img2.png" alt="yc">
                </div>
                <div class="card-info">
                    <h4 class="color-brand-1 mb-15">Growth</h4>
                    <p class="font-sm color-grey-500 mb-15">Focus on scaling by identifying the most effective growth channels and optimizing your customer acquisition process. Hone your understanding of customer personas and build optimized sales funnels to accelerate growth.</p>
                     
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </section>
        <!-- Skills+outcomes combined -->
        <section class="section mt-20">
          <div class="container">
            <div class="row mt-50 align-items-center card-no-border">
              <div class="col-lg-6 mb-30">
                <div class="title-line mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".0s">What We Do, What You Get</div>
                <h2 class="color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Transformative Skills. Real-World Outcomes.</h2>
              </div>

              <!-- Card 1 -->
              <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-offer card-we-do hover-up">
                  <div class="card-image"><img src="assets/yc/imgs/page/homepage2/we-do3.png" alt="yc"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="#">Business Fundamentals Mastery</a></h4>
                    <p class="font-md color-grey-500 mb-5">Gain a solid foundation in essential business concepts, from branding to financial management, and learn how to apply them to your startup.</p>
                   
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <div class="card-offer card-we-do hover-up">
                  <div class="card-image"><img src="assets/yc/imgs/page/homepage2/we-do.png" alt="yc"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="#">Customer-Centric Thinking</a></h4>
                    <p class="font-md color-grey-500 mb-5">Develop a customer-first mindset by understanding market needs, identifying target customers, and adapting your product to solve real pain points.</p>
                   
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-offer card-we-do hover-up">
                  <div class="card-image"><img src="assets/yc/imgs/page/homepage2/we-do4.png" alt="yc"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="#">Data-Driven Strategy</a></h4>
                    <p class="font-md color-grey-500 mb-5">Learn how to make informed decisions using data, optimize your product offerings, and measure business performance for sustained growth.</p>
                   
                  </div>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <div class="card-offer card-we-do hover-up">
                  <div class="card-image"><img src="assets/yc/imgs/page/homepage2/we-do2.png" alt="yc"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="#">Strategic Networking</a></h4>
                    <p class="font-md color-grey-500 mb-5">Build a powerful network of mentors, peers, and investors to support your business journey, exchange ideas, and unlock opportunities.</p>
                   
                  </div>
                </div>
              </div>

              <!-- Card 5 -->
              <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="card-offer card-we-do hover-up">
                  <div class="card-image"><img src="assets/yc/imgs/page/homepage2/we-do5.png" alt="yc"></div>
                  <div class="card-info">
                    <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="#">Operational Excellence</a></h4>
                    <p class="font-md color-grey-500 mb-5">Master operational skills such as resource management, scaling processes, and navigating challenges to keep your startup on track.</p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Meet the Chanakyas -->
        <section class="section mt-90">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-lg-6">
            <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Industry Experts
            </h6>
            <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Meet the
              Chanakya's</h2>
          </div>
          <div class="col-lg-6 col-md-6 text-md-end box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
            <a class="btn btn-brand-1 hover-up" href="{{ route('become-a-chanakya') }}">
              Become a Chanakya
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </a>
          </div>
        </div>
        <div class="row align-items-start">
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 wow animate__animated animate__fadeIn" data-wow-delay=".s">
            <div class="card-member-2 mb-30" style="padding:10px;  max-height:250px; overflow:hidden; border-radius:10px;">
              <div class="card-image">
                <img src="{{asset('assets/yc/imgs/page/homepage8/member.png')}}" alt="yc" style="height:230px; width:100%; object-fit:cover; border-radius:10px;">
              </div>
              <div class="card-info bg-1" style="padding:10px;">
                <a class="font-lg-bold color-brand-1" href="#">Steven Jobs</a>
                <div class="d-flex align-items-center">
                  <p class="font-xs color-grey-200" style="margin-bottom: 0; margin-right: 8px;">Designer</p>
                  <div class="list-socials mt-0">
                    <a class="icon-socials icon-linkedin" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container mt-80">
        <div class="row">
          <div class="col-xl-12 mb-30">
            <div class="card-radius-32 bg-grey-60">
              <div class="row">
                <div class="col-lg-6">
                  <div class="box-cover-pd">
                    <div class="box-image-rd-30">
                      <div class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><img class="w-100" src="assets/yc/imgs/page/homepage12/business.png" alt="yc"></div>
                      <h4 class="color-brand-1 lbl-on-top wow animate__animated animate__fadeIn" data-wow-delay=".4s">YC Business Platform</h4>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="box-cover-pd-2">
                    <h2 class="color-brand-1 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Your Launchpad for <br class="d-none d-lg-block">Real-World Success</h2>
                    <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <div class="item-number hover-up">
                        <div class="num-ele">1</div>
                        <div class="info-num">
                          <h5 class="color-brand-1 mb-5">Complete Startup Journey</h5>
                          <p class="font-md color-grey-500">Get hands-on experience through a structured learning path that covers every aspect of running a startup—from idea generation to fundraising.</p>
                        </div>
                      </div>
                    </div>
                    <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <div class="item-number hover-up">
                        <div class="num-ele">2</div>
                        <div class="info-num">
                          <h5 class="color-brand-1 mb-5">Expert-Led Guidance</h5>
                          <p class="font-md color-grey-500">Leverage the expertise of industry leaders and experienced mentors who provide invaluable insights and advice for your entrepreneurial growth.</p>
                        </div>
                      </div>
                    </div>
                    <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <div class="item-number hover-up">
                        <div class="num-ele">3</div>
                        <div class="info-num">
                          <h5 class="color-brand-1 mb-5"> Access to Capital</h5>
                          <p class="font-md color-grey-500">Access exclusive funding channels, connect with high-profile investors, and leverage capital to fuel the growth of your startup.</p>
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

      <section class="section mt-50 pt-50 pb-90">
        <div class="container">
          <div class="bg-brand-1 box-cover-video">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Community</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Ready to Transform Your Future?</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Join the Young Chanakya community today and start your journey towards becoming a leader in the world of business.</p>
                  <div class="box-button mt-30 mb-60 wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="btn btn-brand-1 hover-up bg-white text-dark" href="{{ route('become-a-chanakya') }}">Become a Chanakya</a><a class="btn btn-default font-sm-bold hover-up text-white" href="{{ route('about-chanakya') }}">Explore the Chanakya Program
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="white" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
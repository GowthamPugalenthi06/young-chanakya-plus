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
  <title>Startup</title>
  <style>
    .list-buttons-circle li a {
      font-size: 17px !important;
    }
  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  @php
    $plan = request('plan');
    $type = request('type');
@endphp
  <main class="main">
  <section class="section banner-4 bg-2">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Startup Plan</span>
              <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Fueling Early-Stage Ventures with Expert Resources</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <p class="font-md color-grey-500">Gain direct access to investor introductions, hands-on growth workshops, and tailored legal and marketing support designed to validate your idea, refine your pitch, and accelerate traction.</p>
                </div>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn btn-brand-1 hover-up"  href="{{ route('startup-membership', ['plan' => $plan, 'type' => $type]) }}" style="backgroung-color:#fff;">
                    Apply Now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
                    </svg>
                  </a>
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
    <section class="section mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              <div class="card-support">
                <div class="card-image">
                  <div class="box-circle-img">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                  </div>
                </div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-15">Share Your Startup Journey</h4>
                  <p class="font-md color-grey-500 mb-15">Showcase progress through demos, mentor feedback, and pitch events to refine your business.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              <div class="card-support">
                <div class="card-image">
                  <div class="box-circle-img">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                  </div>
                </div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-15">Be Coachable and Adaptable</h4>
                  <p class="font-md color-grey-500 mb-15"> Seek continuous feedback, apply insights, and iterate on your product and business model.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
              <div class="card-support">
                <div class="card-image">
                  <div class="box-circle-img">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                  </div>
                </div>
                <div class="card-info">
                  <h4 class="color-brand-1 mb-15">Collaborate with Peers</h4>
                  <p class="font-md color-grey-500 mb-15">Network with fellow founders, investors, and mentors through events and meetups.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50">
  <div class="container">
    <div class="text-center">
      <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Core Values</h2>
    </div>
    <div class="table-responsive table-responsive-sm table-responsive-md">
      <table class="table table-compare">
        <thead>
          <tr>
            <th class="width-30 color-success">Core</th>
            <th class="width-40">Key Takeaways</th>
            <th class="width-40">Outcomes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Business Model Innovation</td>
            <td>Understand Lean Canvas, revenue channels</td>
            <td>Create sustainable business ideas</td>
          </tr>
          <tr>
            <td>Investor Readiness</td>
            <td>Learn pitch deck structure, cap table, due diligence</td>
            <td>Approach funding with confidence</td>
          </tr>
          <tr>
            <td>Legal & Compliance</td>
            <td>Discover startup legal basics</td>
            <td>Avoid early-stage legal missteps</td>
          </tr>
          <tr>
            <td>Co-Founder Dynamics</td>
            <td>Understand co-founder agreements and team synergy</td>
            <td>Build a stable founding team</td>
          </tr>
          <tr>
            <td>GTM Strategy</td>
            <td>Learn go-to-market frameworks</td>
            <td>Reduce time to acquire your first 100 users</td>
          </tr>
          <tr>
            <td>User Research</td>
            <td>Conduct surveys, feedback loops</td>
            <td>Build products customers actually want</td>
          </tr>
          <tr>
            <td>Fundraising Bootcamps</td>
            <td>Know the types of capital available</td>
            <td>Raise funds with clarity on dilution and risk</td>
          </tr>
          <tr>
            <td>Branding & Positioning</td>
            <td>Learn storytelling, tone, and design basics</td>
            <td>Stand out in a crowded market</td>
          </tr>
          <tr>
            <td>MVP Launch</td>
            <td>Learn to launch lean and fast</td>
            <td>Build faster and reduce waste</td>
          </tr>
          <tr>
            <td>Tech Tools</td>
            <td>Get introduced to no-code and low-code tools</td>
            <td>Save dev costs and iterate quicker</td>
          </tr>
          <tr>
            <td>Incubation Access</td>
            <td>Get exposure to TIE or YC-style programs</td>
            <td>Qualify for real incubation support</td>
          </tr>
          <tr>
            <td>Pitch Practice</td>
            <td>Get regular feedback from real investors</td>
            <td>Improve story, metrics, and delivery</td>
          </tr>
          <tr>
            <td>Sales Strategy</td>
            <td>Understand B2B/B2C funnel building</td>
            <td>Build repeatable revenue models</td>
          </tr>
          <tr>
            <td>Mentorship Circles</td>
            <td>Meet founders in similar stages</td>
            <td>Learn what works without repeating mistakes</td>
          </tr>
          <tr>
            <td>PR & Growth Hacking</td>
            <td>Explore launch and marketing strategies</td>
            <td>Reach more customers organically</td>
          </tr>
          <tr>
            <td>Product-Market Fit</td>
            <td>Learn the metrics to measure and iterate</td>
            <td>Increase customer retention</td>
          </tr>
          <tr>
            <td>Hiring Basics</td>
            <td>Learn early-stage hiring & culture building</td>
            <td>Recruit better and retain longer</td>
          </tr>
          <tr>
            <td>Strategic Partnerships</td>
            <td>Learn to collaborate with colleges or orgs</td>
            <td>Extend your distribution and influence</td>
          </tr>
          <tr>
            <td>Exit Planning</td>
            <td>Understand M&amp;A and acquisition paths</td>
            <td>Be future-ready even from day one</td>
          </tr>
          <tr>
            <td>Startup Showcases</td>
            <td>Demo at curated events</td>
            <td>Get discovered by investors, customers, and partners</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section mt-80">
  <div class="container">
    <div class="box-radius-16 bg-3">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">More Benefits</h2>
        </div>
      </div>
      <div class="row mt-50">
        <!-- Investor Connects -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Investor Connects</a></h4>
              <p class="font-md color-grey-500 mb-5">Get introduced to angel investors, seed funds, and VCs through pitch days, demo nights, and curated introductions that align with your stage and sector. Increase your visibility and funding readiness.</p>
            </div>
          </div>
        </div>

        <!-- Business Clinics -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Business Clinics</a></h4>
              <p class="font-md color-grey-500 mb-5">Access expert guidance in legal, marketing, tech, and finance through clinics designed to solve your startup’s most urgent challenges. Receive tailored advice from domain experts to help refine and accelerate your strategy.</p>
            </div>
          </div>
        </div>

        <!-- Peer Circles -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Peer Circles</a></h4>
              <p class="font-md color-grey-500 mb-5">Engage with fellow founders to exchange insights, test ideas, and build collaborations. Learn from others’ experiences and scale faster with a supportive peer network facing similar challenges.</p>
            </div>
          </div>
        </div>

        <!-- Startup Showcases -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross5.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Startup Showcases</a></h4>
              <p class="font-md color-grey-500 mb-5">Promote your startup at expos, community events, and digital platforms that amplify your reach. Get noticed by media, customers, and collaborators who can boost your traction.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



      <section class="section mt-50 pt-50 pb-90">
        <div class="container">
          <div class="bg-brand-1 box-cover-video">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="img-reveal"><img class="d-block" src="assets/yc/imgs/page/homepage1/img-video.png" alt="iori"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Startup</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Accelerate Your Growth</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Access tailored resources, pitch opportunities, and investor connections designed for startups.
                  Turn your idea into a scalable business with expert support.
</p>
                  <div class="box-button-video wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-border-80 font-sm-bold hover-up"  href="{{ route('startup-membership', ['plan' => $plan, 'type' => $type]) }}">Apply Now<svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
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

</html>
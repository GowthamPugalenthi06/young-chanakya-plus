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
  <title>Executive/C-Level</title>
  <style>
    .list-buttons-circle li a {
      font-size: 17px !important;
    }
  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
  <section class="section banner-4 bg-3">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Executive/C-Level Plan</span>
              <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Unleashing C-Level Impact Through Strategic Leadership</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <p class="font-md color-grey-500">Join exclusive CXO networks, lead high-level think tanks, and mentor emerging founders to influence industry policy, foster innovation, and leave a lasting ecosystem legacy.</p>
                </div>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn btn-brand-1 hover-up" href="{{ route('executive-membership') }}" style="backgroung-color:#fff;">
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
                  <h4 class="color-brand-1 mb-15">Strategic Ecosystem Direction</h4>
                  <p class="font-md color-grey-500 mb-15">Serve on advisory boards and influence initiatives that drive business growth and innovation.</p>
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
                  <h4 class="color-brand-1 mb-15">Drive Collective Economic Impact</h4>
                  <p class="font-md color-grey-500 mb-15">   Influence policy, foster investments, and support regional and global growth initiatives.</p>
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
                  <h4 class="color-brand-1 mb-15">Mentor and Guide <br>Founders</h4>
                  <p class="font-md color-grey-500 mb-15">Share leadership wisdom, provide mentorship, and help scale companies from idea to execution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50">
  <div class="container">
    <div class="text-center">
      <h2 class="color-brand-1 mb-40 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
      Core Values
      </h2>
    </div>
    <div class="table-responsive table-responsive-sm table-responsive-md">
      <table class="table table-compare">
        <thead>
          <tr>
            <th class="width-30 color-success">Data</th>
            <th class="width-40">Key Takeaway</th>
            <th class="width-40">Outcome</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Boardroom Strategy</td>
            <td>Learn from real CEO & board experiences</td>
            <td>Improve decision-making & company direction</td>
          </tr>
          <tr>
            <td>Innovation Leadership</td>
            <td>Lead digital and business innovation in legacy companies</td>
            <td>Future-proof your organization</td>
          </tr>
          <tr>
            <td>M&A Readiness</td>
            <td>Understand buy/sell/integrate dynamics</td>
            <td>Expand or exit successfully</td>
          </tr>
          <tr>
            <td>Stakeholder Communication</td>
            <td>Practice investor relations & employee communication</td>
            <td>Inspire confidence & reduce churn</td>
          </tr>
          <tr>
            <td>Governance & Compliance</td>
            <td>Understand board and regulatory frameworks</td>
            <td>Avoid legal exposure and improve credibility</td>
          </tr>
          <tr>
            <td>Executive Coaching</td>
            <td>Access to personal growth mentors</td>
            <td>Elevate emotional intelligence & leadership style</td>
          </tr>
          <tr>
            <td>Data-Driven Leadership</td>
            <td>Adopt dashboards, OKRs, and strategic KPIs</td>
            <td>Lead with clarity and real-time insight</td>
          </tr>
          <tr>
            <td>ESG Strategy</td>
            <td>Learn to align profits with purpose</td>
            <td>Increase investor & consumer trust</td>
          </tr>
          <tr>
            <td>Leadership Branding</td>
            <td>Establish influence beyond company walls</td>
            <td>Become a thought leader in your space</td>
          </tr>
          <tr>
            <td>CX Strategy</td>
            <td>Deep-dive into customer experience</td>
            <td>Increase NPS, loyalty, and revenue</td>
          </tr>
          <tr>
            <td>Cross-industry Insights</td>
            <td>Engage with executives across domains</td>
            <td>Bring fresh perspective to stale problems</td>
          </tr>
          <tr>
            <td>Culture Building</td>
            <td>Learn people-first approaches</td>
            <td>Build a workplace that retains top talent</td>
          </tr>
          <tr>
            <td>Strategic Hiring</td>
            <td>Executive-level talent acquisition</td>
            <td>Attract game-changing team members</td>
          </tr>
          <tr>
            <td>Corporate Innovation Labs</td>
            <td>Explore internal startup accelerators</td>
            <td>Drive innovation from within</td>
          </tr>
          <tr>
            <td>Legacy & Impact</td>
            <td>Define long-term impact goals</td>
            <td>Leave behind a meaningful footprint</td>
          </tr>
          <tr>
            <td>Succession & Continuity</td>
            <td>Plan leadership transitions</td>
            <td>Protect legacy and reduce disruption</td>
          </tr>
          <tr>
            <td>Public Policy Exposure</td>
            <td>Engage in policy shaping forums</td>
            <td>Influence change at the ecosystem level</td>
          </tr>
          <tr>
            <td>Global Strategy</td>
            <td>Think beyond regional markets</td>
            <td>Make your company resilient and competitive globally</td>
          </tr>
          <tr>
            <td>Mentorship Giving</td>
            <td>Guide young founders or intra-preneurs</td>
            <td>Multiply your impact through others</td>
          </tr>
          <tr>
            <td>Investor Circles</td>
            <td>Participate in syndicates and angel networks</td>
            <td>Multiply wealth and ecosystem value simultaneously</td>
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
          <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Leadership Benefits</h2>
        </div>
      </div>
      <div class="row mt-50">
        <!-- Leadership Forums -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Leadership Forums</a></h4>
              <p class="font-md color-grey-500 mb-5">Participate in high-impact executive forums, closed-door summits, and think tanks where you influence policy, share insights, and help shape the innovation economy.</p>
            </div>
          </div>
        </div>

        <!-- Mentorship Impact -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Mentorship Impact</a></h4>
              <p class="font-md color-grey-500 mb-5">Give back meaningfully by mentoring emerging leaders and startups. Share your strategic wisdom, enable real change, and build a legacy beyond your organization.</p>
            </div>
          </div>
        </div>

        <!-- CXO Networks -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">CXO Networks</a></h4>
              <p class="font-md color-grey-500 mb-5">Gain access to elite peer networks of fellow CXOs and ecosystem builders. Collaborate, invest, and initiate joint ventures with influential decision-makers.</p>
            </div>
          </div>
        </div>

        <!-- Innovation Access -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross5.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Innovation Access</a></h4>
              <p class="font-md color-grey-500 mb-5">Stay at the forefront of industry change by engaging with promising startups, new technologies, and disruptive ideas that can inform your strategy or investments.</p>
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
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Executive/C-Level</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lead with Vision</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Connect with top industry leaders and engage in high-level mentorship and networking.
                  Shape the future of business while driving innovation and growth.
</p>
                  <div class="box-button-video wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-border-80 font-sm-bold hover-up" href="{{ route('executive-membership') }}">Apply Now<svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
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
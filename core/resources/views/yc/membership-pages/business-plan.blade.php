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
  <title>Business/Entreprenuer</title>
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
  <section class="section banner-4 bg-5">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Business/Entreprenuer Plan</span>
              <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Driving Sustainable Growth for Scaling Enterprises</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <p class="font-md color-grey-500">Leverage strategic consulting sessions, peer-led masterminds, and curated partnership opportunities that optimize operations, unlock new markets, and boost long-term profitability.

</p>
                </div>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn btn-brand-1 hover-up"  href="{{ route('entrepreneur-membership', ['plan' => $plan, 'type' => $type]) }}" style="backgroung-color:#fff;">
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
                  <h4 class="color-brand-1 mb-15">Mentor Emerging Founders</h4>
                  <p class="font-md color-grey-500 mb-15">Share your business experiences and insights to guide and support startups in their early stages.</p>
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
                  <h4 class="color-brand-1 mb-15">Lead Thought & Initiatives</h4>
                  <p class="font-md color-grey-500 mb-15"> Host sessions, create content, and contribute to industry-specific knowledge circles.</p>
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
                  <h4 class="color-brand-1 mb-15">Foster Integrity </h4>
                  <p class="font-md color-grey-500 mb-15"> Build trust through ethical leadership and cross-sector partnerships within the ecosystem.</p>
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
            <td>Scaling Operations</td>
            <td>Understand processes for growth</td>
            <td>Reduce inefficiencies and improve profit margins</td>
          </tr>
          <tr>
            <td>Digital Transformation</td>
            <td>Leverage cloud, CRM, AI, automation</td>
            <td>Become future-ready and competitive</td>
          </tr>
          <tr>
            <td>Franchise & Licensing</td>
            <td>Learn business model replication strategies</td>
            <td>Expand with lower overhead</td>
          </tr>
          <tr>
            <td>Brand Evolution</td>
            <td>Reposition or rebrand strategically</td>
            <td>Attract higher-value customers</td>
          </tr>
          <tr>
            <td>Hiring & Retention</td>
            <td>Improve talent strategies</td>
            <td>Build loyal, high-performing teams</td>
          </tr>
          <tr>
            <td>Business Financing</td>
            <td>Learn about debt, equity, and hybrid options</td>
            <td>Optimize funding for long-term growth</td>
          </tr>
          <tr>
            <td>Customer Success</td>
            <td>Understand client onboarding and engagement</td>
            <td>Improve lifetime value</td>
          </tr>
          <tr>
            <td>Advanced Sales Strategy</td>
            <td>Learn B2B/B2C selling funnels</td>
            <td>Increase conversion rates</td>
          </tr>
          <tr>
            <td>Government Grants</td>
            <td>Discover support schemes & funding</td>
            <td>Tap into incentives and reduce burn rate</td>
          </tr>
          <tr>
            <td>Product Expansion</td>
            <td>Find adjacent opportunities</td>
            <td>Diversify and grow revenue streams</td>
          </tr>
          <tr>
            <td>Supply Chain Optimization</td>
            <td>Analyze logistics and inventory</td>
            <td>Improve delivery speed and margins</td>
          </tr>
          <tr>
            <td>Negotiation Skills</td>
            <td>Practice real-world negotiation techniques</td>
            <td>Close better deals and partnerships</td>
          </tr>
          <tr>
            <td>Business Analytics</td>
            <td>Use KPIs, dashboards, and data-driven decisions</td>
            <td>Measure, pivot and scale wisely</td>
          </tr>
          <tr>
            <td>Mentorship Matching</td>
            <td>Get peer-reviewed intros and vertical-specific mentors</td>
            <td>Make better decisions faster</td>
          </tr>
          <tr>
            <td>Business Ethics</td>
            <td>Learn responsible leadership in business</td>
            <td>Build brand trust and loyalty</td>
          </tr>
          <tr>
            <td>Digital Marketing Deep Dive</td>
            <td>Learn funnel, retargeting, SEO, content</td>
            <td>Get more customers with lower CAC</td>
          </tr>
          <tr>
            <td>Strategic Planning</td>
            <td>Build quarterly or annual growth roadmaps</td>
            <td>Stay focused and execute better</td>
          </tr>
          <tr>
            <td>Productization</td>
            <td>Convert services into scalable offerings</td>
            <td>Improve margins and delivery consistency</td>
          </tr>
          <tr>
            <td>International Markets</td>
            <td>Explore export, remote delivery and compliance</td>
            <td>Tap into global scale possibilities</td>
          </tr>
          <tr>
            <td>Succession Planning</td>
            <td>Design leadership continuity plans</td>
            <td>Protect your business for the long term</td>
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
        <!-- Strategic Growth -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Strategic Growth</a></h4>
              <p class="font-md color-grey-500 mb-5">Receive personalized business advisory and growth coaching to help streamline operations, enter new markets, and optimize customer acquisition strategies for sustainable expansion.</p>
            </div>
          </div>
        </div>

        <!-- Brand Positioning -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Brand Positioning</a></h4>
              <p class="font-md color-grey-500 mb-5">Strengthen your personal and business brand through speaking opportunities, featured stories, and curated showcases that elevate your industry reputation and thought leadership.</p>
            </div>
          </div>
        </div>

        <!-- Talent Access -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Talent Access</a></h4>
              <p class="font-md color-grey-500 mb-5">Connect with ambitious student talent and early professionals eager to contribute. Build your team with individuals trained in innovation, digital tools, and entrepreneurial thinking.</p>
            </div>
          </div>
        </div>

        <!-- Networking Power -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross5.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Networking Power</a></h4>
              <p class="font-md color-grey-500 mb-5">Join a curated business community of entrepreneurs and experts. Find potential partners, service providers, and clients through targeted events and roundtable conversations.</p>
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
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business/Entreprenuer</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Scale with Confidence</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Leverage strategic insights, collaborative networks, and growth resources for business expansion.
                  Unlock new markets and maximize your enterprise's potential.
</p>
                  <div class="box-button-video wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-border-80 font-sm-bold hover-up"  href="{{ route('entrepreneur-membership', ['plan' => $plan, 'type' => $type]) }}">Apply Now<svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
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
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
  <title>Student/Volunteer</title>
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
  <section class="section banner-4 bg-1">
      <div class="container">
        <div class="banner-1">
          <div class="row align-items-center">
            <div class="col-lg-7"><span class="title-line line-48 wow animate__animated animate__fadeInUp"
                data-wow-delay=".0s">Student Plan</span>
              <h1 class="color-brand-1 mb-20 mt-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Empowering Innovators to Build Real Impact</h1>
              <div class="row">
                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <p class="font-md color-grey-500">Join immersive workshops and mentorship programs that translate classroom concepts into real-world projects, expand your professional network, and kick-start your entrepreneurial journey.</p>
                </div>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                  <a class="btn btn-brand-1 hover-up" href="{{ route('student-membership') }}" style="backgroung-color:#fff;">
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
                  <h4 class="color-brand-1 mb-15">Active Participation</h4>
                  <p class="font-md color-grey-500 mb-15">Engage in events, hands-on projects, and skill-building sessions to gain practical experience.</p>
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
                  <h4 class="color-brand-1 mb-15">Community Contribution</h4>
                  <p class="font-md color-grey-500 mb-15">  Volunteer, share knowledge, and help peers grow through collective learning.</p>
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
                  <h4 class="color-brand-1 mb-15">Continuous Learning</h4>
                  <p class="font-md color-grey-500 mb-15">Stay updated with entrepreneurial trends and share insights with peers.</p>
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
                    <td>Entrepreneurial Thinking</td>
                    <td>Learn startup mindset early</td>
                    <td>Spot real-world problems and turn them into ideas</td>
                </tr>
                <tr>
                    <td>Startup Ecosystem</td>
                    <td>Discover how investors, founders, mentors connect</td>
                    <td>Build relevant contacts to support your future</td>
                </tr>
                <tr>
                    <td>Design Thinking</td>
                    <td>Explore problem-solving frameworks</td>
                    <td>Develop empathetic and innovative solutions</td>
                </tr>
                <tr>
                    <td>Public Speaking</td>
                    <td>Present at youth panels or pitch events</td>
                    <td>Boost confidence and communication skills</td>
                </tr>
                <tr>
                    <td>Community Participation</td>
                    <td>Join like-minded student groups</td>
                    <td>Feel supported, engaged, and connected</td>
                </tr>
                <tr>
                    <td>Project-based Learning</td>
                    <td>Participate in real-world challenges</td>
                    <td>Build your resume with hands-on accomplishments</td>
                </tr>
                <tr>
                    <td>Tech Literacy</td>
                    <td>Learn practical tools (Notion, Canva, Figma)</td>
                    <td>Gain industry-applicable digital skills</td>
                </tr>
                <tr>
                    <td>Time Management</td>
                    <td>Attend productivity sessions</td>
                    <td>Get more done without burning out</td>
                </tr>
                <tr>
                    <td>Leadership Roles</td>
                    <td>Lead volunteer or event teams</td>
                    <td>Learn how to manage people and take initiative</td>
                </tr>
                <tr>
                    <td>Career Readiness</td>
                    <td>Attend career mentorship & internship workshops</td>
                    <td>Become more confident for placements and interviews</td>
                </tr>
                <tr>
                    <td>Startup Tours</td>
                    <td>Visit co-working and incubator spaces</td>
                    <td>See startup culture live and in action</td>
                </tr>
                <tr>
                    <td>Networking Skills</td>
                    <td>Meet peers, professionals, mentors</td>
                    <td>Get references and internship leads</td>
                </tr>
                <tr>
                    <td>Pitch Training</td>
                    <td>Practice storytelling and investor pitches</td>
                    <td>Improve clarity and persuasion</td>
                </tr>
                <tr>
                    <td>Portfolio Building</td>
                    <td>Showcase work through GitHub/LinkedIn</td>
                    <td>Build an online presence that speaks for your skills</td>
                </tr>
                <tr>
                    <td>Event Management</td>
                    <td>Help organize summits and sessions</td>
                    <td>Gain coordination and public handling experience</td>
                </tr>
                <tr>
                    <td>Internships & Referrals</td>
                    <td>Discover student-friendly internship leads</td>
                    <td>Land your first industry exposure</td>
                </tr>
                <tr>
                    <td>Learning Series</td>
                    <td>Attend expert sessions on emerging tech</td>
                    <td>Stay relevant in an ever-changing world</td>
                </tr>
                <tr>
                    <td>Hackathons & Ideathons</td>
                    <td>Collaborate in fast-paced team projects</td>
                    <td>Get hands-on with ideation and teamwork</td>
                </tr>
                <tr>
                    <td>Fundraising Basics</td>
                    <td>Learn seed funding and bootstrapping concepts</td>
                    <td>Understand startup economics early</td>
                </tr>
                <tr>
                    <td>Certification & Badges</td>
                    <td>Earn digital proof of learning</td>
                    <td>Build credibility on resumes and LinkedIn</td>
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
          <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Benefits</h2>
        </div>
      </div>
      <div class="row mt-50">
        <!-- Mentorship -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross2.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Mentorship</a></h4>
              <p class="font-md color-grey-500 mb-5">Gain personalized guidance from experienced entrepreneurs, educators, and startup leaders who help you navigate career decisions, develop leadership skills, and discover your strengths through real-world exposure and feedback.</p>
            </div>
          </div>
        </div>

        <!-- Career Exposure -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Career Exposure</a></h4>
              <p class="font-md color-grey-500 mb-5">Explore diverse fields through internships, innovation labs, and startup shadowing opportunities. Understand how different industries work and begin shaping your career path with practical experience and access to future employers.</p>
            </div>
          </div>
        </div>

        <!-- Community Access -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross4.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Community Access</a></h4>
              <p class="font-md color-grey-500 mb-5">Join a dynamic network of peers, mentors, and changemakers who support your growth. Collaborate on initiatives, attend curated events, and become part of a purpose-driven environment that fosters confidence and creativity.</p>
            </div>
          </div>
        </div>

        <!-- Skill Development -->
        <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          <div class="card-offer card-we-do card-marketing hover-up">
            <div class="card-image"><span class="cover-image"><img src="assets/yc/imgs/page/homepage1/cross5.png" alt="iori"></span></div>
            <div class="card-info">
              <h4 class="color-brand-1 mb-10"><a class="color-brand-1" href="job-detail.html">Skill Development</a></h4>
              <p class="font-md color-grey-500 mb-5">Build core skills in communication, leadership, problem-solving, and innovation through workshops, live projects, and volunteering roles. Prepare for future opportunities with a well-rounded, experience-driven portfolio.</p>
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
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Student/Volunteer</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Join the Movement</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Unlock exclusive mentorship, hands-on learning, and opportunities to connect with like-minded peers.
Empower your career and make a real impact.

</p>
                  <div class="box-button-video wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a class="btn btn-border-80 font-sm-bold hover-up" href="{{ route('student-membership') }}">Apply Now<svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
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
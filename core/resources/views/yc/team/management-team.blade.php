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
  <title>Management Intern Team</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
  <section class="section mt-50 pt-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mb-30"><span class="title-line line-48 wow animate__animated animate__fadeInUp">The Changemakers in Action</span>
              <h2 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp">Management Intern Team</h2>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp">The Management Intern Team is the energy engine behind Young Chanakya’s operations, community engagement, and events.  
              These hand-picked undergraduate and postgraduate students take ownership of driving internal projects, managing experiences, and supporting strategic operations across teams.</p>
              
              <div class="mt-40 text-start wow animate__animated animate__fadeInUp"><a class="btn btn-brand-1 hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
            <div class="col-lg-7 text-center position-relative mb-30"><img src="assets/imgs/page/homepage7/img-2.png" alt="iori">              
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
              <div class="card-guide bg-4">
                <div class="card-image"><img src="assets/imgs/page/homepage7/payment.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Operational Ownership</h5>
                  <p class="font-md color-grey-500"> Hands-on experience in managing programs, events, and internal ops</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
              <div class="card-guide bg-5">
                <div class="card-image"><img src="assets/imgs/page/homepage7/money.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Leadership-in-Training</h5>
                  <p class="font-md color-grey-500"> Develop essential startup leadership skills through real project execution                  </p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
              <div class="card-guide bg-7">
                <div class="card-image"><img src="assets/imgs/page/homepage7/support.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Collaboration Hub</h5>
                  <p class="font-md color-grey-500"> Bridge across mentor, academic, and student teams to keep the engine running</p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90 mb-90">
        <div class="container">
          <div class="row align-items-start">
            <div class="col-lg-6">
              <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Our leadership team</h6>
              <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Meet the amazing team behind YC</h2>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/about/team1.png')}}" alt="YC"></div>
                <div class="card-info"><a class="font-lg" href="#">Devon Lane</a>
                  <p class="font-xs color-grey-200 mb-10">CEO</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>

                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/about/team2.png')}}" alt="YC"></div>
                <div class="card-info"><a class="font-lg" href="#">Jennie Tho</a>
                  <p class="font-xs color-grey-200 mb-10">Finance Manager</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>

                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/about/team3.png')}}" alt="YC"></div>
                <div class="card-info"><a class="font-lg" href="#">Symon Lesin</a>
                  <p class="font-xs color-grey-200 mb-10">Technology Manager</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>

                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
              <div class="card-team mb-30">
                <div class="card-image"><img src="{{('assets/yc/imgs/page/team/team1.png')}}" alt="YC"></div>
                <div class="card-info"><a class="font-lg" href="#">Virginia Aguilar</a>
                  <p class="font-xs color-grey-200 mb-10">Director of People</p>
                  <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>


                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                <div class="card-team mb-30">
                  <div class="card-image"><img src="{{('assets/yc/imgs/page/team/team1.png')}}" alt="YC"></div>
                  <div class="card-info"><a class="font-lg" href="#">Virginia Aguilar</a>
                    <p class="font-xs color-grey-200 mb-10">Director of People</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>

                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                <div class="card-team mb-30">
                  <div class="card-image"><img src="{{('assets/yc/imgs/page/team/team1.png')}}" alt="YC"></div>
                  <div class="card-info"><a class="font-lg" href="#">Virginia Aguilar</a>
                    <p class="font-xs color-grey-200 mb-10">Director of People</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>

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
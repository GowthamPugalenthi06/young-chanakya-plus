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
  <title>Mentor Team</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
 
      <section class="section mt-50 pt-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mb-30"><span class="title-line line-48 wow animate__animated animate__fadeInUp">Guiding the Journey</span>
              <h2 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp">Mentor Team</h2>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp">Our Mentor Team is a powerhouse of successful entrepreneurs, startup founders, industry experts, and innovation leaders who bring real-world experience to the table.  
              They guide students through every phase of their leadership journey — from idea validation to go-to-market strategies — through 1:1 sessions, live mentoring circles, and tactical masterclasses.</p>
              
              <div class="mt-40 text-start wow animate__animated animate__fadeInUp"><a class="btn btn-brand-1 hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
            <div class="col-lg-7 text-center position-relative mb-30"><img src="{{ asset('assets/yc/imgs/page/homepage7/img-2.png') }}" alt="iori">              
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
              <div class="card-guide bg-4">
                <div class="card-image"><img src=" {{('assets/imgs/page/homepage7/payment.png')}}" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">1:1 Founder Mentorship</h5>
                  <p class="font-md color-grey-500">Personalized guidance from seasoned entrepreneurs and startup founders</p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
              <div class="card-guide bg-5">
                <div class="card-image"><img src="assets/imgs/page/homepage7/money.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Live Masterclasses</h5>
                  <p class="font-md color-grey-500"> Actionable insights shared through real-time sessions and workshops</p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
              <div class="card-guide bg-7">
                <div class="card-image"><img src="assets/imgs/page/homepage7/support.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Growth Hacking Guidance</h5>
                  <p class="font-md color-grey-500">  Proven strategies to build, scale, and sustain high-growth ventures
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90">
        <div class="container">
          <h6 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Board members</h6>
          <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Together we are strong</h2>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member1.png') }}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Darrell Steward</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member2.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Guy Hawkins</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member3.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Darlene Robertson</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member4.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Ronald Richards</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member6.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Kathryn Murphy</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member2.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Cameron Williamson</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member7.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Floyd Miles</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
              <div class="card-member">
                <div class="card-top">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/team/member8.png')}}" alt="iori"></div>
                  <div class="card-info"><span class="font-lg-bold color-brand-1">Devon Lane</span>
                    <p class="font-xs color-grey-200">Product Designer</p>
                    <div class="list-socials"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a></div>
                  </div>
                </div>
                <div class="card-bottom">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        
      </section>
  </main>
  @include('layouts.footer')
  @include('layouts.script')

</body>

</html>
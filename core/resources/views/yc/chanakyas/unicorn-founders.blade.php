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
  <title>Unicorn Founders</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
  <section class="section mt-50">
        <div class="container">
          <div class="row mt-50">
            <div class="col-xl-5 col-lg-12 mb-40">
            <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Shaping Tomorrow’s Icons</span>
              <h2 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Unicorn Founders</h2>
              <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Unicorn Founders are visionaries who turned bold ideas into billion-dollar successes. Their journey from startup to scale is full of lessons on resilience, innovation, and strategic thinking. Students learn from their playbooks, gaining insights into building enduring companies and navigating the challenges of growing from the ground up.</p>
              
              <div class="mt-30 text-start wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a class="btn btn-brand-1 hover-up" href="#section1">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
            <div class="col-xl-7 col-lg-12">
              <div class="box-video-business">
                <div class="item-video wow animate__animated animate__fadeIn" data-wow-delay=".0s"><img class="bd-rd4" src="{{ asset('assets/yc/imgs/page/homepage3/img1.png') }}" alt="iori"></div>
                <div class="box-image-right">
                  <div class="wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img class="bd-rd4 mb-20" src="{{ asset('assets/yc/imgs/page/homepage3/img2.png') }}" alt="iori"></div>
                  <div class="wow animate__animated animate__zoomIn" data-wow-delay=".2s"><img class="bd-rd4" src="{{ asset('assets/yc/imgs/page/homepage3/img3.png') }}" alt="iori" ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="section mt-40 pt-60 mb-40 pb-60" style="background-color: #024430;" id="section1">
      <div class="container">
        <!-- First Row of Cards -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card-guide">
                    <div class="card-image">
                        <img src="{{ asset('assets/yc/imgs/page/help/icon1.svg') }}" alt="YC" class="img-fluid">
                    </div>
                    <div class="card-info">
                        <h5 class="color-brand-1 mb-15">Execution Edge</h5>
                        <p class="font-xs color-grey-500">Insights from leaders who manage teams, numbers, and outcomes every day.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card-guide">
                    <div class="card-image">
                        <img src="{{ asset('assets/yc/imgs/page/help/icon2.svg') }}" alt="YC" class="img-fluid">
                    </div>
                    <div class="card-info">
                        <h5 class="color-brand-1 mb-15">People First</h5>
                        <p class="font-xs color-grey-500">Learn how top executives lead with empathy, clarity, and accountability.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card-guide">
                    <div class="card-image">
                        <img src="{{ asset('assets/yc/imgs/page/help/icon3.svg') }}" alt="YC" class="img-fluid">
                    </div>
                    <div class="card-info">
                        <h5 class="color-brand-1 mb-15">Systems That Scale</h5>
                        <p class="font-xs color-grey-500">Explore how operations, finance, marketing, and tech align under strong leadership.</p>
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
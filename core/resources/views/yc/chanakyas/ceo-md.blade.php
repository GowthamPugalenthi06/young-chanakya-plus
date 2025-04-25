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
  <title>CEO and MD's</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
  <section class="section mt-50">
        <div class="container">
          <div class="row mt-50">
            <div class="col-xl-5 col-lg-12 mb-40">
              <h2 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Business can also be simple</h2>
              <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Access advanced order types including limit, market, stop limit and dollar cost averaging. Track your total asset holdings, values and equity over time. Monitor markets, manage your portfolio, and trade crypto on the go.</p>
              
              <div class="mt-30 text-start wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a class="btn btn-brand-1 hover-up" href="#">Learn More
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
      <section class="section mt-40 pt-50 pb-40" style="background-color: #024430;">
      <div class="container">
        <div class="">
          <div class="">
            <div class="swiper-wrapper">
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon1.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Knowledge Base</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    
                  </div>
                </div>
              </div>
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon2.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Community Forums</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    
                  </div>
                </div>
              </div>
              <div class="hi-slide ml-20">
                <div class="card-guide">
                  <div class="card-image"><img src="{{ asset('assets/yc/imgs/page/help/icon3.svg') }}" alt="YC"></div>
                  <div class="card-info">
                    <h5 class="color-brand-1 mb-15">Documentation</h5>
                    <p class="font-xs color-grey-500">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor
                      primis a libero tempus</p>
                    
                  </div>
                </div>
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
    @foreach($ceo_mentors as $mentor)
    <div class="col-lg-2 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
        <div class="card-team mb-30">
            <div class="card-image">
                <img src="{{ asset($mentor->image ?? 'assets/yc/imgs/page/about/default.png') }}" alt="YC">
            </div>
            <div class="card-info">
                <a class="font-lg" href="#">{{ $mentor->name }}</a>
                <p class="font-xs color-grey-200 mb-10">{{ $mentor->description ?? 'CEO and MD' }}</p>
                <div class="list-socials">
                    <a class="icon-socials icon-facebook" href="{{ $mentor->facebook ?? '#' }}"></a>
                    <a class="icon-socials icon-linkedin" href="{{ $mentor->linkedin ?? '#' }}"></a>
                    <a class="icon-socials icon-twitter" href="{{ $mentor->twitter ?? '#' }}"></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

        </div>
      </section> 
  </main>
  @include('layouts.footer')
  @include('layouts.script')

</body>

</html>
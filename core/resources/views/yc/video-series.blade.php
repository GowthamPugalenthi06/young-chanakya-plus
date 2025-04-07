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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/yc/imgs/template/favicon')}}">
    <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
    <title>Video</title>
  </head>
  <body>
@include('layouts.header')
@include('layouts.preload')
    <main class="main">
      <section class="section">
        <div class="container">
          <div class="banner-1">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <h1 class="color-brand-1 mb-20 text-anim">The data layer between your business and its potential.</h1>
                <div class="row">
                  <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <p class="font-md color-grey-500 mb-30">Optimize write performance with a document data model that maps to your application’s access patterns. Meet a wide range of query requirements via a single query API that supports everything from simple lookups to complex processing pipelines for data analytics and transformations.</p>
                  </div>
                </div>
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s"><a class="btn btn-brand-1 hover-up" href="#">Download App</a><a class="btn btn-default font-sm-bold hover-up" href="#">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
              <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
                <object data="{{asset('assets/yc/imgs/page/homepage1/hero-banner.svg')}}" type="image/svg+xml"></object>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-80 pt-50 pb-90">
        <div class="container">
          <div class="bg-brand-1 box-cover-video bd-rd0">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6 pr-mb-0">
                <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage1/img-video.png')}}" alt="iori"></div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".s">Business</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Integrate with over 1,000 project management apps</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeIn" data-wow-delay=".4s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                  <div class="box-button-video wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a class="btn btn-play font-sm-bold popup-youtube hover-up" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ">Play Video</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-brand-1 box-cover-video box-cover-video-convert bd-rd0">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".s">Business</span>
                  <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Integrate with over 1,000 project management apps</h3>
                  <p class="font-md color-white wow animate__animated animate__fadeIn" data-wow-delay=".4s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                  <div class="box-button-video wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a class="btn btn-play font-sm-bold popup-youtube hover-up" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ">Play Video</a></div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 pl-mb-0">
                <div class="img-reveal"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage4/img-video.png')}}" alt="iori"></div>
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
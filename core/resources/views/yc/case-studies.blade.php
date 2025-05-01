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
  <title>Case Studies</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section banner-service position-relative mt-120 mb-50">
      <div class="box-banner-abs">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-7 col-lg-12">
              <div class="box-banner-service p-0">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp mb-30" data-wow-delay=".0s">Lessons Beyond the Classroom</h2>
                <div class="row">
                  <div class="col-lg-12 wow animate__animated animate__fadeInUp mt-10 mb-20" data-wow-delay=".3s">
                    <p class="font-lg color-grey-500">Learn from real experiences, industry trends, and expert insights,
                    all crafted to guide you in navigating life’s big decisions.</p>
                  </div>
                </div>
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp mt-30" data-wow-delay=".4s"><a
                    class="btn btn-brand-1 hover-up" href="{{route('about')}}">Share Your Words <svg
                      class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                      </path>
                    </svg></a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 pr-0">
          <div class="d-none d-xxl-block pl-70">
            <div class="img-reveal ml-60"><img class="d-block" src="{{asset('assets/yc/imgs/page/blog/about-img-4.png')}}"
                alt="YC" style="border-radius: 16px; width: 550px; height: 300px;"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section ">
      <div class="container ">
        
        <div class="row mt-50">
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card shadow-sm p-4 rounded-3 h-100" style="border: 1px solid #e0e0e0;">
              <!-- Image -->
              <img src="{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}" alt="Boat"
                class="rounded-3 w-100 mb-3" style="height: 230px; object-fit: cover;">

              <!-- Title -->
              <h5 class="fw-bold text-dark mb-2">Boat</h5>

              <!-- Dotted Divider -->
              <hr style="border-top: 1px dotted #ccc; margin-top: 0.5rem; margin-bottom: 0.8rem;">

              <!-- Read More -->
              <a href="#" class="text-decoration-none" style="color: #F9B980; font-weight: 500;">
                Read More &rarr;
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card shadow-sm p-4 rounded-3 h-100" style="border: 1px solid #e0e0e0;">
              <!-- Image -->
              <img src="{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}" alt="Boat"
                class="rounded-3 w-100 mb-3" style="height: 230px; object-fit: cover;">

              <!-- Title -->
              <h5 class="fw-bold text-dark mb-2">Lenskart</h5>

              <!-- Dotted Divider -->
              <hr style="border-top: 1px dotted #ccc; margin-top: 0.5rem; margin-bottom: 0.8rem;">

              <!-- Read More -->
              <a href="#" class="text-decoration-none" style="color: #F9B980; font-weight: 500;">
                Read More &rarr;
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card shadow-sm p-4 rounded-3 h-100" style="border: 1px solid #e0e0e0;">
              <!-- Image -->
              <img src="{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}" alt="Boat"
                class="rounded-3 w-100 mb-3" style="height: 230px; object-fit: cover;">

              <!-- Title -->
              <h5 class="fw-bold text-dark mb-2">Zepto</h5>

              <!-- Dotted Divider -->
              <hr style="border-top: 1px dotted #ccc; margin-top: 0.5rem; margin-bottom: 0.8rem;">

              <!-- Read More -->
              <a href="#" class="text-decoration-none" style="color: #F9B980; font-weight: 500;">
                Read More &rarr;
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card shadow-sm p-4 rounded-3 h-100" style="border: 1px solid #e0e0e0;">
              <!-- Image -->
              <img src="{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}" alt="Boat"
                class="rounded-3 w-100 mb-3" style="height: 230px; object-fit: cover;">

              <!-- Title -->
              <h5 class="fw-bold text-dark mb-2">Tata 1mg</h5>

              <!-- Dotted Divider -->
              <hr style="border-top: 1px dotted #ccc; margin-top: 0.5rem; margin-bottom: 0.8rem;">

              <!-- Read More -->
              <a href="#" class="text-decoration-none" style="color: #F9B980; font-weight: 500;">
                Read More &rarr;
              </a>
            </div>
          </div>

        </div>
        <div class="border-bottom mt-100"></div>
      </div>
    </section>

  </main>
  @include('layouts.footer')
  @include('layouts.script')

</body>

</html>
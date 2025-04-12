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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Podcasts</title>
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
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp mb-30" data-wow-delay=".0s">Voice
                  of
                  Chanakya</h2>
                <div class="row">
                  <div class="col-lg-12 wow animate__animated animate__fadeInUp mt-10 mb-20" data-wow-delay=".3s">
                    <p class="font-lg color-grey-500">Unfiltered wisdom from industry leaders, entrepreneurs, and
                      changemakers, sharing their stories, struggles, and success secrets to inspire your journey</p>
                  </div>
                </div>
                <div class="box-button mt-30 wow animate__animated animate__fadeInUp mt-30" data-wow-delay=".4s"><a
                    class="btn btn-brand-1 hover-up" href="{{route('about')}}">Share Your Thoughts <svg
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
            <div class="img-reveal ml-60"><img class="d-block"
                src="{{asset('assets/yc/imgs/page/blog/about-img-4.png')}}" alt="iori"
                style="border-radius: 16px; width: 550px; height: 300px;"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section ">
      <div class="container ">

        <div class="row mt-50">
          <div class="card border-0 rounded-4 shadow-sm d-flex flex-row overflow-hidden  ml-50 mr-100"
            style="max-width: 600px; height: 200px;">
            <!-- Left Image Section -->
            <div class="d-flex align-items-center justify-content-center p-3 text-white" style="background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); 
            background-size: cover; background-position: center; width: 50%; position: relative;"> </div>


            <!-- Right Content Section -->
            <div class="p-3 flex-grow-1 bg-white d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2" style="color: #1d1d1f;">Lessons from the Trenches</h6>
                <ul class="list-unstyled small text-muted mb-3">
                  <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
                  <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
                  <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> List Item #1</li>
                </ul>
              </div>
              <div style="background-color: #024430;">
              <div class="d-flex">
                <a href="#" class="btn btn-sm d-flex align-items-center text-white px-3 me-2">
                  <i class="bi bi-mic-fill me-2"></i> Listen Now
                </a>
                <a href="#" class="btn btn-danger btn-sm d-flex align-items-center justify-content-end mt-5 me-2 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-success  btn-sm d-flex align-items-center justify-content-end mt-5 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-spotify"></i>
                </a>
              </div>
              </div>
            </div>
          </div>

          <div class="card border-0 rounded-4 shadow-sm d-flex flex-row overflow-hidden "
            style="max-width: 600px; height: 200px;">
            <!-- Left Image Section -->
            <div class="d-flex align-items-center justify-content-center p-3 text-white" style="background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); 
            background-size: cover; background-position: center; width: 50%; position: relative;"> </div>


            <!-- Right Content Section -->
            <div class="p-3 flex-grow-1 bg-white d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2" style="color: #1d1d1f;">Lessons from the Trenches</h6>
                <ul class="list-unstyled small text-muted mb-3">
                  <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
                  <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
                  <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> List Item #2</li>
                </ul>
              </div>
              <div style="background-color: #024430;">
              <div class="d-flex">
                <a href="#" class="btn btn-sm d-flex align-items-center text-white px-3 me-2">
                  <i class="bi bi-mic-fill me-2"></i> Listen Now
                </a>
                <a href="#" class="btn btn-danger btn-sm d-flex align-items-center justify-content-end mt-5 me-2 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-success  btn-sm d-flex align-items-center justify-content-end mt-5 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-spotify"></i>
                </a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-50">
        <div class="card border-0 rounded-4 shadow-sm d-flex flex-row overflow-hidden ml-50 mr-100"
            style="max-width: 600px; height: 200px;">
            <!-- Left Image Section -->
            <div class="d-flex align-items-center justify-content-center p-3 text-white" style="background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); 
            background-size: cover; background-position: center; width: 50%; position: relative;"> </div>


            <!-- Right Content Section -->
            <div class="p-3 flex-grow-1 bg-white d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2" style="color: #1d1d1f;">Lessons from the Trenches</h6>
                <ul class="list-unstyled small text-muted mb-3">
                  <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
                  <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
                  <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> List Item #3</li>
                </ul>
              </div>
              <div style="background-color: #024430;">
              <div class="d-flex">
                <a href="#" class="btn btn-sm d-flex align-items-center text-white px-3 me-2">
                  <i class="bi bi-mic-fill me-2"></i> Listen Now
                </a>
                <a href="#" class="btn btn-danger btn-sm d-flex align-items-center justify-content-end mt-5 me-2 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-success  btn-sm d-flex align-items-center justify-content-end mt-5 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-spotify"></i>
                </a>
              </div>
              </div>
            </div>
          </div>
          <div class="card border-0 rounded-4 shadow-sm d-flex flex-row overflow-hidden"
            style="max-width: 600px; height: 200px;">
            <!-- Left Image Section -->
            <div class="d-flex align-items-center justify-content-center p-3 text-white" style="background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); 
            background-size: cover; background-position: center; width: 50%; position: relative;"> </div>


            <!-- Right Content Section -->
            <div class="p-3 flex-grow-1 bg-white d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2" style="color: #1d1d1f;">Lessons from the Trenches</h6>
                <ul class="list-unstyled small text-muted mb-3">
                  <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
                  <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
                  <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> List Item #4</li>
                </ul>
              </div>
              <div style="background-color: #024430;">
              <div class="d-flex">
                <a href="#" class="btn btn-sm d-flex align-items-center text-white px-3 me-2">
                  <i class="bi bi-mic-fill me-2"></i> Listen Now
                </a>
                <a href="#" class="btn btn-danger btn-sm d-flex align-items-center justify-content-end mt-5 me-2 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-success  btn-sm d-flex align-items-center justify-content-end mt-5 pr-10"
                  style="width: 25px; height: 25px;">
                  <i class="bi bi-spotify"></i>
                </a>
              </div>
              </div>
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
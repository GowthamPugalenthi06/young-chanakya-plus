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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Video Series</title>
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
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp mb-30" data-wow-delay=".0s">Thoughts
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
                src="{{asset('assets/yc/imgs/page/blog/about-img-4.png')}}" alt="YC"
                style="border-radius: 16px; width: 550px; height: 300px;"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50">
  <div class="container">
    <div class="row justify-content-center g-4">

      
    <div class="col-md-6 col-lg-5">
      <div class="card shadow rounded-4 overflow-hidden border-0 h-100 d-flex flex-column">
        <!-- Thumbnail with Play Icon -->
        <div class="position-relative" style="height: 200px; background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); background-size: cover; background-position: center;">
          <!-- Play Button triggers modal -->
          <a href="#" class="position-absolute top-50 start-50 translate-middle text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#videoModal1">
            <i class="bi bi-play-circle-fill" style="font-size: 4rem;"></i>
          </a>
        </div>

        <!-- Content Section -->
        <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
          <div>
            <h6 class="fw-bold mb-2 text-dark">Lessons from the Trenches</h6>
            <ul class="list-unstyled small text-muted mb-3">
              <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
              <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
              <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> Duration</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Video Modal -->
      <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <video id="videoPlayer1" class="w-100" controls>
                <source src="{{ url('https://www.w3schools.com/html/mov_bbb.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-5">
      <div class="card shadow rounded-4 overflow-hidden border-0 h-100 d-flex flex-column">
        <!-- Thumbnail with Play Icon -->
        <div class="position-relative" style="height: 200px; background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); background-size: cover; background-position: center;">
          <!-- Play Button triggers modal -->
          <a href="#" class="position-absolute top-50 start-50 translate-middle text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#videoModal2">
            <i class="bi bi-play-circle-fill" style="font-size: 4rem;"></i>
          </a>
        </div>

        <!-- Content Section -->
        <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
          <div>
            <h6 class="fw-bold mb-2 text-dark">Lessons from the Trenches</h6>
            <ul class="list-unstyled small text-muted mb-3">
              <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
              <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
              <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> Duration</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Video Modal -->
      <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <video id="videoPlayer2" class="w-100" controls>
                <source src="{{ url('https://www.w3schools.com/html/mov_bbb.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row justify-content-center g- mt-100">

      
    <div class="col-md-6 col-lg-5">
      <div class="card shadow rounded-4 overflow-hidden border-0 h-100 d-flex flex-column">
        <!-- Thumbnail with Play Icon -->
        <div class="position-relative" style="height: 200px; background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); background-size: cover; background-position: center;">
          <!-- Play Button triggers modal -->
          <a href="#" class="position-absolute top-50 start-50 translate-middle text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#videoModal3">
            <i class="bi bi-play-circle-fill" style="font-size: 4rem;"></i>
          </a>
        </div>

        <!-- Content Section -->
        <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
          <div>
            <h6 class="fw-bold mb-2 text-dark">Lessons from the Trenches</h6>
            <ul class="list-unstyled small text-muted mb-3">
              <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
              <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
              <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> Duration</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Video Modal -->
      <div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <video id="videoPlayer3" class="w-100" controls>
                <source src="{{ asset('assets/yc/videos/sample-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-5">
      <div class="card shadow rounded-4 overflow-hidden border-0 h-100 d-flex flex-column">
        <!-- Thumbnail with Play Icon -->
        <div class="position-relative" style="height: 200px; background-image: url('{{ asset('assets/yc/imgs/page/homepage1/event-09.jpg') }}'); background-size: cover; background-position: center;">
          <!-- Play Button triggers modal -->
          <a href="#" class="position-absolute top-50 start-50 translate-middle text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#videoModal4">
            <i class="bi bi-play-circle-fill" style="font-size: 4rem;"></i>
          </a>
        </div>

        <!-- Content Section -->
        <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
          <div>
            <h6 class="fw-bold mb-2 text-dark">Lessons from the Trenches</h6>
            <ul class="list-unstyled small text-muted mb-3">
              <li class="mb-1"><i class="bi bi-mic-fill me-2 text-warning"></i> Kishorekumar</li>
              <li class="mb-1"><i class="bi bi-calendar3 me-2 text-warning"></i> 20 Mar 2025</li>
              <li class="mb-1"><i class="bi bi-list-task me-2 text-warning"></i> Duration</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Video Modal -->
      <div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <video id="videoPlayer4" class="w-100" controls>
                <source src="{{ asset('assets/yc/videos/sample-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
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
<script>
  const videoModal = document.getElementById('videoModal1');
  const videoPlayer = document.getElementById('videoPlayer1');

  videoModal.addEventListener('hidden.bs.modal', function () {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
  });
  const videoModal = document.getElementById('videoModal2');
  const videoPlayer = document.getElementById('videoPlayer2');

  videoModal.addEventListener('hidden.bs.modal', function () {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
  });
  const videoModal = document.getElementById('videoModal3');
  const videoPlayer = document.getElementById('videoPlayer3');

  videoModal.addEventListener('hidden.bs.modal', function () {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
  });
  const videoModal = document.getElementById('videoModal4');
  const videoPlayer = document.getElementById('videoPlayer4');

  videoModal.addEventListener('hidden.bs.modal', function () {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
  });
</script>



</html>
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
  <title>Career</title>
  <style>
.why-work-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
}

.features-row {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  text-align: center;
}

.feature-item {
  flex: 1 1 calc(20% - 30px); /* 5 items per row */
  max-width: calc(20% - 30px);
  min-width: 200px;
  padding: 10px;
}

@media (max-width: 1200px) {
  .feature-item {
    flex: 1 1 calc(33.33% - 30px);
    max-width: calc(33.33% - 30px);
  }
}

@media (max-width: 768px) {
  .feature-item {
    flex: 1 1 calc(50% - 30px);
    max-width: calc(50% - 30px);
  }
}

@media (max-width: 480px) {
  .feature-item {
    flex: 1 1 100%;
    max-width: 100%;
  }
}



  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section mt-90">
      <div class="container">
        <div class="text-center">
          <h6 class="color-grey-500 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Take a look at our
            current openings</h6>
          <h2 class="color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Build the Future with Young Chanakya<br class="d-none d-lg-block"></h2>
        </div>
        <div class="box-video mt-70"><img src="{{asset('assets/yc/imgs/page/career/img-video.png')}}" alt="YC">
          <div class="image-1 shape-1"><img src="{{asset('assets/yc/imgs/page/career/certify.png')}}" alt="YC"></div>
        </div>
      </div>
    </section>
    <section class="section mt-100 internship-benefits-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">What You Gain from Our Internship</h2>
        <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
          Experience a hands-on internship that blends real-world challenges with guided mentorship.
        </p>
      </div>
    </div>

    <div class="row mt-65 justify-content-center features-row">
      <!-- Item 1 -->
      <div class="feature-item wow animate__animated animate__fadeIn" data-wow-delay=".0s">
        <img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="Practical Learning" class="mb-15" width="50">
        <h6 class="color-brand-1 mb-10">Practical Learning</h6>
        <p class="font-xs color-grey-500 text-center">Work on live business initiatives that go beyond classroom theory.</p>
      </div>

      <!-- Item 2 -->
      <div class="feature-item wow animate__animated animate__fadeIn" data-wow-delay=".1s">
        <img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="Mentorship" class="mb-15" width="50">
        <h6 class="color-brand-1 mb-10">Mentored by Experts</h6>
        <p class="font-xs color-grey-500 text-center">Gain direction from experienced professionals across multiple domains.</p>
      </div>

      <!-- Item 3 -->
      <div class="feature-item wow animate__animated animate__fadeIn" data-wow-delay=".2s">
        <img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="Portfolio" class="mb-15" width="50">
        <h6 class="color-brand-1 mb-10">Portfolio Development</h6>
        <p class="font-xs color-grey-500 text-center">Build meaningful work samples and case contributions you can showcase.</p>
      </div>

      <!-- Item 4 -->
      <div class="feature-item wow animate__animated animate__fadeIn" data-wow-delay=".3s">
        <img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="Collaboration" class="mb-15" width="50">
        <h6 class="color-brand-1 mb-10">Collaborative Experience</h6>
        <p class="font-xs color-grey-500 text-center">Work in cross-functional teams, solve challenges, and deliver results.</p>
      </div>

      <!-- Item 5 -->
      <div class="feature-item wow animate__animated animate__fadeIn" data-wow-delay=".4s">
        <img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="Certification" class="mb-15" width="50">
        <h6 class="color-brand-1 mb-10">Certification & Recognition</h6>
        <p class="font-xs color-grey-500 text-center">Receive verified certificates and public appreciation for contributions.</p>
      </div>
    </div>
  </div>
</section>


<!-- 
     <section class="section pt-50 pb-100">
    <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn text-center" data-wow-delay=".0s">Career Opportunities</h2>
    <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn text-center mb-20" data-wow-delay=".2s">Whether you're just starting out or looking for your next big role, <br class="d-none d-lg-block">find the perfect opportunity to grow, learn, and lead.</p>
      <div class="container">
      <div class="container">
        
        <div class="content-detail mt-20">
          <div class="row">
            <div class="col-lg-10 col-11 m-auto">
              <div class="box-detail-content">
                <div class="row align-items-center">
                  <div class="row align-items-end">
                  <div class="col-lg-12 text-center">
           
          </div>
                    <!-- <ul class="tabs-plan change-price-plan" role="tablist">
                    <button class="btn btn-primary me-2 px-20 pr-20" id="bt1" style="background-color:#024430;border-color:#024430;" onclick="showTab('internship')">Internship</button>
                    <button class="btn btn-secondary px-20 pr-20" id="bt2" style="color:#024430;background-color:white;" onclick="showTab('job')">Job</button>

                    </ul> 

                  </div>
                
                </div>
                <div id="internship-content" class="tab-content">
                <div class="container row  rounded pt-25">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30  ">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manager </h3><span
                      class="date-post font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span>
                  </div>
                   <div class="col-lg-4 col-md-4 mt-15 d-flex justify-content-end align-items-start    "><a
                    class="btn btn-brand-1 font-sm-bold hover-up" href="{{route('career-detail')}}">
                    Apply Now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
                  </div>
             <div class="container mt-20 row  rounded pt-25">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manaer </h3><span
                      class="date-post font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://ww w.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span>
                  </div>
                  <div class="col-lg-4 col-md-4 mt-15 d-flex justify-content-end align-items-start    "><a
                    class="btn btn-brand-1 font-sm-bold hover-up" href="{{route('career-detail')}}">
                    Apply Now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
                  </div>
                
                </div>
                <div id="job-content" class="tab-content" style="display: none;">
             <div class="container mt-20 row  rounded pt-25">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manager </h3><span
                      class="date-post font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span>
                  </div>
                   <div class="col-lg-4 col-md-4 mt-15 d-flex justify-content-end align-items-start    "><a
                    class="btn btn-brand-1 font-sm-bold hover-up" href="{{route('career-detail')}}">
                    Apply Now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
                  </div>
             <div class="container mt-20 row  rounded pt-25">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manager </h3><span
                      class="date-post font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                      </svg>29 May 2022</span><span class="time-read font-xs color-grey-300">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>3 mins read</span>
                  </div>
                   <div class="col-lg-4 col-md-4 mt-15 d-flex justify-content-end align-items-start    "><a
                    class="btn btn-brand-1 font-sm-bold hover-up" href="{{route('career-detail')}}">
                    Apply Now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <section class="section mt-50">
        <div class="container">
          <div class="box-newsletter">
            <div class="row align-items-center">
              <div class="col-lg-5 col-md-12">
                <div class="box-image-newsletter ">
                  <div class="wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img class="img-main" style="border-radius:565px !important" src="assets/yc/imgs/template/newsletter_img.png" alt="Young chanakya"></div>
                  <div class="shape-2 image-1"><img src="assets/yc/imgs/template/newsletter_finger.png" alt="Young chanakya"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <h2 class="color-brand-1 mb-15 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Life at Young Chanakya </h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">As an intern, you’re part of our core project flow — not on the sidelines. You’ll experience fast learning, real responsibility, and open collaboration with professionals across business, tech, and creative roles. If you're driven and outcome-oriented, this is your space to prove and grow.</p>
                <!-- <div class="form-newsletter mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                  <form action="#">
                    <input type="text" placeholder="Enter you mail ..">
                    <button class="btn btn-submit-newsletter" type="submit">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg>
                    </button>
                  </form>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
  

   <section class="section mt-50">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-8 col-md-8">
            <h2 class="color-brand-1 mb-20">More Job Openings</h2>
            <p class="font-lg color-gray-500">We regularly recruit at many positions.<br class="d-none d-lg-block">See
              related jobs here</p>
          </div>
           <div class="col-lg-4 col-md-4 text-md-end text-start"><a class="btn btn-default font-sm-bold pl-0">View All
              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg></a></div>
        </div>
        <div class="row mt-50">
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/ui.png')}}" alt="YC"></div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">UI / UX Designer fulltime</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1"href="{{route('career-detail')}}">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/java.png')}}" alt="YC"></div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Java Software Engineer</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1"href="{{route('career-detail')}}">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
            <div class="card-offer hover-up">
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/senior.png')}}" alt="YC">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Senior System Engineer</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1"href="{{route('career-detail')}}">Learn More
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    <section class="section mt-50 pt-50 pb-40">
      <div class="container">
        <div class="box-cover-border">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="img-reveal" style="height:500px"><img class="d-block"
                  src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="YC"></div>
            </div>
            <div class="col-lg-6">
              <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp"
                  data-wow-delay=".0s">Get in touch</span>
                <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Have Questions? Let’s Connect!</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">At Young Chanakya, we're here to assist you every step of the way. Whether you need more information about our job openings, the application process, or just have a general query — we’re always ready to help.</p>
                <div class="box-button text-start mt-65 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a
                    class="btn btn-brand-1 hover-up" href="{{ route("contact") }}">Contact Us</a></div>
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
      function showTab(tab) {
        const internship = document.getElementById("internship-content");
        const job = document.getElementById("job-content");
        const bt1 = document.getElementById("bt1");
        const bt2 = document.getElementById("bt2");

        if (tab === "internship") {
          internship.style.display = "block";
          bt1.style.backgroundColor = "#024430";
          bt1.style.color = "white";
          bt2.style.backgroundColor = "white";
          bt2.style.color = "#024430";
          job.style.display = "none";
        } else if (tab === "job") {
          internship.style.display = "none";
          bt1.style.backgroundColor = "white";
          bt1.style.color = "#024430";
          bt1.style.borderColor = "#024430";
          bt2.style.backgroundColor = "#024430";
          bt2.style.color = "white";
          job.style.display = "block";
        }
      }
    </script>

</html>
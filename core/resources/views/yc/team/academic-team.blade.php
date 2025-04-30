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
  <title>Academic Team </title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">

      <section class="section mt-50 pt-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mb-30"><span class="title-line line-48 wow animate__animated animate__fadeInUp">Building the Foundation</span>
              <h2 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp">Academic Team</h2>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp">The Academic Team brings academic rigor and structure to the learning experience.  
              Comprising thought leaders, business educators, and research scholars, this team crafts powerful, outcome-driven modules that blend theory with real-time entrepreneurial practices.  
              They guide students through every phase of their leadership journey — from idea validation to go-to-market strategies — through 1:1 sessions, live mentoring circles, and tactical masterclasses.</p>
              
              <div class="mt-40 text-start wow animate__animated animate__fadeInUp"><a class="btn btn-brand-1 hover-up" href="#">Learn More
                  <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg></a></div>
            </div>
            <div class="col-lg-7 text-center position-relative mb-30"><img src="{{ asset('assets/yc/imgs/page/team/academic-team.png') }}" alt="iori">              
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
                  <h5 class="color-brand-1 mb-15">Industry-Centric Curriculum</h5>
                  <p class="font-md color-grey-500"> Practical modules built with real-world startup challenges in mind</p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
              <div class="card-guide bg-5">
                <div class="card-image"><img src="assets/imgs/page/homepage7/money.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Case-Based Learning</h5>
                  <p class="font-md color-grey-500">  Harvard-style business simulations, startup case studies, and team projects</p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
              <div class="card-guide bg-7">
                <div class="card-image"><img src="assets/imgs/page/homepage7/support.png" alt="iori"></div>
                <div class="card-info">
                  <h5 class="color-brand-1 mb-15">Cross-Disciplinary Focus</h5>
                  <p class="font-md color-grey-500"> Designed for students from all domains — engineering, arts, commerce, science
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
    @foreach($academic_team as $member)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
            <div class="card-member">
                <div class="card-top">
                    <div class="card-image">
                        <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                    </div>
                    <div class="card-info">
                        <span class="font-lg-bold color-brand-1">{{ $member->name }}</span>
                        <p class="font-xs color-grey-200">{{ $member->description }}</p>
                        <div class="list-socials">
                            <a class="icon-socials icon-facebook" href="{{ $member->facebook ?? '#' }}"></a>
                            <a class="icon-socials icon-linkedin" href="{{ $member->linkedin ?? '#' }}"></a>
                            <a class="icon-socials icon-twitter" href="{{ $member->twitter ?? '#' }}"></a>
                        </div>
                    </div>
                </div>
                <div class="card-bottom"></div>
            </div>
        </div>
    @endforeach
</div>

        </div>
      </section>
        
      </section>
  </main>
  @include('layouts.footer')
  @include('layouts.script')

</body>

</html>
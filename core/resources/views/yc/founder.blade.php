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
  <link href="{{asset('assets/yc/css/vendors/aos.css')}}" rel="stylesheet">
  <title>Founder Talk</title>
  <style>
  .col-1-5 {
    flex: 0 0 auto;
    width: 20%;
  }

  @media (max-width: 991.98px) {
    .col-1-5 {
      width: 50%;
    }
  }

  @media (max-width: 575.98px) {
    .col-1-5 {
      width: 100%;
    }
  }

  .item-article {
    display: none;
  }
  .ctnr{
    background-color:#ffefd1;
  }

  .item-article.active {
    display: block;
  }
</style>
</head>

<body>
  @include('layouts.preload')
  @include('layouts.header')
  <main class="main">
  <section class="section mt-80">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="mw-80"><img class="img-round-top" src="{{asset('assets/yc/imgs/page/about/founder.png')}}" alt="iori" style="width:700px; height:650px">
              </div>
            </div>
            <div class="col-lg-5"><span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s"> Founder’s Message</span>
              <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp">Building a Community of Innovators</h3>
              <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp">
              Dear Visionaries,<br>

Welcome to Young Chanakya—a movement, a mindset, and a mission to shape the next generation of startup leaders.

In today’s fast-evolving world, entrepreneurship is not just about ideas; it’s about execution, resilience, and leadership. The greatest empires weren’t built by followers—they were built by thinkers, strategists, and doers. And that’s exactly what we aim to create here—modern-day Chanakyas who lead with wisdom, adaptability, and impact.<br>

At Young Chanakya, we don’t just teach theories. We connect you with real-world mentors, equip you with practical business insights, and immerse you in transformational experiences that challenge your limits. Our programs, mentorship, and community are designed to help you think bigger, act smarter, and lead stronger.<br>

I’ve always believed that success is not about where you start but how you scale. And for that, you need the right ecosystem, the right people, and the right mindset. If you are someone who dares to dream and is ready to hustle, Young Chanakya is the place for you.

              <div class="mt-40 text-start wow animate__animated animate__fadeInUp"><a class="btn btn-brand-1 hover-up" href="https://www.linkedin.com/in/kishorekumarceo?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">Connect with Me</a></div>
            </div>
          </div>
        </div>
      </section>
   
      <section class="section mt-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">The Growth of a
              True Leader</h2>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
              Every great leader begins as a seed – full of potential but needing the right support to grow.
            </p>
          </div>
        </div>
        <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-4">
              <div class="swiper-wrapper">

                <!-- Seed Stage -->
                <div class="mx-3 hi head-bg-brand-2">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Sprout Stage" style="height: 40px; width: 40px;">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Seed Stage</h4>
                        <p class="font-sm color-grey-500">Curiosity & Learning</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                      AA leader begins with curiosity—the hunger to learn, observe, and absorb knowledge. Like a seed needs soil, a leader needs the right mindset, mentors, and a thirst for growth to take root.  
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Sprout Stage -->
                <div class="mx-3 hi head-bg-brand-2">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Sprout Stage" style="height: 40px; width: 40px;">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Sprout Stage</h4>
                        <p class="font-sm color-grey-500">Taking Small Steps</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                      As the seed sprouts, it faces challenges—weather, soil conditions, and external forces. Similarly, a leader starts by taking small risks, stepping out of comfort zones, and learning from failures. Every mistake is like sunlight—helping them grow stronger.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Sapling Stage -->
                <div class="mx-3 hi head-bg-2">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Sapling Stage" style="height: 40px; width: 40px;">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Sapling Stage</h4>
                        <p class="font-sm color-grey-500">Skills & Strength</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                      A sapling isn’t a full-grown tree yet, but its foundation is getting stronger. This is where a leader gains experience, builds networks, and hones their problem-solving skills. They start influencing others, much like a sapling providing shade to small plants.  
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Tree Stage -->
                <div class="mx-3 hi head-bg-5">
                  <div class="card-offer-style-3">
                    <div class="card-head">
                      <div class="card-image">
                        <img src="{{asset('assets/yc/imgs/page/homepage1/quote.svg')}}" alt="Seed Stage" style="height: 40px; width: 40px;">
                      </div>
                      <div class="carrd-title">
                        <h4 class="color-brand-1 mb-15">Trees Stage</h4>
                        <p class="font-sm color-grey-500">Become a Leader</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="font-sm color-grey-500 mb-15">
                      A fully grown tree provides shade, fruits, and shelter—just like a great leader empowers others, builds businesses, and creates lasting impact. Their success is not just about their own growth but about how many lives they can uplift
                      </p>
                    </div>
                  </div>
                </div>

              </div> <!-- swiper-wrapper -->
            </div> <!-- swiper-container -->
          </div> <!-- box-swiper -->
        </div> <!-- mt-50 -->
      </div> <!-- container -->
    </section>

    <section class="section mt-50 pt-50 pb-90">
      <div class="container">
        <div class="bg-brand-1 box-cover-video">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
              <div class="img-reveal"><img class="d-block"
                  src="{{ asset('assets/yc/imgs/page/homepage1/img-video.png') }}" alt="YC"></div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp"
                  data-wow-delay=".0s">Connect</span>
                <h3 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                Join the Elite Community</h3>
                <p class="font-md color-white wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Get exclusive insights into our founder’s journey, the challenges faced, and the strategies that have been instrumental in shaping our success. Learn firsthand how perseverance, innovation, and a commitment to excellence have driven our growth and set us apart in the industry.</p>
                  <div class="box-button mt-30">
                  <a class="btn btn-brand-1 hover-up" href="https://www.linkedin.com/company/youngchanakya/">Connect with Us 
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a>
                  
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    
  </main>
  @include('layouts.footer')
  @include('layouts.script')
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button-click");
    const articles = document.querySelectorAll(".item-article");

    // Show only the first (Vision) on load
    articles.forEach(article => article.classList.remove("active"));
    document.querySelector(".item-article.vision").classList.add("active");

    buttons.forEach(button => {
      button.addEventListener("click", function (e) {
        e.preventDefault();

        // Remove 'active' from all buttons
        buttons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        // Show corresponding article
        const type = this.getAttribute("data-type");
        articles.forEach(article => {
          if (article.classList.contains(type)) {
            article.classList.add("active");
          } else {
            article.classList.remove("active");
          }
        });
      });
    });
  });
</script>

</body>

</html>
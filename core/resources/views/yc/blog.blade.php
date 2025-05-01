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
  <title>Stories</title>
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
                <h2 class="color-brand-1 mb-20 wow animate_animated animate_fadeInUp mb-30" data-wow-delay=".0s">Words of
                  Chanakya</h2>
                <div class="row">
                  <div class="col-lg-12 wow animate_animated animate_fadeInUp mt-10 mb-20" data-wow-delay=".3s">
                    <p class="font-lg color-grey-500">Unfiltered wisdom from industry leaders, entrepreneurs, and
                      changemakers, sharing their stories, struggles, and success secrets to inspire your journey</p>
                  </div>
                </div>
                <div class="box-button mt-30 wow animate_animated animate_fadeInUp mt-30" data-wow-delay=".4s"><a
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
            <div class="img-reveal ml-60"><img class="d-block" src="{{asset('assets/yc/imgs/page/blog/about-img-4.png')}}"
                alt="YC" style="border-radius: 16px; width: 550px; height: 300px;"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate_animated animate_fadeIn" data-wow-delay=".0s">Lastest Articles</h2>
            </div>
          </div>
          <div class="mt-30 mb-60">
            <ul class="list-buttons">
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".0s"><a class="button-click active" href="#" data-type="all">All articles</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".2s"><a class="button-click" href="#" data-type="featured">Featured</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".3s"><a class="button-click" href="#" data-type="company">Company</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".4s"><a class="button-click" href="#" data-type="product-news">Product News</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".5s"><a class="button-click" href="#" data-type="customer-stories">Customer Stories</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".6s"><a class="button-click" href="#" data-type="guides">Guides</a></li>
              <li class="wow animate_animated animate_fadeIn" data-wow-delay=".7s"><a class="button-click" href="#" data-type="other">Other</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-55"> 
              <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img6.png" alt="YC"></a>
                    <label class="lbl-border">Writing</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">7 Copywriting Strategies the Great Copywriters Wish You Knew</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img7.png" alt="YC"></a>
                    <label class="lbl-border">Blogging</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">What Is the Main Action a Writer Takes When Proofreading?</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img8.png" alt="YC"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">The Betty Crocker Secret to an Email Marketing Strategy People Enjoy</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img9.png" alt="YC"></a>
                    <label class="lbl-border">Business</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Email Autoresponders: Meet the Lazy Marketer’s Best Friend</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img10.png" alt="YC"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Stop Wondering About How to Respond to Criticism</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate_animated animate_fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="assets/yc/imgs/page/blog/img11.png" alt="YC"></a>
                    <label class="lbl-border">Blogging</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Top 5 Content Marketing Mistakes You’ll Wish You Fixed Sooner</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
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

</html>
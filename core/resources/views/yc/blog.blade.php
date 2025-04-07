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
    <title>Blog</title>
  </head>
  <body>
@include('layouts.header')
@include('layouts.preload')
    <main class="main">
      <section class="section banner-service bg-grey-60 position-relative">
        <div class="box-banner-abs">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xxl-6 col-xl-7 col-lg-12">
                <div class="box-banner-service">
                  <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">All the important insights, guidance and news you need to know.</h2>
                  <div class="row">
                    <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                      <p class="font-lg color-grey-500">Keep up-to-date with all our latest company news and business content. The latest news, tips and advice to help you run your business with less fuss</p>
                    </div>
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
              <div class="img-reveal"><img class="w-100 d-block" src="{{asset('assets/yc/imgs/page/blog/banner.png')}}" alt="iori"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Lastest Articles</h2>
            </div>
          </div>
          <div class="mt-30 mb-60">
            <ul class="list-buttons">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="button-click active" href="#" data-type="all">All articles</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="button-click" href="#" data-type="featured">Featured</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a class="button-click" href="#" data-type="company">Company</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a class="button-click" href="#" data-type="product-news">Product News</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><a class="button-click" href="#" data-type="customer-stories">Customer Stories</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a class="button-click" href="#" data-type="guides">Guides</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".7s"><a class="button-click" href="#" data-type="other">Other</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-55">
              <div class="col-lg-12 mb-60 item-article featured wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="item-1">
                  <div class="box-cover-border">
                    <div class="row align-items-center">
                      <div class="col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="iori"></div>
                      <div class="col-lg-6">
                        <div class="box-info-video"><span class="btn btn-tag">Featured</span><a href="#">
                            <h3 class="color-brand-1 mt-15 mb-20">7 Things To Keep In Mind When Starting A Business</h3></a>
                          <div class="mb-25 mt-10"><span class="font-xs-color-grey-500">November 17, 2022</span><span class="font-xs-color-grey-500 icon-read">2 min read</span></div>
                          <p class="font-md color-grey-500">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box" thinking.</p>
                          <div class="box-button text-start mt-45"><a class="btn btn-default font-sm-bold pl-0 hover-up" href="#">Read more
                              <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img1.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">How to save money - 8 simple ways to start saving money every month</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-30 item-article guides wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img2.png')}}" alt="iori"></a>
                    <label class="lbl-border">Technology</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Essential Steps to Building And Refining an Effective UX Portfolio</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article customer-stories wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img3.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">10 Content Proofreading Tips to Catch More Avoidable Goofs</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article product-news wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img4.png')}}" alt="iori"></a>
                    <label class="lbl-border">Tutorial</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Everything a Beginner Blogger Needs to Know for 2023</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article company wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img5.png')}}" alt="iori"></a>
                    <label class="lbl-border">Team work</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Bad Email Marketing and Nickelback Don’t Have Much in Common</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="box-ads-1 mb-70">
                  <h3 class="color-brand-1 font-shippori title-ads mb-5">Get our free marketing books</h3>
                  <p class="font-xs color-grey-500 mb-10">We synthesize all the tips and trends about online marketing in valuable books</p><a class="btn btn-default font-sm-bold color-grey-900 pl-0" href="#">Register now
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img6.png')}}" alt="iori"></a>
                    <label class="lbl-border">Writing</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">7 Copywriting Strategies the Great Copywriters Wish You Knew</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article featured wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img7.png')}}" alt="iori"></a>
                    <label class="lbl-border">Blogging</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">What Is the Main Action a Writer Takes When Proofreading?</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img8.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">The Betty Crocker Secret to an Email Marketing Strategy People Enjoy</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img9.png')}}" alt="iori"></a>
                    <label class="lbl-border">Business</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Email Autoresponders: Meet the Lazy Marketer’s Best Friend</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img10.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">Stop Wondering About How to Respond to Criticism</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img11.png')}}" alt="iori"></a>
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
            <div class="mt-20 mb-30 text-center wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="btn btn-brand-1 font-sm-bold" href="#">Load More...</a></div>
          </div>
        </div>
      </section>
      <section class="section mt-50">
        <div class="container">
          <div class="box-newsletter box-newsletter-2 wow animate__animated animate__fadeIn">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-7 m-auto text-center"><span class="font-lg color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Newsletter</span>
                <h2 class="color-brand-1 mb-15 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Subcribe our newsletter</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Do not miss the latest information from us about the trending in the market. By clicking the button, you are agreeing with our Term & Conditions</p>
                <div class="form-newsletter mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                  <form action="#">
                    <input type="text" placeholder="Enter you mail ..">
                    <button class="btn btn-submit-newsletter" type="submit">
                      <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                      </svg>
                    </button>
                  </form>
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
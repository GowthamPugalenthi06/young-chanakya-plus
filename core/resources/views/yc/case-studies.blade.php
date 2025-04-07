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
    <title>Case Studies</title>
  </head>
  <body>
    @include('layouts.header')
    @include('layouts.preload')
    <main class="main">
      <section class="section mt-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">The Iori Blog</span>
              <h2 class="color-brand-1 mt-15 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Insight and advice from<br class="d-none d-lg-block">our expert team</h2>
            </div>
          </div>
          <div class="mt-30 mb-60">
            <ul class="list-buttons">
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active" href="#" data-type="all">All articles</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><a href="#" data-type="featured">Featured</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a href="#" data-type="company">Company</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a href="#" data-type="product-news">Product News</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a href="#" data-type="customer-stories">Customer Stories</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><a href="#" data-type="guides">Guides</a></li>
              <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a href="#" data-type="other">Other</a></li>
            </ul>
          </div>
          <div class="box-list-blogs">
            <div class="row mt-55">
              <div class="col-lg-12 mb-60 item-article featured">
                <div class="item-1">
                  <div class="box-cover-border">
                    <div class="row align-items-center">
                      <div class="col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/blog2/img1.png')}}" alt="iori"></div>
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
            </div>
            <div class="mt-20 mb-30">
              <h3 class="color-brand-1 title-line-right">Promotions</h3>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-30 item-article customer-stories">
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
              <div class="col-lg-4 col-md-6 mb-30 item-article product-news">
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
              <div class="col-lg-4 col-md-6 mb-30 item-article company">
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
            </div>
            <div class="mt-20 mb-50">
              <h3 class="color-brand-1 title-line-right line-brand-3">E-Commerce</h3>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 mb-30 item-article featured">
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
              <div class="col-lg-6 col-md-6 mb-30 item-article guides">
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
            </div>
            <div class="mt-0 mb-30 text-center"><a class="btn btn-white-circle font-sm-bold border-brand text-none" href="#">View more in this category</a></div>
            <div class="mt-20 mb-50">
              <h3 class="color-brand-1 title-line-right line-brand-4">Marketing Strategy</h3>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-30 item-article featured">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog2/img2.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketing</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">7 Copywriting Strategies the Great Copywriters Wish You Knew</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article featured">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img6.png')}}" alt="iori"></a>
                    <label class="lbl-border">Blogging</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">What Is the Main Action a Writer Takes When Proofreading?</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-30 item-article other">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img9.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketting</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">The Betty Crocker Secret to an Email Marketing Strategy People Enjoy</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-0 mb-30 text-center"><a class="btn btn-white-circle font-sm-bold border-brand text-none" href="#">View more in this category</a></div>
            <div class="mt-20 mb-50">
              <h3 class="color-brand-1 title-line-right line-info">Industry Use Cases</h3>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 mb-30 item-article featured">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-image"><a href="blog-detail.html"><img src="{{asset('assets/yc/imgs/page/blog/img10.png')}}" alt="iori"></a>
                    <label class="lbl-border">Marketing</label>
                  </div>
                  <div class="card-info"><a href="blog-detail.html">
                      <h4 class="color-brand-1">22 Strategies for Outdoor &amp; Sporting Goods E-Commerce Retailers in 2022 + Industry Benchmarks</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 mb-30 item-article featured">
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-info"><a href="">
                      <h4 class="color-brand-1">Understanding The Different Types of Automated Email Marketing Campaigns</h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">If you are already on Shopify, you are probably familiar with the importance of crafting the perfect email newsletter. Even if a customer visits your site but doesn’t make a purchase, your newsletter can be the right motivation that will bring them back when a special promotion is on the line.  Since the newsletter is an integral part of email marketing, let us walk you through the steps of creating a winning newsletter capable of turning subscribers into buyers.</p>
                  </div>
                </div>
                <div class="border-bottom bd-grey-80 mt-0 pt-30 mb-50"></div>
                <div class="card-blog-grid card-blog-grid-3 hover-up">
                  <div class="card-info"><a href="">
                      <h4 class="color-brand-1">How To Create a Successful Newsletter For Your Shopify Store </h4></a>
                    <div class="mb-25 mt-10"><span class="font-xs color-grey-500">November 17, 2022</span><span class="font-xs color-grey-500 icon-read">2 min read</span></div>
                    <p class="font-sm color-grey-500 mt-20">Popups can also be employed to help eCommerce businesses build their newsletter email list organically. By using the right CTA in your email newsletter popup for Shopify-based eCommerce stores, you can change the pace of your email address accumulation process and help yourself reach a wider audience – all by using a simple incentive such as a special offer discount code on a specific item or a freebie in exchange for the client’s email address.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-0 mb-30 text-center"><a class="btn btn-white-circle font-sm-bold border-brand text-none" href="#">View more in this category</a></div>
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
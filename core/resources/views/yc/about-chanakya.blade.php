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
  <title>About Chanakya</title>
  <style>
    .list-buttons-circle li a {
      font-size: 17px !important;
    }
  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section banner-10">
      <div class="box-banner-home10">
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
              <img src="{{ asset('assets/yc/imgs/page/homepage1/logo-yc.png') }}" width="150">
              <h3 class="color-brand-1 mb-50 wow animate__animated animate__fadeInUp ml-45" data-wow-delay=".0s">A
                Leader Establishes Clear<br class="d-none d-lg-block">Expectations and Holds Everyone,<br
                  class="d-none d-lg-block">Including Themselves, Accountable.</h3>



            </div>
            <div class="col-lg-6 mb-30 ml-1 ">
              <div class="text-center wow animate__animated animate__fadeIn "><img
                  src="{{ asset('assets/yc/imgs/page/homepage1/chanakya-img1.png') }}" width="400" alt="YC"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section mt-50 mb-50 bg-brand-1 pt-100 pb-100 bg-explore">
      <div class="container">
        <div class="text-center"><span
            class="font-xl-bold color-white text-uppercase wow animate__animated animate__fadeInUp"
            data-wow-delay=".0s">Ancient Wisdom</span>
          <h2 class="color-brand-2 mb-60 mt-15 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Startup
            Leadership & Strategy
            Think</h2>
        </div>
        <div class="mt-30 mb-60">
          <ul class="list-buttons list-buttons-circle nav nav-tabs" role="tablist">
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="active"
                href="#tab-explore-1" data-bs-toggle="tab" role="tab" aria-controls="tab-explore-1"
                aria-selected="true">Strategic Planning</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a href="#tab-explore-2"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-2" aria-selected="true">Networking &
                Relationship</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a href="#tab-explore-3"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-3" aria-selected="true">Talent & Team
                Building</a></li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><a href="#tab-explore-4"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-4" aria-selected="true">Risk Management</a>
            </li>
            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><a href="#tab-explore-5"
                data-bs-toggle="tab" role="tab" aria-controls="tab-explore-5" aria-selected="true">Employee Welfare &
                Leadership</a></li>
          </ul>
          <div class="tab-content wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="tab-pane fade active show" id="tab-explore-1" role="tabpanel" aria-labelledby="tab-explore-1">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="{{ asset('assets/yc/imgs/page/homepage10/img-tab.png') }}"
                      alt="YC"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                      <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                        growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-2" role="tabpanel" aria-labelledby="tab-explore-2">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/blog2/img1.png" alt="YC">
                  </div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                      <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                        growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-3" role="tabpanel" aria-labelledby="tab-explore-3">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/homepage10/img-tab.png"
                      alt="YC"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                      <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                        growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-4" role="tabpanel" aria-labelledby="tab-explore-4">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/blog2/img1.png" alt="YC">
                  </div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                      <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                        growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-explore-5" role="tabpanel" aria-labelledby="tab-explore-5">
              <div class="box-tab-32">
                <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-5"><img class="bd-rd16" src="assets/yc/imgs/page/homepage10/img-tab.png"
                      alt="YC"></div>
                  <div class="col-xl-6 col-lg-7">
                    <div class="box-business-tab"><span class="btn btn-tag">Business</span>
                      <h3 class="color-brand-1 mt-10 mb-15">Integrate with over 1,000 project management apps</h3>
                      <p class="font-md color-grey-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic
                        growth strategies whereas prospective &quot;outside the box&quot; thinking.</p>
                      <div class="mt-20">
                        <ul class="list-ticks">
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task tracking
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Create task dependencies
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Task visualization
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>hare files, discuss
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Meet deadlines faster
                          </li>
                          <li>
                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                              </path>
                            </svg>Track time spent on each project
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="no-bg-faqs">
      <section class="section pt-80 mb-30 bg-faqs">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-8 col-md-8">
              <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Frequently
                asked questions</h2>
              <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Feeling
                inquisitive? Have a read through some of our FAQs or<br class="d-none d-lg-block"> contact our
                supporters for help</p>
            </div>
            
          </div>
          <div class="row mt-50 mb-50">
            <div class="col-xl-3 col-lg-4">
              <ul class="list-faqs nav nav-tabs" role="tablist">
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a class="active"
                    href="#tab-support" data-bs-toggle="tab" role="tab" aria-controls="tab-support"
                    aria-selected="true"><span>General Support</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-order"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-order" aria-selected="true"><span>Order /
                      Purchase</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-download"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-download" aria-selected="true"><span>Download /
                      Install</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-technology"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-technology"
                    aria-selected="true"><span>Technology</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
                <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s"><a href="#tab-account"
                    data-bs-toggle="tab" role="tab" aria-controls="tab-account" aria-selected="true"><span>Your
                      Account</span>
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a></li>
              </ul>
             
            </div>
            <div class="col-xl-9 col-lg-8">
              <div class="tab-content tab-content-slider">
                <div class="tab-pane fade active show" id="tab-support" role="tabpanel" aria-labelledby="tab-support">
                  <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Vel tenetur officiis ab reiciendis dolor aut quae doloremque est
                          ipsum natus et consequatur animi aut sunt dolores ut quasi rerum. Aut velit velit id quasi
                          velit eum reiciendis laudantium quo galisum incidunt aut velit animi hic temporibus blanditiis
                          sit odit iure. Eum laborum dolores ea molestias fuga qui temporibus accusantium qui soluta
                          aliquid ab vero soluta.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">How can I return an item purchased online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Aut architecto consequatur sit error nemo sed dolorum suscipit 33
                          impedit dignissimos ut velit blanditiis qui quos magni id dolore dignissimos. Sit ipsa
                          consectetur et sint harum et dicta consequuntur id cupiditate perferendis qui quisquam enim.
                          Vel autem illo id error excepturi est dolorum voluptas qui maxime consequatur et culpa
                          quibusdam in iusto vero sit amet Quis.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                          aria-controls="collapseFour">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Eos nostrum aperiam ab enim quas sit voluptate fuga. Ea aperiam
                          voluptas a accusantium similique 33 alias sapiente non vitae repellat et dolorum omnis eos
                          beatae praesentium id sunt corporis. Aut nisi blanditiis aut corrupti quae et accusantium
                          doloribus sed tempore libero a dolorum beatae.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFive">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                          aria-controls="collapseFive">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Et beatae quae ex minima porro aut nihil quia sed optio dignissimos
                          et voluptates deleniti et nesciunt veritatis et suscipit quod. Est sint voluptate id unde
                          nesciunt non deleniti debitis. Ut dolores tempore vel placeat nemo quo enim reprehenderit eos
                          corrupti maiores et minima quaerat. Quo sequi eaque eum similique sint et autem perspiciatis
                          cum Quis exercitationem quo quos excepturi non ducimus ducimus eos natus velit.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSix">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                          aria-controls="collapseSix">How can I pay for my purchases?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Qui quas itaque ut molestias culpa vel culpa voluptas eos fugit sint
                          ex veritatis totam cum unde maxime! Qui eius fugiat qui veritatis cumque a nesciunt nemo. Id
                          numquam rerum est molestiae quia ut nisi architecto a officiis itaque eum quod repellat ut
                          dolorem dolorem aut ipsam ipsa.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSeven">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                          aria-controls="collapseSeven">Can I cancel my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSeven" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Sed assumenda minus est omnis internos nam corrupti eius non
                          perferendis vero. Est ratione dolor ab veniam quas ex praesentium consequatur ut vero rerum
                          est impedit nihil vel Quis consequatur ut vero sapiente. Ut optio ipsum ad temporibus
                          voluptates et alias numquam eos reiciendis voluptatum. Id omnis modi est vero adipisci qui
                          omnis ipsum rem necessitatibus perspiciatis aut modi iste ab dolores sequi.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-order" role="tabpanel" aria-labelledby="tab-order">
                  <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-1">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-1" aria-labelledby="headingOne-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false"
                          aria-controls="collapseTwo-1">How can I return an item purchased online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-1" aria-labelledby="headingTwo-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">In debitis minus sit doloribus consectetur vel voluptates rerum. Et
                          facere dolor qui voluptas fuga et asperiores eveniet! Et voluptatem voluptates et earum
                          consequatur in porro molestias id omnis Quis qui consequatur laborum. Vel dolor odit in
                          nesciunt sint aut quia excepturi id expedita voluptatem ea repellat voluptates?</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-1">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-1" aria-expanded="false"
                          aria-controls="collapseThree-1">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-1" aria-labelledby="headingThree-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">In repellendus ratione ut tempora nesciunt est veniam esse qui optio
                          fugiat non dignissimos distinctio non excepturi eius. Id aperiam corporis et galisum earum cum
                          sint minima? Et harum nulla sit voluptate odio qui animi nulla et temporibus fuga ut atque
                          modi quo eveniet perferendis et deserunt rerum?</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-1" aria-expanded="false"
                          aria-controls="collapseFour-1">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-1" aria-labelledby="headingFour-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Ab necessitatibus quis ut vero voluptates qui voluptatibus minus 33
                          temporibus dolore et expedita adipisci et minus rerum. Sed repellat molestiae quo omnis minus
                          qui culpa fuga quo minima molestiae et veniam necessitatibus ut placeat dolore est tempora
                          quia? Ut Quis nemo et minus voluptatem ex dolorem voluptates est eius harum ut aliquam
                          voluptatem aut culpa dolorem sed itaque molestiae. Cum doloribus quia et neque quam ad
                          repellat nesciunt.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFive-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive-1" aria-expanded="false"
                          aria-controls="collapseFive-1">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive-1" aria-labelledby="headingFive-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSix-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSix-1" aria-expanded="false"
                          aria-controls="collapseSix-1">How can I pay for my purchases?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSix-1" aria-labelledby="headingSix-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Est quisquam fugit ut nemo repellat ab distinctio dolores eos nulla
                          dolor ea ipsa deleniti. In odit corrupti id fugiat omnis rem voluptatem recusandae ut atque
                          odit ut adipisci laudantium ea dolor illo! Et officiis officiis sit accusantium sint ex beatae
                          error eos dolorum rerum. Id doloribus doloribus et possimus corrupti est nostrum laudantium
                          non nihil rerum id alias nisi! Est laudantium itaque quo galisum vitae qui debitis dignissimos
                          aut illum nihil.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSeven-1">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSeven-1" aria-expanded="false"
                          aria-controls="collapseSeven-1">Can I cancel my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSeven-1" aria-labelledby="headingSeven-1"
                        data-bs-parent="#accordionFAQ2">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-download" role="tabpanel" aria-labelledby="tab-download">
                  <div class="accordion" id="accordionFAQ3">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-2">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-2" aria-labelledby="headingOne-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Sed modi suscipit sit ducimus beatae qui expedita nihil ea ullam
                          voluptates est voluptatem cumque et repellendus culpa. Et quasi necessitatibus aut doloribus
                          magnam qui veritatis fugiat quo velit nulla ut error nesciunt ex omnis beatae. Est nemo illo
                          ut doloribus excepturi qui galisum consectetur cum commodi tempora et obcaecati doloremque.
                          Qui animi ipsum vel inventore nulla eum voluptate modi et incidunt rerum.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false"
                          aria-controls="collapseTwo-2">How can I return an item purchased online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-2" aria-labelledby="headingTwo-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-2">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false"
                          aria-controls="collapseThree-2">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-2" aria-labelledby="headingThree-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Ea earum tempora et obcaecati voluptatem ea reprehenderit itaque sed
                          cumque nisi aut internos error id nihil nobis quo optio ullam. Quo repudiandae incidunt hic
                          quis libero et dolorem ullam est neque delectus 33 eius incidunt qui iusto laborum sed quod
                          officia. Ea omnis provident et voluptatem aperiam id eveniet quis eos sequi fuga. Et
                          consequuntur ducimus a consequatur nemo ex illum aliquam. Sit repellat quasi qui numquam
                          perspiciatis et laboriosam optio.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-2" aria-expanded="false"
                          aria-controls="collapseFour-2">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-2" aria-labelledby="headingFour-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFive-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive-2" aria-expanded="false"
                          aria-controls="collapseFive-2">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive-2" aria-labelledby="headingFive-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Ea veniam adipisci sit modi nobis eum dolores ullam! Et omnis nobis
                          qui itaque esse a fuga nihil. Nam omnis temporibus ab dolor quasi sed nesciunt commodi non
                          praesentium eveniet. Qui quia sapiente et praesentium nobis aut odio debitis vel corrupti sunt
                          quo dolor internos non dignissimos iste. Et nesciunt soluta qui voluptatem cumque sed vero
                          minus et dolorem Quis aut quisquam sunt nam laboriosam placeat.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSix-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSix-2" aria-expanded="false"
                          aria-controls="collapseSix-2">How can I pay for my purchases?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSix-2" aria-labelledby="headingSix-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Ut unde laboriosam ut eius illo aut culpa debitis. Et vitae quia aut
                          atque sunt eum veniam voluptas aut laudantium suscipit eum rerum praesentium. Et odit
                          dignissimos sed ipsam natus et earum dolore! Et blanditiis Quis ut necessitatibus atque 33
                          omnis totam sed voluptatem suscipit! A libero molestias et quos sunt et illum dignissimos. Aut
                          blanditiis voluptas At fugiat maiores aut eligendi velit et cumque voluptas. Et officiis
                          libero aut beatae quis sed rerum dicta.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSeven-2">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSeven-2" aria-expanded="false"
                          aria-controls="collapseSeven-2">Can I cancel my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSeven-2" aria-labelledby="headingSeven-2"
                        data-bs-parent="#accordionFAQ3">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-technology" role="tabpanel" aria-labelledby="tab-technology">
                  <div class="accordion" id="accordionFAQ4">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-3">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-3" aria-labelledby="headingOne-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false"
                          aria-controls="collapseTwo-3">How can I return an item purchased online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-3" aria-labelledby="headingTwo-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-3">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-3" aria-expanded="false"
                          aria-controls="collapseThree-3">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-3" aria-labelledby="headingThree-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-3" aria-expanded="false"
                          aria-controls="collapseFour-3">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-3" aria-labelledby="headingFour-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFive-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive-3" aria-expanded="false"
                          aria-controls="collapseFive-3">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive-3" aria-labelledby="headingFive-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSix-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSix-3" aria-expanded="false"
                          aria-controls="collapseSix-3">How can I pay for my purchases?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSix-3" aria-labelledby="headingSix-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSeven-3">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSeven-3" aria-expanded="false"
                          aria-controls="collapseSeven-3">Can I cancel my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSeven-3" aria-labelledby="headingSeven-3"
                        data-bs-parent="#accordionFAQ4">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-order">
                  <div class="accordion" id="accordionFAQ5">
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingOne-4">
                        <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">Where is my
                          order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse show" id="collapseOne-4" aria-labelledby="headingOne-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingTwo-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false"
                          aria-controls="collapseTwo-4">How can I return an item purchased online?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo-4" aria-labelledby="headingTwo-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingThree-4">
                        <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                          data-bs-toggle="collapse" data-bs-target="#collapseThree-4" aria-expanded="false"
                          aria-controls="collapseThree-4">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree-4" aria-labelledby="headingThree-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFour-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFour-4" aria-expanded="false"
                          aria-controls="collapseFour-4">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour-4" aria-labelledby="headingFour-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingFive-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseFive-4" aria-expanded="false"
                          aria-controls="collapseFive-4">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive-4" aria-labelledby="headingFive-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSix-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSix-4" aria-expanded="false"
                          aria-controls="collapseSix-4">How can I pay for my purchases?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSix-4" aria-labelledby="headingSix-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                      <h5 class="accordion-header" id="headingSeven-4">
                        <button class="accordion-button text-heading-5 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseSeven-4" aria-expanded="false"
                          aria-controls="collapseSeven-4">Can I cancel my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseSeven-4" aria-labelledby="headingSeven-4"
                        data-bs-parent="#accordionFAQ5">
                        <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply random text.
                          It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam
                          nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu
                          epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum
                          officiis id.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="border-bottom"></div> --}}
      </section>
    </div>
    <section class="section mt-50 mb-100">
      <div class="container">
        <div class="box-radius-border box-radius-border-help">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6"><img class="d-block" src="{{asset('assets/yc/imgs/page/help/answer.png')}}"
                alt="YC"></div>
            <div class="col-xl-6 col-lg-6">
              <div class="box-info-answer">
                <h2 class="color-brand-1 mt-10 mb-15">Become a Chanakya</h2>
                <p class="color-grey-500 font-md">A summit designed to help high school students and parents make</p>
                <p class="color-grey-500 font-md">informed career and academic decisions in India & abroad.</p>
                <div class="box-button mt-30"> <a class="btn btn-brand-1 hover-up" href="#">Connect as Chanakya <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
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
  </main>
  @include('layouts.footer')
  @include('layouts.script')
</body>

</html>
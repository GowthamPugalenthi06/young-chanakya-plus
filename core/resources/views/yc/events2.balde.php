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
    <title>Events</title>
  </head>
  <body>
    @include('layouts.header')
    @include('layouts.preload')

    <main class="main">
      <div class="no-bg-faqs">
        <section class="section mt-50 bg-faqs">
          <div class="container">
            <div class="row align-items-end">
              <div class="col-lg-8 col-md-8">
                <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Upcoming Events</h2>
                <p class="font-lg color-gray-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Discover and register for exciting upcoming events, workshops, <br class="d-none d-lg-block"> and networking opportunities near you.</p>
              </div>
            </div>

            <div class="row mt-50 mb-100 d-flex flex-wrap-wrap" style="flex-direction:column">
              <div class="container-fluid mt-4">
                <div class="row">
                  <div class="col-xl-3 col-lg-4">
                    <ul class="list-faqs nav nav-tabs" role="tablist">
                      @foreach ($event_categories as $category)
                      <li class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <a id="tab{{ $category->id }}-tab" data-bs-toggle="pill" data-bs-target="#tab{{ $category->id }}" type="button" role="tab">
                          <span>{{ $category->name }}</span>
                          <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                          </svg>
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </div>

                  <div class="col-md-9">
                    <div class="tab-content" id="v-tabsContent">
                      @foreach ($event_categories as $category)
                      <div class="tab-pane fade" id="tab{{ $category->id }}" role="tabpanel">
                        <div class="row">
                          @forelse($events->where('cat_id', $category->id) as $event)
                          <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="card-plan-style-2 hover-up">
                              <div class="card-plan">
                                @php
                                  $images = json_decode($event->image, true);
                                @endphp
                                <img src="{{ !empty($images) ? asset('/assets/front/img/events/sliders/'.$images[0]) : '' }}" alt="Event" class="rounded-lg w-100 mb-3">
                                <p class="text-sm text-orange-500 font-medium mb-1">
                                  <i class="fa fa-map-marker-alt me-1 text-price-card1-location"></i> {{ $event->venue_location }}
                                </p>
                                <h5 class="fw-bold text-dark mb-2">
                                  {{ strlen($event->title) > 30 ? mb_substr($event->title, 0, 30, 'utf-8') . '...' : $event->title }}
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                  <span class="text-sm text-muted">
                                    <i class="fa fa-calendar-alt me-1 text-type-card1-date"></i> {{ date_format(date_create($event->date), "d/m/Y") }}
                                  </span>
                                  <a href="" class="btn btn-sm border border-warning text-warning rounded px-3 py-1 hover:bg-warning-subtle fw-semibold">
                                    ATTEND
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          @empty
                          <div class="col-12 text-center">
                            <p>No events found for this category.</p>
                          </div>
                          @endforelse
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    @include('layouts.footer')
    @include('layouts.script')
  </body>
</html>

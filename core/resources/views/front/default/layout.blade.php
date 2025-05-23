<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Start of Google Analytics script-->
      @if ($bs->is_analytics == 1)
      {!! $bs->google_analytics_script !!}
      @endif
      <!--End of Google Analytics script-->

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="description" content="@yield('meta-description')">
      <meta name="keywords" content="@yield('meta-keywords')">

      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{$bs->website_title}} @yield('pagename')</title>
      <!-- favicon -->
      <link rel="shortcut icon" href="{{asset('assets/front/img/'.$bs->favicon)}}" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
      <!-- plugin css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/plugin.min.css')}}">

      <!-- main css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

      <!-- common css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/common-style.css')}}">
      @yield('styles')

      @if ($bs->is_tawkto == 1 || $bex->is_whatsapp == 1)
      <style>
        .back-to-top.show {
            right: auto;
            left: 20px;
        }
      </style>
      @endif
      @if (count($langs) == 0)
      <style media="screen">
      .support-bar-area ul.social-links li:last-child {
          margin-right: 0px;
      }
      .support-bar-area ul.social-links::after {
          display: none;
      }
      </style>
      @endif

      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
      <!-- common base color change -->
      <link href="{{url('/')}}/assets/front/css/common-base-color.php?color={{$bs->base_color}}" rel="stylesheet">
      <!-- base color change -->
      <link href="{{url('/')}}/assets/front/css/base-color.php?color={{$bs->base_color}}{{$be->theme_version != 'dark' ? "&color1=" . $bs->secondary_base_color : ""}}" rel="stylesheet">

      @if ($be->theme_version == 'dark')
        <!-- dark version css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/dark.css')}}">
        <!-- dark version base color change -->
        <link href="{{url('/')}}/assets/front/css/dark-base-color.php?color={{$bs->base_color}}" rel="stylesheet">
      @endif

      @if ($rtl == 1)
      <!-- RTL css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/pb-rtl.css')}}">
      @endif
      <!-- jquery js -->
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

      @if ($bs->is_appzi == 1)
      <!-- Start of Appzi Feedback Script -->
      <script async src="https://app.appzi.io/bootstrap/bundle.js?token={{$bs->appzi_token}}"></script>
      <!-- End of Appzi Feedback Script -->
      @endif

      <!-- Start of Facebook Pixel Code -->
      @if ($be->is_facebook_pexel == 1)
        {!! $be->facebook_pexel_script !!}
      @endif
      <!-- End of Facebook Pixel Code -->

      <!--Start of Appzi script-->
      @if ($bs->is_appzi == 1)
      {!! $bs->appzi_script !!}
      @endif
      <!--End of Appzi script-->
   </head>



   <body @if($rtl == 1) dir="rtl" @endif>

      <!--   header area start   -->
      <div class="header-area header-absolute @yield('no-breadcrumb')">
         <div class="container">
            <div class="support-bar-area">
               <div class="row">
                  <div class="col-lg-6 support-contact-info">
                     <span class="address"><i class="far fa-envelope"></i> {{$bs->support_email}}</span>
                     <span class="phone"><i class="flaticon-chat"></i> {{$bs->support_phone}}</span>
                  </div>
                  <div class="col-lg-6 {{$rtl == 1 ? 'text-left' : 'text-right'}}">
                     <ul class="social-links">
                       @foreach ($socials as $key => $social)
                         <li><a target="_blank" href="{{$social->url}}"><i class="{{$social->icon}}"></i></a></li>
                       @endforeach
                     </ul>

                     @if (!empty($currentLang) && count($langs) > 1)
                       <div class="language">
                          <a class="language-btn" href="#"><i class="flaticon-worldwide"></i> {{convertUtf8($currentLang->name)}}</a>
                          <ul class="language-dropdown">
                            @foreach ($langs as $key => $lang)
                            <li><a href='{{ route('changeLanguage', $lang->code) }}'>{{convertUtf8($lang->name)}}</a></li>
                            @endforeach
                          </ul>
                       </div>
                     @endif

                     @guest
                        @if ($bex->is_user_panel == 1)
                            <ul class="login">
                                <li><a href="{{route('user.login')}}">{{__('Login')}}</a></li>
                            </ul>
                        @endif
                    @endguest
                     @auth
                     <div class="language dashboard">
                         <a class="language-btn" href="#">
                             <i class="far fa-user"></i> {{Auth::user()->username}}
                         </a>
                         <ul class="language-dropdown">
                             <li>
                                 <a href="{{route('user-dashboard')}}">{{__('Dashboard')}}</a>
                             </li>

                             @if ($bex->recurring_billing == 1)
                                 <li><a href="{{route('user-packages')}}">{{__('Packages')}}</a></li>
                             @endif

                             @if ($bex->is_shop == 1 && $bex->catalog_mode == 0)
                                 <li><a href="{{route('user-orders')}}">{{__('Product Orders')}} </a></li>
                             @endif

                             @if ($bex->recurring_billing == 0)
                                 <li><a href="{{route('user-package-orders')}}">{{__('Package Orders')}} </a></li>
                             @endif


                             @if ($bex->is_course == 1)
                             <li>
                                 <a href="{{route('user.course_orders')}}" >{{__('Courses')}}</a>
                             </li>
                             @endif


                             @if ($bex->is_event == 1)
                             <li>
                                 <a href="{{route('user-events')}}" >{{__('Event Bookings')}}</a>
                             </li>
                             @endif


                             @if ($bex->is_donation == 1)
                             <li>
                                 <a href="{{route('user-donations')}}" >{{__('Donations')}}</a>
                             </li>
                             @endif

                             @if ($bex->is_ticket == 1)
                             <li>
                                 <a href="{{route('user-tickets')}}">{{__('Support Tickets')}}</a>
                             </li>
                             @endif

                             <li>
                                 <a href="{{route('user-profile')}}">{{__('Edit Profile')}}</a>
                             </li>

                             @if ($bex->is_shop == 1 && $bex->catalog_mode == 0)
                                 <li>
                                     <a href="{{route('shpping-details')}}">{{__('Shipping Details')}}</a>
                                 </li>
                                 <li>
                                     <a href="{{route('billing-details')}}">{{__('Billing Details')}}</a>
                                 </li>
                                 <li>
                                     <a href="{{route('user-reset')}}">{{__('Change Password')}}</a>
                                 </li>
                             @endif
                             <li>
                                 <a href="{{route('user-logout')}}" target="_self">{{__('Logout')}}</a>
                             </li>
                         </ul>
                     </div>
                     @endauth


                  </div>
               </div>
            </div>


            @includeIf('front.default.partials.navbar')

         </div>
      </div>
      <!--   header area end   -->


      @if (!request()->routeIs('front.index') && !request()->routeIs('front.packageorder.confirmation'))
        <!--   breadcrumb area start   -->
        <div class="breadcrumb-area cases lazy" data-bg="{{asset('assets/front/img/' . $bs->breadcrumb)}}" style="background-size:cover;">
            <div class="container">
            <div class="breadcrumb-txt">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <span>@yield('breadcrumb-title')</span>
                        <h1>@yield('breadcrumb-subtitle')</h1>
                        <ul class="breadcumb">
                        <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li>@yield('breadcrumb-link')</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
        </div>
        <!--   breadcrumb area end    -->
      @endif


      @yield('content')


      <!--    footer section start   -->
      <footer class="footer-section">
         <div class="container">
            @if (!($bex->home_page_pagebuilder == 0 && $bs->top_footer_section == 0))
            <div class="top-footer-section">
               <div class="row">
                  <div class="col-lg-4 col-md-12">
                     <div class="footer-logo-wrapper">
                        <a href="{{route('home')}}">
                        <img class="lazy" data-src="{{asset('assets/front/img/'.$bs->footer_logo)}}" alt="">
                        </a>
                     </div>
                     <p class="footer-txt">
                        @if (strlen($bs->footer_text) > 194)
                           {{mb_substr($bs->footer_text, 0, 194, 'UTF-8')}}<span style="display: none;">{{mb_substr($bs->footer_text, 194, null, 'UTF-8')}}</span>
                           <a href="#" class="see-more">{{__('see more')}}...</a>
                        @else
                           {{$bs->footer_text}}
                        @endif
                    </p>
                  </div>
                  <div class="col-lg-2 col-md-3">
                     <h4>{{__('Useful Links')}}</h4>
                     <ul class="footer-links">
                        @foreach ($ulinks as $key => $ulink)
                          <li><a href="{{$ulink->url}}">{{convertUtf8($ulink->name)}}</a></li>
                        @endforeach
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <h4>{{__('Newsletter')}}</h4>
                     <form class="footer-newsletter" id="footerSubscribeForm" action="{{route('front.subscribe')}}" method="post">
                       @csrf
                       <p>{{convertUtf8($bs->newsletter_text)}}</p>
                       <input type="email" name="email" value="" placeholder="{{__('Enter Email Address')}}" />
                       <p id="erremail" class="text-danger mb-0 err-email"></p>
                       <button type="submit">{{__('Subscribe')}}</button>
                     </form>
                  </div>
                  <div class="col-lg-3 col-md-5">
                     <h4>{{__('Contact Us')}}</h4 >
                     <div class="footer-contact-info">
                        <ul>
                           <li><i class="fa fa-home"></i>
                            @php
                            $addresses = explode(PHP_EOL, $bex->contact_addresses);
                            @endphp
                            <span>
                                @foreach ($addresses as $address)
                                {{$address}}
                                @if (!$loop->last)
                                    |
                                @endif
                                @endforeach
                            </span>
                           </li>

                           <li><i class="fa fa-phone"></i>
                            @php
                             $phones = explode(',', $bex->contact_numbers);
                            @endphp
                            <span>
                                @foreach ($phones as $phone)
                                {{$phone}}
                                @if (!$loop->last)
                                    ,
                                @endif
                                @endforeach
                            </span>
                          </li>
                           <li><i class="far fa-envelope"></i>
                            @php
                             $mails = explode(',', $bex->contact_mails);
                            @endphp
                            <span>
                                @foreach ($mails as $mail)
                                {{$mail}}
                                @if (!$loop->last)
                                    ,
                                @endif
                                @endforeach
                            </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            @endif

            @if (!($bex->home_page_pagebuilder == 0 && $bs->copyright_section == 0))
            <div class="copyright-section">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     {!! replaceBaseUrl(convertUtf8($bs->copyright_text)) !!}
                  </div>
               </div>
            </div>
            @endif
         </div>
      </footer>
      <!--    footer section end   -->


      {{-- WhatsApp Chat Button --}}
      <div id="WAButton"></div>

        <!--====== PRELOADER PART START ======-->
        @if ($bex->preloader_status == 1)
        <div id="preloader">
            <div class="loader revolve">
                <img src="{{asset('assets/front/img/' . $bex->preloader)}}" alt="">
            </div>
        </div>
        @endif
        <!--====== PRELOADER PART ENDS ======-->

        @if ($bex->is_shop == 1 && $bex->catalog_mode == 0)
            <div id="cartIconWrapper">
                <a class="d-block" id="cartIcon" href="{{route('front.cart')}}">
                    <div class="cart-length">
                        <i class="fas fa-cart-plus"></i>
                        <span class="length">{{cartLength()}} {{__('ITEMS')}}</span>
                    </div>
                    <div class="cart-total">
                        {{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}}
                        {{cartTotal()}}
                        {{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}
                    </div>
                </a>
            </div>
        @endif

      <!-- back to top area start -->
      <div class="back-to-top">
         <i class="fas fa-chevron-up"></i>
      </div>
      <!-- back to top area end -->


      {{-- Cookie alert dialog start --}}
      @if ($be->cookie_alert_status == 1)
      @include('cookie-consent::index')
      @endif
      {{-- Cookie alert dialog end --}}

      {{-- Popups start --}}
      @includeIf('front.partials.popups')
      {{-- Popups end --}}

      @php
        $mainbs = [];
        $mainbs = json_encode($mainbs);
      @endphp
      <script>
        var mainbs = {!! $mainbs !!};
        var mainurl = "{{url('/')}}";
        var vap_pub_key = "{{env('VAPID_PUBLIC_KEY')}}";
        var rtl = {{ $rtl }};
      </script>
      <!-- popper js -->
      <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
      <!-- Plugin js -->
      <script src="{{asset('assets/front/js/plugin.min.js')}}"></script>
      <!-- main js -->
      <script src="{{asset('assets/front/js/main.js')}}"></script>
      <!-- pagebuilder custom js -->
      <script src="{{asset('assets/front/js/common-main.js')}}" defer></script>

      {{-- whatsapp init code --}}
      @if ($bex->is_whatsapp == 1)
        <script type="text/javascript">
            var whatsapp_popup = {{$bex->whatsapp_popup}};
            var whatsappImg = "{{asset('assets/front/img/whatsapp.svg')}}";
            $(function () {
                $('#WAButton').floatingWhatsApp({
                    phone: "{{$bex->whatsapp_number}}", //WhatsApp Business phone number
                    headerTitle: "{{$bex->whatsapp_header_title}}", //Popup Title
                    popupMessage: `{!! nl2br($bex->whatsapp_popup_message) !!}`, //Popup Message
                    showPopup: whatsapp_popup == 1 ? true : false, //Enables popup display
                    buttonImage: '<img src="' + whatsappImg + '" />', //Button Image
                    position: "right" //Position: left | right

                });
            });
        </script>
      @endif
      @yield('scripts')
      @stack('event-js')

        @if (session()->has('success'))
        <script>
            toastr["success"]("{{__(session('success'))}}");
        </script>
        @endif

        @if (session()->has('error'))
        <script>
            toastr["error"]("{{__(session('error'))}}");
        </script>
        @endif

      <!--Start of subscribe functionality-->
      <script>
        $(document).ready(function() {
          $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
            // console.log($(this).attr('id'));

            e.preventDefault();

            let formId = $(this).attr('id');
            let fd = new FormData(document.getElementById(formId));
            let $this = $(this);

            $.ajax({
              url: $(this).attr('action'),
              type: $(this).attr('method'),
              data: fd,
              contentType: false,
              processData: false,
              success: function(data) {
                // console.log(data);
                if ((data.errors)) {
                  $this.find(".err-email").html(data.errors.email[0]);
                } else {
                  toastr["success"]("You are subscribed successfully!");
                  $this.trigger('reset');
                  $this.find(".err-email").html('');
                }
              }
            });
          });


        });
      </script>
      <!--End of subscribe functionality-->

      <!--Start of Tawk.to script-->
      @if ($bs->is_tawkto == 1)
      {!! $bs->tawk_to_script !!}
      @endif
      <!--End of Tawk.to script-->

      <!--Start of AddThis script-->
      @if ($bs->is_addthis == 1)
      {!! $bs->addthis_script !!}
      @endif
      <!--End of AddThis script-->
   </body>
</html>

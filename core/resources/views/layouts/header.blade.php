<!DOCTYPE html>
<html lang="en">
  <body>
    <header class="header sticky-bar">
        <div class="container">
          <div class="main-header">
            <div class="header-left">
              <div class="header-logo mr-100"><a class="d-flex" href="index.html"><img alt="Ecom" src="{{asset('assets/yc/imgs/yc-logo.png')}}" ></a></div>
              <div class="header-nav ">
                <nav class="nav-main-menu d-none d-xl-block">
                  <ul class="main-menu">
                    <li><a href="{{route('home')}}"><b>Home</b></a></li>
                    <li><a href="{{route('about')}}"><b>About</b></a></li>
                    <li class="has-children"><a href="#"><b>Program</b></a>
                      <ul class="sub-menu">
                        <li><a href="{{route('learning')}}">Learning</a></li>
                        <li><a href="{{route('outcomes')}}">Outcomes</a></li>
                        <li><a href="{{route('program')}}">Program</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href="#"><b>Teams</b></a>
                      <ul class="sub-menu">
                        <li><a href="{{route('mentor-team')}}">Mentor Team</a></li>
                        <li><a href="{{route('advisory-team')}}">Advisory Team</a></li>
                        <li><a href="{{route('academic-team')}}">Academic Team</a></li>
                        <li><a href="{{route('vc-team')}}">VC Team</a></li>
                        <li><a href="{{route('management-team')}}">Management Team</a></li>
                      </ul>
                    </li>
                    <li class="has-children"><a href="#"><b>Chanakya's</b></a>
                      <ul class="sub-menu">
                        <li><a href="{{route('ceo-md')}}">CEO & MD's</a></li>
                        <li><a href="{{route('unicorn-founders')}}">Unicorn Founders</a></li>
                        <li><a href="{{route('executives')}}">Executives</a></li>
                        <li><a href="{{route('fortune500')}}">Fortune 500's</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('membership')}}"><b>Membership</b></a></li>
                    <li><a href="{{route('events')}}"><b>Events</b></a></li>
                   
                    {{-- <li class="has-children"><a href="#"><b>Explore</b></a>
                      <ul class="sub-menu">
                        <li><a href="{{route('podcast')}}">Podcast</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('case-studies')}}">Case Study</a></li>
                        <li><a href="{{route('video-series')}}">Video Series</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('career')}}"><b>Career</b></a></li> --}}
                    
                  </ul>
                </nav>
                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
              </div>
              <div class="header-right">
                <div class="d-none d-sm-inline-block"><a class="btn btn-brand-1 hover-up" href="{{route('become-a-chanakya')}}">Connect as Chanakya</a></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="index.html"><img alt="IORI" src="{{asset('assets/yc/imgs/template/logo.svg')}}"></a></div>
            <div class="burger-icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            <div class="perfect-scroll">
              <div class="mobile-menu-wrap mobile-header-border">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="tab-menu" role="tabpanel" aria-labelledby="tab-menu">
                    <nav class="mt-15">
                       <ul class="mobile-menu font-heading">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('membership')}}">Membership</a></li>
                    <li><a href="{{route('program')}}">Program</a></li>
                    <li class="has-children"><a href="#">Resources</a>
                      <ul class="sub-menu">
                        <li><a href="{{route('podcast')}}">Podcast</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('case-studies')}}">Case Study</a></li>
                        <li><a href="{{route('video-series')}}">Video Series</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('events')}}">Events</a></li>
                    <li><a href="{{route('career')}}">career</a></li>
                    <li class="has-children"><a href="#">Others</a>
                      <ul class="sub-menu">
                        <li><a href="{{route('about-chanakya')}}">About Chanakya</a></li>
                        <li><a href="{{route('become-a-chanakya')}}">Become a Chanakya</a></li>
                        <li><a href="{{route('become-a-sponsor')}}">Become a Sponsor</a></li>
                        <li><a href="{{route('institution-collaboration')}}">Institution Collaboration</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                      </ul>
                    </li>
                  </ul>
                    </nav>
                  </div>
                  
                 
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

  </body>
</html>
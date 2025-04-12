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
          <h2 class="color-brand-1 wow animate__animated animate__fadeIn" data-wow-delay=".2s">We’re Always Searching
            For<br class="d-none d-lg-block">Amazing People to Join Our Team.</h2>
        </div>
        <div class="box-video mt-70"><img src="{{asset('assets/yc/imgs/page/career/img-video.png')}}" alt="iori">
          <div class="image-1 shape-1"><img src="{{asset('assets/yc/imgs/page/career/certify.png')}}" alt="iori"></div>
        </div>
      </div>
    </section>
    <section class="section mt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Why You Should
              Consider Applying</h2>
            <p class="font-lg color-gray-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">We're lively,
              not corporate. We have the energy and boldness of a startup and<br class="d-none d-lg-block">the expertise
              and pragmatism of a scale-up. All in one place.</p>
          </div>
        </div>
        <div class="row mt-65">
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-small card-small-2">
              <div class="card-image"><a href="#">
                  <div class="box-image"><img src="{{asset('assets/yc/imgs/page/homepage1/free.svg')}}" alt="iori">
                  </div>
                </a></div>
              <div class="card-info"><a href="#">
                  <h6 class="color-brand-1 mb-10">Connected</h6>
                </a>
                <p class="font-xs color-grey-500">We come together wherever we are – across time zones, regions, offices
                  and screens. You will receive support from your teammates anytime and anywhere.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="card-small card-small-2">
              <div class="card-image"><a href="#">
                  <div class="box-image"><img src="{{asset('assets/yc/imgs/page/homepage1/cross.png')}}" alt="iori">
                  </div>
                </a></div>
              <div class="card-info"><a href="#">
                  <h6 class="color-brand-1 mb-10">Inclusive</h6>
                </a>
                <p class="font-xs color-grey-500">Our teams reflect the rich diversity of our world, with equitable
                  access to opportunity for everyone. No matter where you come from</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-small card-small-2">
              <div class="card-image"><a href="#">
                  <div class="box-image"><img src="{{asset('assets/yc/imgs/page/homepage2/identity.png')}}" alt="iori">
                  </div>
                </a></div>
              <div class="card-info"><a href="#">
                  <h6 class="color-brand-1 mb-10">Flexible</h6>
                </a>
                <p class="font-xs color-grey-500">We believe in your freedom to work when and how you work best, to help
                  us all thrive. Only freedom and independent work can bring out the best in you.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="card-small card-small-2">
              <div class="card-image"><a href="#">
                  <div class="box-image"><img src="{{asset('assets/yc/imgs/page/career/persuasion.png')}}" alt="iori">
                  </div>
                </a></div>
              <div class="card-info"><a href="#">
                  <h6 class="color-brand-1 mb-10">Persuasion</h6>
                </a>
                <p class="font-xs color-grey-500">Knowing that there is real value to be gained from helping people to
                  simplify whatever it is that they do and bring.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pt-50 pb-100">
      <div class="container">
        <div class="box-image-detail"><img class="bd-rd16 d-block"
            src="{{asset('assets/yc/imgs/page/job-detail/img-job.png')}}" alt="iori"></div>
        <div class="content-detail">
          <div class="row">
            <div class="col-lg-10 col-11 m-auto">
              <div class="box-detail-content">
                <div class="row align-items-center">
                  <div class="row align-items-end">
                    <ul class="tabs-plan change-price-plan" role="tablist">
                    <button class="btn btn-primary me-2 px-20 pr-20" id="bt1" style="background-color:#024430;border-color:#024430;" onclick="showTab('internship')">Internship</button>
                    <button class="btn btn-secondary px-20 pr-20" id="bt2" style="color:#024430;background-color:white;" onclick="showTab('job')">Job</button>

                    </ul>

                  </div>
                </div>
                <div id="internship-content" class="tab-content">
                  <h3>Internship Content Goes Here</h3>
                  <p>This is the content for the internship opportunity.</p>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manager and Financial Services</h3><span
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
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-start mb-30"> <a
                      class="btn btn-brand-1 btn-apply" href="#">
                      <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                      </svg>Appy Now</a></div>

                  <div class="border-bottom bd-grey-80 mb-40 pt-0"> </div>
                  <h4 class="color-brand-1 mb-25">Job summary </h4>
                  <div class="box-info-job">
                    <div class="row align-items-start">
                      <div class="col-lg-6 col-md-6">
                        <div class="item-job">
                          <div class="left-title"> <span class="industry">Industry</span></div>
                          <div class="right-info">
                            Business, Financial</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="salary">Salary</span></div>
                          <div class="right-info">
                            $800 - $1000</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="jobtype">Job type</span></div>
                          <div class="right-info">
                            Permanent</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="updated">Updated</span></div>
                          <div class="right-info">
                            10/07/2022 </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="item-job">
                          <div class="left-title"> <span class="joblevel">Job level</span></div>
                          <div class="right-info">
                            Experienced (Non - Manager)</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="experience">Experience</span></div>
                          <div class="right-info">
                            1 - 2 Years</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="deadline">Deadline</span></div>
                          <div class="right-info">
                            08/08/2022</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="location">Location</span></div>
                          <div class="right-info">
                            Dallas, Texas. Remote Friendly.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="color-brand-1">Responsibilities</h4>
                  <p>Product knowledge: Deeply understand the technology and features of the product area to which you
                    are
                    assigned.</p>
                  <p>Research: Provide human and business impact and insights for products.</p>
                  <p>Deliverables: Create deliverables for your product area (for example competitive analyses, user
                    flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user
                    problems
                    through the user experience.</p>
                  <p>Communication: Communicate the results of UX activities within your product area to the design team
                    department, cross-functional partners within your product area, and other interested Superformula
                    team
                    members using clear language that simplifies complexity.</p>
                  <h4 class="color-brand-1">Requirements</h4>
                  <ul>
                    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                    <li>5+ years of industry experience in interactive design and / or visual design</li>
                    <li>Excellent interpersonal skills </li>
                    <li>Aware of trends in mobile, communications, and collaboration</li>
                    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts
                    </li>
                    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals
                      independently
                    </li>
                    <li>History of impacting shipping products with your work</li>
                    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>
                    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                  </ul>
                  <h4 class="color-brand-1">What's on Offer </h4>
                  <ul>
                    <li>Annual bonus and holidays, social welfare, and health checks.</li>
                    <li>Training and attachment in Taiwan and other Greater China branches.</li>
                  </ul>
                  <div class="box-info-bottom">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 col-sm-5 col-12 mb-30"> <a class="btn btn-brand-1 btn-apply"
                          href="#">
                          <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                          </svg>Appy Now</a></div>
                      <div class="col-lg-6 col-md-6 col-sm-7 col-12 text-start text-sm-end mb-30"> <a
                          class="btn btn-tag mb-10" href="#">App</a><a class="btn btn-tag ml-10 mb-10"
                          href="#">Digital</a><a class="btn btn-tag ml-10 mb-10" href="#">Marketing</a></div>
                    </div>
                  </div>
                </div>
                <div id="job-content" class="tab-content" style="display: none;">
                  <h3>Job Content Goes Here</h3>
                  <p>This is the content for the internship opportunity.</p>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">Business Development Manager and Financial Services</h3><span
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
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-start mb-30"> <a
                      class="btn btn-brand-1 btn-apply" href="#">
                      <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                      </svg>Appy Now</a></div>

                  <div class="border-bottom bd-grey-80 mb-40 pt-0"> </div>
                  <h4 class="color-brand-1 mb-25">Job summary </h4>
                  <div class="box-info-job">
                    <div class="row align-items-start">
                      <div class="col-lg-6 col-md-6">
                        <div class="item-job">
                          <div class="left-title"> <span class="industry">Industry</span></div>
                          <div class="right-info">
                            Business, Financial</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="salary">Salary</span></div>
                          <div class="right-info">
                            $800 - $1000</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="jobtype">Job type</span></div>
                          <div class="right-info">
                            Permanent</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="updated">Updated</span></div>
                          <div class="right-info">
                            10/07/2022 </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="item-job">
                          <div class="left-title"> <span class="joblevel">Job level</span></div>
                          <div class="right-info">
                            Experienced (Non - Manager)</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="experience">Experience</span></div>
                          <div class="right-info">
                            1 - 2 Years</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="deadline">Deadline</span></div>
                          <div class="right-info">
                            08/08/2022</div>
                        </div>
                        <div class="item-job">
                          <div class="left-title"> <span class="location">Location</span></div>
                          <div class="right-info">
                            Dallas, Texas. Remote Friendly.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="color-brand-1">Responsibilities</h4>
                  <p>Product knowledge: Deeply understand the technology and features of the product area to which you
                    are
                    assigned.</p>
                  <p>Research: Provide human and business impact and insights for products.</p>
                  <p>Deliverables: Create deliverables for your product area (for example competitive analyses, user
                    flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user
                    problems
                    through the user experience.</p>
                  <p>Communication: Communicate the results of UX activities within your product area to the design team
                    department, cross-functional partners within your product area, and other interested Superformula
                    team
                    members using clear language that simplifies complexity.</p>
                  <h4 class="color-brand-1">Requirements</h4>
                  <ul>
                    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                    <li>5+ years of industry experience in interactive design and / or visual design</li>
                    <li>Excellent interpersonal skills </li>
                    <li>Aware of trends in mobile, communications, and collaboration</li>
                    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts
                    </li>
                    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals
                      independently
                    </li>
                    <li>History of impacting shipping products with your work</li>
                    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>
                    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                  </ul>
                  <h4 class="color-brand-1">What's on Offer </h4>
                  <ul>
                    <li>Annual bonus and holidays, social welfare, and health checks.</li>
                    <li>Training and attachment in Taiwan and other Greater China branches.</li>
                  </ul>
                  <div class="box-info-bottom">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 col-sm-5 col-12 mb-30"> <a class="btn btn-brand-1 btn-apply"
                          href="#">
                          <svg class="w-6 h-6 icon-18 mr-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                          </svg>Appy Now</a></div>
                      <div class="col-lg-6 col-md-6 col-sm-7 col-12 text-start text-sm-end mb-30"> <a
                          class="btn btn-tag mb-10" href="#">App</a><a class="btn btn-tag ml-10 mb-10"
                          href="#">Digital</a><a class="btn btn-tag ml-10 mb-10" href="#">Marketing</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

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
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/ui.png')}}" alt="iori"></div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">UI / UX Designer fulltime</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/java.png')}}" alt="iori"></div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Java Software Engineer</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
              <div class="card-image"><img src="{{asset('assets/yc/imgs/page/job-detail/senior.png')}}" alt="iori">
              </div>
              <div class="card-info">
                <h4 class="color-brand-1 mb-15">Senior System Engineer</h4>
                <p class="font-md color-grey-500 mb-15">Seamless importing and round-tripping of Microsoft Project
                  plans, Excel files &amp; CSV files.</p>
                <div class="box-button-offer"><a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More
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
              <div class="img-reveal"><img class="d-block"
                  src="{{asset('assets/yc/imgs/page/homepage2/img-marketing.png')}}" alt="iori"></div>
            </div>
            <div class="col-lg-6">
              <div class="box-info-video"><span class="btn btn-tag wow animate__animated animate__fadeInUp"
                  data-wow-delay=".0s">Get in touch</span>
                <h2 class="color-brand-1 mt-15 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Want
                  to talk to a marketing expert?</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Excepteur
                  sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis
                  lectus nulla. Interactively transform magnetic growth strategies whereas prospective "outside the box"
                  thinking.</p>
                <div class="box-button text-start mt-65 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><a
                    class="btn btn-brand-1 hover-up" href="#">Contact Us</a><a
                    class="btn btn-default font-sm-bold hover-up" href="#">Support Center
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


  </main>
  @include('layouts.footer')
  @include('layouts.script')

</body>

</html>
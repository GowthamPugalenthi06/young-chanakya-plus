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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/yc/imgs/template/favicon.svg')}}')}}">
    <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
    <title>Student form</title>
    <style>
      .bg-chn{
        background-color:#E0F1F4;
      }
      
    </style>
  </head>
  <body>
@include('layouts.header')
@include('layouts.preload')
      <!-- <section class="section box-page-register">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="box-steps-small">
                <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
                  <div class="num-ele">1</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Register</h5>
                    <p class="font-md color-grey-500">All you need is your name, email and a strong password, Or use your social media accounts.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
                  <div class="num-ele">2</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Activate</h5>
                    <p class="font-md color-grey-500">Use the code sent to your email to activate your account.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                  <div class="num-ele">3</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Open a trading account</h5>
                    <p class="font-md color-grey-500">Create a real or demo trading account on our platform. No credit card required.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                  <div class="num-ele">4</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Connect with investors</h5>
                    <p class="font-md color-grey-500">With a real-time analysis system you will become a professional investor.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".4s">
                  <div class="num-ele">5</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Almost done</h5>
                    <p class="font-md color-grey-500">Start your amazing journey on our platform.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="box-register">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Create an account</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Create an account today and start using our platform</p>
                <div class="line-register mt-25 mb-50"></div>
                <div class="row wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-name" type="text" placeholder="Your name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-phone" type="text" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-email" type="text" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-user" type="text" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-password" type="text" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group mb-25">
                      <input class="form-control icon-password" type="text" placeholder="Re-password">
                    </div>
                  </div>
                  <div class="col-lg-12 mt-15">
                    <div class="form-group mb-25">
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">I have read and agree to the Terms & Conditions and the Privacy Policy of this website.</span><span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                    <div class="form-group">
                      <button class="btn btn-brand-lg btn-full font-md-bold" type="submit">Sign up now</button>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-6"><span class="d-inline-block align-middle font-sm color-grey-500">Already have an account?</span><a class="d-inline-block align-middle color-success ml-3" href="login.html"> Sign In</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- <section class="section bg-chn1 box-page-register">
        <div class="container "> -->
          <div class="row">
            <div class="col-lg-6 bg-chn">
              <!-- Left Column (Steps) -->
              <div class="box-steps-small pt-100 pb-50">
                <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
                  <div class="num-ele">1</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Register</h5>
                    <p class="font-md color-grey-500">All you need is your name, email and a strong password, Or use your social media accounts.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
                  <div class="num-ele">2</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Activate</h5>
                    <p class="font-md color-grey-500">Use the code sent to your email to activate your account.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                  <div class="num-ele">3</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Open a trading account</h5>
                    <p class="font-md color-grey-500">Create a real or demo trading account on our platform. No credit card required.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                  <div class="num-ele">4</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Connect with investors</h5>
                    <p class="font-md color-grey-500">With a real-time analysis system you will become a professional investor.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".4s">
                  <div class="num-ele">5</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Almost done</h5>
                    <p class="font-md color-grey-500">Start your amazing journey on our platform.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 pl-40">
              <!-- Right Column (Step Form) -->
              <div class="box-register">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">Create an account</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Create an account today and start using our platform</p>
                <div class="line-register mt-25 mb-50"></div>

                <form id="multiStepForm" action="{{route('student.store')}}" method="post">
                  <!-- Step 1 -->
                  <div class="form-step step-1">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-name" type="text" placeholder="Your name">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-phone" type="text" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-email" type="text" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-user" type="text" placeholder="Username">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-password" type="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-password" type="password" placeholder="Re-password">
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-brand-lg btn-full font-md-bold mt-3" onclick="nextStep()">Next</button>
                  </div>

                  <!-- Step 2 -->
                  <div class="form-step step-2" style="display: none;">
                    <div class="row">
                      <!-- Duplicated fields for Step 2 -->
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-user " type="text" placeholder="DOB">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-email" type="text-area" placeholder="Current Address">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-name" type="url" placeholder="LinkedIn Profile">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control icon-company" type="text" placeholder="College/University">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control " type="text" placeholder="Course of Study">
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input class="form-control " type="text" placeholder="Year of study">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                      <button type="button" class="btn btn-brand-lg btn-full font-md-bold mr-20" onclick="prevStep()">Back</button>
                      <button type="submit" class="btn btn-brand-lg btn-full font-md-bold">Submit</button>
                    </div>
                  </div>
                </form>

                <div class="text-center mt-3">
                  <span class="font-sm color-grey-500">Already have an account?</span>
                  <a class="color-success ml-1" href="login.html">Sign In</a>
                </div>
              </div>
            </div>
          </div>
        <!-- </div>
      </section> -->
    <!-- <div class="container">
        <h2 class="text-center">Personal Information Form</h2>
        <form action="submit_form.php" method="POST">

            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">DOB:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" pattern="[0-9]{10}" required>
            </div>

            <div class="mb-3">
                <label for="current_address" class="form-label">Current Address:</label>
                <textarea class="form-control" id="current_address" name="current_address" required></textarea>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">State:</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>

            <div class="mb-3">
                <label for="zip" class="form-label">PIN/ZIP Code:</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
            </div>

            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn Profile:</label>
                <input type="url" class="form-control" id="linkedin" name="linkedin">
            </div>

            <div class="mb-3">
                <label for="university" class="form-label">College/University:</label>
                <input type="text" class="form-control" id="university" name="university" required>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course of Study:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="mb-3">
                <label for="year_of_study" class="form-label">Year of Study:</label>
                <input type="number" class="form-control" id="year_of_study" name="year_of_study" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="terms" required>
                <label class="form-check-label" for="terms">I agree to the <a href="#">Terms and Conditions</a>.</label>
            </div>

            <button type="submit" class="btn btn-primary pr-22">Submit</button>
        </form>
    </div> -->
@include('layouts.footer')
@include('layouts.script')
  </body>
  <script>
  function nextStep() {
    document.querySelector('.step-1').style.display = 'none';
    document.querySelector('.step-2').style.display = 'block';
  }

  function prevStep() {
    document.querySelector('.step-2').style.display = 'none';
    document.querySelector('.step-1').style.display = 'block';
  }
</script>
</html>
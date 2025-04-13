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
    <title>Business Memership form</title>
    <style>
      .bg-chn{
        background-color:#E0F1F4;
      }
      
    </style>
  </head>
  <body>
@include('layouts.header')
@include('layouts.preload')
<div class="row">
  <!-- Left Column (Steps) -->
  <div class="col-lg-6 bg-chn">
    <div class="box-steps-small pt-100 pb-50">
      <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
        <div class="num-ele">1</div>
        <div class="info-num">
          <h5 class="color-brand-1 mb-15">Sign Up</h5>
          <p class="font-md color-grey-500">Begin by entering your personal and business information.</p>
        </div>
      </div>
      <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
        <div class="num-ele">2</div>
        <div class="info-num">
          <h5 class="color-brand-1 mb-15">Verification</h5>
          <p class="font-md color-grey-500">We’ll validate your details and business profile for membership.</p>
        </div>
      </div>
      <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
        <div class="num-ele">3</div>
        <div class="info-num">
          <h5 class="color-brand-1 mb-15">Connect & Invest</h5>
          <p class="font-md color-grey-500">Access exclusive deals and opportunities across industries.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Column (Form) -->
  <div class="col-lg-6 pl-40">
    <div class="box-register">
      <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">Business Membership</h2>
      <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Become a part of our elite investor network</p>
      <div class="line-register mt-25 mb-50"></div>

      <form id="investorForm">
        <!-- Step 1 - Personal Info -->
        <div class="form-step step-1">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-name" type="text" placeholder="Full Name">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-email" type="email" placeholder="Email Address">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-password" type="password" placeholder="Password">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-password" type="password" placeholder="Confirm Password">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-phone" type="text" placeholder="Phone Number">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-linkedin" type="url" placeholder="LinkedIn Profile">
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-brand-lg btn-full font-md-bold mt-3" onclick="nextStep()">Next</button>
        </div>

        <!-- Step 2 - Business Info -->
        <div class="form-step step-2" style="display: none;">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-company" type="text" placeholder="Company Name">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control icon-user" type="text" placeholder="Your Position">
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-25">
                <input class="form-control icon-linkedin" type="url" placeholder="LinkedIn Profile">
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-25">
                <input class="form-control icon-website" type="url" placeholder="Website">
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-25">
                <input class="form-control" type="text" placeholder="Industry">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control" type="text" placeholder="Annual Revenue">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="form-group mb-25">
                <input class="form-control" type="number" placeholder="Number of Employees">
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-25">
                <input class="form-control" type="text" placeholder="Business Address">
              </div>
            </div>
            <div class="col-lg-12 mt-10">
              <label class="cb-container">
                <input type="checkbox" checked="checked">
                <span class="text-small">I agree to the Terms & Conditions</span>
                <span class="checkmark"></span>
              </label>
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
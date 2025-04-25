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
    .bg-chn {
      background-color: #E0F1F4;
    }
  </style>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')


  <div class="row">
    <div class="col-lg-6 bg-chn">
      <!-- Left Column (Steps) -->
      <div class="box-steps-small pt-100 pb-50">
        <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
          <div class="num-ele">1</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Register</h5>
            <p class="font-md color-grey-500">All you need is your name, email and a strong password, Or use your social
              media accounts.</p>
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
            <p class="font-md color-grey-500">Create a real or demo trading account on our platform. No credit card
              required.</p>
          </div>
        </div>
        <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
          <div class="num-ele">4</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Connect with investors</h5>
            <p class="font-md color-grey-500">With a real-time analysis system you will become a professional investor.
            </p>
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
        <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Create an account today and start using
          our platform</p>
        <div class="line-register mt-25 mb-50"></div>


        <form id="multiStepForm" action="{{ route('student.store') }}" method="POST">
          @csrf
          <input type="hidden" name="plan" value="{{ request('plan') }}">
          <input type="hidden" name="type" value="{{ request('type') }}">
          <p class="mb-2">
            You selected the <strong>{{ ucfirst(request('plan')) }}/{{ ucfirst(request('type')) }}</strong> plan.
          </p>

          @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
        </ul>
        </div>
      @endif
          <!-- Step 1 -->
          <div class="form-step step-1">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-name" id="full_name" name="full_name" type="text"
                    placeholder="Your name">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-phone" type="text" id="phone_number" name="phone_number"
                    placeholder="Phone">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-email" type="text" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-user" type="text" id="username" name="username"
                    placeholder="Username">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-password" type="password" id="password" name="password"
                    placeholder="Password">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-password" type="password" id="password_confirmation"
                    name="password_confirmation" placeholder="Re-password">
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
                  <input class="form-control icon-user " type="date" id="dob" name="dob" placeholder="DOB">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-email" id="current_address" name="current_address" type="text-area"
                    placeholder="Current Address">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-name" type="url" id="linkedin" name="linkedin"
                    placeholder="LinkedIn Profile">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control icon-company" type="text" id="university" name="university"
                    placeholder="College/University">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control " type="text" id="course" name="course" placeholder="Course of Study">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control " type="text" id="year_of_study" name="year_of_study" min="1"
                    placeholder="Year of study">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <button type="button" class="btn btn-brand-lg btn-full font-md-bold mr-20"
                onclick="prevStep()">Back</button>
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
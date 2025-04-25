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
  <title>Volunteer form</title>
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
    <!-- Left Column (Steps) -->
    <div class="col-lg-6 bg-chn">
      <div class="box-steps-small pt-100 pb-50">
        <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
          <div class="num-ele">1</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Register</h5>
            <p class="font-md color-grey-500">Provide your personal details including name, email, and contact number.
            </p>
          </div>
        </div>
        <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
          <div class="num-ele">2</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Verify</h5>
            <p class="font-md color-grey-500">We'll verify your info before proceeding to further steps.</p>
          </div>
        </div>
        <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
          <div class="num-ele">3</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Explore</h5>
            <p class="font-md color-grey-500">Gain access to events, community, and volunteer projects.</p>
          </div>
        </div>
        <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
          <div class="num-ele">4</div>
          <div class="info-num">
            <h5 class="color-brand-1 mb-15">Connect</h5>
            <p class="font-md color-grey-500">Start building your network and join live activities.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column (Step Form) -->
    <div class="col-lg-6 pl-40">
      <div class="box-register">
        <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">Volunteer Plan </h2>
        <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Fill in your details to join our
          volunteer community</p>
        <div class="line-register mt-25 mb-50"></div>

        <form id="volunteerForm" action="{{ route('volunteer.store') }}" method="POST">
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
                  <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name"
                    required>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <select class="form-control" id="gender" name="gender" required>
                    <option selected disabled>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password" required>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input type="tel" class="form-control" id="phone_number" name="phone_number" pattern="[0-9]{10}"
                    placeholder="Phone Number" required>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-brand-lg btn-full font-md-bold mt-3" onclick="nextStep()">Next</button>
          </div>

          <!-- Step 2 -->
          <div class="form-step step-2" style="display: none;">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control" type="date" placeholder="DOB" id="dob" name="dob" required>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <textarea class="form-control" id="current_address" name="current_address"
                    placeholder="Current Address" required></textarea>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input type="url" class="form-control" id="linkedin" name="linkedin"
                    placeholder="LinkedIn Profile URL">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <select class="form-control" name="occupation" required>
                    <option selected disabled>Current Occupation</option>
                    <option>Student</option>
                    <option>Working Professional</option>
                    <option>Entrepreneur</option>
                    <option>Other</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control" type="text" placeholder="Institution/Organization" name="organization">
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group mb-25">
                  <input class="form-control" type="text" placeholder="Designation (if working)" name="Designation">
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
            <button type="submit" class="btn btn-brand-lg btn-full font-md-bold mt-3">Submit</button>
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
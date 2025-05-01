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
    <title>Startup membership form</title>
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
                        <h5 class="color-brand-1 mb-15">Sign Up</h5>
                        <p class="font-md color-grey-500">Begin your journey by entering personal and company details.
                        </p>
                    </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
                    <div class="num-ele">2</div>
                    <div class="info-num">
                        <h5 class="color-brand-1 mb-15">Verification</h5>
                        <p class="font-md color-grey-500">We'll verify your information and profile manually.</p>
                    </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                    <div class="num-ele">3</div>
                    <div class="info-num">
                        <h5 class="color-brand-1 mb-15">Connect</h5>
                        <p class="font-md color-grey-500">Access mentorship, collaboration, and startup opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column (Step Form) -->
        <div class="col-lg-6 pl-40">
            <div class="box-register">
                <h2 class="color-brand-1 mb-15">Startup/Founder Membership</h2>
                <p class="font-md color-grey-500">Fill in the form below to get started</p>
                <div class="line-register mt-25 mb-50"></div>

                <form id="founderForm" action="{{ route('startup.store') }}" method="POST">
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
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <select class="form-control" name="gender" required>
                                    <option selected disabled>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input type="tel" class="form-control" name="phone_number" pattern="[0-9]{10}" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-brand-lg btn-full font-md-bold mt-3" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step step-2" style="display: none;">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input class="form-control" type="text" placeholder="Startup/Business Name" name="business_name" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input class="form-control" type="text" placeholder="Industry/Domain" name="industry" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <input class="form-control" type="text" placeholder="Your Role (Founder, CEO, etc.)" name="role" required>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-25">
                                <select class="form-control" name="stage" required>
                                    <option selected disabled>Stage of Startup</option>
                                    <option>Idea</option>
                                    <option>MVP</option>
                                    <option>Early-stage</option>
                                    <option>Growth</option>
                                    <option>Established</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-25">
                                <input class="form-control" type="url" placeholder="Company Website" name="company_website" required>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-25">
                                <textarea class="form-control" placeholder="Business Address" name="business_address" required></textarea>
                            </div>
                            <div class="col-lg-12 mt-10">
                                <label class="cb-container">
                                    <input type="checkbox" required>
                                    <span class="text-small">I agree to the Terms & Conditions</span>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-light" onclick="prevStep()">Back</button>
                            <button type="submit" class="btn btn-brand-lg font-md-bold">Submit</button>
                        </div>
                    </div>
                </form>
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
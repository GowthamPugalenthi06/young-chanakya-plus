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
    <style>
        .event-section {
            padding: 3rem 0;
        }

        .event-card {
            background: #f4f6f8;
            border-radius: 1rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }

        p {
            margin-bottom: 1rem;
            line-height: 2;
        }

        li {
            margin-bottom: 0.5rem;
            
            line-height: 1.6;
        }

        .event-sidebar {
            background: #f4f6f8;
            border-radius: 1rem;
            padding: 1.5rem;
        }

        .event-sidebar h5 {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .event-sidebar ul {
            padding-left: 0;
            list-style: none;
        }

        .event-sidebar li {
            margin-bottom: 0.5rem;
        }

        .event-sidebar strong {
            color: #000000;
        }

        .ticket-box {
            background: #fff;
            padding: 1.5rem;
            border-radius: 0.75rem;
            border: 2px solid #e0e0e0;
            margin-bottom: 1.5rem;
        }

        .ticket-highlight {
            background-color: #f0f9ff;
            border-left: 5px solid #00c853;
            padding: 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            color: #2e7d32;
        }

        .calendar-links a {
            margin-bottom: 0.5rem;
        }

        .form-control-sm {
            width: 70px;
        }

        .btn-disabled {
            pointer-events: none;
            opacity: 0.6;
        }

        h2,
        h4 {
            font-weight: 700;
        }

        ul.custom-list {
            list-style-type: disc;
            padding-left: 1.25rem;
        }
    </style>
    <title>Events</title>
</head>

<body>
    @include('layouts.header')
    @include('layouts.preload')
    <main class="main">
        <section class="section mt-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-40">
                        <h1 class="color-brand-1 mt-15 mb-30 wow animate__animated animate__fadeIn"
                            data-wow-delay=".0s">From Bootstrapping to VC Funding</h1>
                        <div class="box-count box-count-square mb-50">
                            <div class="deals-countdown" data-countdown="2025/06/01 10:00:00"></div>
                        </div>


                    </div>
                    <div class="col-lg-5 mb-40">
                        <object data="assets/yc/imgs/page/coming/coming_soon.svg" type="image/svg+xml"></object>
                    </div>
                </div>
                <div class="border-bottom mb-0 mt-50"></div>
            </div>
        </section>
        <section class="event-section">
            <div class="container">
                <div class="row g-4">

                    <!-- Left Content -->
                    <div class="col-lg-8">
                        <div class="event-card">
                            <img src="{{ asset('assets/yc/imgs/page/homepage1/event-details.png') }}"
                                class="img-fluid rounded mb-4" alt="Event Banner">

                            <h2 class="mb-3">Event Overview</h2>
                            <p class="text-muted">
                                This in-person session is your essential guide to mastering startup finances. Learn
                                everything from bootstrapping essentials to securing venture capital, and get expert
                                advice on optimizing your financial strategy for long-term growth in the competitive
                                startup ecosystem.
                            </p>

                            <h4 class="mt-4 mb-2">During this event, we’ll cover</h4>
                            <ul class="custom-list text-muted">
                                <li>Fundamentals of bootstrapping and effective financial management.</li>
                                <li>Strategies to attract venture capital and funding opportunities.</li>
                                <li>Insights into navigating India's unique funding landscape.</li>
                                <li>Practical tips for achieving sustainable financial growth.</li>
                            </ul>

                            <h4 class="mt-4 mb-2">Objectives</h4>
                            <p class="text-muted">
                                Equip participants with the essential knowledge and tools for effectively bootstrapping
                                their startups, enabling them to get their businesses off the ground without external
                                funding. It will provide valuable insights into venture capital funding, helping
                                participants understand how to attract investors for future rounds of growth.
                                Additionally, the session will delve into the unique challenges and opportunities within
                                India’s funding landscape, offering strategies to leverage these aspects for success.
                                Practical strategies for managing and scaling finances will also be shared to ensure
                                long-term sustainability and growth. Finally, the event will create networking
                                opportunities, allowing participants to connect with industry experts, investors, and
                                fellow entrepreneurs to foster collaboration and growth.
                            </p>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="col-lg-4">
                        <div class="event-sidebar mb-4">
                            <h5 class="mb-15">Event Details</h5>
                            <ul class="text-muted mt-30">
                                <li class=" mt-3"><strong>Start Date:</strong> October 16, 2027</li>
                                <hr >
                                <li class=" mt-3"><strong>Start Time:</strong> 8:00 AM</li>
                                <hr>
                                <li class=" mt-3"><strong>End Date:</strong> October 16, 2027</li>
                                <hr>
                                <li class=" mt-3"><strong>End Time:</strong> 10:00 AM</li>
                                <hr>
                                <li class=" mt-3"><strong>Location:</strong> Coimbatore</li>
                            </ul>
                        </div>

                        <div class="ticket-box">
                        <h6 class="fw-semibold mb-3 mt-10 text-grey"> Tickets </h6>
                            <h5 class="fw-semibold mb-3 mt-10 text-dark">Engaging Students =</h>
                            <div class="ticket-highlight mt-5">
                                The sale begins on Oct. 1, 2027 8:00 AM (Asia/Dhaka)
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <label for="quantity" class="me-2 mb-0">Quantity:</label>
                                <input type="number" id="quantity" value="0" min="0"
                                    class="form-control form-control-sm">
                            </div>
                            <p class="mb-3"><strong>Total:</strong> $0.00</p>
                            <button class="btn btn-secondary w-100 btn-disabled mt-10" disabled>GET TICKETS</button>
                        </div>

                        <div class="event-sidebar">
                            <h5 class="mt-10">Add To Calendar</h5>
                            <div class="calendar-links d-grid">
                                <a href="#" class="btn btn-outline-primary btn-sm mt-3">Google</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm mt-3">Yahoo</a>
                                <a href="#" class="btn btn-outline-danger btn-sm mt-3">Apple</a>
                                <a href="#" class="btn btn-outline-info btn-sm mt-3">Outlook</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    @include('layouts.footer')
    @include('layouts.script')
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <!-- Count down-->
    <script src="assets/js/vendors/jquery.elevatezoom.js"></script>
    <script src="assets/js/vendors/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="assets/js/main.js?v=5.0.0"></script>
    <script src="assets/js/ali-animation.js?v=1.0.0"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Razorpay Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-card {
            width: 100%;
            max-width: 450px;
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
        }

        .btn-pay {
            background-color: #0d6efd;
            border: none;
        }

        .btn-pay:hover {
            background-color: #0b5ed7;
        }

        .badge-plan {
            background-color: #ff6b6b;
            color: #fff;
            font-size: 0.9rem;
            padding: 0.4em 0.7em;
            border-radius: 12px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .loader {
            display: none;
        }

        .card-perks {
            font-size: 0.9rem;
            margin-top: 1rem;
        }
    </style>
</head>

<body>

    @php
        // You can safely use the $user now as the correct object
        $userType = strtolower(class_basename($user));
    @endphp

    <div class="card payment-card p-4">
        <div class="card-body text-center">
            <h4 class="card-title mb-2">Hi, {{ $user->full_name }} 👋</h4>
            <p class="text-muted mb-3">Ready to activate your</p>
            <h5><span class="badge-plan">{{ ucfirst($user->plan) }} Membership</span></h5>
            <p class="mt-4 fs-5">Pay ₹<strong>{{ $amount }}</strong> to proceed</p>

            <button id="rzp-button1" class="btn btn-pay btn-lg text-white mt-4 w-100">
                <span class="spinner-border spinner-border-sm loader" role="status" aria-hidden="true"></span>
                <span class="pay-text">Proceed to Pay</span>
            </button>
        </div>
    </div>

    <!-- Hidden form -->
    <form name="razorpayForm" action="{{ route('razorpay.payment') }}" method="POST" style="display:none;">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="user_type" value="{{ strtolower(class_basename($user)) }}">
        <input type="hidden" name="user_id" value="{{ $user->id }}">
    </form>

    <script>
        const payButton = document.getElementById('rzp-button1');
        const loader = document.querySelector('.loader');
        const payText = document.querySelector('.pay-text');

        const options = {
            "key": "{{ $key }}",
            "amount": "{{ $amount * 100 }}",
            "currency": "INR",
            "name": "{{ $user->full_name }}",
            "description": "Payment for {{ $user->plan }} Plan",
            "image": "{{ asset('asset/yc/imgs/yc-logo.png') }}",
            "handler": function (response) {
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.razorpayForm.submit();
            },
            "prefill": {
                "name": "{{ $user->full_name }}",
                "email": "{{ $user->email }}",
                "contact": "{{ $user->phone_number }}"
            },
            "theme": {
                "color": "#0d6efd"
            }
        };

        const rzp1 = new Razorpay(options);

        payButton.onclick = function (e) {
            e.preventDefault();
            loader.style.display = 'inline-block';
            payText.style.display = 'none';
            rzp1.open();
            setTimeout(() => {
                loader.style.display = 'none';
                payText.style.display = 'inline';
            }, 2000);
        }
    </script>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
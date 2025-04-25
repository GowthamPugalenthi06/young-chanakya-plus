<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
    <style>
    body {
      background-color: #121212;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .card-chanakya {
      width: 600px;
      height: 300px;
      border-radius: 20px;
      padding: 30px;
      background: linear-gradient(135deg, #4b5fc7, #6e45e2);
      color: white;
      position: relative;
      overflow: hidden;
    }
    .bg-pattern {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://i.ibb.co/YTqKTbF/quote-pattern.png'); /* Example background pattern */
      background-size: 80px;
      opacity: 0.05;
      z-index: 0;
    }
    .card-content {
      position: relative;
      z-index: 1;
    }
    .logo {
      display: flex;
      align-items: center;
      font-weight: 600;
      font-size: 1.2rem;
    }
    .logo-box {
      background: white;
      color: #4b5fc7;
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 5px;
      margin-right: 10px;
    }
    .dots {
      font-size: 1.5rem;
    }
    .name {
      font-size: 1.5rem;
      font-weight: 500;
      margin-top: 40px;
    }
    .number {
      font-size: 1.2rem;
      opacity: 0.9;
    }
    .top-right {
      position: absolute;
      top: 30px;
      right: 30px;
      text-align: right;
    }
  </style>
</head>
<body>
    <h2>Hi {{ $user->full_name }},</h2>
    <p>Thank you for your payment of ₹{{ $amount }}.</p>
    <p>Your payment has been successfully received. Your status is now updated to <strong>paid</strong>.</p>

    {{-- Conditional content based on the user's plan --}}
    @if($user->plan == 'student')
    <h2>Dear {{ $user->name }},</h2>
    <p>Your payment of ₹{{ $amount }} was successful!</p>
    <p>Your membership card is attached as a PDF.</p>
    @elseif($user->plan == 'volunteer')
        <h3 style="color: #2196F3;">🤝 Thank You for Volunteering!</h3>
        <p>We appreciate your willingness to contribute. You'll receive notifications about upcoming events and volunteer opportunities soon.</p>
        <p>Your dedication helps us make a real difference!</p>
    @elseif($user->plan == 'startup')
        <h3 style="color: #FF5722;">🚀 You're in the Startup Plan!</h3>
        <p>Welcome to the Startup plan! Get access to exclusive networking events, mentorship, and resources to help you grow your business.</p>
        <p>We’re excited to be part of your entrepreneurial journey!</p>
    @elseif($user->plan == 'executive')
        <h3 style="color: #9C27B0;">💼 Congratulations, CXO!</h3>
        <p>As a CXO, you now have priority access to high-level events, exclusive leadership seminars, and networking opportunities with other business leaders.</p>
        <p>We're thrilled to support you in your leadership journey.</p>
    @elseif($user->plan == 'entrepreneurs')
        <h3 style="color: #FF9800;">🏢 Welcome, Business Leader!</h3>
        <p>You're now part of the Business plan! Get access to advanced business resources, corporate networking, and strategic workshops to grow your organization.</p>
        <p>We look forward to helping you achieve even greater success.</p>
    @else
        <h3>🎉 You're part of our community!</h3>
        <p>Thank you for joining us. We’re excited to see you succeed in your journey!</p>
    @endif

    <p>Regards,<br>Team Gowtham</p>
</body>
</html>

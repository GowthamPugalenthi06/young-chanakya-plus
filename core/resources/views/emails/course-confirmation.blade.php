<!DOCTYPE html>
<html>
<head>
    <title>Course Enrollment Confirmation</title>
</head>
<body>
    <h2>Hello {{ $entry->name }},</h2>
    <p>Thank you for enrolling in <strong>{{ $entry->course }}</strong>!</p>
    <p>We will get back to you soon with more details.</p>
</body>
</html>
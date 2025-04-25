<!DOCTYPE html> 
<html>
<head>
    <!-- Import Outfit font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @page {
            margin: 0cm;
            size: auto;
        }

        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif; /* Apply Outfit font */
        }

        body {
            background-image: url('file://{{ $imageUrl }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }

        .name-overlay {
            position: absolute;
            top: 220px;
            left: 49.5%;
            transform: translateX(-50%);
            font-size: 45px;
            margin-top: 390px;
            margin-left: 5.7%;
            color: #fff;
            width: 100%;
            font-family: 'Outfit', sans-serif; /* Ensure font applies here too */
        }
    </style>
</head>
<body>
    <div class="name-overlay" style="color: {{ $userType == 'executive' ? '#8d7330' : '#fff' }};">{{ $userName }}</div>
</body>
</html>

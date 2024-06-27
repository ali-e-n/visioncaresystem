<!DOCTYPE html>
<html>
<head>
    <title>Vision Care System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            color: #fff; /* Light text color */
            font-family: Arial, sans-serif; /* Adjust font family */
        }

        .navbar {
            background-color: #007bff; /* Navbar background color */
        }

        .navbar-brand, .nav-link {
            color: #fff !important; /* Navbar text color */
        }

        .container {
            margin-top: 20px; /* Add some top margin for content */
        }

        h1 {
            color: #ffc107; /* Yellow title color */
            font-weight: bold; /* Bold title */
        }

        .card {
            background-color: #212529; /* Dark card background */
            color: #fff; /* Light text color */
        }

        .btn {
            color: #fff; /* Light text color for buttons */
        }

        /* Additional styles based on your suggestions */
        .banner-section {
            background-image: url('path_to_your_image.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #fff;
            font-size: 24px;
        }

        .banner-section h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .banner-section p {
            font-size: 18px;
        }

        .links {
            margin-top: 20px;
        }

        .links a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('home') }}">Vision Care System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('healthcare-centers.index') }}">Healthcare Centers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clinics.index') }}">Clinics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="banner-section">
        <h1>Welcome to Vision Care System</h1>
        <p>Manage your healthcare centers, clinics, and doctors with ease.</p>
        {{-- <div class="links">
            <a href="{{ route('healthcare-centers.index') }}">Healthcare Centers</a>
            <a href="{{ route('clinics.index') }}">Clinics</a>
            <a href="{{ route('doctors.index') }}">Doctors</a>
        </div> --}}
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

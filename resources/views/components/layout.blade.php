<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #212529;
            color: #adb5bd;
        }
        footer p {
            margin: 0;
        }
        .hero {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 80px 20px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 40px;
        }
        .hero h1 {
            font-weight: 700;
        }
        .hero p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section (optional, you can remove if not needed) -->
    <div class="container mt-4">
        <div class="hero">
            <h1>@yield('heading', 'Welcome to MyApp')</h1>
            <p>@yield('subheading', 'hi.')</p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mb-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-3 text-center">
        <p>&copy; {{ date('Y') }} MyApp | Crafted with ❤️ using Laravel & Bootstrap</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

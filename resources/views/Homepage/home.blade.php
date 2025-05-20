<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MyWebsite</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                        {{-- Make sure the 'register' route exists in your routes/web.php --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5 text-center bg-primary text-white">
        <div class="container">
            <h1 class="display-4">Welcome to MyWebsite</h1>
            <p class="lead">Your one-stop solution for all your needs. Please login or register to get started.</p>
            <a href="{{ route('login') }}" class="btn btn-light btn-lg me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2>About Us</h2>
            <p>
                This is a simple homepage. You can add more information about your website here.
            </p>
        </div>
    </section>
    <footer class="bg-light py-3 mt-auto">
        <div class="container text-center">
            &copy; {{ date('Y') }} MyWebsite. All rights reserved.
        </div>
    </footer>
</body>
</html>
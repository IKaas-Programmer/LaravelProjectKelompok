<!-- filepath: resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow p-4" style="width: 350px;">
            <h3 class="mb-4 text-center">Register</h3>
            <form method="POST" action=" {{ route('register.process') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" tabindex="-1">
                            <!-- Simple black & white eye SVG icon -->
                            <svg id="togglePasswordIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <ellipse cx="12" cy="12" rx="9" ry="6" fill="white"/>
                                <circle cx="12" cy="12" r="2" fill="black"/>
                            </svg>
                        </button>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const passwordInput = document.getElementById('password');
                            const toggleBtn = document.getElementById('togglePassword');
                            const icon = document.getElementById('togglePasswordIcon');
                            let isVisible = false;
                            toggleBtn.addEventListener('click', function () {
                                isVisible = !isVisible;
                                passwordInput.type = isVisible ? 'text' : 'password';
                                // Optionally, you can swap the SVG for a closed eye here if desired
                            });
                        });
                    </script>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </form>
            <div class="mt-3 text-center">
                <a href="{{ route('login') }}">Already have an account? Login</a>
            </div>
        </div>
    </div>
</body>
</html>
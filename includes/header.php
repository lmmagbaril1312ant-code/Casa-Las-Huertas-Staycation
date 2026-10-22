<?php
    // includes/header.php
    ?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Las Huertas Staycation - Different moods, different rooms, same staycation.">
        <title><?php echo isset($pageTitle) ? $pageTitle : 'Las Huertas Staycation'; ?></title>
 
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
 
        <!-- Custom CSS for the Themed Login Modal -->
        <style>
            /* Override Bootstrap Modal for Gradient & Glassmorphism */
            .modal-login .modal-content {
                background: linear-gradient(135deg, #0D0007 0%, #4A0B2A 50%, #FFB6C1 100%);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 46, 147, 0.5);
                border-radius: 1.5rem;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
                overflow: hidden;
                color: white;
            }
 
            .modal-login .login-header {
                text-align: center;
                padding: 2rem 2rem 1rem 2rem;
            }
 
            /* --- NEW: Updated Avatar to hold the Logo --- */
            .modal-login .login-avatar {
                width: 90px;
                height: 90px;
                background-color: #0D0007; /* Dark background behind logo */
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1rem auto;
                border: 3px solid var(--bs-primary);
                box-shadow: 0 0 20px rgba(255, 46, 147, 0.6);
                overflow: hidden; /* Ensures the image stays round */
            }
 
            .modal-login .login-avatar img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
 
            .modal-login .form-control {
                background: rgba(0, 0, 0, 0.6);
                border: 1px solid rgba(255, 46, 147, 0.4);
                color: white;
                border-radius: 2rem;
                padding: 0.75rem 1.25rem;
                font-family: "Times New Roman", Times, serif;
            }
 
            .modal-login .form-control:focus {
                background: rgba(0, 0, 0, 0.8);
                border-color: var(--bs-primary);
                box-shadow: 0 0 0 0.25rem rgba(255, 46, 147, 0.25);
                color: white;
            }
 
            .modal-login .form-control::placeholder {
                color: rgba(255, 255, 255, 0.6);
            }
 
            .modal-login .input-group-text {
                background: rgba(0, 0, 0, 0.6);
                border: 1px solid rgba(255, 46, 147, 0.4);
                border-right: none;
                color: var(--bs-primary);
            }
 
            .modal-login .btn-login {
                background-color: var(--bs-primary);
                color: #000;
                border-radius: 2rem;
                padding: 0.75rem;
                font-weight: bold;
                width: 100%;
                border: none;
                transition: all 0.3s ease;
                letter-spacing: 1px;
            }
 
            .modal-login .btn-login:hover {
                background-color: var(--purple-light);
                box-shadow: 0 0 15px rgba(255, 46, 147, 0.6);
                transform: translateY(-2px);
            }
 
            /* Social Login Buttons */
            .btn-social {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                padding: 0.6rem;
                border-radius: 2rem;
                font-weight: 600;
                font-size: 0.9rem;
                transition: all 0.3s ease;
                text-decoration: none;
                margin-bottom: 0.75rem;
            }
 
            .btn-google {
                background-color: white;
                color: #333;
                border: 1px solid #ddd;
            }
            .btn-google:hover {
                background-color: #f1f1f1;
                color: #333;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            }
 
            .btn-facebook {
                background-color: #1877F2;
                color: white;
                border: 1px solid #1877F2;
            }
            .btn-facebook:hover {
                background-color: #166fe5;
                color: white;
                box-shadow: 0 0 10px rgba(24, 119, 242, 0.5);
            }
 
            /* Divider */
            .divider {
                display: flex;
                align-items: center;
                text-align: center;
                margin: 1.5rem 0;
                color: #fff;
                font-weight: bold;
                text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
            }
            .divider::before, .divider::after {
                content: '';
                flex: 1;
                border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            }
            .divider:not(:empty)::before { margin-right: .5em; }
            .divider:not(:empty)::after { margin-left: .5em; }
 
            /* Close Button Styling */
            .modal-login .btn-close {
                filter: invert(1) drop-shadow(0 0 2px black);
                opacity: 0.8;
            }
            .modal-login .btn-close:hover {
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg border-bottom border-secondary sticky-top" style="background-color: #0d0007;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="https://i.imgur.com/1IbIq3s.png" alt="Las Huertas Logo" class="rounded-circle border border-2 border-primary shadow-sm" style="height: 50px; width: 50px; object-fit: cover; margin-right: 15px;">
                    <span class="text-light fw-bold" style="font-size: 1.2rem; letter-spacing: 1px;">Las Huertas Staycation</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" href="about.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'units.php' ? 'active' : ''; ?>" href="units.php">Units</a>
                        </li>
                        <!-- Log In Trigger -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-primary px-4 rounded-pill" href="booking.php">Book Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 
        <!-- Main Content Wrapper -->
        <main class="container py-5">
 
        <!-- ========================================== -->
        <!-- THEMED LOGIN MODAL POPUP                   -->
        <!-- ========================================== -->
        <div class="modal fade modal-login" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                   
                    <!-- Close Button -->
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-4 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                   
                    <div class="login-header">
                        <!-- Logo replacing the icon -->
                        <div class="login-avatar">
                            <img src="https://i.imgur.com/1IbIq3s.png" alt="Las Huertas Logo">
                        </div>
                       
                        <h3 class="text-white fst-italic fw-bold mb-1" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.8);">Welcome to Las Huertas</h3>
                        <p class="text-white small mb-0" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Sign in to start your staycation experience.</p>
                    </div>
 
                    <div class="px-4 pb-4">
                       
                        <!-- Social Login Buttons -->
                        <div class="mt-2">
                            <a href="#" class="btn-social btn-google shadow">
                                <img src="https://i.imgur.com/eiVR32C.png" alt="Google" style="width: 20px; margin-right: 10px;">
                                Continue with Google
                            </a>
                            <a href="#" class="btn-social btn-facebook shadow">
                                <i class="bi bi-facebook me-2" style="font-size: 1.1rem;"></i>
                                Continue with Facebook
                            </a>
                        </div>
 
                        <!-- Divider -->
                        <div class="divider">OR</div>
 
                        <!-- Manual Login Form -->
                        <form method="POST" action="">
                           
                            <div class="input-group mb-3">
                                <span class="input-group-text rounded-start-pill"><i class="bi bi-person"></i></span>
                                <input type="text" name="username" class="form-control rounded-end-pill border-start-0" placeholder="USERNAME" required>
                            </div>
 
                            <div class="input-group mb-3">
                                <span class="input-group-text rounded-start-pill"><i class="bi bi-lock"></i></span>
                                <input type="password" name="password" class="form-control rounded-end-pill border-start-0" placeholder="PASSWORD" required>
                            </div>
 
                            <div class="d-flex justify-content-between align-items-center mb-4 px-2" style="font-size: 0.85rem;">
                                <div class="form-check">
                                    <input class="form-check-input bg-transparent border-light" type="checkbox" id="rememberMe">
                                    <label class="form-check-label text-white" for="rememberMe" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Remember me</label>
                                </div>
                                <a href="#" class="text-white text-decoration-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Forgot password?</a>
                            </div>
 
                            <button type="submit" class="btn-login text-uppercase shadow">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF LOGIN MODAL -->


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

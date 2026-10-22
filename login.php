<?php
// login.php
 
// ==============================================================================
// 🛠️ STEP 1: DATABASE CONNECTION
// ==============================================================================
// Uncomment and configure this block to connect to your database.
/*
$host = 'localhost';
$dbname = 'lashuertas_db';
$username = 'root';
$password = '';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
*/
 
// ==============================================================================
// 🛠️ STEP 2: PROCESS THE LOGIN FORM
// ==============================================================================
$error_msg = "";
$success_msg = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = trim($_POST['username']);
    $input_password = trim($_POST['password']);
 
    if (empty($input_username) || empty($input_password)) {
        $error_msg = "Please enter both username and password.";
    } else {
        // --- DATABASE AUTHENTICATION LOGIC ---
        /*
        try {
            $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
            $stmt->execute(['username' => $input_username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
            if ($user && password_verify($input_password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php");
                exit;
            } else {
                $error_msg = "Invalid username or password.";
            }
        } catch (PDOException $e) {
            $error_msg = "System error: " . $e->getMessage();
        }
        */
       
        // --- TEMPORARY FRONT-END ONLY LOGIC ---
        if ($input_username === 'admin' && $input_password === 'password123') {
            $success_msg = "Login successful! (Demo mode)";
        } else {
            $error_msg = "Invalid credentials. Try admin / password123";
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Las Huertas Staycation</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <style>
        /* Background to make the popup stand out */
        body {
            background: linear-gradient(135deg, #0D0007 0%, #4A0B2A 50%, #FFB6C1 100%);
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Times New Roman", Times, serif;
            margin: 0;
        }
 
        /* The "Popup" Container */
        .login-popup {
            width: 100%;
            max-width: 900px;
            background: #ffffff; /* White background for the form */
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
            display: flex;
            overflow: hidden;
            position: relative;
            margin: 2rem;
        }
 
        /* Left Side: The Form */
        .login-left {
            width: 45%;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #333;
            position: relative;
            z-index: 2;
        }
 
        .brand-logo {
            font-size: 1.2rem;
            font-weight: bold;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            justify-content: center;
        }
 
        .brand-logo i {
            color: #1a237e; /* Dark blue */
            font-size: 2rem;
            margin-right: 10px;
        }
 
        .login-avatar {
            width: 70px;
            height: 70px;
            background-color: #1a237e;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 2rem;
            border: 3px solid #3949ab;
        }
 
        .form-control {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            color: #333;
            border-radius: 2rem;
            padding: 0.6rem 1.25rem;
            font-size: 0.9rem;
        }
 
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(26, 35, 126, 0.25);
            border-color: #1a237e;
        }
 
        .btn-login {
            background-color: #1a237e;
            color: white;
            border-radius: 2rem;
            padding: 0.6rem;
            font-weight: bold;
            width: 100%;
            border: none;
            transition: background-color 0.3s;
            font-size: 0.9rem;
        }
 
        .btn-login:hover {
            background-color: #283593;
        }
 
        /* Right Side: The Art Background */
        .login-right {
            width: 55%;
            background: linear-gradient(135deg, #0D0007 0%, #8A004F 40%, #FFB6C1 100%);
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            padding: 3rem;
            overflow: hidden;
        }
 
        .login-right::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 60%);
            transform: rotate(-45deg);
            z-index: 1;
        }
 
        .login-right h1 {
            color: white;
            font-size: 3.5rem;
            font-weight: bold;
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            margin-bottom: 0;
        }
 
        /* Top Right Nav inside the popup */
        .login-nav {
            position: absolute;
            top: 1.5rem;
            right: 2rem;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
 
        .login-nav a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            transition: color 0.3s;
        }
 
        .login-nav a:hover {
            color: white;
        }
 
        .btn-signin {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: white;
            border-radius: 2rem;
            padding: 0.2rem 1rem;
            font-size: 0.75rem;
        }
 
        /* The Close (X) Button for the popup feel */
        .close-popup {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 10;
            color: #999;
            font-size: 1.5rem;
            text-decoration: none;
        }
        .close-popup:hover {
            color: #333;
        }
 
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .login-popup {
                flex-direction: column;
                max-width: 400px;
            }
            .login-left {
                width: 100%;
                padding: 2rem;
            }
            .login-right {
                display: none; /* Hide the visual side on phones */
            }
            .close-popup {
                color: #333; /* Make X visible on white background */
            }
        }
    </style>
</head>
<body>
 
    <!-- The Popup Box -->
    <div class="login-popup">
       
        <!-- Close Button (Goes back to home) -->
        <a href="index.php" class="close-popup" title="Close and go back">
            <i class="bi bi-x-circle-fill"></i>
        </a>
 
        <!-- Left Side: Form -->
        <div class="login-left">
           
            <div class="brand-logo">
                <i class="bi bi-grid-fill"></i>
                <div>Las Huertas<br><small style="font-size:0.6rem; font-weight:normal; color:#666;">Staycation</small></div>
            </div>
 
            <div class="login-avatar">
                <i class="bi bi-person"></i>
            </div>
 
            <!-- Feedback Messages -->
            <?php if(!empty($error_msg)): ?>
                <div class="alert alert-danger py-1 text-center small rounded-pill mb-3"><?php echo $error_msg; ?></div>
            <?php endif; ?>
            <?php if(!empty($success_msg)): ?>
                <div class="alert alert-success py-1 text-center small rounded-pill mb-3"><?php echo $success_msg; ?></div>
            <?php endif; ?>
 
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               
                <div class="input-group mb-2">
                    <span class="input-group-text bg-transparent border-end-0 rounded-start-pill" style="border-color:#ced4da;"><i class="bi bi-person" style="color:#666;"></i></span>
                    <input type="text" name="username" class="form-control border-start-0 rounded-end-pill" placeholder="USERNAME" required>
                </div>
 
                <div class="input-group mb-3">
                    <span class="input-group-text bg-transparent border-end-0 rounded-start-pill" style="border-color:#ced4da;"><i class="bi bi-lock" style="color:#666;"></i></span>
                    <input type="password" name="password" class="form-control border-start-0 rounded-end-pill" placeholder="PASSWORD" required>
                </div>
 
                <div class="d-flex justify-content-between align-items-center mb-3 px-1" style="font-size: 0.75rem; color: #666;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" style="color: #666; text-decoration: none;">Forgot password?</a>
                </div>
 
                <button type="submit" class="btn-login">LOGIN</button>
            </form>
 
            <div class="text-center mt-4" style="color: #ccc;">
                <i class="bi bi-three-dots" style="font-size: 1.5rem;"></i>
            </div>
        </div>
 
        <!-- Right Side: Visuals -->
        <div class="login-right">
           
            <div class="login-nav">
                <a href="index.php">HOME</a>
                <a href="units.php">UNITS</a>
                <a href="about.php">INFO</a>
                <a href="booking.php">BOOK</a>
                <a href="login.php" class="btn btn-signin">SIGN IN</a>
            </div>
 
            <h1>Welcome.</h1>
        </div>
 
    </div>
 
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<?php if (isset($_SESSION['username'])): ?>
    <div class="login-box active">
        <div class="login-header">
            <header>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</header>
        </div>
        <p>Your role: <strong><?php echo htmlspecialchars($_SESSION['role']); ?></strong></p>
        <a href="logout.php">Logout</a>
    </div>
<?php else: ?>

    <!-- Login Form (default visible) -->
    <div class="login-box active" id="loginForm">
        <div class="login-header">
            <header>Login</header>
        </div>
        <form action="login_register.php" method="POST">
            <div class="input-box">
                <input type="text" name="username" class="input-field" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" required>
            </div>
            <div class="input-submit">
                <button type="submit" name="login" class="submit-btn">Login</button>
            </div>
        </form>
        <div class="sign-up-link">
            <p>Don’t have an account? <a href="#" onclick="showForm('registerForm')">Register</a></p>
        </div>
    </div>

    <!-- Register Form (hidden until clicked) -->
    <div class="login-box" id="registerForm">
        <div class="login-header">
            <header>Register</header>
        </div>
        <form action="login_register.php" method="POST">
            <div class="input-box">
                <input type="text" name="username" class="input-field" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" class="input-field" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" required>
            </div>
            <div class="input-box">
                <select name="role" class="input-field" required>
                    <option value="user" selected>User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="input-submit">
                <button type="submit" name="register" class="submit-btn">Register</button>
            </div>
        </form>
        <div class="sign-up-link">
            <p>Already have an account? <a href="#" onclick="showForm('loginForm')">Login</a></p>
        </div>
    </div>

<?php endif; ?>

</body>
</html>

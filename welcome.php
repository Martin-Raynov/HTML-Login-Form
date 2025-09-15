<?php
session_start();

// Block access if not logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php?error=notloggedin");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box active">
        <div class="login-header">
            <header>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</header>
        </div>
        <p>You have successfully logged in 🎉</p>
        <p>Your role: <strong><?php echo htmlspecialchars($_SESSION['role']); ?></strong></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

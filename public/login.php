<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Authenticate user logic...
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<main>
    <form method="POST">
        <input type="text" name="username" required>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</main>
</body>
</html>

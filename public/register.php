<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Registration logic...
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<main>
    <form method="POST">
        <input type="text" name="username" required>
        <input type="password" name="password" required>
        <button type="submit">Register</button>
    </form>
</main>
</body>
</html>

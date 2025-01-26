<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secured Data Hub</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to Secured Data Hub</h1>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Logged in as: <?= htmlspecialchars($_SESSION['username']) ?> | <a href="logout.php">Logout</a></p>
        <?php endif; ?>
    </header>

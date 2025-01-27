<?php
// Ensure no session is started multiple times
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Link to your CSS -->
    <title>Secured Data Hub</title>
</head>
<body>
    <!-- Header content -->
    <header>
        <div class="container">
            <h1>Secured Data Hub</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="upload.php">Upload</a></li>
                    <li><a href="download.php">Download</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>

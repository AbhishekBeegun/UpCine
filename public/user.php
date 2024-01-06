<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <?php
        // Get the user ID from the URL
        $userId = $_GET['id'] ?? null;

        // Display user information
        echo "<p>User ID: $userId</p>";
    ?>
</body>
</html>

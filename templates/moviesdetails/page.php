<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Dynamic Content for ID: $id";
} else {
    echo "No ID provided in the URL";
}
?>
</body>
</html>

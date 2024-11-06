<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit Tracker</title>
</head>
<body>
    <h1>Welcome to the Page!</h1>
    <p>Your last visit was on: <strong><?php echo $last_visited; ?></strong></p>
    <p>Current visit time: <strong><?php echo $current_datetime; ?></strong></p>
    
</body>
</html>
<?php
// Set cookie name and expiration (30 days)
$cookie_name = "last_visited";
$cookie_expire = time() + (30 * 24 * 60 * 60); // 30 days

// Get current date-time
$current_datetime = date("Y-m-d H:i:s");

// Check if cookie exists
$last_visited = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "This is your first visit!";

// Set or update cookie with current datetime
setcookie($cookie_name, $current_datetime, $cookie_expire);
?>


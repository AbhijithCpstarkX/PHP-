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



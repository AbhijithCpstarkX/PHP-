<?php

if ($_POST) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender =$_POST['gender'];
    $email = $_POST['email'];

    $address = $_POST['address'];

    echo "<div style='text-align: center;'>";
    echo "<h1>Biodata</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "</div>";
} else {
    echo "<div style='text-align: center;'>";
    echo "No data received.";
    echo "</div>";
}

   

?>
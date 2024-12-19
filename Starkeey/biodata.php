<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['male']);

    $fathers_name = htmlspecialchars($_POST['fathers_name']);
    $mothers_name = htmlspecialchars($_POST['mothers_name']);
    $phno = htmlspecialchars($_POST['phno']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $qualifications = htmlspecialchars($_POST['Qualifications']);
    $softskills = htmlspecialchars($_POST['softskills']);
    $technicalskills = htmlspecialchars($_POST['TechnicalSkills']);

    echo "<div style='text-align:center;' class='container;'>";
    echo "<h2>Bio Data Submitted</h2>";
    echo "<table border='1' style='margin: 0 auto; border-collapse: collapse;'>";
    echo "<tr><th>Field</th><th>Details</th></tr>";
    echo "<tr><td><strong>Name</strong></td><td>$name</td></tr>";
    echo "<tr><td><strong>Age</strong></td><td>$age</td></tr>";
    echo "<tr><td><strong>Gender</strong></td><td>$gender</td></tr>";
    echo "<tr><td><strong>Father's Name</strong></td><td>$fathers_name</td></tr>";
    echo "<tr><td><strong>Mother's Name</strong></td><td>$mothers_name</td></tr>";
    echo "<tr><td><strong>Phone Number</strong></td><td>$phno</td></tr>";
    echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Address</strong></td><td>$address</td></tr>";
    echo "<tr><td><strong>Qualifications</strong></td><td>$qualifications</td></tr>";
    echo "<tr><td><strong>Soft Skill</strong></td><td>$softskills</td></tr>";
    echo "<tr><td><strong>TechnicalSkill</strong></td><td>$technicalskills</td></tr>";
    echo "</table>";
    echo "</div>";
}
?>

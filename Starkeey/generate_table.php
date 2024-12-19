<?php
if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}
?>

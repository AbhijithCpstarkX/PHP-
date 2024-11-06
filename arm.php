<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
   
    <h2>ARMSTRONG NUMBER OR NOT</h2>
    <form action="" method="get">
        
        Enter the number:
        <input type="number" name="number" >
        <br><br>
        <input type="submit" value="submit">
    </form>
   

<?php

if($_GET)
{
    $number=$_GET['number'];
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;  
        $sum = $sum +( $rem*$rem*$rem);  
        $x = $x / 10;  
    }  
     
   
    if ($number == $sum)
{  

    echo "Yes,$number is an armstrong number";
}
else
{
    echo "No,$number is  not an armstrong number";
}
}
?>

</body>
</center>
</html>
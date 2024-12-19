<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <center>
        <h1>Fibonacci Series</h1>
        <form method="post">
            Enter limit: <input type="number" name="limit">
            <input type="submit" value="submit"> 
        </form>
        <?php
            if ($_POST) {
                $limit = $_POST['limit'];
                $a = 0;
                $b = 1;

                if ($limit <= 0) {
                    echo "Please enter a positive limit.";
                } else {
                    echo $a; 
                    for ($i = 1; $i < $limit; $i++) {
                        echo ", " . $b; 
                        $next = $a + $b;
                        $a = $b; 
                        $b = $next; 
                    }
                
            }
        }
        ?>
    </center>
</body>
</html>
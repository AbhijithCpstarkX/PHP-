<html>
    <head>
        <title>doc</title>
    </head>
    <center>
<body>
    <h1>Array Operations</h1>
    <form action="" method="post">
        <input type="radio" name="choice" value="display"> Display Array<br />
        <input type="radio" name="choice" value="sort"> Sorted Array<br />
        <input type="radio" name="choice" value="dupli"> Without Duplicate<br />
        <input type="radio" name="choice" value="pop"> Delete Last<br />
        <input type="radio" name="choice" value="rev"> Array Reverse<br />
        <input type="radio" name="choice" value="search"> Array Search<br /><br />
        <input type="text" name="searchTerm" placeholder="Enter name to search" /><br /><br />
        <input type="submit">
    </form>

    <?php
    if ($_POST) {
        $countries = array("apple", "ball", "cat", "duck", "elephant", "frog", "ganga", "cat", "india");
        $val = $_POST['choice'];

        switch ($val) {
            case "display":
                foreach ($countries as $value)
                    echo "<br>" . htmlspecialchars($value);
                break;
            case "sort":
                sort($countries);
                foreach ($countries as $value)
                    echo "<br>" . htmlspecialchars($value);
                break;
            case "dupli":
                $uarray = array_unique($countries);
                foreach ($uarray as $value)
                    echo "<br>" . htmlspecialchars($value);
                break;
            case "pop":
                array_pop($countries);
                foreach ($countries as $value)
                    echo "<br>" . htmlspecialchars($value);
                break;
            case "rev":
                $revarr = array_reverse($countries);
                foreach ($revarr as $value)
                    echo "<br>" . htmlspecialchars($value);
                break;
            case "search":
                $searchTerm = $_POST['searchTerm']; // No trim function
                $position = array_search($searchTerm, $countries, true);
                if ($position !== false) {
                    echo "<br/><br/>Position of '{$searchTerm}': " . $position+1;
                } else {
                    echo "<br/><br/>'{$searchTerm}' not found in the array.";
                }
                break;
        }
    }
    ?>
    </center>
</body>
</html>
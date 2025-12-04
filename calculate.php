<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $biscuit =$noodles =$bread=$milk =$eggs=$dhal=$total= 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $biscuit = (int)$_POST['biscuit'] * 50;
        $noodles = (int)$_POST['noodles'] * 100;
        $bread = (int)$_POST['bread'] * 40;
        $milk = (int)$_POST['milk'] * 60;
        $eggs= (int)$_POST['eggs'] * 5;
        $dhal = (int)$_POST['dhal'] * 75;

        $total = $biscuit + $noodles + $bread + $milk + $eggs + $dhal;
    }


?>
    <h1>Your Total Bill</h1>
    <?php
     echo "<h3> Total Bill : Rs " . $total . "</h3>";
    ?>

    <a href="index.php">Go Back</a>
</body>
</html>
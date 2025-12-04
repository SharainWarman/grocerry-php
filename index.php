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
    <h1>Grocery Bill Calculation</h1>
    <form action="calculate.php" method="post">
        <label for="biscuit">Biscuits (Rs50 each):</label>
        <input type="number" id="biscuit" name="biscuit"><br><br>
        
        <label for="noodles">Noodles (Rs100 each):</label>
        <input type="number" id="noodles" name="noodles" ><br><br>
        
        <label for="bread">Bread (Rs40 each):</label>
        <input type="number" id="bread" name="bread" ><br><br>

        <label for="milk">Milk (Rs60 each):</label>
        <input type="number" id="milk" name="milk" ><br><br>

        <label for="eggs">Eggs (Rs5 each):</label>
        <input type="number" id="eggs" name="eggs" ><br><br>

        <label for="dhal">Dhal (Rs75 each):</label>
        <input type="number" id="dhal" name="dhal" ><br><br>
        
        <input type="submit" value="Calculate Bill">
</body>
</html>
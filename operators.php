<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body> 
    <?php 

    //Arithmetic Operators
    echo 3**7;
    ?>
    <hr>
    <?php
   //Assignment Operators
    $x = 100;
    $x /= 20;


    echo $x;
   ?>
   <hr>
   <?php
    //Cpmparison Operators
    $x = 10;
    $y = 10;

    if ($x <> $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    ?>
    <hr>
    <?php
    //Increment/Decrement Operators
    $x = 10;
    echo$x --;
    echo $x;
    ?>
    <hr>
    <?php
    //Logical Operators
    $x = 20;
    $y = 20;
    if ($x == $y || 1 == 1)  {
        echo "True";
    }
    ?>
</body>
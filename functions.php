<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body> 
<?php   
    include 'includes/header.php';
    ?>
    <?php 

    echo str_replace("Kelli", "Grecia", "Hi Kelli");
    ?>
    <hr>
    <?php

    

     function newCalc($x)  {
         $newnr = $x * 0.75;
         echo "Here is 75%  of what you wrote: ". $newnr;
     }
$x = 100;
     newCalc($x);
echo "<br";
     $a = 100;
     newCalc($a);
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
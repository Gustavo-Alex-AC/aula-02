<?php 
     $titulo = "Nosso Projecto - SOGA";
     $b = 95;
     $a = 54;

     $fruits = ["Banana", "Orange", "Mango", "Avocado", "u want some?"]
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body>
    <h1>
        
       
    
    </h1>
    <h2>
        <?=$fruits [4];?>
    </h2>
    <ul>
        <li style = "list-style: none">Fruits</li>
        <?php
            for ($i = 0; $i < count($fruits); $i++):
        ?>    
        <li><?= $fruits[$i]?></li>
        <?php
            endfor;
        ?>
    </ul>
</body>
</html>










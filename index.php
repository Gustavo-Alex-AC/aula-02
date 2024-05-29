<?php 
        $titulo = "Nosso Projecto - SOGA";
        $b = 125;
        $a = 4;
    
        $fruits = ["Banana", "Orange", "Mango", "Avocado", "u want some?"];
    
    /*include "include.php";*/
    /* Singleton, LazyLoading, Hash */
    require "require.php";

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
        
      <?= $titulo?>
    
    </h1>
    <h6><?= $c = $b * $a ?></h6>
    <h2>
        <?=$fruits [0];?>
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
    <h5> <?= $mensagem;?> </h5>
</body>
</html>










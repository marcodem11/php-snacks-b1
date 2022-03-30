<?php

    $partite = [
        [
            'casa' => 'Basket Milano',
            'ospite' => 'Basket Roma',
            'punti_casa' => '45',
            'punti_ospite' => '21',
        ],
        
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <div class="box">
        <h1>
            Risultati del Turno 24 di Serie A Basket:   
        </h1>
        <ul>
            <?php
                for ($i = 0; $i < count($partite); ++
                $i){
                    ?>
                        <li>
                            <?php echo $partite[$i]['casa']?>
                            -
                            <?php echo $partite[$i]['ospite']?>
                            |
                            <?php echo $partite[$i]['punti_casa']?>
                            -
                            <?php echo $partite[$i]['punti_ospite']?>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</body>
</html>
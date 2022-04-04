<?php
$classe = [
  [
    'nome' => 'Fernando',
    'cognome' => 'Alonso',
    'voti' => [8, 5, 4, 10, 10, 3]
  ],
  [
    'nome' => 'Sergio',
    'cognome' => 'Perez',
    'voti' => [7, 6, 7, 9, 2, 10, 9]
  ],
  [
    'nome' => 'Miki',
    'cognome' => 'Shumacher',
    'voti' => [4, 9, 5, 9, 8, 10]
  ],
  [
    'nome' => 'Kimi',
    'cognome' => 'Raikkonen',
    'voti' => [8, 7, 9, 8, 9, 5]
  ],
];

function calcola_media($array){
  return array_sum($array) / count($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php
  for ( $i=0; $i<count($classe); $i++){
    ?>
    <div>
      <?php echo $classe[$i]['nome'] ?> 
      <?php echo $classe[$i]['cognome'] ?> 
      Media: <?php echo round(calcola_media($classe[$i]['voti']), 1) ?>
    </div>
    <hr>
    <?php
  }
  ?>
</body>
</html>
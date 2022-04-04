<?php

$db = [
  'teachers' => [
    [
      'nome' => 'Lewis',
      'cognome' => 'Hamilton'
    ],
    [
      'nome' => 'Charles',
      'cognome' => 'Leclerc'
    ]
  ],
  'pm' => [
    [
      'nome' => 'George',
      'cognome' => 'Russel'
    ],
    [
      'name' => 'Max',
      'cognome' => 'Verstappen'
    ]
  ]
];


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

  for ($j = 0; $j < count($db); $j++) {
    $element = array_keys($db)[$j]; ?>
    <h2> Tipologia: <?php echo $element; ?> </h2>
    <?php
    if ($element === 'teachers') {
    ?>
      <div class="teachers">
        <?php
        for ($i = 0; $i < count($db[$element]); $i++) {
          $elemento = $db[$element][$i];
        ?>
          <p>Nome: <?php echo $elemento['nome']; ?> </p>
          <p>Cognome: <?php echo $elemento['cognome']; ?> </p>
        <?php

        }
        ?>
      </div>

    <?php
    } else {
    ?>
      <div class="pm">
        <?php
        for ($i = 0; $i < count($db[$element]); $i++) {
          $elemento = $db[$element][$i];
        ?>
          <p>Nome: <?php echo $elemento['nome']; ?> </p>
          <p>Cognome: <?php echo $elemento['cognome']; ?> </p>
        <?php

        }
        ?>
      </div>
    <?php
    }
    ?>
  <?php }
  ?>
</body>
</html>
<?php  
  $number = [];
  
  while (count($number) < 15) {
    $random_number = rand(1, 50);
    if(!in_array($random_number, $number)){
      $number[] = $random_number;
    }
  }

  var_dump($number)
?>
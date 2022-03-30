<?php
   $name = $_GET['name'];
   $email = $_GET['email'];
   $age = $_GET['age'];

   $is_name_correct = isset($name) && strlen($name) > 3;

   $is_email_correct = isset($email) && $email != '' && strpos($email, '.', -4) && strpos($email, '@');

   $is_age_correct = isset($age) && is_numeric($age);

   if( $is_name_correct && $is_email_correct && $is_age_correct) {
      echo 'I dati inseriti sono corretti.';
   } else {
      if(!$is_name_correct) {
         echo 'Il nome inserito non è corretto. ';
      }
      if(!$is_email_correct) {
         echo 'La mail inserita non è corretta. ';
      }
      if(!$is_age_correct) {
         echo "L'età inserita non è corretta. ";
      }
   };
?>
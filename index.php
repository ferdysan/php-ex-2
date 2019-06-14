<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $password = $_GET['password'];

      
      if($password == 'Boolean'){
      ?>
      <div style="color:green; font-weight:bold;">ACCESSO CONSENTITO</div>
      <?php
      }else{
        ?>
       <div style="color:red;">ACCESSO NEGATO</div>
       <?php   } ?>


      // come best practice non conviene scrivere html dentro i tag echo


  </body>
</html>

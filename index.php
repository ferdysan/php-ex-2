
<?php

  $password = $_GET['password'];

  if(strpos($password, 'Boolean') !== false || strpos($password, 'boolean') !== false ){
    echo '<div style="color:green;">ACCESSO CONSENTITO</div>';
  }else{
    echo '<div style="color:red;">ACCESSO NEGATO</div>';
  }



 ?>

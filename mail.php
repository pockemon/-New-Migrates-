<?php
//if "ok" variable is filled out, send email
  if (isset($_REQUEST['ok']))  {
  
  //Email information
  $admin_to = "azijul42853@gmail.com";
  $name = $_REQUEST['name'];
  $form= $_REQUEST['email'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_to, $name, $comment, "From:" . $form);
  
  //Email response
 header("location: thankyou.html");
  }
 ?>
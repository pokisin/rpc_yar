<?php
  $client = new Yar_Client("http://localhost/yarw/index.php");
  $result = $client->add(20,10);
  echo $result.'<hr>';
  echo $client->mul(10, 20);
?>
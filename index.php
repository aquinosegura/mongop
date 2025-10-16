<?php
  require 'vendor/autoload.php';
  
  $client = new MongoDB\Client("mongodb://localhost:27017");
  $db = $client->roldan_crud2;
  $collection = $db->users;
  
  $collection->insertOne(['nombre' => 'Backend']);
  echo "Usuario insertado correctamente";

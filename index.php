<?php
  require 'vendor/autoload.php';
  
  $client = new MongoDB\Client("mongodb://localhost:27017");
  $db = $client->test;
  $collection = $db->users;
  
  $collection->insertOne(['name' => 'Carlos', 'age' => 34]);
  echo "Usuario insertado correctamente";

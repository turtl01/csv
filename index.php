<?php
  $array = array();
  $mysql = new mysqli('localhost', 'wpwp', 'b74bd2ac2c', 'test');
  if (($file = fopen('book.csv' , 'r')) !==false ) {
    while(!feof($file)){

      $data = fgetcsv($file, 5000, ';');
      $j = count($data);
      $mysql -> query("INSERT INTO `testtest` (`id`, `st1`, `st2`, `st3`, `st4`) VALUES (NULL, '{$data[0]}', '{$data[1]}', '{$data[2]}', '{$data[3]}');");
  }
    fclose($file);
    $mysql->close();
  }

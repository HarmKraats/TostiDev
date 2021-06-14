<?php
  //db functie
  function getDbConnection() {
  $host = 'localhost';
  $user = 'root';
  $pwd = '';
  $db = 'game';
  
  $con = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$db, $user, $pwd);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $con;
  }



  ?>

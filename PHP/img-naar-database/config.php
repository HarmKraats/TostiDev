<?php
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'edu';

    //Conectie
    $dbh = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$db, $user, $pwd);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
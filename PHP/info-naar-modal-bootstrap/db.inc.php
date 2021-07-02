<?php
    //db functie
    function getDbConnection() {
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'snoepwinkel';
    
    $dbh = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$db, $user, $pwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;
    }


    function getProducts($dbh){
        $products = array();

        $query = $dbh->prepare("SELECT * FROM products");
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $products[] = $row;
        }



        return $products;
    }

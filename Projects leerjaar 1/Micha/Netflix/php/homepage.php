<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sakila";
//verbinding maken met database!!!!!!
$dbh = new PDO('mysql:host='.$host. ';dbname='.$dbname , $dbusername, $dbpassword);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



//while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    //print "<div class='col film' id='' data-bs-toggle='modal' data-bs-target='#exampleModal'>" . $row['title'] . "<img src='' style= 'width: 100%; height: 90%;'></div>";
//}//





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/carrousel.js"></script>
    <title>netflix</title>

    <div class="row">
        <?php 
        $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
        mysql_select_db('hrmwaitrose');

        $query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
        $result = mysql_query($query);


        while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
            }
        
        
        
        
        echo("SELECT film_id, titel FROM film ORDER BY rental_rate DESC"); ?>
    </div>
</head>
<body>
    
</body>

<script> 

$(document).ready(function(){
    if ($('.carousel')[0]){
        if ($(window).width() > 700){
            $('.carousel').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                arrows: true
            });
        } else {
            $('.carousel').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                arrows: false
            });
        }
    }
})

</script>
</html>
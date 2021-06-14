<?php

//database include
require_once 'inc/db.inc.php';
//functions include
require_once 'inc/gamedata.inc.php';
//db functie aanroepen
$dbh = getDbConnection();

if(isset($_POST['submit']) && ! empty($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password
            FROM player
            WHERE username = '".$username."'";
    
    $result = $dbh->query($sql);

    if($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if($row['password'] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: char_type.php');
        }
        
        else {
            echo "Ongeldige login!";
        }
    }
    else {
        echo "Ongeldige login";
    }
}
?>
<!DOCTYPE html>
<html>
<head> 
<title> Inloggen </title> 
</head>
<body>
<link rel='stylesheet' type='text/css' href='style.css'>
<h1>Welkom en Log hier in voor DE GAME</h1>
<form name="form1" method="post" action="login.php">
<label for="username">Username:<label><br>
<input type="text" id="username" name="username" value=""><br>
<label for="password">Password:<label><br>
<input type="password" id="password" name="password" value=""><br>

<?php


?>

<input type="submit" name="submit" value="Verzenden">

</form>
</body>
</body></html>

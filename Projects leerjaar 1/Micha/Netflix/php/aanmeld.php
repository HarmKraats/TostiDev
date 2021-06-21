<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project2";

//verbinding maken met database!!!!!!
$dbh = new PDO('mysql:host='.$host. ';dbname='.$dbname , $dbusername, $dbpassword);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//checkt of de email in de database staat
if(isset($_POST['submit']) && ! empty($_POST['adress'])) {
    print_r($_POST);
    $adress = $_POST['adress'];
    $password = $_POST['password'];

    $sql = "SELECT Adress, Password
            FROM gegevens
            WHERE Adress = '".$adress."'";
    
    echo $sql;

    $result = $dbh->query($sql);

    if($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if($row['Password'] == $password) {
            session_start();
            $_SESSION['Adress'] = $adress;
            header('Location: homepage.php');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>aanmeldpage</title> 
</head>
<body class="wrapp">
    <nav class="main_nav">
        <a href="#" class="navbar-brand">
            <img src="../img/netflix-logo" alt="netflix-logo" class="img-fluid"> 
        </a>
    </nav> 
    <div class="container">
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 mx-lg-auto mx-md-auto mx-sm-auto mx-auto">
            <div class="form_data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-lg-auto mx-md-auto mx-sm-auto mx-auto">
                    <div>
                        <div class="form_title">
                            <h1 class="text-white">Login</h1>
                        </div>
                        <form action="aanmeld.php" method="POST">
                          <div class="form-floating mb-3">
                                <p>
                                    <label class="text-white">E-mail</label>
                                    <input name="adress" type="email" placeholder="emailadress@example.com" class="form-control" id="floatingInput">
                                    <label for="floatingInput" class="label-color"></label>
                                </p>
                            </div>
                            <div class="form-floating mb-3">
                                <p>
                                    <label class="text-white">Password</label>
                                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" class="label-color"></label>
                                </p>
                            </div>
                            <p>
                                <input name="submit" class="theme-btn" type="submit" value="Sign in"/>
                            </p>
                            <div class="form_footer">
                                <h5 style="color: #757575;" class="mt-3 mb-2">Don't have a account? <span class="font-weight-bold text-white">
                                <a href="inlog.php">Sign Up!</a></span></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project2";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$Pass = $_POST['Pass'];
$Adress = $_POST['Adress'];
$Phone_number = $_POST['Phone_number'];

 //verbinding maken met database!!!!!!
 $dbh = new PDO('mysql:host='.$host. ';dbname='.$dbname , $dbusername, $dbpassword);
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 //gegevens in de database zetten
if (empty($fname) || empty($lname) || empty($Pass) || empty($Phone_number) || empty($Adress)){
    echo "<script type='text/javascript'> alert('Check of je alles hebt ingevuld aksdbasBFDHJSADasdaDA!');</script>";
    } else {
        $sql = "INSERT INTO `gegevens`(First_name, Last_name, Password, Adress, Phone_number)
        VALUES (\" $fname\",\"$lname\", \"$Pass\",\"$Adress\", \"$Phone_number\")";
        $aantal = $dbh->exec($sql);

        echo $sql;
    }
    $fname = "";
    $lname = "";
    $Pass = "";
    $Adress  = "";
    $Phone_number  = "";
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
    <title>Netflix</title>
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
                            <h1 class="text-white">Sign In</h1>
                        </div>
                        <form action="" method="POST">
                            <p>
                                <label class="text-white">Frist name</label>
                                <input name="fname" type="text" placeholder="first name" class="form-control"/>
                            </p>
                            <p>
                                <label class="text-white">Last name</label>
                                <input name="lname" type="text" placeholder="Last name" class="form-control"/>
                            </p>
                            <p>
                                <label class="text-white">E-mail</label>
                                <input name="Adress" type="email" placeholder="emailadress@example.com" class="form-control"/>
                            </p>
                            <p>
                                <label class="text-white">Password</label>
                                <input name="Pass" type="text" placeholder="Password" class="form-control"/>
                            </p>
                            <p>
                                <label class="text-white">Phone number</label>
                                <input name="Phone_number" type="int" placeholder="06-12345678" class="form-control"/>
                            </p>
                            <p>
                                <input name="Submit" class="theme-btn" type="submit" value="Sign in"/>
                            </p>
                            <div class="form_footer">
                                <h5 style="color: #757575;" class="mt-3 mb-2">do you have a account<span class="font-weight-bold text-white">
                                <a href="aanmeld.php">log in now</a></span></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>

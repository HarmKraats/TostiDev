<?php
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

if (empty($fname) || empty($lname) || empty($Pass) || empty($Phone_number) || empty($Adress)){
    echo "<script type='text/javascript'> alert('Check of je alles hebt ingevuld!');</script>";
    } 
    //gooit de gegevens in de database 
    else {
        $sql = "INSERT INTO `gegevens`(First_name,Last_name, Password, Adress, Phone_number)
        VALUES (\" $fname\",\"$lname\", \" $Pass \",=, \" $Phone_number \")";
        $aantal = $dbh->exec($sql);
    }
    $fname = "";
    $lname = "";
    $Pass = "";
    $Phone_number  = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <head>
      <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">Talent</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="home.php" class="nav-links">Home</a>
            </li>
            <li>
                <a href="Kaartje.php" class="nav-links">Kaartje</a>
            </li>
            <li>
                <a href="Aanmelden.php" class="nav-links">Aanmelden</a>
            </li>
            <li>
                <a href="overzicht.D.php" class="nav-links">Overzicht deelnemers</a>
            </li>
            <li>
                <a href="Overzicht_B.php" class="nav-links">Overzicht Bezoekers</a>
            </li>
        </ul>
      </nav>
    </head>
    <main>
      <article>
        <div class="loginform">
          <form action="" method="POST">
              <p>
                  <label>Voornaam</label>
                  <input name="fname" type="text" placeholder="Uw Voornaam"/>
              </p>
              <p>
                  <label>Achternaam</label>
                  <input name="lname" type="text" placeholder="Uw Achternaam"/>
              </p>
              <p>
                  <label>email</label>
                  <input name="Adress" type="email" placeholder="Uw emailadres"/>
              </p>
              <p>
                  <label>wachtwoord</label>
                  <input name="Pass" type="text" placeholder="omschrijf hier uw Act"/>
              </p>
              <p>
                  <label>telefoon</label>
                  <input name="Phone_number" type="int" placeholder="omschrijf hier uw Act"/>
              </p>
              <p>
                  <input name="sSubmit"class="submitButton" type="submit" value="Opgeven"/>
              </p>
          </form>
        </div>
      </article>
    </main>
  <script>
  let mainNav = document.getElementById('js-menu');
  let navBarToggle = document.getElementById('js-navbar-toggle');

  navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
  });
  </script>
  </body>
</html>

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
                  <span><label>Voornaam</label></span>
                  <span><input name="fname" type="text" placeholder="Uw Voornaam"/></span>
              </p>
              <p>
                  <span><label>Achternaam</label></span>
                  <span><input name="lname" type="text" placeholder="Uw Achternaam"/></span>
              </p>
              <p>
                  <span><label>email</label></span>
                  <span><input name="Pass" type="email" placeholder="Uw emailadres"/></span>
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
</html>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$Pass = $_POST['Pass'];

 //verbinding maken met database!!!!!!
 $dbh = new PDO('mysql:host='.$host. ';dbname='.$dbname , $dbusername, $dbpassword);
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if (empty($fname) || empty($lname) || empty($Pass)){
    echo "<script type='text/javascript'> alert('Check of je alles hebt ingevuld!');</script>";
    } else {
        $sql = "INSERT INTO `naw_bezoeker`(First_name, Last_name, Password)
        VALUES (\" $fname\",\"$lname\", \" $Pass \")";
        $aantal = $dbh->exec($sql);
    }
    $fname = "";
    $lname = "";
    $Pass = "";
}
?>
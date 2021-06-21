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
          <h4>Welkom op de site van talentenshow Talent</h4>
          <p>je kan een Kaartje kopen of jezelf inschrijven.De kaartjes zijn gratis maar je moet wel je email achter laten<br>
          Als je wilt inschrijven voor een act dan kan je gerust doen. Hoe meer mensen hoe meer Vreugt!<p>
          <img class = "titleimage" src="https://images.unsplash.com/photo-1606946115888-f651c32e4ea8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2989&q=80" alt="foto van microfoon">
    
      </article>
      <article>
        <h4>informatie</h4>
        <p>wij zorgen voor alles wat je nodig hebt tijdens de act.<br> Drinken en eten is ook geregeld tijdens de pauze. Als je hebt aangemeld dan sturen we je een mail waar je duidelijk je act kan uitlegen.</p>
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

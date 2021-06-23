<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

//verbinding maken met database!!!!!!
$dbh = new PDO("mysql:host=$host; dbname=$dbname", $dbusername, $dbpassword);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$sql = "SELECT * FROM naw_bezoeker";
$stmt = $dbh->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

<script>
        $(function() {

            // voeg data-g aan elke li-tag toe
            $('main .sort').each(function() {
                $(this).attr('data-g', $(this).text().toLowerCase());
            });

            $('#filter').keyup(function() {
                var filter = $(this).val().toLowerCase();
                if (filter != '') {
                    $('main .sort').parent().hide();
                    $('main .sort[data-g*="' + filter + '"]').parent().show();
                } else {
                    $('main .sort').parent().show();
                    teller();
                }
                teller();
            });

            // tellerfunctie
            function teller() {
                var teller = $('main .count:visible').length;
                $('#zichtbaar').text(teller);
            }
            // start de teller bij het openen van de pagina.
            teller();
        });
    </script>


    <header>
        <nav class="navbar">
            <span class="navbar-toggle" id="js-navbar-toggle">
                <i class="fas fa-bars"></i>
            </span>
            <a href="home.php" class="logo">Talent</a>
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
    </header>
    <main>
        <article onload="teller()">
            <div class="container">
                <h2>bezoekers</h2>
                <section>
                    <div class="input">
                        <input type="text" id="filter" placeholder="filter bezoekers">
                    </div>
                    <!-- aantal zichtbaar -->
                    (<b> <span id="zichtbaar">x</span></b> deelnemers zichtbaar)
                    <table>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                        </tr>
                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            print "<tr> <th class =\"sort\">" . $row["First_name"] . "</th>" .
                                "<th class =\"sort\">" . $row["Last_name"] . "</th>";
                        }
                        ?>
                        </tr>
                    </table>
                </section>
            </div>
        </article>
    </main>

    <script src="../js/jquery.min.js"></script>
    <script>
        $(function() {

            // voeg data-g aan elke li-tag toe
            $('main .sort').each(function() {
                $(this).attr('data-g', $(this).text().toLowerCase());
            });

            $('#filter').keyup(function() {
                var filter = $(this).val().toLowerCase();
                if (filter != '') {
                    $('main .sort').parent().hide();
                    $('main .sort[data-g*="' + filter + '"]').parent().show();
                } else {
                    $('main .sort').parent().show();
                    teller();
                }
                teller();
            });

            // tellerfunctie
            function teller() {
                var teller = $('main .count:visible').length;
                $('#zichtbaar').text(teller);
            }
            // start de teller bij het openen van de pagina.
            teller();
        });
    </script>
</body>

</html>
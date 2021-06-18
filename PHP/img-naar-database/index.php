<?php

?>


<!DOCTYPE html>
<html lang="nl">

<head>

    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style sheet link -->
    <link rel="stylesheet/less " href="./style/style.less">
    <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>

    <!-- Title -->
    <title>Img upload to database</title>

</head>

<body>


    <!-- Begin MAIN -->
    <main>
        <h1>Bestand uploaden naar een data base</h1>
        <form action="to-page.php" method="post" enctype="multipart/form-data">
            <label for="userfile">Kies uw bestand</label>
            <input type="file" name="userfile">
            <br> <br> <br> <br>
            <label for="button">Upload je img</label>
            <input type="submit" value="Upload">
        </form>

    </main>
    <!-- End MAIN -->





    <!-- Begin FOOTER -->
    <footer>


    </footer>
    <!-- End FOOTER -->





    <!-- Begin SCRIPT -->
    <script>

    </script>
    <!-- End SCRIPt -->



</body>
<!-- End Body -->




</html>
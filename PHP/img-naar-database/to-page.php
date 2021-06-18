<?php
if (
    is_uploaded_file($_FILES['userfile']['tmp_name'])
    && getimagesize($_FILES['userfile']['tmp_name']) != false
) {
    /*** AFMETINGEN ***/
    $size = getimagesize($_FILES['userfile']['tmp_name']);

    /*** VARIABLEN ***/
    $type = $_FILES['userfile']['type'];
    $imgfp = fopen($_FILES['userfile']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['userfile']['name'];
}

require_once 'config.php';

$stmt = $dbh->prepare(
    "INSERT INTO image (
                image_type, image, image_size, image_name)
                VALUES (?, ?, ?, ?)"
);


/*** BIND THE PARAMS ***/
$stmt->bindParam(1, $type);
$stmt->bindParam(2, $imgfp, PDO::PARAM_LOB);
$stmt->bindParam(3, $size);
$stmt->bindParam(4, $name);

/*** EXECUTE THE QUERY ***/
$stmt->execute();


// $sql = "SELECT * FROM image";


//echo '<imgsrc= "data:$row[image_type];base64, ' . base64_encode( $row['image'] ).' ">';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kijk naar je data base</title>
</head>

<body>
    <h1>Het plaatje is toegevoegd in je database!</h1>
    <h3>Hier een randon plaatje uit je databse!</h3>

    <div>

        <?php

            $sql = "SELECT image FROM image";
            $stmt = $dbh->prepare($sql);
            $stmt->execute();


            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // echo $sql;

        
        ?>

    </div>
</body>

</html>
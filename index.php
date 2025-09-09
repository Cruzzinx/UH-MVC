<?php 

include "connect.php";
include "./controller/controll.php";
include "./model/model.php";
include "./view/product";

$art = new ArtView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Seni</title>
</head>
<body>


    <?php include "./view/utils/utils.php"; ?>

    <?php $art->find(); ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>TITTLE</th>
            <th>TYPE</th>
            <th>YEAR</th>
        </tr>
        <?php $art->show() ?>
    </table>

</body>
</html>
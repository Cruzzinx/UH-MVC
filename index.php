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

    <div class="d-flex justify-content-center">
        <table class="table table-striped w-50">
            <tr>
                <th>Id </th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Tahun</th>
            </tr>
            <?php $art->show() ?>
        </table>
    </div>

</body>
</html>
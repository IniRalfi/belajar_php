<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>


<?php

$nama = "Rafli Pratama";
$umur = 19;

$kalimat = <<<TEXT
Halo perkenalkan nama ku adalah $nama.
Umurku adalah $umur tahun.
TEXT;

echo nl2br($kalimat);

?>

</body>
</html>
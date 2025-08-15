<?php

echo "<h1>Operasi Artimatika</h1>";

$hargaBuku = 5000;
$jumlahBuku = 4;

$hargaPen = 3000;
$jumlahPen = 5;

$totalHargaBuku = $hargaBuku * $jumlahBuku;
$totalHargaPen = $hargaPen * $jumlahPen;

$totalHarga = $totalHargaBuku + $totalHargaPen;

$struk =<<<TEXT
<p> Buku | $jumlahBuku | Rp.$totalHargaBuku</p>
<p> Pen | $jumlahPen | Rp.$totalHargaPen</p>
TEXT;

echo $struk;
?>
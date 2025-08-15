<?php

$nama = "Rafli Pratama";
$tahunLahir = 2005;
$pekerjaan =  "Web Devloper";

$tahunSekarang = 2025;
$umur = $tahunSekarang - $tahunLahir;

$kalimat = <<<TEXT
<h2>Profile Saya</h2>
<p>Nama             : $nama</p>
<p>Tahun Lahir      : $tahunLahir</p>
<p>Umur             : $umur</p>
<p>Pekerjaan        : $pekerjaan</p>
TEXT;

echo $kalimat;


?>
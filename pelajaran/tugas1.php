<?php

$nama = readline("Masukkan nama Anda: ");
$tugas = 80;
$uas = 90;
$uts = 85;

function hitungNilaiAkhir($tugas, $uts, $uas) {
    return (0.3 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
};

$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

if ($nilaiAkhir >= 85){
    $grade = "A";
} elseif ($nilaiAkhir >= 75){
    $grade = "B";
} elseif ($nilaiAkhir >= 65){
    $grade = "C";
} elseif ($nilaiAkhir >= 50){
    $grade = "D";
} else {
    $grade = "E";
};

$hasil = "Nama: $nama\nNilai Tugas: $tugas\nNilai UTS: $uts\nNilai UAS: $uas\nNilai Akhir: $nilaiAkhir\nGrade: $grade\n";
echo $hasil;

?>
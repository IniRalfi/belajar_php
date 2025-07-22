<?php
// Tanda 'echo' digunakan untuk menampilkan teks ke layar.
echo "<h1>Selamat Datang di Proyek PHP Saya!</h1>";

// Tanda '$' digunakan untuk membuat variabel.
$nama = "Rafli";
$lokasi = "Pontianak";

// Tanda '.' digunakan untuk menggabungkan string (teks).
echo "<p>Halo, nama saya " . $nama . ".</p>";
echo "<p>Saat ini saya sedang belajar PHP di " . $lokasi . ".</p>";

// Menampilkan tanggal dan waktu saat ini.
echo "<hr>";
echo "Waktu server saat ini: " . date("d M Y, H:i:s");
?>
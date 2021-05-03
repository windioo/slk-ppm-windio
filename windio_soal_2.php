<?php
$uangSepuluhRibu = 10000;
$jumlahUangSepuluhRibu = 3;
$uangLimaRibu = 5000;
$jumlahUangLimaRibu = 4;
$uangDuaPuluhRibu = 20000;
$jumlahUangDuaPuluhRibu = 5;
$hargaMainan = 55000;

echo"Setyo mempunyai tiga lembar uang sepuluh ribuan <br>";
$totalUangSepuluhRibu = $uangSepuluhRibu * $jumlahUangSepuluhRibu;
echo"Total = Rp.".$totalUangSepuluhRibu."<br><br>";
echo"Empat lembar uang lima ribuan <br>";
$totalUangLimaRibu = $uangLimaRibu * $jumlahUangLimaRibu;
echo"Total = Rp.".$totalUangLimaRibu."<br><br>";
echo"Lima lembar uang dua puluh ribuan.<br>";
$totalUangDuaPuluhRibu= $uangDuaPuluhRibu * $jumlahUangDuaPuluhRibu;
echo"Total = Rp.".$totalUangDuaPuluhRibu."<br><br>";
$totalUang = $totalUangDuaPuluhRibu + $totalUangLimaRibu + $totalUangSepuluhRibu;
echo"Total Uang = Rp.".$totalUang."<br>";
echo"Harga Mainan = Rp.".$hargaMainan."<br><br>";
$totalKembali = $totalUang - $hargaMainan;
echo"Jumlah uang Setyo setelah membeli mainan = Rp.".$totalKembali;
?>
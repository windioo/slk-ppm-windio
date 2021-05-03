<?php  
$bolpoin = 1750;
$lusin = 12;
$uang = 5000;

$jumlahUang = $uang * 5;
$jumlahHargaBolpoin = $lusin * $bolpoin;
$uangKembali = $jumlahUang - $jumlahHargaBolpoin;
echo "Rian pergi ke toko alat tulis untuk membeli bolpoin. <br>";
echo"Harga Bolpoin = Rp." . $bolpoin."<br> <br>";
echo"Rian membeli 1 lusin bolpoin <br>";
echo"1 Lusin = " .$lusin." Buah <br><br>";
echo"Ia membayar 5 lembar uang lima ribuan.<br>";
echo"Uang = Rp.". $uang. "<br>";
echo"Total Uang = Rp.".$jumlahUang."<br><br>";
echo"Total harga Bolpoin(".$bolpoin."X".$lusin.") = Rp.".$jumlahHargaBolpoin."<br>";
echo"Uang kembalian yang Rian terima (".$jumlahUang."-".$jumlahHargaBolpoin.") = Rp.".$uangKembali;
?>  


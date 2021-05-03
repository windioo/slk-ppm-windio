<?php
$jumlahToko = 100;
$Toko_1 = 10000;
$Toko_68 = 30100;

echo"Suku pertamaa/U1) = ".$Toko_1."<br>";
echo"Suku ke 68U68) = ".$Toko_68."<br><br>";
echo"Pertma mencari perbedaan deret atau b. <br>";
echo"Rumusnya adalah Un=a+n-1)b <br>";
echo"Menjadi $Toko_68=".$Toko_1."+68-1)b<br>";
echo" $Toko_68=".$Toko_1."+67*b<br>";
$b= ($Toko_68-$Toko_1)/67;
echo"b = ".$b."<br>";
echo"Jadi perbedaan setiap deret adalah 300. <br><br>";
echo"Sekarang kita cari U81 dengan perulangan. <br>";

for($suku=1;$suku<=$jumlahToko;$suku++){
    if($suku == 81){
        $Toko_81 = $Toko_1;
    }
    $Toko_1 += $b;
}

echo"Dengan menggunakan perulangan dihasilkan pengeluaran toko ke 81 sebesar Rp.".$Toko_81;

?>
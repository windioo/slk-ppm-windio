<?php 
$menu = ["Makanan","Minuman","Parsel"];

for($i=0;$i<count($menu);$i++){
    echo $menu[$i]."<br>";
    echo "1. Menu ".$menu[$i]." ke 1<br>";
    echo "2. Menu ".$menu[$i]." ke 2<br>";
    echo "3. Menu ".$menu[$i]." ke 3<br><br>";
}

?>
<?php
	$a = 19;
    $b = 20;
    $c = 138;
    $d = 411;
	$e = $a + $b + $c + $d;
	$f = $d - $a - $b - $c;
	$g = $a * $c;
	$h = $b * $d;
	$i = $c / $b;
	$j = $d / $a;
	$k = (($a + $d) * ($b - $a)) / $c; 
   
    echo "<br/> PENJUMLAHAN <br/>";
    echo "$a + $b + $c + $d = ";
	echo $e."<br/>";
	
    echo "<br/> PENGURANGAN <br/>";
    echo "$d - $a - $b - $c = ";
	echo $f."<br/>";
 
    echo "<br/> PERKALIAN <br/>";
    echo "$a * $c = ";
	echo $g."<br/>";
    echo "$b * $d = ";
	echo $h."<br/>";
 
    echo "<br/> PEMBAGIAN <br/>";
    echo "$c / $b = ";
	echo $i."<br/>";
    echo "$d / $a = ";
	echo $j."<br/>";
	
    echo "<br/> GABUNGAN <br/>";
    echo "(($a + $d) * ($b - $a)) / $c = ";
	echo $k;
?>
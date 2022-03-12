<?php
function luas_segitiga($alas,$tinggi) {
	$a = $alas;
	$t = $tinggi;
	$hasil = 1/2*$a*$t;
	return $hasil;
}

$hasil = luas_segitiga(7,6);
echo "Luas Segitiga = ";
echo "1/2*7*6 = ";
echo $hasil."<br/>";

$hasil = luas_segitiga(3,8);
echo "Luas Segitiga = ";
echo "1/2*3*8 = ";
echo $hasil."<br/>";

$hasil = luas_segitiga(6,9);
echo "Luas Segitiga = ";
echo "1/2*6*9 = ";
echo $hasil."<br/>";

$hasil = luas_segitiga(7,8);
echo "Luas Segitiga = ";
echo "1/2*7*8 = ";
echo $hasil."<br/>";

$hasil = luas_segitiga(9,8);
echo "Luas Segitiga = ";
echo "1/2*9*8 = ";
echo $hasil."<br/>";
?> 
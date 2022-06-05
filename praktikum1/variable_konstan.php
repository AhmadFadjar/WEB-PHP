<?php
// mendefinisikan konstanta

define("PHI", 3.14);
define("DBNAME", "inventori");
define("DBSERVER", "localhost");

$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari $jari memiliki luas dengan $luas";
echo "<br>";
echo "Kelilingnya adalah $keliling";
echo "<br>";

echo "Nama databasenya adalah : " .DBNAME;
echo "<br>";
echo "Lokasi databasenya adalah : " .DBSERVER;


?>
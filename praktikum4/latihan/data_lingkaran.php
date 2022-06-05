<?php

// memanggil file class_lingkaran.php
require_once "class_lingkaran.php";
echo "Nilai PHI adalah " . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);
echo "<br>";

// menghitung luas lingkaran dengan menggunakan fungsi getluas
echo "Luas Lingkaran 1 adalah " . $lingkaran1->getLuas();
echo "<br>";
echo "Luas Lingkaran 2 adalah " . $lingkaran2->getLuas();
echo "<br>";

// menghitung keliling lingkaran dengan menggunakan fungsi getkeliling
echo "Keliling Lingkaran 1 adalah " . $lingkaran1->getKeliling();
echo "<br>";
echo "Keliling Lingkaran 2 adalah " . $lingkaran2->getKeliling();

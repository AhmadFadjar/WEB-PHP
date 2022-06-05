<?php

class Buah {
    public $nama;
    protected $warna;
    private $berat;

    public function setColor($c)
    {
        return $this-> warna = $c;
    }

    public function setWeight($b)
    {
        return $this-> berat = $b;
    }
}

$mangga = new Buah();
echo $mangga -> nama = "Mangga";
echo "<br>";
echo $mangga -> setColor = "Hijau";
echo "<br>";
echo $mangga -> setWeight = "300kg";
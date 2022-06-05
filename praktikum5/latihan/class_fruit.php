<?php

class Fruit {
    public $nama;
    public $warna;

    public function __CONSTRUCT($nama, $warna)
    {
        $this->nama=$nama;
        $this->warna=$warna;
    }

    public function intro()
    {
        echo "Nama aku adalah {$this->nama} , dan aku bewarna {$this->warna}";
    }
}

class Strawberry extends Fruit{
    public function message(){
        echo "<br> Aku adalah sebuah strawberry atau pisang";
    }
}

$buah = new Strawberry ("Strawberry", "Merah");
$buah->intro();
$buah->message();
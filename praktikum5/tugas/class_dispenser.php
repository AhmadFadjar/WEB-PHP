<?php

class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function aturVolume($volume)
    {
        return $this->volume=$volume;
    }

    public function aturhargaSegelas($segelas)
    {
        return $this->hargaSegelas=$segelas;
    }

    public function aturvolumeGelas($vgelas)
    {
        return $this->volumeGelas=$vgelas;
    }

    public function aturnamaMinuman($aminuman)
    {
        return $this->namaMinuman=$aminuman;
    }
}

$minuman = new Dispenser();
echo "Nama minuman" .$minuman->aturnamaMinuman = "Air Putih";
echo "<hr>";
echo "Volume botol minuman " .$minuman->aturVolume(1000). "ML";
echo "<br>";
echo "Harga 1 gelasnya adalah " .$minuman->aturhargaSegelas(5000) ." Rupiah";
echo "<br>";
echo "Fadjar membeli 1 buah gelas dengan volume  " .$minuman->aturvolumeGelas(250) ."ML";
echo "<br>";
echo "Hasil volume sekarang adalah " .$minuman->aturVolume(1000) - $minuman->aturvolumeGelas(250) ."ML";

?>
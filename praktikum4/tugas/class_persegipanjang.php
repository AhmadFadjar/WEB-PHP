<?php

class PersegiPanjang{
    public $luas,
        $keliling,
        $lebar,
        $panjang;

    function __CONSTRUCT($luas, $keliling, $lebar, $panjang){
        $this->luas = $luas;
        $this->keliling = $keliling;
        $this->lebar = $lebar;
        $this->panjang = $panjang;
    }

    function getLuas(){
        return "Luas persegi panjang ialah " . $panjang * $lebar;
    }
    function getKeliling(){
        return "Keliling persegi panjang ialah " . 2 * ($panjang + $lebar);
    }
}
?>

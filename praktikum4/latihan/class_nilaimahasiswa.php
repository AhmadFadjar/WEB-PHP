<?php

class NilaiMahasiswa{
    public $matakuliah;
    public $nilai;
    public $nim;

    function __CONSTRUCT($matakuliah, $nilai, $nim){
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function hitungNilai(){
        return $this->nilai;
    }
    function kelulusan($keterangan){
        if($keterangan > 55){
            return "Anda Lulus";
        }else{
            return "Anda Tidak Lulus";
        };
    }
    function grade($keterangan){
        if($keterangan >= 85 && $keterangan == 100){
            return "A";
        }elseif($keterangan >= 70 && $keterangan <= 84){
            return "B";
        }elseif($keterangan >= 56 && $keterangan <= 69){
            return "C";
        }elseif ($keterangan >= 36 && $keterangan <= 55) {
            return "D";
        }elseif ($keterangan >= 10 && $keterangan <= 35) {
            return "E";
        }else{
            return "I";
        };
    }
}
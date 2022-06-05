<?php

// membuat sebuah class dan harus diawali tanda besar
class Manusia {
    // membuat property
    var $nama;
    var $warna;

    // membuat method
    function tampilkan_nama(){
        return "Nama saya adalah Ahmad Fadjar";
    }
    function tampilkan_warnakulit(){
        return "<br>Warna kulit saya sawo matang";
    }
}

// membuat object
$manusia =  new Manusia();

echo $manusia->tampilkan_nama();
echo $manusia->tampilkan_warnakulit();

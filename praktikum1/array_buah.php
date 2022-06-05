<?php

    $ar_buah = ["Pepaya","Jambu","Mangga","Pisang"];

    // Mencetak index sesuai keinginan
    echo $ar_buah[2];

    // Menghitung jumlah buah 
    echo "<br/>Jumlah Buah : " . count($ar_buah);

    // Cetak seluruh buah
    echo "<ol>";
    foreach($ar_buah as $buah) {
        echo "<li>$buah</li>";
    }
    echo "</ol>";

    // Menambahkan buah
    $ar_buah[] = "Anggur";

    // Mengurangi buah
    unset($ar_buah[1]);

    //Mengganti buah
    $ar_buah[2]="Manggis";

    // cetak seluruh buah dengan index nya
    echo '<ul>';
    foreach($ar_buah as $k => $v){
        echo '<li> buah index ke ' . $k .' adalah '. $v .'</li>';
    }
    echo '</ul>';

?>
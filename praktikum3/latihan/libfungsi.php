<?php

function kelulusan($_total){
    if($total > 55){
        return "Selamat Anda Lulus";
    }else{
        return "Mohon Maaf Anda Gagal";
    }
}

function grade($_total){
    if($total >= 85){
        $grade = "A";
    }elseif($total >= 70){
        $grade = "B";
    }elseif($total >= 56){
        $grade = "C";
    }elseif($total >= 36){
        $grade = "D";
    }elseif($total >= 10){
        $grade = "E";
    }else{
        $grade = "I(tidak ada nilai)";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Array</title>
</head>
<body>
    <?php
    $ar_buah=["P"=>"Pepaya","A"=>"Anggur","M"=>"Mangga","D"=>"Durian"];
    echo "<ol>";
        foreach($ar_buah as $k=>$v){
            echo "<li>".$k." = ".$v."</li>";
        }
    echo "</ol>";

    // fungsi sort adalah mengurutkan data array dalam urutan menaik
    echo "<hr/>";
    sort($ar_buah);
    echo "<ol>";
        foreach($ar_buah as $k=>$v){
            echo "<li>".$k." = " . $v ."</li>";
        }
    echo "</ol>";

    // fungsi arsort adalah mengurutkan data array dalam urutan menurun
    echo "<hr>";
    arsort($ar_buah);
    echo "<ol>";
    foreach($ar_buah as $k => $v){
        echo "<li>$k = $v </li>";
    }



    ?>
</body>
</html>
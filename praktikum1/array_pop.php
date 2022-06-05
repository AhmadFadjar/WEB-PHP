<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop</title>
</head>
<body>
    <?php
    // fungsi array pop berguna untuk menghapus nilai terakhir dalam sebuah data array
    $nama=["Fadjar","Eren","Erwin","Levi"];
    array_pop($nama);
    foreach($nama as $pahlawan){
        echo "$pahlawan <br>";
    }
    ?>
</body>
</html>
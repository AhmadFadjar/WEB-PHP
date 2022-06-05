<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Nama Siswa</title>
</head>

<body>
    <?php
    $nilai1=["id"=>1,"nim"=>"011212","uts"=>80,"uas"=>90,"tugas"=>70];
    $nilai2=["id"=>2,"nim"=>"011213","uts"=>70,"uas"=>85,"tugas"=>80];
    $nilai3=["id"=>3,"nim"=>"011214","uts"=>60,"uas"=>80,"tugas"=>90];
    $nilai4=["id"=>4,"nim"=>"011215","uts"=>50,"uas"=>75,"tugas"=>100];
    $semua_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
    ?>

    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($semua_nilai as $nilai){
                echo "<tr><td>".$nomor."</td>";
                echo "<td>".$nilai["nim"]."</td>";
                echo "<td>".$nilai["uts"]."</td>";
                echo "<td>".$nilai["uas"]."</td>";
                echo "<td>".$nilai["tugas"]."</td>";
                $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"])/3;

                echo "<td>" .number_format($nilai_akhir,2,",",".")."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
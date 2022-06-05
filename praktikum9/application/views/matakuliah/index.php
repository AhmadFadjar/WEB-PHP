<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Daftar matakuliah
        </h3>
        <table border="2" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Kode</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor=1;
                foreach ($matakuliah as $mt){
                ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mt -> nama ?></td>
                    <td><?= $mt -> sks ?></td>
                    <td><?= $mt-> kode?></td>
                </tr>
                <?php
                $nomor++; 
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Daftar Dosen
        </h3>
        <table border="2" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Pendidikan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor=1;
                foreach ($dosen as $ds){
                ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $ds -> nidn ?></td>
                    <td><?= $ds -> nama ?></td>
                    <td><?= $ds -> gender ?></td>
                    <td><?= $ds -> pendidikan?></td>
                    <td>
                        <a href="<?php echo "detail/$ds->id" ?>"> Detail </a>
                    </td>
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
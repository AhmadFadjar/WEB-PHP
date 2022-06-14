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
    <h4 style="text-align: center;">Matakuliah</h4>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $nomor = 1;
                foreach ($matakuliah as $mtk){
                ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mtk->nama ?></td>
                    <td><?= $mtk->sks ?></td>
                    <td><?= $mtk->kode ?></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>
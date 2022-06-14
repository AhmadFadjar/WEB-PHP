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
    <h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <tr>
                    <td><?= $pelajaran->nama ?></td>
                    <td><?= $pelajaran->sks ?></td>
                    <td><?= $pelajaran->kode ?></td>
                </tr>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
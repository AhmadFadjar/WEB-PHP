<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Mahasiswa</h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa-> id ?></td>
                <td><?php echo $siswa-> nim ?></td>
                <td><?php echo $siswa-> nama ?></td>
                <td><?php echo $siswa-> gender ?></td>
                <td><?php echo $siswa-> tmp_lahir ?></td>
                <td><?php echo $siswa-> tgl_lahir ?></td>
                <td><?php echo $siswa-> ipk ?></td>
                <td>
                    <a href="<?php echo "detail/$mhs->id"?>">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Detial Dosen
        </h3>
        <table border="2" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $ddosen -> id ?>
                    </td>
                    <td><?php echo $ddosen -> nidn ?></td>
                    <td><?php echo $ddosen -> nama ?></td>
                    <td><?php echo $ddosen -> gender ?></td>
                    <td><?php echo $ddosen -> tmp_lahir ?></td>
                    <td><?php echo $ddosen -> tgl_lahir ?></td>
                    <td><?php echo $ddosen -> pendidikan?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
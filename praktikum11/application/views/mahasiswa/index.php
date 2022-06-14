<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script>
        function hapusMahasiswa(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <?php
    $username = $this->session->userdata('username');
    if ($username){
        echo "<h2>Selamat Datang $username</h2>";
    }
    ?>
</head>
<body>
    <div class="col-md-12">
    <h4 style="text-align: center;">Mahasiswa</h4>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <!-- <th>Predikat</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs){
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $mhs -> nim ?></td>
                <td><?= $mhs -> nama ?></td>
                <td><?= $mhs -> gender ?></td>
                <td><?= $mhs -> ipk ?></td>
                <td>
                    <a href= <?= base_url("index.php/mahasiswa/detail/$mhs->id")?> class="btn btn-primary btn-lg active">Detail</a>
                    &nbsp;
                    <a href= <?= base_url("index.php/mahasiswa/edit/$mhs->id") ?> class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?= base_url("index.php/mahasiswa/delete/$mhs->id") ?> class="btn btn-danger btn-lg active" onclick="return hapusMahasiswa('Apakah anda yakin ingin menghapus mahasiswa yang bernama <?= $mhs->nama ?>')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?= base_url("index.php/mahasiswa/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <script>
        function hapusMatakuliah(pesan){
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
    <h4 style="text-align: center;">Matakuliah</h4>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
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
                    <td>
                    <a href= <?= base_url("index.php/matakuliah/detail/$mtk->id")?> class="btn btn-primary btn-lg active">Detail</a>
                    &nbsp;
                    <a href= <?= base_url("index.php/matakuliah/edit/$mtk->id") ?> class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?= base_url("index.php/matakuliah/delete/$mtk->id") ?> class="btn btn-danger btn-lg active" onclick="return hapusMatakuliah('Apakah anda yakin ingin menghapus matakuliah <?= $mtk->nama ?>')">Hapus</a>
                </td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tr>
        </tbody>
    </table>
    <a href= <?= base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <!-- <script>
        function hapusMahasiswa(){
            if(confirm('pesan')){
                return true;
            }else{
                return false;
            }
        }
    </script> -->
</head>
<?php 
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    <h3>Mahasiswa</h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $mhs-> nim ?></td>
                <td><?php echo $mhs-> nama ?></td>
                <td><?php echo $mhs-> gender ?></td>
                <td><?php echo $mhs-> ipk ?></td>
                <td>
                    <a href="">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
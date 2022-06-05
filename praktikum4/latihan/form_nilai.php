<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Formulir Nilai Mahasiswa</title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Start Form -->
    <div class="container">
        <h3 style="text-align:center">Form Nilai Mahasiswa</h3>
        <hr>
        <form method="POST" action="class_nilaimahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukan NIM Kalian" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="WEB">Pemrograman Web</option>
                    <option value="BASDAT">Basis Data</option>
                    <option value="JARKOM">Jaringan Komputer</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Masukan Nilai Kalian" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" value="Simpan" class="btn btn-primary">simpan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- End Form -->

    <!-- PHP Tag -->
    <?php
        require_once "class_nilaimahasiswa.php";
        if($_POST){
            $ns = new NilaiMahasiswa($_POST["matakuliah"], $_POST["nilai"], $_POST["nim"]);
            $keterangan = $ns->hitungNilai();
            $hasil = $ns->kelulusan($keterangan);
            $hasil2 = $ns->grade($keterangan);
    }
    ?>
    <?php
        echo "NIM : " .$ns->nim;
        echo "<br>";
        echo "Mata Kuliah : " .$ns->matakuliah;
        echo "<br>";
        echo "Nilai : " .$ns->nilai;
        echo "<br>";
        echo "Status Kelulusan " .$ns->kelulusan($keterangan);
        echo "<br>";
        echo "Grade : " .$ns->grade($keterangan);
    ?>
    <!-- End Tag -->
</body>
</html>
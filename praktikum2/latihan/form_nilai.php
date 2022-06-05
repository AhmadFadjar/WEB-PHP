<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Formulir Nilai</title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- Form Start -->
<form method="POST" action="nilai_siswa.php">
    <div class="container">
        <h2 style="text-align:center">Form Nilai</h2>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                <option value="ddp">Dasar-Dasar Pemrograman</option>
                <option value="pw">Pemrograman Web</option>
                <option value="jarkom">Jaringan Komputer</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
            <div class="col-8">
            <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </div>
</form>
<!-- End Form -->

</body>
</html>
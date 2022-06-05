<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Form Belanja</title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Start Form -->
    <h4 style="text-align:center; margin-top:20px; margin-bottom:20px">Formulir Belanja</h4>
    <form method="POST" action="form_belanja.php">
        <div class="container">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <div class="input-group">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control"> 
                <div class="input-group-append">
                <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" aria-describedby="produkHelpBlock"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" aria-describedby="produkHelpBlock"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" aria-describedby="produkHelpBlock"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div> 
            <span id="produkHelpBlock" class="form-text text-muted">Pilih produk yang diinginkan</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
            <div class="col-8">
            <div class="input-group">
                <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="text" class="form-control"> 
                <div class="input-group-append">
                <div class="input-group-text">
                    <i class="fa fa-window-restore"></i>
                </div>
                </div>
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </form>
    <!-- End Form -->

    <!-- PHP Tag / Start -->
    <?php
    $nama = $_POST["customer"];
    $pilih_produk = $_POST["produk"];
    $jumlah_produk = $_POST["jumlah"];
    $simpan = $_POST["submit"];

    if($pilih_produk == "TV"){
        $harga = 4200000;
    }
    elseif($pilih_produk == "Kulkas"){
        $harga = 3100000;
    }
    else{
        $harga = 3800000;
    }

    $total = $jumlah_produk * $harga;

    echo "Hasil Belanja Anda :";
    echo "<br>Nama Customer : $nama";
    echo "<br>Nama Produk : $pilih_produk";
    echo "<br>Produk Dibeli : $jumlah_produk";
    echo "<br>Total Belanja : $total";
    
    
    ?>
</body>
</html>
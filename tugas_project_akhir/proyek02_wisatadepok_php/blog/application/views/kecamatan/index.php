<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kecamatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body"> 
            <script>
                function hapusKecamatan(pesan){
                  if (confirm(pesan)){
                    return true;
                  }else{
                    return false;
                  }
                }
            </script>
            <body>
                <div class="md-12 table-responsive">
                    <h3 class="text-center">Kecamatan</h3>
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                foreach ($kecamatan as $kec){
                            ?>
                            <tr>
                                <td><?php echo $nomor?></td>
                                <td><?php echo $kec->nama?></td>
                                <td>
                                    <a href="<?php echo base_url("index.php/kecamatan/edit/$kec->id") ?>" class="btn btn-success btn-sm active">Edit</a>
                                    &nbsp;
                                    <a href="<?php echo base_url("index.php/kecamatan/delete/$kec->id") ?>" class="btn btn-danger btn-sm active" onclick="return hapusKecamatan('Anda Yakin Ingin Menghapus Data Kecamatan <?= $kec->nama?>?')">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="<?php echo base_url("index.php/kecamatan/form")?>" class="btn btn-primary btn-sm active">Tambah</a>
                </div>
            </body>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
          <h3 class="card-title">Tempat Wisata</h3>

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
            <body>
                <div class="table-responsive md-12">
                    <h3 class="text-center">Tempat Wisata</h3>
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis_id</th>
                                <th>Skor Rating</th>
                                <th>Harga Tiket</th>
                                <th>Kecamatan_id</th>
                                <th>Website</th>
                                <th>Fasilitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                foreach ($tempat_wisata as $tw){
                            ?>
                            <tr>
                                <td><?php echo $nomor?></td>
                                <td><?php echo $tw->nama?></td>
                                <td><?php echo $tw->alamat?></td>
                                <td><?php echo $tw->jenis_id?></td>
                                <td><?php echo $tw->skor_rating?></td>
                                <td><?php echo $tw->harga_tiket?></td>
                                <td><?php echo $tw->kecamatan_id?></td>
                                <td><?php echo $tw->website?></td>
                                <td><?php echo $tw->fasilitas?></td>
                            </tr>
                            <?php
                                $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
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


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
        <script>
          function hapusTempat_wisata(pesan) {
            if (confirm(pesan)) {
              return true;
            } else {
              return false;
            }
          }
        </script>

        <body>
          <div class="table-responsive md-12">
            <h3 class="text-center">Tempat Wisata</h3>
            <table border="1" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Latlong</th>
                  <th>Jenis_id</th>
                  <th>Skor Rating</th>
                  <th>Harga Tiket</th>
                  <th>Foto 1</th>
                  <th>Foto 2</th>
                  <th>Foto 3</th>
                  <th>Kecamatan_id</th>
                  <th>Website</th>
                  <th>Fasilitas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $tempat_wisata->id ?></td>
                  <td><?php echo $tempat_wisata->nama ?></td>
                  <td><?php echo $tempat_wisata->alamat ?></td>
                  <td><?php echo $tempat_wisata->latlong ?></td>
                  <td><?php echo $tempat_wisata->jenis_id ?></td>
                  <td><?php echo $tempat_wisata->skor_rating ?></td>
                  <td><?php echo $tempat_wisata->harga_tiket ?></td>
                  <td>
                    <h4><?= $tempat_wisata->nama ?></h4>
                    <!-- <?= $error; ?> -->
                    <img src="<?= base_url() ?>uploads/photos/<?= $tempat_wisata->foto1 ?>" width="300" />
                    <?= form_open_multipart('tempat_wisata/upload'); ?>
                    <br /><br />
                    <input type="file" name="foto" size="300" />
                    <input type="hidden" name="idtempat_wisata" value="<?= $tempat_wisata->id; ?>" />
                    <br /><br />
                    <input type="submit" value="Upload Foto" class="btn btn-primary" />
                    <?php echo form_close() ?>

                  </td>
                  <td>
                    <h4><?= $tempat_wisata->nama ?></h4>
                    <!-- <?= $error; ?> -->
                    <img src="<?= base_url() ?>uploads/photos/<?= $tempat_wisata->foto2 ?>" width="300" />
                    <?= form_open_multipart('tempat_wisata/upload2'); ?>
                    <br /><br />
                    <input type="file" name="foto" size="300" />
                    <input type="hidden" name="idtempat_wisata" value="<?= $tempat_wisata->id; ?>" />
                    <br /><br />
                    <input type="submit" value="Upload Foto" class="btn btn-primary" />
                    <?php echo form_close() ?>
                  </td>
                  <td>
                    <h4><?= $tempat_wisata->nama ?></h4>
                    <!-- <?= $error; ?> -->
                    <img src="<?= base_url() ?>uploads/photos/<?= $tempat_wisata->foto3 ?>" width="300" />
                    <?= form_open_multipart('tempat_wisata/upload3'); ?>
                    <br /><br />
                    <input type="file" name="foto" size="300" />
                    <input type="hidden" name="idtempat_wisata" value="<?= $tempat_wisata->id; ?>" />
                    <br /><br />
                    <input type="submit" value="Upload Foto" class="btn btn-primary" />
                    <?php echo form_close() ?>
                  </td>
                  <td><?php echo $tempat_wisata->kecamatan_id ?></td>
                  <td><?php echo $tempat_wisata->website ?></td>
                  <td><?php echo $tempat_wisata->fasilitas ?></td>
                </tr>
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
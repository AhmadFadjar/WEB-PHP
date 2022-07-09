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
        <h3 class="card-title">Form Input Tempat Wisata</h3>

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
        <h3 class="text-center">Form Input Tempat Wisata</h3>
        <div class="container col-md-8 p-4">
          <?php echo form_open('tempat_wisata/save') ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Tempat Wisata</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="nama" name="nama" placeholder="Masukkan Nama Tempat Wisata" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="alamat" name="alamat" placeholder="Masukkan Alamat Tempat Wisata" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="latlong" name="latlong" placeholder="Masukkan Latlong Tempat Wisata" type="text"    class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_id" class="col-4 col-form-label">Jenis_id</label>
            <div class="col-8">
              <input id="jenis_id" name="jenis_id" placeholder="Masukkan Jenis Id" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="skor_rating" class="col-4 col-form-label">Skor Rating</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="skor_rating" name="skor_rating" placeholder="Masukkan Skor Rating" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan Harga Tiket" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan_id</label>
            <div class="col-8">
              <input id="kecamatan_id" name="kecamatan_id" placeholder="Masukkan Kecamatan Id" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="website" name="website" placeholder="Masukkan Nama Website" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input id="fasilitas" name="fasilitas" placeholder="Masukkan Fasilitas" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <?php echo form_close() ?>
        </div>
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
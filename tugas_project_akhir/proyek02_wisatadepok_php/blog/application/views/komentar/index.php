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
                <h3 class="card-title">Komentar</h3>

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
                    function hapusKomentar(pesan) {
                        if (confirm(pesan)) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                </script>

                <body>
                    <div class="md-12 table-responsive">
                        <h3 class="text-center">Komentar</h3>
                        <table border="1" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Isi</th>
                                    <th>User_id</th>
                                    <th>Wisata_id</th>
                                    <th>Nilai_rating_id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($komentar as $kmntar) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor ?></td>
                                        <td><?php echo $kmntar->tanggal ?></td>
                                        <td><?php echo $kmntar->isi ?></td>
                                        <td><?php echo $kmntar->users_id ?></td>
                                        <td><?php echo $kmntar->wisata_id ?></td>
                                        <td><?php echo $kmntar->nilai_rating_id ?></td>
                                        <td>
                                            <a href="<?php echo base_url("index.php/komentar/delete/$kmntar->id") ?>" class="btn btn-danger btn-sm active" onclick=" return hapusKomentar('Apakah Anda yakin ingin menghapus komentar yang bernama <?php echo $kmntar->isi ?>')"> Hapus </a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url("index.php/komentar/form") ?>" class="btn btn-primary btn-sm active">Tambah</a>
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
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
                <h3 class="card-title">Form Input komentar</h3>

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
                <h3 class="text-center">Form Input komentar</h3>
                <div class="container col-md-8 p-4">
                    <?php echo form_open('komentar/save') ?>
                    <div class="form-group row">
                        <label for="isi" class="col-4 col-form-label">Isi</label>
                        <div class="col-8">
                            <textarea id="isi" name="isi" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="users_id" class="col-4 col-form-label">Users_id</label>
                        <div class="col-8">
                            <select id="users_id" name="users_id" class="custom-select">
                                <?php foreach ($users as $usr) { ?>
                                    <option value="<?= $usr->id ?>"><?= $usr->username ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wisata_id" class="col-4 col-form-label">Wisata_id</label>
                        <div class="col-8">
                            <select id="wisata_id" name="wisata_id" class="custom-select">
                                <?php foreach ($wisata as $wst) { ?>
                                    <option value="<?= $wst->id ?>"><?= $wst->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_rating_id" class="col-4 col-form-label">Nilai_rating_id</label>
                        <div class="col-8">
                            <select id="nilai_rating_id" name="nilai_rating_id" class="custom-select">
                                <option value="1">Jelek</option>
                                <option value="2">Kurang Bagus</option>
                                <option value="3">Biasa</option>
                                <option value="4">Bagus</option>
                                <option value="5">Sangat Bagus</option>
                            </select>
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
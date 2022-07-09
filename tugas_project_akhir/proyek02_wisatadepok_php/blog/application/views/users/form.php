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
          <h3 class="card-title">Form Input Users</h3>

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
        <h3 class="text-center">Form Input Users</h3>
            <div class="container col-md-8 p-4">
                <?php echo form_open('users/save') ?>
                    <div class="form-group row">
                            <label for="username" class="col-4 col-form-label">Username</label> 
                            <div class="col-8">
                            <input id="username" name="username" placeholder="Masukkan Username Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-4 col-form-label">Password</label> 
                            <div class="col-8">
                            <input id="password" name="password" placeholder="Masukkan Password Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label> 
                            <div class="col-8">
                            <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="created_at" class="col-4 col-form-label">Created_at</label> 
                            <div class="col-8">
                            <input id="created_at" name="created_at" placeholder="Masukkan Created_at Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_login" class="col-4 col-form-label">Last_login</label> 
                            <div class="col-8">
                            <input id="last_login" name="last_login" placeholder="Masukkan Last_login Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-4 col-form-label">Status</label> 
                            <div class="col-8">
                            <input id="status" name="status" type="text" placeholder="Masukkan Status Anda" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-4 col-form-label">Role</label> 
                            <div class="col-8">
                            <input id="role" name="role" type="text" placeholder="Masukkan Role Anda" class="form-control">
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
<!-- !-- Content Wrapper. Contains page content --> -->
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
          <h3 class="card-title">Login</h3>

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
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
          <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
            <section class="" style="background-color: #eee;" >
              <div class="container">
                <div class="row d-flex align-items-center justify-content-center h-100">
                 
                  <div class="col-md-7 col-lg-5 col-xl-5 ">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                  <?= $this->session->flashdata('message'); ?>
                    <form class="users" method="post" action="<?= base_url('auth')?>">

                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Username</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg"  />
                            <?= form_error('username' , '<small class="text-danger pl-3">', '</small>');?>
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <?= form_error('password' , '<small class="text-danger pl-3">', '</small>');?>
                          </div>

                          <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <a href="#!">Forgot password?</a>
                            <a href="<?php echo base_url('auth/registration')?>">Register</a>
                          </div>

                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                            role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                          </a>
                          <br>
                    </form>
                  </div>
                </div>
              </div>
            </section>
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


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
          <h3 class="card-title">Registration</h3>

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
          <section class="" style="background-color: #eee;">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 ">
                    <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                            <form class="users" method="post" action="<?= base_url('auth/registration')?>">
                                  <div class="d-flex flex-row align-items-center mb-4">
                                      <div class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">Username</label>
                                      <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username');?>" />      
                                        <?= form_error('username' , '<small class="text-danger pl-3">', '</small>');?>                    
                                      </div>
                                  </div>

                                  <div class="d-flex flex-row align-items-center mb-4">
                                      <div class="form-outline flex-fill mb-0">
                                          <label class="form-label" for="form3Example4c">Password</label>
                                      <input type="password" id="password" name="password" class="form-control" />
                                      <?= form_error('password' , '<small class="text-danger pl-3">', '</small>');?>  
                                      </div>
                                  </div>

                                  <div class="d-flex flex-row align-items-center mb-4">
                                      <div class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example4cd">Email</label>
                                      <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email');?>" />
                                      <?= form_error('email' , '<small class="text-danger pl-3">', '</small>');?>  
                                      </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="role" class="col-4 col-form-label">Role</label> 
                                        <div class="form-outline flex-fill mb-0">
                                          <select id="role" name="role" class="custom-select">
                                            <option value="administrator">Administrator</option>
                                            <option value="public">Public</option>
                                          </select>
                                        </div>
                                      </div>
                                  </div> 
                                  <div class="text-center">
                                      <a class="medium" href="<?php echo base_url('auth')?>">Already have an account? Login!</a>
                                  </div>
                                  <br>
                                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                  </div>

                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
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



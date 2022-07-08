<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Kelola User</h3>
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
          <h3 class="card-title">Form Input User Mobil</h3>

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo form_open("users/save") ?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" placeholder="Masukan Username " type="text" value="<?php echo $obj_users->username ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukan Password " type="text" value="<?php echo $obj_users->password ?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukan Email" type="text" value="<?php echo $obj_users->email ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">No Ktp</label> 
    <div class="col-8">
      <input id="created_at" name="created_at" placeholder="Tambahkan Created At" type="text" value="<?php echo $obj_users->created_at?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_login" class="col-4 col-form-label">Last Login</label> 
    <div class="col-8">
      <input id="last_login" name="last_login" placeholder="Masukan Users Id " type="text" value="<?php echo $obj_users->last_login?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="status" name="status" placeholder="Masukan Status" type="text" value="<?php echo $obj_users->status?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="role" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <input id="role" name="role" placeholder="Masukan Role" type="text" value="<?php echo $obj_users->role?>"class="form-control">
    </div>
  </div>
<?php echo form_close()?>
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
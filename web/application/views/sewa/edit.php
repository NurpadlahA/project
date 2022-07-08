<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Kelola Sewa</h3>
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
          <h3 class="card-title">Form Input Sewa Mobil</h3>

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
<?php echo form_open("sewa/save") ?>
  <div class="form-group row">
    <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <input id="tanggal_mulai" name="tanggal_mulai" placeholder="Masukan Tanggal " type="date" value="<?php echo $obj_sewa->tanggal_mulai ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" placeholder="Masukan Tanggal " type="date" value="<?php echo $obj_sewa->tanggal_akhir ?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
    <div class="col-8">
      <input id="tujuan" name="tujuan" placeholder="Masukan Tujuan" type="text" value="<?php echo $obj_sewa->tujuan ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="noktp" class="col-4 col-form-label">No Ktp</label> 
    <div class="col-8">
      <input id="noktp" name="noktp" placeholder="Tambahkan No Ktp" type="text" value="<?php echo $obj_sewa->noktp?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">User Id</label> 
    <div class="col-8">
      <input id="users_id" name="users_id" placeholder="Masukan Users Id " type="text" value="<?php echo $obj_sewa->users_id?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil Id</label> 
    <div class="col-8">
      <input id="mobil_id" name="mobil_id" placeholder="Masukan Mobil Id" type="text" value="<?php echo $obj_sewa->mobil_id?>"class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
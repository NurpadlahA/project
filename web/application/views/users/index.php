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
          <h3 class="card-title">User Mobil</h3>

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
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function hapususers(pesan){
            if (confirm(pesan)) {
                return true;    
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($users as $usr){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $usr->username?></td>
                <td><?php echo $usr->email?></td>
                <td><?php echo $usr->role?></td>
                <td>
                    <a href="<?php echo base_url("index.php/users/detail/$usr->id")?>"
                    class="btn btn-primary btn-sm active">Detail</a>
                    <a href="<?php echo base_url("index.php/users/edit/$usr->id")?>"
                    class="btn btn-success btn-sm active">Edit</a>
                    <a href="<?php echo base_url("index.php/users/delete/$usr->id")?>"
                    class="btn btn-danger btn-sm active" onclick="return hapususers('Anda yakin ingin menghapus username <?php echo $usr->username?> ? ')" >Hapus</a>
                </td>
            </tr>

            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </br>
    <a href= <?php echo base_url("index.php/sewa/form") ?> class="btn btn-primary btn-lg active">Tambah</a>
</body>
</html>
</body>
</html>
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Detail Mobil</h1>
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
          <h3 class="card-title"></h3>
          <a href= <?php echo base_url("index.php/sewa/form") ?> class="btn btn-success btn-lg active">sewa</a></<br></br>
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
    <title>Detail Mobil</title>
</head>
<body>

    <table class="table table-striped table-hover ">
            <tr>
                <td rowspan="9">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$ml->nopol?>.jpg" alt="ini foto" width="300" />
                    <div class="mt-4">
                        <?php echo form_open_multipart('mobil/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="nopolmobil" value="<?=$ml->nopol?>"/>
                        <br/><br/>
                        <input type="submit" value="upload Foto" class="btn btn-primary" />
                        </form>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <td><?php echo $ml->id ?></td>
            </tr>
            <tr>
              <th>Nopol</th>
                <td><?php echo $ml->nopol?></td>
              </tr>
              <tr>
                <th>Warna</th>
                <td><?php echo $ml->warna?></td>
              </tr>
              <tr>
                <th>Biaya Sewa</th>
                <td><?php echo $ml->biaya_sewa?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <td><?php echo $ml->deskripsi?></td>
              </tr>
              <tr>
                <th>CC</th>
                <td><?php echo $ml->cc?></td>
              </tr>
              <tr>
                <th>Tahun</th>
                <td><?php echo $ml->tahun?></td>
              </tr>
              <tr>
                <th>ID Merek</th>
                <td><?php echo $ml->merk_id?></td>
              </tr>
    </table>
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

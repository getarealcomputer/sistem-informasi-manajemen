<?php echo $this->extend('main'); ?>
<?php echo $this->section('content'); ?>
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stasiun Broadcast</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stasiun Broadcast</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="">
                    <i class="fas fa-plus"></i> Tambah Data
                  </button>
                  <a href="<?= route_to('stb.create') ?>" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> Tambah Data
                  </a>
                </div> 
                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Stasiun</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($model as $row) : ?>
                    <tr>
                      <td><?php echo esc($row['nama_stasiun']); ?></td>
                      <td><?php echo esc($row['latitude']); ?></td>
                      <td><?php echo esc($row['longitude']); ?></td>
                      <td>
                        <a href="<?= route_to('stb.edit', $row['id']) ?>" class="btn btn-primary btn-rounded btn-condensed btn-sm"><span class="fa fa-pen"></span></a>
                        <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= route_to('stb.delete', $row['id']) ?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-trash"></span></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>

</div>
<?php echo $this->endSection(); ?>

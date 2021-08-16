<?php echo $this->extend('main'); ?>
<?php echo $this->section('content'); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><>Placeholder<></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><>Placeholder<></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                <?php
                    if(session()->has("success")){
                        ?>
                            <div class="alert alert-success">
                                <?= session("success") ?>
                            </div>
                        <?php
                    }
                ?>
            <div class="card">
              <div class="card-header">
                <div class="card-title">
                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="">
                    <i class="fas fa-plus"></i> Tambah Data
                  </button>
                  <a href="<?= route_to('users.add') ?>" class="btn btn-sm btn-success">
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
                      <th>Username</th>
                      <th>Passphrase</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php if ($model): ?>
                  <?php foreach($model as $row) : ?>
                    <tr>
                      <td><?php echo esc($row['username']); ?></td>
                      <td><?php echo esc($row['passphrase']); ?></td>
                      <td><?php echo esc($row['role']); ?></td>
                      <td><?php echo esc($row['email']); ?></td>
                      <td>
                        <a href="<?= route_to('users.edit', $row['id_user']) ?>" class="btn btn-primary btn-rounded btn-condensed btn-sm"><span class="fa fa-pen"></span></a>
                        <a href="<?= route_to('users.delete', $row['id_user']) ?>" class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-trash"></span></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else : ?>
                  <tr class="no-data">
                    <td class="text-warning" colspan=""> Belum ada data</td>
                  </tr>
                <?php endif; ?>  
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

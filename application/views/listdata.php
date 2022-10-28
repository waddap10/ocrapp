<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">List Data</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <a href="<?php echo base_url('/imageupload/'); ?>" class="info-box">
            <span class="info-box-icon bg-success elevation-1">
              <i class="fas fa-folder-plus"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Tambah Data</span>
            </div>
            <!-- /.info-box-content -->
          <a>
              <!-- /.info-box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Active Data</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-bordered table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>RT/RW</th>
                    <th>Desa/Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Agama</th>
                    <th>Status Kawin</th>
                    <th>Pekerjaan</th>
                    <th>Kewarganegaraan</th>
                    <th>Berlaku s/d</th>
                    <th>Golongan Darah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i = 0; $i < count($dataresult); ++$i) { ?>
                    <tr>
                      <th scope="row"><?php echo ($i + 1); ?></th>
                      <td>
                        <a href=<?php echo "editdata/" . $dataresult[$i]->id; ?> class="btn bg-warning">
                            <i class="fas fa-cog"></i>
                        </a>
                      </td>
                      <td>
                        <a href=<?php echo "deletedata/" . $dataresult[$i]->id; ?> class="btn bg-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                      </td>
                      <td><?php echo $dataresult[$i]->provinsi; ?></td>
                      <td><?php echo $dataresult[$i]->kota; ?></td>
                      <td><?php echo $dataresult[$i]->nik; ?></td>
                      <td><?php echo $dataresult[$i]->nama; ?></td>
                      <td><?php echo $dataresult[$i]->ttl; ?></td>
                      <td><?php echo $dataresult[$i]->gender; ?></td>
                      <td><?php echo $dataresult[$i]->alamat; ?></td>
                      <td><?php echo $dataresult[$i]->rtrw; ?></td>
                      <td><?php echo $dataresult[$i]->desa; ?></td>
                      <td><?php echo $dataresult[$i]->kec; ?></td>
                      <td><?php echo $dataresult[$i]->agama; ?></td>
                      <td><?php echo $dataresult[$i]->sts_kawin; ?></td>
                      <td><?php echo $dataresult[$i]->job; ?></td>
                      <td><?php echo $dataresult[$i]->nation; ?></td>
                      <td><?php echo $dataresult[$i]->exp; ?></td>
                      <td><?php echo $dataresult[$i]->goldar; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
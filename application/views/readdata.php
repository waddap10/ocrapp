<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <form action="<?php echo base_url('/insertdata'); ?>" method="post">
        <div class="container-fluid">
          <div class="form-header translate-middle">
            <h1>Pengecekan</h1>
            <img src="<?php echo base_url() . 'assets/images/' . $nama_image; ?>" class="img-fluid" alt="<?php echo base_url() . '/assets/images/' . $nama_image; ?>">
          </div>

          <hr>
          <div class="row align-items-start">
            <label class="col-2" for="provinsi"><b>provinsi</b></label>
            <input class="col-2" type="text" name="provinsi" id="provinsi" value="<?php echo $provinsi; ?>" required>
            <label class="col-2" for="kota"><b>kota</b></label>
            <input class="col-2" type="text" name="kota" id="kota" value="<?php echo $kota; ?>" required>
            <label class="col-2" for="nik"><b>nik</b></label>
            <input class="col-2" type="text" name="nik" id="nik" value="<?php echo $nik; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col-2" for="nama"><b>nama</b></label>
            <input class="col-2" type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required>
            <label class="col-2" for="ttl"><b>ttl</b></label>
            <input class="col-2" type="text" name="ttl" id="ttl" value="<?php echo $ttl; ?>" required>
            <label class="col-2" for="gender"><b>gender</b></label>
            <input class="col-2" type="text" name="gender" id="gender" value="<?php echo $gender; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col-2" for="alamat"><b>alamat</b></label>
            <input class="col-2" type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>" required>
            <label class="col-2" for="rtrw"><b>rtrw</b></label>
            <input class="col-2" type="text" name="rtrw" id="rtrw" value="<?php echo $rtrw; ?>" required>
            <label class="col-2" for="desa"><b>desa</b></label>
            <input class="col-2" type="text" name="desa" id="desa" value="<?php echo $desa; ?>" required>
          </div>

          <div class="row align-items-start">

            <label class="col-2" for="kec"><b>kec</b></label>
            <input class="col-2" type="text" name="kec" id="kec" value="<?php echo $kec; ?>" required>
            <label class="col-2" for="agama"><b>agama</b></label>
            <input class="col-2" type="text" name="agama" id="agama" value="<?php echo $agama; ?>" required>
            <label class="col-2" for="sts_kawin"><b>sts_kawin</b></label>
            <input class="col-2" type="text" name="sts_kawin" id="sts_kawin" value="<?php echo $sts_kawin; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col-2" for="job"><b>job</b></label>
            <input class="col-2" type="text" name="job" id="job" value="<?php echo $job; ?>" required>
            <label class="col-2" for="nation"><b>nation</b></label>
            <input class="col-2" type="text" name="nation" id="nation" value="<?php echo $nation; ?>" required>
            <label class="col-2" for="exp"><b>exp</b></label>
            <input class="col-2" type="text" name="exp" id="exp" value="<?php echo $exp; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col-2" for="goldar"><b>goldar</b></label>
            <input class="col-2" type="text" name="goldar" id="goldar" value="<?php echo $goldar; ?>" required>
            <label class="col-2" for="goldar"></label>
            <label class="col-2" for="goldar"></label>
            <label class="col-2" for="goldar"></label>
            <label class="col-2" for="goldar"></label>
          </div>
          <hr>
          <div class="row align-items-start">
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <input class="col-2 btn btn-success" type="submit" name="tambah" value="Tambah Data" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
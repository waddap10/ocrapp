<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <form action="<?php echo base_url() . 'updatedata/' . $id; ?>" method="post">
        <div class="container-fluid">
          <div id="form-header ">
            <h1>Edit Data</h1>
          </div>
          <hr>
          <div class="row align-items-start">
            <label class="col" for="provinsi"><b>provinsi</b></label>
            <input class="col" type="text" name="provinsi" id="provinsi" value="<?php echo $dataresult[0]->provinsi; ?>"
              required>
            <label class="col" for="kota"><b>kota</b></label>
            <input class="col" type="text" name="kota" id="kota" value="<?php echo $dataresult[0]->kota; ?>" required>
            <label class="col" for="nik"><b>nik</b></label>
            <input class="col" type="text" name="nik" id="nik" value="<?php echo $dataresult[0]->nik; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col" for="nama"><b>nama</b></label>
            <input class="col" type="text" name="nama" id="nama" value="<?php echo $dataresult[0]->nama; ?>" required>
            <label class="col" for="ttl"><b>ttl</b></label>
            <input class="col" type="text" name="ttl" id="ttl" value="<?php echo $dataresult[0]->ttl; ?>" required>
            <label class="col" for="gender"><b>gender</b></label>
            <input class="col" type="text" name="gender" id="gender" value="<?php echo $dataresult[0]->gender; ?>"
              required>
          </div>

          <div class="row align-items-start">
            <label class="col" for="alamat"><b>alamat</b></label>
            <input class="col" type="text" name="alamat" id="alamat" value="<?php echo $dataresult[0]->alamat; ?>"
              required>
            <label class="col" for="rtrw"><b>rtrw</b></label>
            <input class="col" type="text" name="rtrw" id="rtrw" value="<?php echo $dataresult[0]->rtrw; ?>" required>
            <label class="col" for="desa"><b>desa</b></label>
            <input class="col" type="text" name="desa" id="desa" value="<?php echo $dataresult[0]->desa; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col" for="kec"><b>kec</b></label>
            <input class="col" type="text" name="kec" id="kec" value="<?php echo $dataresult[0]->kec; ?>" required>
            <label class="col" for="agama"><b>agama</b></label>
            <input class="col" type="text" name="agama" id="agama" value="<?php echo $dataresult[0]->agama; ?>"
              required>
            <label class="col" for="sts_kawin"><b>sts_kawin</b></label>
            <input class="col" type="text" name="sts_kawin" id="sts_kawin"
              value="<?php echo $dataresult[0]->sts_kawin; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col" for="job"><b>job</b></label>
            <input class="col" type="text" name="job" id="job" value="<?php echo $dataresult[0]->job; ?>" required>
            <label class="col" for="nation"><b>nation</b></label>
            <input class="col" type="text" name="nation" id="nation" value="<?php echo $dataresult[0]->nation; ?>"
              required>
            <label class="col" for="exp"><b>exp</b></label>
            <input class="col" type="text" name="exp" id="exp" value="<?php echo $dataresult[0]->exp; ?>" required>
          </div>

          <div class="row align-items-start">
            <label class="col" for="goldar"><b>goldar</b></label>
            <input class="col" type="text" name="goldar" id="goldar" value="<?php echo $dataresult[0]->goldar; ?>"
              required>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
          </div>

          <hr>

          <div class="row align-items-start">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <input class="col btn btn-success" type="submit" name="simpan" value="Simpan Data" />
          </div>
        </div>
      </form>
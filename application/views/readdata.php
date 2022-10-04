<form action="<?php echo base_url('/insertdata'); ?>" method="post">
    <div class="container">
        <h1>Pengecekan</h1>
        <img src="<?php echo base_url() . 'assets/images/' . $nama_image; ?>" alt="<?php echo base_url() . '/assets/images/' . $nama_image; ?>">
        <hr>

        <label for="provinsi"><b>provinsi</b></label>
        <input type="text" name="provinsi" id="provinsi" value="<?php echo $provinsi; ?>" required>

        <label for="kota"><b>kota</b></label>
        <input type="text" name="kota" id="kota" value="<?php echo $kota; ?>" required>

        <label for="nik"><b>nik</b></label>
        <input type="text" name="nik" id="nik" value="<?php echo $nik; ?>" required>

        <label for="nama"><b>nama</b></label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required>

        <label for="ttl"><b>ttl</b></label>
        <input type="text" name="ttl" id="ttl" value="<?php echo $ttl; ?>" required>

        <label for="gender"><b>gender</b></label>
        <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" required>

        <label for="alamat"><b>alamat</b></label>
        <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>" required>

        <label for="rtrw"><b>rtrw</b></label>
        <input type="text" name="rtrw" id="rtrw" value="<?php echo $rtrw; ?>" required>

        <label for="desa"><b>desa</b></label>
        <input type="text" name="desa" id="desa" value="<?php echo $desa; ?>" required>

        <label for="kec"><b>kec</b></label>
        <input type="text" name="kec" id="kec" value="<?php echo $kec; ?>" required>

        <label for="agama"><b>agama</b></label>
        <input type="text" name="agama" id="agama" value="<?php echo $agama; ?>" required>

        <label for="sts_kawin"><b>sts_kawin</b></label>
        <input type="text" name="sts_kawin" id="sts_kawin" value="<?php echo $sts_kawin; ?>" required>

        <label for="job"><b>job</b></label>
        <input type="text" name="job" id="job" value="<?php echo $job; ?>" required>

        <label for="nation"><b>nation</b></label>
        <input type="text" name="nation" id="nation" value="<?php echo $nation; ?>" required>

        <label for="exp"><b>exp</b></label>
        <input type="text" name="exp" id="exp" value="<?php echo $exp; ?>" required>

        <label for="goldar"><b>goldar</b></label>
        <input type="text" name="goldar" id="goldar" value="<?php echo $goldar; ?>" required>

        <hr>

        <input type="submit" name="tambah" value="Tambah Data" />
    </div>
</form>
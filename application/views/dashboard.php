<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container-fluid">
    <div>
        <form action="<?php echo base_url('/imageupload/'); ?>">
            <input type="submit" value="Tambah Data" class="btn btn-success"/>
        </form>
    </div>
    <div>
        <div class="tableFixHead">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
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
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($dataresult); ++$i) { ?>
                        <tr>
                            <td><?php echo ($i + 1); ?></td>
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
                            <td><a href=<?php echo "editdata/".$dataresult[$i]->id;?> class="btn btn-success">Update</a></td>
                            <td><a href=<?php echo "deletedata/".$dataresult[$i]->id;?> class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>
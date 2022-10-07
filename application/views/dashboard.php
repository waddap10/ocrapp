<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container-fluid">
    <div class="button-add">
        <form action="<?php echo base_url('/imageupload/'); ?>">
            <input type="submit" value="Tambah Data" class="btn btn-success" />
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kota</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">RT/RW</th>
                    <th scope="col">Desa/Kelurahan</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Status Kawin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Kewarganegaraan</th>
                    <th scope="col">Berlaku s/d</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($dataresult); ++$i) { ?>
                    <tr>
                        <th scope="row"><?php echo ($i + 1); ?></th>
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
                        <td><a href=<?php echo "editdata/" . $dataresult[$i]->id; ?> class="btn btn-success">Update</a></td>
                        <td><a href=<?php echo "deletedata/" . $dataresult[$i]->id; ?> class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jadwal Asisten Laboratorium</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('jadwal/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <?php if ($jadwal != null) { ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Nama Lengkap</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php $x = 0;
                        foreach ($jadwal as $t) {
                            $x += 1 ?>
                            <tbody>
                                <tr>
                                    <td width='5%'><?php echo $x; ?></td>
                                    <td><?php echo $t['nm_hari']; ?></td>
                                    <td><?php echo $t['nm_jam']; ?></td>
                                    <td><?php echo $t['nm_asisten']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('jadwal/edit/' . $t['id_jadwal']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                        <?php if ($this->session->userdata("level") == 'admin') { ?>
                                            <a href="<?php echo site_url('jadwal/remove/' . $t['id_jadwal']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                        <?php } ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <label class="form-control">Tidak ada data! klik tambahkan untuk menambah data baru.</label>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kondisi</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('kondisi/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Kondisi</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = 0;
                    foreach ($kondisi as $t) {
                        $x += 1 ?>
                        <tr>
                            <td width="5%"><?php echo $x; ?></td>
                            <td width="80%"><?php echo $t['nm_kondisi']; ?></td>
                            <td width="15%">
                                <a href="<?php echo site_url('kondisi/edit/' . $t['id_kondisi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('kondisi/remove/' . $t['id_kondisi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
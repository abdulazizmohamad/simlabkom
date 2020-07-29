<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Satuan</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('satuan/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Satuan</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($satuan as $t) { ?>
                        <tr>
                            <td width="5%"><?php echo $x++; ?></td>
                            <td width="80%"><?php echo $t['nm_satuan']; ?></td>
                            <td width="15%">
                                <a href="<?php echo site_url('satuan/edit/' . $t['id_satuan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('satuan/remove/' . $t['id_satuan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="box-footer">
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
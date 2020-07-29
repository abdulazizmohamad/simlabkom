<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Merk Barang</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('merk/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($merk as $t) { ?>
                        <tr>
                            <td width="5%"><?php echo $x++; ?></td>
                            <td width="40%"><?php echo $t['nm_merk']; ?></td>
                            <td width="40%"><?php echo $t['nm_kategori']; ?></td>
                            <td width="15%">
                                <a href="<?php echo site_url('merk/edit/' . $t['id_merk']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('merk/remove/' . $t['id_merk']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
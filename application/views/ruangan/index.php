<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ruangan Laboratorium</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('ruangan/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nama Ruangan</th>
                        <th>Lokasi</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($ruangan as $t) {
                        ?>
                        <tr>
                            <td width="5%"><?php echo $x++; ?></td>
                            <td width="60%"><?php echo $t['nm_ruangan']; ?></td>
                            <td width="20%"><?php echo $t['lokasi_ruangan']; ?></td>
                            <td width="15%">
                                <a href="<?php echo site_url('ruangan/edit/' . $t['id_ruangan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('ruangan/remove/' . $t['id_ruangan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
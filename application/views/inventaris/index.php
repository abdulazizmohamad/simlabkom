<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">.:: Cari Inventaris ::.</h3>
                <div class="box-tools">
                </div>
            </div>
            </br>
            <div class="box-body">
                <?php echo form_open('inventaris/search') ?>
                <input type="text" aria-label="Search" placeholder="Search" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" id="search" />

                <?php echo form_close() ?>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Id Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Detail Barang</th>
                        <th>Lokasi</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($inventaris as $t) { ?>
                        <tr>
                            <td width='5%'><?php echo $x++; ?></td>
                            <td width='20%'><?php echo $t['id_inventaris']; ?></td>
                            <td width='30%'><?php echo $t['nm_barang']; ?></td>
                            <td><?php echo $t['ket_kondisi']; ?></td>
                            <td><?php echo $t['nm_ruangan']; ?></td>
                            <td width='15%'>
                                <a href="<?php echo site_url('inventaris/edit/' . $t['id_inventaris']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('inventaris/remove/' . $t['id_inventaris']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                <?php } ?></td>
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
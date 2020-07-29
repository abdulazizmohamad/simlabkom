<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Inventaris Barang Masuk</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('barang_masuk/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Id Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Detail Barang</th>
                        <th>Lokasi</th>
                        <th>Tgl. Masuk</th>
                        <th>Actions</th>
                    </tr>
                    <?php  $x = $this->uri->segment('3') + 1;
                    foreach ($barang_masuk as $t) { ?>
                        <tr>
                            <td width='5%'><?php echo $x++; ?></td>
                            <td><?php echo $t['id_inventaris']; ?></td>
                            <td><?php echo $t['nm_barang']; ?></td>
                            <td><?php echo $t['ket_kondisi']; ?></td>
                            <td><?php echo $t['nm_ruangan']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($t['tgl_masuk'])); ?></td>
                            <td width='15%'>
                                <a href="<?php echo site_url('barang_masuk/edit/' . $t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('barang_masuk/remove/' . $t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                <?php } ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="box-footer">
                    <div class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Barang</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('barang/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <?php echo form_open('barang/search') ?>
                <input type="text" aria-label="Search" placeholder="Search" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" id="search" />

                <?php echo form_close() ?>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th>Satuan</th>
                    <th>Stok</th>
                    <th>Lokasi Penyimpanan</th>
                    <th>Tgl Masuk</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php $x = $this->uri->segment('3') + 1;
            foreach ($barang as $t) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $x++; ?></td>
                        <td><?php echo $t['nm_barang']; ?></td>
                        <td><?php echo $t['nm_kategori']; ?></td>
                        <td><?php echo $t['nm_merk']; ?></td>
                        <td><?php echo $t['nm_satuan']; ?></td>
                        <td><?php echo $t['stok']; ?></td>
                        <td><?php echo $t['nm_ruangan']; ?></td>
                        <td><?php echo date("d-m-Y", strtotime($t['tgl_masuk'])); ?></td>
                        <td>
                            <a href="<?php echo site_url('barang/edit/' . $t['id_barang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"> Edit</span></a>
                            <?php if($this->session->userdata("level")=='admin') {?>
                            <a href="<?php echo site_url('barang/remove/' . $t['id_barang']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"> Hapus</span></a>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
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
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Barang Habis Pakai</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('barang_hp/add'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <?php echo form_open('barang_hp/search') ?>
                <input type="text" aria-label="Search" placeholder="Search" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" id="search" />

                <?php echo form_close() ?>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th>Satuan</th>
                    <th>Stok</th>
                    <th>Tgl Masuk</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php $x = $this->uri->segment('3') + 1;
            foreach ($barang_hp as $t) {
                ?>
                <tbody>
                    <tr>
                        <td width='5%'><?php echo $x++; ?></td>
                        <td><?php echo $t['nm_barang']; ?></td>
                        <td><?php echo $t['nm_kategori']; ?></td>
                        <td><?php echo $t['nm_merk']; ?></td>
                        <td><?php echo $t['nm_satuan']; ?></td>
                        <td><?php echo $t['stok']; ?></td>
                        <td><?php echo date("d-m-Y", strtotime($t['tgl_masuk'])); ?></td>

                        <td width="15%">
                            <a href="<?php echo site_url('barang_hp/edit/' . $t['id_barang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <?php if ($this->session->userdata("level") == 'admin') { ?>
                                <a href="<?php echo site_url('barang_hp/remove/' . $t['id_barang']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Temuan Barang</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('kehilangan/add'); ?>" class="btn btn-success btn-sm">Tambah Temuan Barang</a>
                </div>
            </div>
            <div class="box-body">
                <?php echo form_open('kehilangan/search') ?>
                <input type="text" aria-label="Search" placeholder="Search" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" id="search" />
                <?php echo form_close() ?>
            </div>
            <div class="box-body">
                <?php if ($kehilangan != null) { ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barang</th>
                                <th>Lokasi ditemukan</th>
                                <th>Ket. Barang</th>
                                <th>Tgl. Kehilangan</th>
                                <th>Penemu</th>
                                <th>Pengambilan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php $x = $this->uri->segment('3') + 1;
                            foreach ($kehilangan as $t) { ?>
                            <tbody>
                                <tr>
                                    <td width='5%'><?php echo $x++; ?></td>
                                    <td><?php echo $t['barang']; ?></td>
                                    <td><?php echo $t['nm_ruangan']; ?></td>
                                    <td width='25%'><?php echo $t['ket_barang']; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($t['tgl_kehilangan'])) ?></td>
                                    <td><?php echo $t['penemu']; ?></td>
                                    <td><?php echo $t['status']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('kehilangan/edit/' . $t['id_kehilangan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                        <?php if ($this->session->userdata("level") == 'admin') { ?>
                                            <a href="<?php echo site_url('kehilangan/remove/' . $t['id_kehilangan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                        <?php } ?> <a href="<?php echo site_url('kehilangan/ambil/' . $t['id_kehilangan']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-archive"></span> Ambil</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    Tidak ada Barang yang ditemukan...
                <?php } ?>
            </div>
            <div class="box-footer">
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
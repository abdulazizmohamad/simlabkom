<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Peminjaman Barang/Alat</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('peminjaman/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Barang</th>
                            <th>Jml</th>
                            <th>Tgl. Pinjam</th>
                            <th>Tgl. Kembali</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Admin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($peminjaman as $t) {  ?>
                        <tbody>
                            <tr>
                                <td width='5%'><?php echo $x++; ?></td>
                                <td><?php echo $t['nama_peminjam']; ?></td>
                                <td><?php echo $t['nm_barang']; ?></td>
                                <td class="align-middle"><?php echo $t['jumlah']; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($t['tgl_pinjam'])) ?></td>
                                <td><?php echo date("d-m-Y", strtotime($t['tgl_kembali'])) ?></td>
                                <td><?php echo $t['keterangan']; ?></td>
                                <td><?php echo $t['status']; ?></td>
                                <td><?php echo $t['nama']; ?></td>
                                <td width='15%'>
                                    <a href="<?php echo site_url('peminjaman/edit/' . $t['id_peminjaman']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <?php if ($this->session->userdata("level") == 'admin') { ?>
                                        <a href="<?php echo site_url('peminjaman/remove/' . $t['id_peminjaman']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                    <?php } ?></td>
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
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Perbaikan Barang</h3>
                <div class="box-tools">
                  </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>No.Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Tgl. Masuk</th>
                        <th>Tgl. Keluar</th>
                        <th>Gejala</th>
                        <th>Solusi</th>
                        <th>Teknisi</th>
                        <th>Perbaikan</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($perbaikan as $t) { ?>
                        <tr>
                            <td width='5%'><?php echo $x++; ?></td>
                            <td><?php echo $t['id_inventaris']; ?></td>
                            <td><?php echo $t['nm_barang']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($t['tgl_perawatan'])) ?></td>
                            <td><?php echo date("d-m-Y", strtotime($t['tgl_perbaikan'])) ?></td>
                            <td><?php echo $t['diagnosa']; ?></td>
                            <td><?php echo $t['solusi']; ?></td>
                            <td><?php echo $t['nm_asisten']; ?></td>
                            <td><span class="bg bg-primary ">  <?php echo $t['perbaikan'];?>  </span></td>
                            <td width='15%'>
                                <?php if ($t['perbaikan'] == 'belum') { ?>
                                    <a href="<?php echo site_url('perbaikan/add'); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span> Selesaikan</a>
                                    <a href="<?php echo site_url('perbaikan/edit/' . $t['id_perbaikan']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <?php if ($this->session->userdata("level") == 'admin') { ?>
                                        <a href="<?php echo site_url('perbaikan/remove/' . $t['id_perbaikan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-pencil"></span> Hapus</a>
                                    <?php }
                                } else if ($t['perbaikan'] == 'sudah') { ?>
                                    <a href="<?php echo site_url('perbaikan/edit/' . $t['id_perbaikan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <?php if ($this->session->userdata("level") == 'admin') { ?>
                                        <a href="<?php echo site_url('perbaikan/remove/' . $t['id_perbaikan']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span> Hapus</a>
                                <?php }
                                } ?>
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
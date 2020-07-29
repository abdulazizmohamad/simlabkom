<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lokasi perawatan Barang</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('perawatan/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>tanggal</th>
                      <!--  <th>Kondisi</th> -->
                        <th>Pengecek</th>
                        <th>Diagnosa</th>
                        <th>Perbaikan</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($perawatan as $t) { ?>
                        <tr>
                            <td><?php echo $x++; ?></td>
                            <td><?php echo $t['nm_barang']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($t['tgl_perawatan'])) ?></td>
                           <!--   <td><?php echo $t['nm_kondisi']; ?></td> -->
                            <td><?php echo $t['nama']; ?></td>
                            <td width="200" style="text-align:justify"><?php echo $t['diagnosa']; ?></td>
                            <?php if ($t['perbaikan'] == 'sudah') { ?>
                                <td style="text-align:center"><span class="label label-success"><?php echo $t['perbaikan']; ?></span></td>
                            <?php } else { ?>
                                <td style="text-align:center"><span class="label label-danger"><?php echo $t['perbaikan']; ?></span></td>
                            <?php } ?>
                            <td width="130">
                                <a href="<?php echo site_url('perawatan/edit/' . $t['id_perawatan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <?php if ($this->session->userdata("level") == 'admin') { ?>
                                    <a href="<?php echo site_url('perawatan/remove/' . $t['id_perawatan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
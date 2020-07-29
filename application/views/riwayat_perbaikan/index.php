<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Riwayat Perbaikan Barang</h2>
            </div><div class="box-body">
                <?php echo form_open('riwayat_perbaikan/search') ?>
                <p>Pencarian berdasarkan Kode Inventaris Barang / Nama Barang / Diagnosa kerusakan barang</p>
                <input type="text" aria-label="Search" placeholder="Search" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" id="search" />

                <?php echo form_close() ?>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Detail Barang</th>
                        <th>Diagnosa</th>
                        <th>Solusi</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
                    foreach ($riwayat_perbaikan as $t) { ?>
                        <tr>
                            <td width="5%" style="text-align: center"><?php echo $x++; ?></td>
                            <td width="20%"><?php echo $t['id_inventaris'].' - '.$t['nm_barang'].' berada di '.$t['nm_ruangan']; ?></td>
                            <td width="37%"><?php echo $t['diagnosa']; ?></td>
                            <td width="37%"><?php echo $t['solusi']; ?></td>
                           
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
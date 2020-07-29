<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Pengeluaran Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_pengeluaran/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pengeluaran</th>
						<th>Tgl Keluar</th>
						<th>Id Barang</th>
						<th>Petugas</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_pengeluaran as $t){ ?>
                    <tr>
						<td><?php echo $t['id_pengeluaran']; ?></td>
						<td><?php echo $t['tgl_keluar']; ?></td>
						<td><?php echo $t['id_barang']; ?></td>
						<td><?php echo $t['petugas']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_pengeluaran/edit/'.$t['id_pengeluaran']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_pengeluaran/remove/'.$t['id_pengeluaran']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

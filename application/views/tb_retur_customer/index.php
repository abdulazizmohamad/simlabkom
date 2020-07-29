<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Retur Customer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_retur_customer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Retur Customer</th>
						<th>Id Barang</th>
						<th>Tgl Retur Cust</th>
						<th>Nama Cust</th>
						<th>Nama Petugas</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_retur_customer as $t){ ?>
                    <tr>
						<td><?php echo $t['id_retur_customer']; ?></td>
						<td><?php echo $t['id_barang']; ?></td>
						<td><?php echo $t['tgl_retur_cust']; ?></td>
						<td><?php echo $t['nama_cust']; ?></td>
						<td><?php echo $t['nama_petugas']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_retur_customer/edit/'.$t['id_retur_customer']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_retur_customer/remove/'.$t['id_retur_customer']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Penerimaan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_penerimaan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pemasukan</th>
						<th>Tgl Masuk</th>
						<th>Penerima</th>
						<th>Kondisi Barang</th>
						<th>Id Barang</th>
						<th>Jumlah</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_penerimaan as $t){ ?>
                    <tr>
						<td><?php echo $t['id_pemasukan']; ?></td>
						<td><?php echo $t['tgl_masuk']; ?></td>
						<td><?php echo $t['penerima']; ?></td>
						<td><?php echo $t['kondisi_barang']; ?></td>
						<td><?php echo $t['id_barang']; ?></td>
						<td><?php echo $t['jumlah']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_penerimaan/edit/'.$t['id_pemasukan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_penerimaan/remove/'.$t['id_pemasukan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Asisten Laboratorium</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('asisten/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Id Asisten</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Foto</th>
						<th>Actions</th>
                    </tr>
                    <?php $x = $this->uri->segment('3') + 1;
					foreach($asisten as $t){ 
					 ?>
                    <tr>
						<td><?php echo $x++; ?></td>
						<td><?php echo $t['id_asisten']; ?></td>
						<td><?php echo $t['nm_asisten']; ?></td>
						<td><?php echo $t['addrs_asisten']; ?></td>
						<td><?php echo $t['telp_asisten']; ?></td>
                        <?php if($t['img']!=null) {?>
                        <td><img src="<?php echo base_url()."resources/img/".$t['img']; ?>" class="thumbnail" height="40px" width="40px"></td>
						<?php }else{ ?>
						<td></td>
                        <?php } ?>
						<td>
                            <a href="<?php echo site_url('asisten/edit/'.$t['id_asisten']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('asisten/remove/'.$t['id_asisten']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>    
            </div>
        </div>
    </div>
</div>

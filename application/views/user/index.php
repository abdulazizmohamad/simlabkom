<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Tambahkan</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Password</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>Foto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $t){ ?>
                    <tr>
						<td><?php echo $t['id_user']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['nama']; ?></td>
						<td><?php echo $t['username']; ?></td>
                        <td><?php echo $t['level']; ?></td>
                        <?php if($t['foto']!=null) {?>
                        <td><img src="<?php echo base_url()."resources/img/".$t['foto']; ?>" height="60px" width="60px"></td>
						<?php }else{ ?>
						<td></td>
                        <?php } ?>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$t['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$t['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

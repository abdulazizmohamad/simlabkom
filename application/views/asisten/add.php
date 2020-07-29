<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Asisten</h3>
            </div>
            <?php echo form_open_multipart('asisten/add'); ?>
          	<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_asisten" class="control-label">ID Asisten</label>
						<div class="form-group">
							<input type="text" name="id_asisten" value="<?php echo $this->input->post('id_asisten');?>" class="form-control" id="id_asisten" />
						</div>
					</div>
					<div class="col-md-8">
						<label for="nm_asisten" class="control-label">Nama Asisten</label>
						<div class="form-group">
							<input type="text" name="nm_asisten" value="<?php echo $this->input->post('nm_asisten'); ?>" class="form-control" id="nm_asisten" />
						</div>
					</div>
					<div class="col-md-10">
						<label for="addrs_asisten" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="addrs_asisten" value="<?php echo $this->input->post('addrs_asisten'); ?>" class="form-control" id="addrs_asisten" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="telp_asisten" class="control-label">No. Telepon</label>
						<div class="form-group">
							<input type="text" name="telp_asisten" value="<?php echo $this->input->post('telp_asisten'); ?>" class="form-control" id="telp_asisten" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="img" class="control-label">Foto</label>
						<div class="form-group">
							<input type="file" name="img" accept="image/*" value="<?php echo $this->input->post('img'); ?>" class="form-control" id="img" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
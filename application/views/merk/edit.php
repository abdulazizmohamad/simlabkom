<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Merk Barang</h3>
            </div>
			<?php echo form_open('merk/edit/'.$merk['id_merk']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-3">
						<label for="nm_merk" class="control-label">Merk</label>
						<div class="form-group">
							<input type="text" name="nm_merk" value="<?php echo ($this->input->post('nm_merk') ? $this->input->post('nm_merk') : $merk['nm_merk']); ?>" class="form-control" id="nm_merk" />
						</div>
					</div>
					<div class="col-lg-4">
						<label for="kategori">Kategori</label>
						<select class="form-control" id="id_kategori" name="id_kategori" required>
							<option value='' disabled selected>- Pilih Kategori -</option>
							<?php foreach ($kat as $la) {
								$selected = ($la['id_kategori'] == $merk['id_kategori']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_kategori']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_kategori']; ?> </option>
							<?php } ?>
						</select>
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
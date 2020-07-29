<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Satuan Edit</h3>
            </div>
			<?php echo form_open('satuan/edit/'.$satuan['id_satuan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nm_satuan" class="control-label">Satuan</label>
						<div class="form-group">
							<input type="text" name="nm_satuan" value="<?php echo ($this->input->post('nm_satuan') ? $this->input->post('nm_satuan') : $satuan['nm_satuan']); ?>" class="form-control" id="nm_satuan" />
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
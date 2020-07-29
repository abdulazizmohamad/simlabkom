<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kondisi</h3>
            </div>
            <?php echo form_open('kondisi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nm_kondisi" class="control-label">Kondisi</label>
						<div class="form-group">
							<input type="text" name="nm_kondisi" value="<?php echo $this->input->post('nm_kondisi'); ?>" class="form-control" id="nm_kondisi" />
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
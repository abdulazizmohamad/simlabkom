<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ruangan Laboratorium</h3>
            </div>
            <?php echo form_open('ruangan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nm_ruangan" class="control-label">Nama Ruangan</label>
						<div class="form-group">
							<input type="text" name="nm_ruangan" value="<?php echo $this->input->post('nm_ruangan'); ?>" class="form-control" id="nm_ruangan" />
						</div>
					</div>
					<div class="col-md-8">
						<label for="lokasi_ruangan" class="control-label">Lokasi Ruangan</label>
						<div class="form-group">
							<input type="text" name="lokasi_ruangan" value="<?php echo $this->input->post('lokasi_ruangan'); ?>" class="form-control" id="lokasi_ruangan" />
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
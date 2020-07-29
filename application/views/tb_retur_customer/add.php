<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Retur Customer Add</h3>
            </div>
            <?php echo form_open('tb_retur_customer/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_barang" class="control-label">Id Barang</label>
						<div class="form-group">
							<input type="text" name="id_barang" value="<?php echo $this->input->post('id_barang'); ?>" class="form-control" id="id_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_retur_cust" class="control-label">Tgl Retur Cust</label>
						<div class="form-group">
							<input type="text" name="tgl_retur_cust" value="<?php echo $this->input->post('tgl_retur_cust'); ?>" class="has-datepicker form-control" id="tgl_retur_cust" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_cust" class="control-label">Nama Cust</label>
						<div class="form-group">
							<input type="text" name="nama_cust" value="<?php echo $this->input->post('nama_cust'); ?>" class="form-control" id="nama_cust" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_petugas" class="control-label">Nama Petugas</label>
						<div class="form-group">
							<input type="text" name="nama_petugas" value="<?php echo $this->input->post('nama_petugas'); ?>" class="form-control" id="nama_petugas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
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
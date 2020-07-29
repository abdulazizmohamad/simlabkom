<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Pengeluaran Edit</h3>
            </div>
			<?php echo form_open('tb_pengeluaran/edit/'.$tb_pengeluaran['id_pengeluaran']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tgl_keluar" class="control-label">Tgl Keluar</label>
						<div class="form-group">
							<input type="text" name="tgl_keluar" value="<?php echo ($this->input->post('tgl_keluar') ? $this->input->post('tgl_keluar') : $tb_pengeluaran['tgl_keluar']); ?>" class="has-datepicker form-control" id="tgl_keluar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_barang" class="control-label">Id Barang</label>
						<div class="form-group">
							<input type="text" name="id_barang" value="<?php echo ($this->input->post('id_barang') ? $this->input->post('id_barang') : $tb_pengeluaran['id_barang']); ?>" class="form-control" id="id_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="petugas" class="control-label">Petugas</label>
						<div class="form-group">
							<input type="text" name="petugas" value="<?php echo ($this->input->post('petugas') ? $this->input->post('petugas') : $tb_pengeluaran['petugas']); ?>" class="form-control" id="petugas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tb_pengeluaran['keterangan']); ?></textarea>
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
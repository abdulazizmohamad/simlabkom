<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Penerimaan Edit</h3>
            </div>
			<?php echo form_open('tb_penerimaan/edit/'.$tb_penerimaan['id_pemasukan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tgl_masuk" class="control-label">Tgl Masuk</label>
						<div class="form-group">
							<input type="text" name="tgl_masuk" value="<?php echo ($this->input->post('tgl_masuk') ? $this->input->post('tgl_masuk') : $tb_penerimaan['tgl_masuk']); ?>" class="has-datepicker form-control" id="tgl_masuk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penerima" class="control-label">Penerima</label>
						<div class="form-group">
							<input type="text" name="penerima" value="<?php echo ($this->input->post('penerima') ? $this->input->post('penerima') : $tb_penerimaan['penerima']); ?>" class="form-control" id="penerima" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kondisi_barang" class="control-label">Kondisi Barang</label>
						<div class="form-group">
							<input type="text" name="kondisi_barang" value="<?php echo ($this->input->post('kondisi_barang') ? $this->input->post('kondisi_barang') : $tb_penerimaan['kondisi_barang']); ?>" class="form-control" id="kondisi_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_barang" class="control-label">Id Barang</label>
						<div class="form-group">
							<input type="text" name="id_barang" value="<?php echo ($this->input->post('id_barang') ? $this->input->post('id_barang') : $tb_penerimaan['id_barang']); ?>" class="form-control" id="id_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $tb_penerimaan['jumlah']); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tb_penerimaan['keterangan']); ?></textarea>
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
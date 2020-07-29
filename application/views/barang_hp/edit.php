<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Data Barang</h3>
			</div>
			<?php echo form_open_multipart('barang_hp/edit/' . $barang_hp['id_barang']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-4">
						<label for="kategori">Kategori</label>
						<select class="form-control" id="id_kategori" name="id_kategori">
							<?php foreach ($kat as $la) {
								$selected = ($la['id_kategori'] == $barang_hp['id_kategori']) ? 'selected' : '';
								?>
								<option value="<?php echo $la['id_kategori']; ?>" <?= $selected; ?> class=""><?= $la['nm_kategori']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="merk">Merk</label>
						<select class="form-control" id="id_merk" name="id_merk">
					
						</select>
					</div>
					<div class="col-md-4">
						<label for="nama_barang" class="control-label">Nama Barang</label>
							<input type="text" name="nm_barang" value="<?php echo ($this->input->post('nm_barang') ? $this->input->post('nm_barang') : $barang_hp['nm_barang']); ?>" class="form-control" id="nm_barang_hp" />
						
					</div>
					<div class="col-md-6">
						<label for="satuan">Satuan</label>
						<select class="form-control" name="id_satuan">
							<?php foreach ($satuan as $la) {
								$selected = ($la['id_satuan'] == $barang_hp['id_satuan']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_satuan']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_satuan']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4">
						<label for="tgl_masuk" class="control-label">Tgl. Masuk</label>
							<input type="date" name="tgl_masuk" value="<?php echo ($this->input->post('tgl_masuk') ? $this->input->post('tgl_masuk') : $barang_hp['tgl_masuk']); ?>" class="form-control">
						
					</div>
					<div class="col-md-1">
						<label for="stok" class="control-label">Stok</label>
							<input type="text" name="stok" value="<?php echo ($this->input->post('stok') ? $this->input->post('stok') : $barang_hp['stok']); ?>" class="form-control" id="stok" />
						
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
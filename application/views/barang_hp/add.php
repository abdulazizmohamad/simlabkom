<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambahkan Barang Habis Pakai</h3>
			</div>
			<?php echo form_open_multipart('barang_hp/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="form-group">
						<div class="col-md-4">
							<label for="kategori">Kategori</label>
							<select class="form-control" id="id_kategori" name="id_kategori" required>
								<option value='' disabled selected>- Pilih Kategori -</option>
								<?php foreach ($kat as $la) { ?>
									<option value="<?php echo $la['id_kategori']; ?>"><?php echo $la['nm_kategori']; ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-6">
							<label for="merk">Merk</label>
							<select class="form-control" id="id_merk" name="id_merk" required>
								<option value='' disabled selected>- Pilih Merk -</option>

							</select>
						</div>
						
					<div class="col-md-4">
						<label for="nama_barang" class="control-label">Nama Barang Habis Pakai</label>
						<input type="text" name="nm_barang" value="<?php echo $this->input->post('nama_barang'); ?>" class="form-control" id="nm_barang" />

					</div>
						<div class="col-md-6">
							<label for="satuan">Satuan</label>
							<select class="form-control" name="id_satuan" required>
								<option value='' disabled selected>- Pilih Satuan -</option>
								<?php foreach ($satuan as $la) { ?>
									<option value="<?php echo $la['id_satuan']; ?>"><?php echo $la['nm_satuan']; ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4">
							<label for="tgl_masuk" class="control-label">Tgl. Masuk</label>
							<div class="form-group">
								<input type="date" name="tgl_masuk" class="form-control">
							</div>
						</div>
						<div class="col-md-1">
							<label for="stok" class="control-label">Stok</label>
							<div class="form-group">
								<input type="text" name="stok" value="<?php echo $this->input->post('stok'); ?>" class="form-control" id="stok" />
							</div>
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

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambahkan Barang</h3>
			</div>
			<?php echo form_open_multipart('barang/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
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
						<select class="form-control" name="id_merk" id="id_merk" required>
							<option value='' disabled selected>- Pilih Merk -</option>

						</select>
					</div>
					<div class="col-md-12">
						<label for="nm_barang" class="control-label">Nama Barang/Tipe</label>
						<div class="form-group">
							<input type="text" required name="nm_barang" value="<?php echo $this->input->post('nama_barang'); ?>" class="form-control" id="nm_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_satuan" class="control-label">Satuan</label>
						<select class="form-control" name="id_satuan" required>
							<option value='' disabled selected>- Pilih Satuan -</option>
							<?php foreach ($satuan as $la) { ?>
								<option value="<?php echo $la['id_satuan']; ?>"><?php echo $la['nm_satuan']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="id_ruangan" class="control-label">Lokasi Barang</label>
						<select class="form-control" name="id_ruangan" required>
							<option value='' disabled selected>- Pilih Lokasi -</option>
							<?php foreach ($ruangan as $la) { ?>
								<option value="<?php echo $la['id_ruangan']; ?>"><?php echo $la['nm_ruangan']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="stok" class="control-label">Stok</label>
						<div class="form-group">
							<input type="text" required name="stok" value="<?php echo $this->input->post('stok'); ?>" class="form-control" id="stok" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_masuk" class="control-label">Tgl. Masuk</label>
						<div class="form-group">
							<input type="date" name="tgl_masuk" class="form-control" required>
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="file" name="foto" accept="image/*" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
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
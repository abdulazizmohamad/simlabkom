<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambahkan Barang Keluar</h3>
			</div>
			<?php echo form_open('barang_masuk/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-3">
						<label for="id_inventaris" class="control-label">Status</label>
						<div class="form-group">
							<select class="form-control" name="jenis_barang">
							<option value='' disabled selected>- Pilih Status -</option>
								<option value="1">Barang Masuk</option>
								<option value="2">Barang Habis Pakai</option>
								<option value="3">Inventaris</option>
							</select>
						</div>
					</div>
					<div class="col-md-12"></div>
					<div class="col-md-4">
						<label for="id_barang" class="control-label">Barang</label>
						<div class="form-group">
							<select class="form-control" name="id_barang">
							<option value='' disabled selected>- Pilih Barang -</option>
								<?php foreach ($barang as $la) { ?>
									<option value="<?php echo $la['id_barang']; ?>"><?php echo $la['nm_barang']; ?> </option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<label for="id_ruangan" class="control-label">Ruangan</label>
						<div class="form-group">
							<select class="form-control" name="id_ruangan">
							<option value='' disabled selected>- Pilih Ruangan -</option>
								<?php foreach ($ruangan as $la) { ?>
									<option value="<?php echo $la['id_ruangan']; ?>"><?php echo $la['nm_ruangan']; ?> </option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket_kondisi" class="control-label">Detail Barang</label>
						<div class="form-group">
							<textarea name="ket_kondisi" class="form-control" id="ket_kondisi"><?php echo $this->input->post('ket_kondisi'); ?></textarea>
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
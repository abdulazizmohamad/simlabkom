<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Data Sudah di Perbaiki</h3>
				<p><i>Menambahkan data Barang yang sudah selesai di perbaiki</i></p>
			</div>
			<?php echo form_open('perbaikan/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_perawatan">Perangkat Bermasalah</label>
						<select class="form-control" name="id_perawatan" required>
						<option value='' disabled selected>- Pilih Barang -</option>
							<?php foreach ($perawatan as $la) {  
								$selected = ($la['id_perawatan'] == $perawatan['id_perawatan']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_perawatan']; ?>"<?= $selected; ?> class=""><?php echo $la['id_inventaris'] . ' - ' . $la['nm_barang'] . ' - ' . $la['diagnosa']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="tgl_perbaikan">Tgl. Perbaikan</label>
						<input type="date" required class="form-control" name="tgl_perbaikan" value="<?php echo $this->input->post('tgl_perbaikan') ?>">
					</div>
					<div class="col-md-6">
						<label for="id_cek">Teknisi</label>
						<select class="form-control" name="id_cek" required>
							<option value='' disabled selected>- Pilih Teknisi -</option>
							<?php foreach ($asisten as $la) { ?>
								<option value="<?php echo $la['id_asisten']; ?>"><?php echo $la['nm_asisten']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="solusi" class="control-label">Solusi</label>
						<textarea name="solusi" required class="form-control" id="solusi"><?php echo $this->input->post('solusi') ?></textarea>

					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
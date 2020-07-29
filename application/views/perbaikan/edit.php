<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Data Perbaikan</h3>
			</div>
			<?php echo form_open('perbaikan/edit/' . $perbaikan['id_perbaikan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_perawatan">Perangkat Bermasalah</label>
						<select class="form-control" name="id_perawatan" required>
							<option value='' disabled selected>- Pilih Barang -</option>
							<?php foreach ($perawatan as $la) {  
								$selected = ($la['id_perawatan'] == $perbaikan['id_perawatan']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_perawatan']; ?>"<?= $selected; ?> class=""><?php echo $la['id_inventaris'] . ' - ' . $la['nm_barang'] . ' - ' . $la['diagnosa']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="tgl_perbaikan">Tgl. Perbaikan</label>
						<input type="date" name="tgl_perbaikan" value="<?php echo ($this->input->post('tgl_perbaikan') ? $this->input->post('tgl_perbaikan') : $perbaikan['tgl_perbaikan']); ?>" class="form-control">

					</div>
					<div class="col-md-6">
						<label for="id_cek">Pengecek</label>
						<select class="form-control" name="id_cek">
							<?php foreach ($asisten as $la) {
								$selected = ($la['id_asisten'] == $perbaikan['id_cek']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_asisten']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_asisten']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="solusi" class="control-label">Keterangan Kodisi</label>
						<textarea name="solusi" class="form-control" id="solusi"><?php echo ($this->input->post('solusi') ? $this->input->post('solusi') : $perbaikan['solusi']); ?></textarea>

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
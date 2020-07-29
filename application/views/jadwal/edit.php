<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Jadwal Asisten</h3>
			</div>
			<?php echo form_open('jadwal/editlembur/' . $jadwal['id_jadwal']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_asisten">Asisten</label>
						<select class="form-control" name="id_asisten">
							<?php foreach ($asisten as $la) {
								$selected = ($la['id_asisten'] == $jadwal['id_asisten']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_asisten']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_asisten']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="jam">Jam</label>
						<select class="form-control" name="jam">
							<?php foreach ($jam as $la) {
								$selected = ($la['id_jam'] == $jadwal['jam']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_jam']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_jam']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="hari">Hari</label>
						<select class="form-control" name="hari">
							<?php foreach ($hari as $la) {
								$selected = ($la['id_hari'] == $jadwal['hari']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_hari']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_hari']; ?> </option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-success">
				<i class="fa fa-check"></i> Simpan Perubahan
			</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>
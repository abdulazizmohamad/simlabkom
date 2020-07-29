<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Jadwal</h3>
			</div>
			<?php echo form_open('jadwal/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_asisten">Asisten</label>
						<select class="form-control" name="id_asisten">
							<?php foreach ($asisten as $la) { ?>
								<option value="<?php echo $la['id_asisten']; ?>"><?php echo $la['nm_asisten']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="jam">Jam</label>
						<select class="form-control" name="jam">
							<?php foreach ($jam as $la) { ?>
								<option value="<?php echo $la['id_jam']; ?>"><?php echo $la['nm_jam']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="hari">Hari</label>
						<select class="form-control" name="hari">
							<?php foreach ($hari as $la) { ?>
								<option value="<?php echo $la['id_hari']; ?>"><?php echo $la['nm_hari']; ?> </option>
							<?php } ?>
						</select>
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
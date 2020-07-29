<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Cetak Inventaris</h3>
			</div>
			<?php echo form_open('inventaris/cetak', array('target'=>'_blank', 'id'=>'myform')); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-10">
						<label for="id_ruangan" class="control-label">Ruangan</label>
						<div class="form-group">
							<select class="form-control" name="id_ruangan" required >
								<option value='' disabled selected>- Pilih Ruangan -</option>
								<option value="all">Semua Ruangan</option>
								<?php foreach ($ruangan as $la) { ?>
									<option value="<?php echo $la['id_ruangan']; ?>"><?php echo $la['nm_ruangan']; ?> </option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<label for="tgl_awal" class="control-label">Tanggal Awal</label>
						<div class="form-group">
							<input type="date" required name="tgl_awal" value="<?php echo $this->input->post('tgl_awal'); ?>" class="form-control" id="nm_barang" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="tgl_ahir" class="control-label">Tanggal Akhir</label>
						<div class="form-group">
							<input type="date" required name="tgl_ahir" value="<?php echo $this->input->post('tgl_ahir'); ?>" class="form-control">
						</div>
					</div>

				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Lihat
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
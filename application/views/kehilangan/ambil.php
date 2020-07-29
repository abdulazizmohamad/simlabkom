<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Pengambilan Barang Hilang</h3>
			</div>
			<?php echo form_open('kehilangan/ambil/' . $kehilangan['id_kehilangan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="barang" class="control-label">Barang</label>
						<div class="form-group">
							<input type="text" name="barang" value="<?php echo ($this->input->post('barang') ? $this->input->post('barang') : $kehilangan['barang']); ?>" class="form-control" id="barang" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasi" class="control-label">Lokasi</label>
						<input type="hidden" name="lokasi" value="<?php echo ($this->input->post('lokasi') ? $this->input->post('lokasi') : $kehilangan['lokasi']); ?>" class="form-control" id="lokasi" />
						<div class="form-group">
							<select class="form-control" disabled>
								<?php foreach ($ruangan as $la) {
									$selected = ($la['id_ruangan'] == $kehilangan['lokasi']) ? 'selected' : ''; ?>
									<option value="<?php echo $la['id_ruangan']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_ruangan']; ?> </option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket_barang" class="control-label">Ket. Barang</label>
						<div class="form-group">
							<input type="text" name="ket_barang" readonly value="<?php echo ($this->input->post('ket_barang') ? $this->input->post('ket_barang') : $kehilangan['ket_barang']); ?>" class="form-control" id="ket_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_kehilangan" class="control-label">Tgl. Kehilangan</label> <i>(MM-dd-yyyy)</i>
						<div class="form-group">
							<input type="date" name="tgl_kehilangan" readonly value="<?php echo  date('Y-m-d', strtotime($kehilangan['tgl_kehilangan'])); ?>" class="form-control" id="tgl_kehilangan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penemu" class="control-label">Penemu barang</label>
						<div class="form-group">
							<input type="text" name="penemu" readonly value="<?php echo ($this->input->post('penemu') ? $this->input->post('penemu') : $kehilangan['penemu']); ?>" class="form-control" id="penemu" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Sudah di Ambil
				</button>
				<a href="<?php echo site_url('kehilangan/cetak_form/' . $kehilangan['id_kehilangan']); ?>" class="btn btn-info"><span class="fa fa-print"></span> Cetak Form</a>

			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
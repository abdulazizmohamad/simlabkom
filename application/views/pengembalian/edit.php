<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Proses Pengembalian Barang</h3>
            </div>
			<?php echo form_open('pengembalian/edit/'.$pengembalian['id_peminjaman']); ?>
			<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-5">
						<label for="nama_peminjam" class="control-label">Nama Peminjam</label>
						<div class="form-group">
							<input type="text" name="nama_peminjam" value="<?php echo ($this->input->post('nama_peminjam') ? $this->input->post('nama_peminjam') : $pengembalian['nama_peminjam']); ?>" class="form-control" id="nama_peminjam"readonly/>
						</div>
					</div>
					<div class="col-md-12">
						<label for="id_barang">Barang</label>
							<input type="hidden" name="id_barang" value="<?php echo $pengembalian['id_barang']; ?>" class="form-control" id="id_barang"/>
							<select class="form-control" disabled>
								<?php foreach($barang as $la){ 
								$selected = ($la['id_barang'] == $pengembalian['id_barang']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_barang']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_barang']; ?>   </option>
						
									<?php } ?>
							</select>
					</div>
					<div class="col-md-6">
						<label for="kelas" class="control-label">Kelas</label>
						<div class="form-group">
						<input type="hidden" name="kelas" value="<?php echo $pengembalian['kelas']; ?>" class="form-control" id="id_barang"/>
							<select class="form-control" disabled>
								<?php foreach($kelas as $la){
									$selected = ($la['id_kelas'] == $pengembalian['kelas']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_kelas']; ?>"<?= $selected; ?> class=""><?php echo $la['nm_kelas']; ?>   </option>
								<?php } ?>
							</select>
							</div>
					</div>
					<div class="col-md-2">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $pengembalian['jumlah']); ?>" readonly class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_pinjam" class="control-label">Tgl. Peminjaman</label>
						<div class="form-group">
							<input type="date" name="tgl_pinjam" readonly value="<?php echo date('Y-m-d', strtotime($pengembalian['tgl_pinjam'])); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<select class="form-control" name="status" readonly>
									<option value="Pengembalian">Pengembalian</option>
							</select>
							</div>
					</div>
					<div class="col-md-10">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan"readonly class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $pengembalian['keterangan']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_kembali" class="control-label">Tgl. Pengembalian</label>
						(Sesuaikan dengan tanggal ketika barang di kembalikan)
						<div class="form-group">
							<input type="date" name="tgl_kembali" value="<?php echo date('Y-m-d', strtotime($pengembalian['tgl_kembali'])); ?>" class="form-control">
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
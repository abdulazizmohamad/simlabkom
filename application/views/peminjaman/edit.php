<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Peminjaman</h3>
            </div>
			<?php echo form_open('peminjaman/edit/'.$peminjaman['id_peminjaman']); ?>
			<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-5">
						<input type="hidden" name="id_peminjaman" value="<?php echo ($this->input->post('id_peminjaman') ? $this->input->post('id_peminjaman') : $peminjaman['id_peminjaman']); ?>" class="form-control" id="id_peminjaman" />
						
						<label for="nama_peminjam" class="control-label">Nama Peminjam</label>
						<div class="form-group">
							<input type="text" name="nama_peminjam" value="<?php echo ($this->input->post('nama_peminjam') ? $this->input->post('nama_peminjam') : $peminjaman['nama_peminjam']); ?>" class="form-control" id="nama_peminjam" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="id_barang">Barang</label>
							<select class="form-control" name="id_barang">
								<?php foreach($barang as $la){ 
								$selected = ($la['id_barang'] == $peminjaman['id_barang']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_barang']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_barang']; ?>   </option>
								<?php } ?>
							</select>
					</div>
					<div class="col-md-6">
						<label for="kelas" class="control-label">Kelas</label>
						<div class="form-group">
							<select class="form-control" name="kelas">
								<?php foreach($kelas as $la){
									$selected = ($la['id_kelas'] == $peminjaman['kelas']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_kelas']; ?>"<?= $selected; ?> class=""><?php echo $la['nm_kelas']; ?>   </option>
								<?php } ?>
							</select>
							</div>
					</div>
					<div class="col-md-2">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $peminjaman['jumlah']); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_pinjam" class="control-label">Tgl. Peminjaman</label>
						<div class="form-group">
							<input type="date" name="tgl_pinjam" value="<?php echo date('Y-m-d', strtotime($peminjaman['tgl_pinjam'])); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_kembali" class="control-label">Tgl. Pengembalian</label>
						<div class="form-group">
							<input type="date" name="tgl_kembali" value="<?php echo date('Y-m-d', strtotime($peminjaman['tgl_kembali'])); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<select class="form-control" name="status">
									<option value="Peminjaman">Peminjaman</option>
									<option value="Pengembalian">Pengembalian</option>
							</select>
							</div>
					</div>
					<div class="col-md-10">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $peminjaman['keterangan']); ?></textarea>
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambahkan Barang Hilang</h3>
            </div>
            <?php echo form_open('kehilangan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="barang" class="control-label">Barang</label>
						<div class="form-group">
							<input type="text" name="barang" value="<?php echo $this->input->post('barang'); ?>" class="form-control" id="barang" required />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasi" class="control-label">Lokasi</label>
						<div class="form-group">
							<select class="form-control" name="lokasi">
								<?php foreach($ruangan as $la){ ?>
									<option value="<?php echo $la['id_ruangan']; ?>"><?php echo $la['nm_ruangan']; ?>   </option>
								<?php } ?>
							</select>
							</div>
					</div>
					<div class="col-md-10">
						<label for="ket_barang" class="control-label">Keterangan Barang</label>
						(Ciri-ciri unik, warna, bentuk atau sesuatu yang bisa dijadikan bukti)
						<div class="form-group">
						<textarea name="ket_barang" class="form-control" id="ket_barang"><?php echo $this->input->post('ket_barang'); ?></textarea>
						</div>
					</div>
					<div class="col-md-4">
						<label for="tgl_kehilangan" class="control-label">Tgl. Kehilangan</label>
						<div class="form-group">
							<input type="date" name="tgl_kehilangan" value="<?php echo $this->input->post('tgl_kehilangan'); ?>" class="form-control" id="tgl_kehilangan" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="penemu" class="control-label">Penemu Barang</label>
						<div class="form-group">
						<input type="text" name="penemu" value="<?php echo $this->input->post('penemu'); ?>" class="form-control" id="penemu" required/>
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Inventaris Barang Masuk</h3>
            </div>
			<?php echo form_open('barang_masuk/edit/'.$barang_masuk['id']); ?>
			<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-7">
						<label for="id_inventaris" class="control-label">Id Inventaris</label>
						<div class="form-group">
							<input type="text" readonly name="id_inventaris" value="<?php echo ($this->input->post('id_inventaris') ? $this->input->post('id_inventaris') : $barang_masuk['id_inventaris']); ?>" class="form-control" id="id_inventaris" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_barang">Barang</label>
							<select class="form-control" name="id_barang">
								<?php foreach($barang as $la){ 
								$selected = ($la['id_barang'] == $barang_masuk['id_barang']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_barang']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_barang']; ?>   </option>
								<?php } ?>
							</select>
					</div>
					<div class="col-md-6">
						<label for="id_ruangan" class="control-label">Ruangan</label>
							<select class="form-control" name="id_ruangan">
								<?php foreach($ruangan as $la){ 
								$selected = ($la['id_ruangan'] == $barang_masuk['id_ruangan']) ? 'selected' : '';?>
									<option value="<?php echo $la['id_ruangan']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_ruangan']; ?>   </option>
								<?php } ?>
							</select>
					</div>
					<div class="col-md-6">
						<label for="ket_kondisi" class="control-label">Detail Barang</label>
						<div class="form-group">
							<textarea name="ket_kondisi" class="form-control" id="ket_kondisi"><?php echo ($this->input->post('ket_kondisi') ? $this->input->post('ket_kondisi') : $barang_masuk['ket_kondisi']); ?></textarea>
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
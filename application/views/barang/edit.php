<script type="text/javascript">
        $(document).ready(function(){
            //call function get data edit
            //load data for edit
             
 
            $('#id_kategori').change(function(){ 
                var id=$(this).val();
                var id_merk = "<?php echo $id_merk;?>";
                $.ajax({
                    url : "<?php echo site_url('barang/get_merk_kat');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
 
                        $('select[name="id_kat"]').empty();
 
                        $.each(data, function(key, value) {
                            if(id_kat==value.id_kat){
                                $('select[name="id_kat"]').append('<option value="'+ value.id_merk +'" selected>'+ value.nm_merk +'</option>').trigger('change');
                            }else{
                                $('select[name="id_kat"]').append('<option value="'+ value.id_merk +'">'+ value.nm_merk +'</option>');
                            }
                        });
 
                    }
                });
                return false;
            }); 
 
			var id = $('[name="id_kategori"]').val();
                $.ajax({
                    url : "<?php echo site_url('barang/get_merk_kat');?>",
                    method : "POST",
                    data :{id :id},
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_merk+'>'+data[i].nm_merk+'</option>';
                        }
                        $('#id_merk').html(html);
                    }
 
				});
        });
    </script>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Data Barang</h3>
			</div>
			<?php echo form_open_multipart('barang/edit/' . $barang['id_barang']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kategori">Kategori</label>
						<select class="form-control" name="id_kategori" id="id_kategori" required>
							<option value='' disabled selected>- Pilih Kategori -</option>
							<?php foreach ($kat as $la) {
								$selected = ($la['id_kategori'] == $barang['id_kategori']) ? 'selected' : '';
								?>
								<option value="<?php echo $la['id_kategori']; ?>" <?= $selected; ?> class=""><?= $la['nm_kategori']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6">
						<label for="merk">Merk</label>
						<select class="form-control" id="id_merk" name="id_merk" required>
							<option value='' disabled selected>- Pilih Merk -</option>
							
						</select>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label for="nama_barang" class="control-label">Nama Barang</label>
							<input type="text" required name="nm_barang" value="<?php echo ($this->input->post('nm_barang') ? $this->input->post('nm_barang') : $barang['nm_barang']); ?>" class="form-control" id="nm_barang" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label for="satuan">Satuan</label>
						<select class="form-control" name="id_satuan" required>
							<option value='' disabled selected>- Pilih Satuan -</option>
							<?php foreach ($satuan as $la) {
								$selected = ($la['id_satuan'] == $barang['id_satuan']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_satuan']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_satuan']; ?> </option>
							<?php } ?>
						</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ruangan">Lokasi Barang</label>
						<select class="form-control" name="id_ruangan" required>
							<option value='' disabled selected>- Pilih Lokasi -</option>
							<?php foreach ($ruangan as $la) { 
								$selected = ($la['id_ruangan'] == $barang['id_ruangan']) ? 'selected' : ''; ?>
								<option value="<?php echo $la['id_ruangan']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_ruangan']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-2">
						<label for="stok" class="control-label">Stok</label>
						<div class="form-group">
							<input type="text" required name="stok" value="<?php echo ($this->input->post('stok') ? $this->input->post('stok') : $barang['stok']); ?>" class="form-control" id="stok" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="tgl_masuk" class="control-label">Tgl. Masuk</label>
						<div class="form-group">
							<input type="date" required name="tgl_masuk" value="<?php echo ($this->input->post('tgl_masuk') ? $this->input->post('tgl_masuk') : $barang['tgl_masuk']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="file" name="foto" accept="image/*" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
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
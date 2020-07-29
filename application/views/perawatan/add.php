<script type="text/javascript">
        $(document).ready(function(){
            $('#id_ruangan').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('perawatan/get_inventaris');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_inventaris+'>'+data[i].id_inventaris+' - '+data[i].nm_barang+'</option>';
                        }
                        $('#id_inventaris').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambahkan Perangkat Bermasalah</h3>
            </div>
            <?php echo form_open('perawatan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_kondisi">Lokasi Inventaris</label>
							<select class="form-control" id="id_ruangan"name="id_ruangan" required>
							<option value='' disabled selected>- Pilih Lokasi -</option>
								<?php foreach($ruangan as $la){ ?>
									<option value="<?php echo $la['id_ruangan']; ?>"><?php echo $la['nm_ruangan']; ?>   </option>
									<?php } ?>
							</select>
					</div>
				  <div class="col-md-6">
						<label for="id_barang">Barang</label>
							<select class="form-control" id="id_inventaris"name="id_inventaris" required>
							<option value='' disabled selected>- Pilih Barang -</option>
								
							</select>
					</div>
					<div class="col-md-6">
						<label for="tgl_perawatan">Tgl. Perawatan</label>
							<input type="date" required class="form-control" name="tgl_perawatan" value="<?php echo $this->input->post('tgl_perawatan')?>">
					
					</div>
					<div class="col-md-6">
						<label for="id_cek">Petugas Pengecekan</label>
							<select class="form-control" name="id_cek" required>
							<option value='' disabled selected>- Pilih Petugas -</option>
								<?php foreach($user as $la){ ?>
									<option value="<?php echo $la['id_user']; ?>"><?php echo $la['nama']; ?>   </option>
									<?php } ?>
							</select>
					</div>
					<div class="col-md-6">
						<label for="diagnosa" class="control-label">Diagnosa Kerusakan</label>
							<textarea name="diagnosa" required class="form-control" id="diagnosa"><?php echo $this->input->post('diagnosa') ?></textarea>
					
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save</button>
					<a href="<?php echo site_url('perawatan/index/'); ?>" class="btn btn-danger"><span class="fa fa-bars"></span> Lihat</a>
            	
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
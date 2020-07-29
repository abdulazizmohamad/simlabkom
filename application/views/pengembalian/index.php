<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pengembalian Barang/Alat</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <?php if($pengembalian!=null) {?>
                <table class="table table-striped">
                 <thead>
                    <tr>
						<th>No.</th>
						<th>Nama Peminjam</th>
						<th>Nama Barang</th>
						<th>Jml</th>
						<th>Tgl. Pinjam</th>
						<th>Tgl. Kembali</th>
						<th>Keterangan</th>
						<th>Admin</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php $x = $this->uri->segment('3') + 1;
					foreach($pengembalian as $t){ ?>
                    <tbody>
                    <tr>
						<td class="align-middle"><?php echo $x++; ?></td>
						<td><?php echo $t['nama_peminjam']; ?></td>
						<td><?php echo $t['nm_barang']; ?></td>
						<td class="align-middle"><?php echo $t['jumlah']; ?></td>
						<td><?php echo date("d-m-Y", strtotime($t['tgl_pinjam'])) ?></td>
						<td><?php echo date("d-m-Y", strtotime($t['tgl_kembali'])) ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td><?php echo $t['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('pengembalian/edit/'.$t['id_peminjaman']); ?>" class="btn btn-success btn-xs"><span class="fa fa-pencil"></span> Pengembalian</a> 
                            
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
                    <?php }else{?>
                        <div class="col-md-12" >
						<label class="align-middle">Tidak ada transaksi Peminjaman Barang</label>
					    </div>
                    <?php } ?>                  
            </div>
            <div class="box-footer">
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>                
            </div>
        </div>
    </div>
</div>

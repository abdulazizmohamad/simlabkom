<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Jadwal Asisten</h3>
            </div>
            <?php echo form_open('jadwal/editlembur/' . $jadwal['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="hari">Hari</label>
                        <select class="form-control" name="hari">
                            <?php foreach ($hari as $la) {
                                $selected = ($la['id_hari'] == $jadwal['hari']) ? 'selected' : ''; ?>
                                <option value="<?php echo $la['id_hari']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_hari']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal">Tanggal</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" value="<?php echo  date('Y-m-d', strtotime($jadwal['tanggal'])); ?>" class="form-control" id="tanggal" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="hari">Jam Mulai</label>
                        <div class="form-group">
                            <input type="text" name="jam_mulai" value="<?php echo ($this->input->post('jam_mulai') ? $this->input->post('jam_mulai') : $jadwal['jam_mulai']); ?>" class="form-control" id="jam_mulai" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="hari">Jam Pulang</label>
                        <div class="form-group">
                            <input type="text" name="jam_pulang" value="<?php echo ($this->input->post('jam_pulang') ? $this->input->post('jam_pulang') : $jadwal['jam_pulang']); ?>" class="form-control" id="jam_pulang" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_asisten">Nama Petugas</label>
                        <select class="form-control" name="id_asisten">
                            <?php foreach ($asisten as $la) {
                                $selected = ($la['id_asisten'] == $jadwal['id_asisten']) ? 'selected' : ''; ?>
                                <option value="<?php echo $la['id_asisten']; ?>" <?= $selected; ?> class=""><?php echo $la['nm_asisten']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="hari">Rincian Kegiatan</label>
                        <div class="form-group">
                            <input type="text-area" name="kegiatan" value="<?php echo ($this->input->post('kegiatan') ? $this->input->post('kegiatan') : $jadwal['kegiatan']); ?>" class="form-control" id="kegiatan" required />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Simpan Perubahan
            </button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-header">Import Data Barang dari Excel</h3>
            </div>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <?php echo form_open_multipart('import/importFile');
                        if ($file) { ?>
                            <label><?php echo $file ?></label>
                        <?php } ?>
                        <input type="file" name="uploadFile" class="form-control" required accept=".xls, .xlsx" value="<?php echo $file; ?>" />
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-12">
                        <input type="submit" name="submit" value="Import" class="btn btn-info" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
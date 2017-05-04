<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Iskp_1 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">No RM <?php echo form_error('id_pasien') ?></label>
                <input type="text" class="form-control" name="id_pasien" id="id_pasien" placeholder="id_pasien" value="<?php echo $no_rm; ?>" readonly/>
            </div>
	    <div class="form-group">
                <label for="varchar">Gelang ID Masuk Bangsal <?php echo form_error('gelang_identitas_masuk_bangsal') ?></label>
                <input type="text" class="form-control" name="gelang_identitas_masuk_bangsal" id="gelang_identitas_masuk_bangsal" placeholder="gelang_identitas_masuk_bangsal" value="<?php echo $gelang_identitas_masuk_bangsal; ?>" />
            </div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <input type="hidden" name="id_iskp1" value="<?php echo $id_iskp1; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('iskp_1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
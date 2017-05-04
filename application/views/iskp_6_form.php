<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">iskp_6 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">No RM <?php echo form_error('id_pasien') ?></label>
                <input type="text" class="form-control" name="id_pasien" id="id_pasien" placeholder="id_pasien" value="<?php echo $no_rm; ?>" readonly/>
            </div>
	    <div class="form-group">
                <label for="varchar">Asesmen Resiko Jatuh <?php echo form_error('asesmen_resiko_jatuh') ?></label>
                <input type="text" class="form-control" name="asesmen_resiko_jatuh" id="asesmen_resiko_jatuh" placeholder="asesmen_resiko_jatuh" value="<?php echo $asesmen_resiko_jatuh; ?>" />
            </div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <input type="hidden" name="id_iskp6" value="<?php echo $id_iskp6; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('iskp_6') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
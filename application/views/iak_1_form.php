<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Iak_1 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">No. RM <?php echo form_error('no_rm') ?></label>
                <input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="no_rm" value="<?php echo $no_rm; ?>" readonly/>
            </div>
	    <div class="form-group">
                <label for="datetime">Jam Asesmen <?php echo form_error('jam_asesmen') ?></label>
                <input type="text" class="form-control" name="jam_asesmen" id="jam_asesmen" placeholder="jam_asesmen" value="<?php echo $jam_asesmen; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Asesmen 24 Jam <?php echo form_error('asesmen_24_jam') ?></label>
                <input type="text" class="form-control" name="asesmen_24_jam" id="asesmen_24_jam" placeholder="asesmen_24_jam" value="<?php echo $asesmen_24_jam; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">DPJP <?php echo form_error('dpjp') ?></label>
                <input type="text" class="form-control" name="dpjp" id="dpjp" placeholder="dpjp" value="<?php echo $dpjp; ?>" readonly/>
            </div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <input type="hidden" name="id_iak1" value="<?php echo $id_iak1; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('iak_1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
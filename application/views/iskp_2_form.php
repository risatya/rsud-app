<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">iskp_2 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">No RM <?php echo form_error('id_pasien') ?></label>
                <input type="text" class="form-control" name="id_pasien" id="id_pasien" placeholder="id_pasien" value="<?php echo $no_rm; ?>" readonly/>
            </div>
		<div class="form-group">
                <label for="varchar">Tanggal Jam Lapor DPJP <?php echo form_error('tanggal_jam_lapor_dpjp') ?></label>
                <input type="text" class="form-control" name="tanggal_jam_lapor_dpjp" id="tanggal_jam_lapor_dpjp" placeholder="tanggal_jam_lapor_dpjp" value="<?php echo $tanggal_jam_lapor_dpjp; ?>" />
            </div>
		<div class="form-group">
                <label for="varchar">Tanggal Jam TTD DPJP <?php echo form_error('tanggal_jam_ttd_dpjp') ?></label>
                <input type="text" class="form-control" name="tanggal_jam_ttd_dpjp" id="tanggal_jam_ttd_dpjp" placeholder="tanggal_jam_ttd_dpjp" value="<?php echo $tanggal_jam_ttd_dpjp; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Verbal Order 24 Jam <?php echo form_error('verbal_order_24_jam') ?></label>
                <input type="text" class="form-control" name="verbal_order_24_jam" id="verbal_order_24_jam" placeholder="verbal_order_24_jam" value="<?php echo $verbal_order_24_jam; ?>" />
            </div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <input type="hidden" name="id_iskp2" value="<?php echo $id_iskp2; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('iskp_2') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
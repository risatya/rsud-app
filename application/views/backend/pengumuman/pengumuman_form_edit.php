<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Pengumuman <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
			<label for="varchar">Bagian Ditujukan/Diteruskan <?php echo form_error('nama_pengumuman') ?></label>
			<input type="text" class="form-control" value="<?php echo $nama; ?>" readonly />
		</div>
		<div class="form-group">
			<label for="varchar">Nama Pengumuman <?php echo form_error('nama_pengumuman') ?></label>
			<input type="text" class="form-control" name="nama_pengumuman" id="nama_pengumuman" placeholder="nama_pengumuman" value="<?php echo $nama_pengumuman; ?>" />
		</div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control ckeditor" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
		<input type="hidden" name="id_member" value="<?php echo $id_member; ?>" />
	    <input type="hidden" name="id_pengumuman" value="<?php echo $id_pengumuman; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengumuman') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
    </div>
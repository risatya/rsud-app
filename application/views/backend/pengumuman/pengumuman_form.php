<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Pengumuman <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
			<label for="varchar">Nama Pengumuman <?php echo form_error('nama_pengumuman') ?></label>
			<input type="text" class="form-control" name="nama_pengumuman" id="nama_pengumuman" placeholder="nama_pengumuman" value="<?php echo $nama_pengumuman; ?>" />
		</div>
		<div class="form-group">
		<div class="col-md-4">
		<label>Bagian-Bagian Rumah Sakit <?php echo form_error('id_member') ?></label>
		<?php foreach ($member_data1 as $member1){ ?>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="id_member[]" value="<?php echo $member1->id_user ?>"><?php echo $member1->nama ?>
			</label>
		</div>
		<?php } ?>
		</div>
		<div class="col-md-4">
		<label></label>
		<?php foreach ($member_data2 as $member2){ ?>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="id_member[]" value="<?php echo $member2->id_user ?>"><?php echo $member2->nama ?>
			</label>
		</div>
		<?php } ?>
		</div>
		<div class="col-md-4">
		<label></label>
		<?php foreach ($member_data3 as $member3){ ?>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="id_member[]" value="<?php echo $member3->id_user ?>"><?php echo $member3->nama ?>
			</label>
		</div>
		<?php } ?>
		</div>
		</div>
		<div class="clear"></div>
	    
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control ckeditor" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <input type="hidden" name="id_pengumuman" value="<?php echo $id_pengumuman; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengumuman') ?>" class="btn btn-default">Kembali</a>
	</form>
    </div>
    </div>
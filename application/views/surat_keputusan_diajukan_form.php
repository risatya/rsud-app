<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Surat Diajukan/Diteruskan</h2>
        <form action="<?php echo $action; ?>" method="post">
		<div class="form-group">
                <label for="int">Nama SK</label>
                <input type="text" class="form-control" value="<?php echo $nama_sk; ?>" readonly/>
            </div>
	    <div class="form-group">
                <label for="int">No SK</label>
                <input type="text" class="form-control" value="<?php echo $no_sk; ?>" readonly/>
            </div>
		<div class="clear"></div>
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
	    <input type="hidden" name="id_surat" value="<?php echo $this->uri->segment(3); ?>" /> 
	    <input type="hidden" name="status" value="Surat Keputusan" /> 
	    <input type="hidden" name="id_sk" value="<?php echo $id_sk; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_keputusan') ?>" class="btn btn-default">Kembali</a>
	</form>
    </div>
    </div>
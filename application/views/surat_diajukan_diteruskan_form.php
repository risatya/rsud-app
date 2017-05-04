<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Surat_diajukan_diteruskan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">id_surat <?php echo form_error('id_surat') ?></label>
                <input type="text" class="form-control" name="id_surat" id="id_surat" placeholder="id_surat" value="<?php echo $id_surat; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">id_member <?php echo form_error('id_member') ?></label>
                <input type="text" class="form-control" name="id_member" id="id_member" placeholder="id_member" value="<?php echo $id_member; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">status <?php echo form_error('status') ?></label>
                <input type="text" class="form-control" name="status" id="status" placeholder="status" value="<?php echo $status; ?>" />
            </div>
	    <input type="hidden" name="id_surat_diajukan" value="<?php echo $id_surat_diajukan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_diajukan') ?>" class="btn btn-default">Cancel</a>
	</form>
   </div>
   </div>
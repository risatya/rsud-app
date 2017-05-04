<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Test <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
			<label for="varchar">nama <?php echo form_error('nama') ?></label>
			<input type="text" class="form-control" name="nama1" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
			<input type="hidden" name="tanggal1" value="1" />
		</div>
		<div class="form-group">
			<label for="varchar">nama <?php echo form_error('nama') ?></label>
			<input type="text" class="form-control" name="nama2" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
			<input type="hidden" name="tanggal2" value="2" />
		</div>
		<div class="form-group">
			<label for="varchar">nama <?php echo form_error('nama') ?></label>
			<input type="text" class="form-control" name="nama3" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
			<input type="hidden" name="tanggal3" value="3" />
		</div>
		<div class="form-group">
			<label for="varchar">nama <?php echo form_error('nama') ?></label>
			<input type="text" class="form-control" name="nama4" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
			<input type="hidden" name="tanggal4" value="4" />
		</div>
		<div class="form-group">
			<label for="varchar">nama <?php echo form_error('nama') ?></label>
			<input type="text" class="form-control" name="nama5" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
			<input type="hidden" name="tanggal5" value="5" />
		</div>
	    <input type="hidden" name="total_rows" value="5" /> 
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('test') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
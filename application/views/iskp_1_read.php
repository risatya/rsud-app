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
        <h2 style="margin-top:0px">Iskp_1 Read</h2>
        <table class="table">
	    <tr><td>id_pasien</td><td><?php echo $id_pasien; ?></td></tr>
	    <tr><td>gelang_identitas_masuk_bangsal</td><td><?php echo $gelang_identitas_masuk_bangsal; ?></td></tr>
	    <tr><td>keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('iskp_1') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </body>
</html>
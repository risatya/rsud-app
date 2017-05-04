<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Obat</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>id_surat</th>
		<th>id_member</th>
		<th>status</th>
		
            </tr><?php
            foreach ($surat_diajukan_data as $surat_diajukan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_diajukan->id_surat ?></td>
		      <td><?php echo $surat_diajukan->id_member ?></td>
		      <td><?php echo $surat_diajukan->status ?></td>t	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
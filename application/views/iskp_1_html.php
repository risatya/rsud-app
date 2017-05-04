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
        <h2>Laporan ISKP 1</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No RM</th>
		<th>Nama</th>
		<th>Gelang ID Masuk Bangsal</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($iskp_1_data as $iskp_1)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $iskp_1->no_rm ?></td>
		      <td><?php echo $iskp_1->nama ?></td>
		      <td><?php echo $iskp_1->gelang_identitas_masuk_bangsal ?></td>
		      <td><?php echo $iskp_1->keterangan ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
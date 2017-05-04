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
		<th>Asesmen Resiko Jatuh</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($iskp_6_data as $iskp_6)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $iskp_6->no_rm ?></td>
		      <td><?php echo $iskp_6->nama ?></td>
		      <td><?php echo $iskp_6->asesmen_resiko_jatuh ?></td>
		      <td><?php echo $iskp_6->keterangan ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
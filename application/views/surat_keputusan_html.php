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
		<th>nama_sk</th>
		<th>no_sk</th>
		<th>tanggal_sk</th>
		<th>tanggal_revisi</th>
		<th>status</th>
		<th>dokumen</th>
		
            </tr><?php
            foreach ($surat_keputusan_data as $surat_keputusan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_keputusan->nama_sk ?></td>
		      <td><?php echo $surat_keputusan->no_sk ?></td>
		      <td><?php echo $surat_keputusan->tanggal_sk ?></td>
		      <td><?php echo $surat_keputusan->tanggal_revisi ?></td>
		      <td><?php echo $surat_keputusan->status ?></td>
		      <td><?php echo $surat_keputusan->dokumen ?></td>t	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
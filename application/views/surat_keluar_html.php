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
		<th>indeks</th>
		<th>kode</th>
		<th>no_surat</th>
		<th>perihal</th>
		<th>tujuan_surat</th>
		<th>tgl_keluar</th>
		<th>lampiran</th>
		<th>diajukan_teruskan</th>
		<th>informasi_instruksi</th>
		<th>keterangan</th>
		<th>dokumen2</th>
		
            </tr><?php
            foreach ($surat_keluar_data as $surat_keluar)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_keluar->indeks ?></td>
		      <td><?php echo $surat_keluar->kode ?></td>
		      <td><?php echo $surat_keluar->no_surat ?></td>
		      <td><?php echo $surat_keluar->perihal ?></td>
		      <td><?php echo $surat_keluar->tujuan_surat ?></td>
		      <td><?php echo $surat_keluar->tgl_keluar ?></td>
		      <td><?php echo $surat_keluar->lampiran ?></td>
		      <td><?php echo $surat_keluar->diajukan_teruskan ?></td>
		      <td><?php echo $surat_keluar->informasi_instruksi ?></td>
		      <td><?php echo $surat_keluar->keterangan ?></td>
		      <td><?php echo $surat_keluar->dokumen2 ?></td>t	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
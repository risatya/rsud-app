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
		<th>no_urut</th>
		<th>tgl_penyelesaian</th>
		<th>perihal</th>
		<th>asal_surat</th>
		<th>tgl_masuk</th>
		<th>no_surat</th>
		<th>lampiran</th>
		<th>diajukan_teruskan</th>
		<th>informasi_instruksi</th>
		<th>keterangan</th>
		<th>dokumen</th>
		
            </tr><?php
            foreach ($surat_masuk_data as $surat_masuk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_masuk->indeks ?></td>
		      <td><?php echo $surat_masuk->kode ?></td>
		      <td><?php echo $surat_masuk->no_urut ?></td>
		      <td><?php echo $surat_masuk->tgl_penyelesaian ?></td>
		      <td><?php echo $surat_masuk->perihal ?></td>
		      <td><?php echo $surat_masuk->asal_surat ?></td>
		      <td><?php echo $surat_masuk->tgl_masuk ?></td>
		      <td><?php echo $surat_masuk->no_surat ?></td>
		      <td><?php echo $surat_masuk->lampiran ?></td>
		      <td><?php echo $surat_masuk->diajukan_teruskan ?></td>
		      <td><?php echo $surat_masuk->informasi_instruksi ?></td>
		      <td><?php echo $surat_masuk->keterangan ?></td>
		      <td><?php echo $surat_masuk->dokumen ?></td>t	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
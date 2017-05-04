<!doctype html>
<html>
    <head>
        <title>Laporan Excel ADP</title>
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
        <h2>Laporan Excel ADP</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Indeks</th>
				<th>Kode</th>
				<th>No Urut</th>
				<th>Tanggal Penyelesaian</th>
				<th>Perihal</th>
				<th>Asal Surat</th>
				<th>Tanggal Masuk</th>
				<th>No Surat</th>
				<th>Lampiran</th>
				<th>Diajukan/Diteruskan</th>
				<th>Informasi Instruksi</th>
				<th>Keterangan</th>
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
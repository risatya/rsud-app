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
        <h2>Obat</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Indeks</th>
				<th>Kode</th>
				<th>No Surat</th>
				<th>Perihal</th>
				<th>Tujuan Surat</th>
				<th>Tanggal Keluar</th>
				<th>Lampiran</th>
				<th>Diajukan / Diteruskan</th>
				<th>Informasi Instruksi</th>
				<th>Keterangan</th>
            </tr><?php
            foreach ($surat_keluar_adp_data as $surat_keluar_adp)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_keluar_adp->indeks ?></td>
		      <td><?php echo $surat_keluar_adp->kode ?></td>
		      <td><?php echo $surat_keluar_adp->no_surat ?></td>
		      <td><?php echo $surat_keluar_adp->perihal ?></td>
		      <td><?php echo $surat_keluar_adp->tujuan_surat ?></td>
		      <td><?php echo $surat_keluar_adp->tgl_keluar ?></td>
		      <td><?php echo $surat_keluar_adp->lampiran ?></td>
		      <td><?php echo $surat_keluar_adp->diajukan_teruskan ?></td>
		      <td><?php echo $surat_keluar_adp->informasi_instruksi ?></td>
		      <td><?php echo $surat_keluar_adp->keterangan ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
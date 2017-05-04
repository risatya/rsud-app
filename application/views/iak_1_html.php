<!doctype html>
<html>
    <head>
        <title>Word Import</title>
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
        <h2>Laporan IAK 1</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Tgl Masuk</th>
				<th>No. RM</th>
				<th>Nama</th>
				<th>Jam Masuk Bangsal</th>
				<th>Jam Asesmen Awal</th>
				<th>Asesmen 24 Jam</th>
				<th>DPJP</th>
				<th>Keterangan</th>		
            </tr>
			<?php foreach ($iak_1_data as $iak_1) { ?>
            <tr>
				<td><?php echo ++$start ?></td>
				<td><?php echo substr($iak_1->tgl_masuk, 0, 10) ?></td>
				<td><?php echo $iak_1->no_rm ?></td>
				<td><?php echo $iak_1->nama ?></td>
				<td><?php echo substr($iak_1->tgl_masuk, -8) ?></td>
				<td><?php echo $iak_1->jam_asesmen ?></td>
				<td><?php echo $iak_1->asesmen_24_jam ?></td>
				<td><?php echo $iak_1->dokter ?></td>
				<td><?php echo $iak_1->keterangan ?></td>
			</tr>
			<?php } ?>
        </table>
    </body>
</html>
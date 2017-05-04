<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
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
        <h2>Laporan ISKP 2</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No RM</th>
		<th>Nama</th>
		<th>Tanggal Jam Lapor DPJP</th>
		<th>Tanggal Jam TTD DPJP</th>
		<th>Verbal Order 24 Jam</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($iskp_2_data as $iskp_2)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $iskp_2->no_rm ?></td>
		      <td><?php echo $iskp_2->nama ?></td>
		      <td><?php echo $iskp_2->tanggal_jam_lapor_dpjp ?></td>
		      <td><?php echo $iskp_2->tanggal_jam_ttd_dpjp ?></td>
		      <td><?php echo $iskp_2->verbal_order_24_jam ?></td>
		      <td><?php echo $iskp_2->keterangan ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
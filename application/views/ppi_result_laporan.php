		<div id="page-wrapper" >
            <div id="page-inner">
        <div class="row">
			<div class="col-md-12">
			<h2>Laporan PPI 
			<?php 
			if($b == 1){
				echo 'Januari';
			}elseif($b == 2){
				echo 'Februari';
			}elseif($b == 3){
				echo 'Maret';
			}elseif($b == 4){
				echo 'April';
			}elseif($b == 5){
				echo 'Mei';
			}elseif($b == 6){
				echo 'Juni';
			}elseif($b == 7){
				echo 'Juli';
			}elseif($b == 8){
				echo 'Agustus';
			}elseif($b == 9){
				echo 'September';
			}elseif($b == 10){
				echo 'Oktober';
			}elseif($b == 11){
				echo 'November';
			}elseif($b == 12){
				echo 'Desember';
			}
			?>
			 - <?php echo $t ?></h2>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px">
            <div class="col-md-6">
                <?php echo anchor(site_url('ppi'),'Kembali', 'class="btn btn-primary"'); ?>
            </div>

        </div>		
        <table class="table table-bordered" style="margin-bottom: 10px">
		<tr>
			<td>
			Nama Infeksi
			</td>
			<!--looping jumlah hari bulan-->
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { 
				echo "<td>".$i."</td>";
			} 
			?>
			<!--end looping jumlah hari bulan-->
		</tr>
		
		<tr>
			<td>Jumlah Pasien</td>
			<?php foreach ($ppi_data1 as $data1) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data1->id_nilai)?>"><?php echo $data1->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Dekubitus</td>
			<?php foreach ($ppi_data2 as $data2) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data2->id_nilai)?>"><?php echo $data2->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Tirah Baring</td>
			<?php foreach ($ppi_data3 as $data3) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data3->id_nilai)?>"><?php echo $data3->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Plebitis</td>
			<?php foreach ($ppi_data4 as $data4) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data4->id_nilai)?>"><?php echo $data4->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang IV Line</td>
			<?php foreach ($ppi_data5 as $data5) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data5->id_nilai)?>"><?php echo $data5->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>ISK</td>
			<?php foreach ($ppi_data6 as $data6) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data6->id_nilai)?>"><?php echo $data6->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang DC</td>
			<?php foreach ($ppi_data7 as $data7) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data7->id_nilai)?>"><?php echo $data7->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>ILO (Infeksi Luka Operasi)</td>
			<?php foreach ($ppi_data8 as $data8) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data8->id_nilai)?>"><?php echo $data8->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Operasi Bersih / Tercemar</td>
			<?php foreach ($ppi_data9 as $data9) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data9->id_nilai)?>"><?php echo $data9->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Ventilator Associated Pneumonia / VAP</td>
			<?php foreach ($ppi_data10 as $data10) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data10->id_nilai)?>"><?php echo $data10->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang Ventilator</td>
			<?php foreach ($ppi_data11 as $data11) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data11->id_nilai)?>"><?php echo $data11->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Hospital Acquired Pneumonia / HAP</td>
			<?php foreach ($ppi_data12 as $data12) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data12->id_nilai)?>"><?php echo $data12->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Pasien Beresiko HAP</td>
			<?php foreach ($ppi_data13 as $data13) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data13->id_nilai)?>"><?php echo $data13->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Infeksi Aliran Darah Primer</td>
			<?php foreach ($ppi_data14 as $data14) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data14->id_nilai)?>"><?php echo $data14->nilai ?></a></td>
			<?php }	?>
		</tr>
		<tr>
			<td>Diare</td>
			<?php foreach ($ppi_data15 as $data15) { ?>
				<td><a href="<?php echo site_url('ppi/update/'.$data15->id_nilai)?>"><?php echo $data15->nilai ?></a></td>
			<?php }	?>
		</tr>
		</table>
	
		
        <div class="row">
            <div class="col-md-6">
			<div class="col-md-6">
				<?php echo anchor(site_url('ppi/word/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Word', 'class="btn btn-primary"'); ?>
			</div>
			</div>
            <div class="col-md-6 text-right">
				
            </div>
        </div>
		</form>
        </div>
        </div>
		
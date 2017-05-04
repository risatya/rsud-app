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
		<form method="POST" action="<?php echo site_url('ppi/create_action');?>">
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
			<?php
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date('d');		
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0" size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				
				<input type="hidden" name="tanggal_a<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Dekubitus</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_b<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Tirah Baring</td>
			<?php
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_c<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Plebitis</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_d<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang IV Line</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_e<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>ISK</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_f<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang DC</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_g<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>ILO (Infeksi Luka Operasi)</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_h<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Operasi Bersih / Tercemar</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_i<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Ventilator Associated Pneumonia / VAP</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_j<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Terpasang Ventilator</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_k<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Hospital Acquired Pneumonia / HAP</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_l<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Pasien Beresiko HAP</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_m<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Infeksi Aliran Darah Primer</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_n<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		<tr>
			<td>Diare</td>
			<?php  
			$loop = cal_days_in_month(CAL_GREGORIAN, $b, $t);
			for ($i=1; $i < $loop+1; $i++) { ?>
			<?php if($i == $tgl OR $i<$tgl){ ?>
				<td><input type="text" name="nilai_a<?php echo $i?>" value="0"  size="1"></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }	?>
				<input type="hidden" name="tanggal_o<?php echo $i?>" value="<?php echo $i?>">
			<?php }	?>
		</tr>
		</table>
	
		
        <div class="row">
            <div class="col-md-6">

			</div>
            <div class="col-md-6 text-right">
				<input type="hidden" name="infeksi_1" value="1">
				<input type="hidden" name="infeksi_2" value="2">
				<input type="hidden" name="infeksi_3" value="3">
				<input type="hidden" name="infeksi_4" value="4">
				<input type="hidden" name="infeksi_5" value="5">
				<input type="hidden" name="infeksi_6" value="6">
				<input type="hidden" name="infeksi_7" value="7">
				<input type="hidden" name="infeksi_8" value="8">
				<input type="hidden" name="infeksi_9" value="9">
				<input type="hidden" name="infeksi_10" value="10">
				<input type="hidden" name="infeksi_11" value="11">
				<input type="hidden" name="infeksi_12" value="12">
				<input type="hidden" name="infeksi_13" value="13">
				<input type="hidden" name="infeksi_14" value="14">
				<input type="hidden" name="infeksi_15" value="15">
				<input type="hidden" name="bangsal" value="<?php echo $_POST['bangsal']; ?>">
				<input type="hidden" name="bulan" value="<?php echo $_POST['bulan']; ?>">
				<input type="hidden" name="tahun" value="<?php echo $_POST['tahun']; ?>">
				<input type="hidden" name="total_rows" value="<?php echo $loop; ?>">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </div>
        </div>
		</form>
        </div>
        </div>
		
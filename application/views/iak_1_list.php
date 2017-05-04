<div id="page-wrapper" >
		<div id="page-inner">
		<div class="row">
		<div class="col-md-12">
		<h3>Data Bangsal <?php echo $_POST['bangsal']?> - <?php echo $_POST['bulan']?> <?php echo $_POST['tahun']?> </h3>
		</div>
		</div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                
            </div>
        </div>
		<form method="POST" action="<?php echo site_url('iak_1/create_action');?>">
		<input type="hidden" name="bangsal" value="<?php echo $_POST['bangsal']?>"/>
		<input type="hidden" name="bulan" value="<?php echo $_POST['bulan']?>"/>
		<input type="hidden" name="tahun" value="<?php echo $_POST['tahun']?>"/>
		
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Data Bangsal <?php echo $_POST['bangsal']?> - <?php echo $_POST['bulan']?> <?php echo $_POST['tahun']?> 
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#iak1" data-toggle="tab">IAK 1</a>
							</li>
							<li class=""><a href="#iskp1" data-toggle="tab">ISKP 1</a>
							</li>
							<li class=""><a href="#iskp2" data-toggle="tab">ISKP 2</a>
							</li>
							<li class=""><a href="#iskp6" data-toggle="tab">ISKP 6</a>
							</li>
						</ul>
						<hr>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="iak1">
								<h4>IAK 1. Asesmen Awal Medis Pasien Rawat Inap Dalam 24 Jam</h4>
								<!--IAK 1 Start-->
								<table class="table table-bordered" style="margin-bottom: 10px">
									<tr>
										<th>No</th>
								<th>Tgl Masuk</th>
								<th>No. RM</th>
								<th>Nama</th>
								<th>Bangsal</th>
								<th>Jam Masuk Bangsal</th>
								<th>Jam Asesmen Awal<br/>
								<small>(jam:menit)</small></th>
								<th>Asesmen 24 Jam<br/>
								<small>ya/tidak</small></th>
								<th>DPJP</th>
								<th>Keterangan</th>
								<th>Status</th>
									</tr>
									<?php
									foreach ($list as $row)
									{
										?>
										<tr>
									<td><?php echo ++$start ?></td>
									
									<td><?php echo substr($row->tgl_masuk, 0, 10) ?></td>
									
									<td><?php echo $row->no_rm ?></td>
									<td><?php echo $row->nama ?></td>
									<td><?php echo $row->bangsal ?></td>
									<td><?php echo substr($row->tgl_masuk, -8) ?></td>
									<td><input type="text" class="form-control" name="jam_asesmen<?php echo ++$start10; ?>" placeholder="Jam Asesmen Awal" value=""/></td>
									<td>
									<input type="radio" name="asesmen_24_jam<?php echo ++$start11; ?>" id="optionsRadios1" value="yes"/>Ya<br/>
									<input type="radio" name="asesmen_24_jam<?php echo ++$start14; ?>" id="optionsRadios1" value="no"/>Tidak
									</td>
									<td><?php echo $row->dokter  ?></td>
									<td><input type="text" class="form-control" name="keterangan<?php echo ++$start13; ?>"" placeholder="Keterangan" value=""/></td>
									<td>
									<center>
									<?php if(cek($row->tgl_masuk,$row->no_rm)==NULL){?>
									<img src="<?php echo base_url(); ?>assets/backend/img/wrong.jpg" width="20" height="20" alt=""/>
									<?php }else{ ?>
									<img src="<?php echo base_url(); ?>assets/backend/img/right.jpg" width="20" height="20" alt=""/>
									<?php ;} ?>
									</center>
									</td>
									<input type="hidden" name="no_rm<?php echo ++$start2; ?>" value="<?php echo $row->no_rm ?>"/>
									<input type="hidden" name="tgl_masuk<?php echo ++$start3; ?>" value="<?php echo $row->tgl_masuk ?>"/>
									<input type="hidden" name="tgl_lahir<?php echo ++$start4; ?>" value="<?php echo $row->tgl_lahir ?>"/>
									<input type="hidden" name="nama<?php echo ++$start5; ?>" value="<?php echo $row->nama ?>"/>
									<input type="hidden" name="bangsal<?php echo ++$start6; ?>" value="<?php echo $row->bangsal ?>"/>
									<input type="hidden" name="dokter<?php echo ++$start7; ?>" value="<?php echo $row->dokter ?>"/>
									<input type="hidden" name="bulan<?php echo ++$start8; ?>" value="<?php echo $row->bulan ?>"/>
									<input type="hidden" name="tahun<?php echo ++$start9; ?>" value="<?php echo $row->tahun ?>"/>
									<input type="hidden" name="dpjp<?php echo ++$start12; ?>" value="<?php echo $row->dokter ?>"/>
									
								</tr>
										<?php
									}
									?>
								</table>
								<!--IAK 1 End-->
							</div>
							<div class="tab-pane fade" id="iskp1">
								<h4>ISKP 1. Jumlah Pasien Rawat Inap Dengan Gelang Identitas</h4>
								<!--ISKP 1 Start-->
								<table class="table table-bordered" style="margin-bottom: 10px">
									<tr>
										<th>No</th>
								<th>Tgl Masuk</th>
								<th>No. RM</th>
								<th>Nama</th>
								<th>Bangsal</th>
								<th>Gelang ID Masuk Bangsal<br/>
								<small>ya/tidak</small></th>
								<th>Keterangan</th>
								<th>Status</th>
									</tr><?php
									foreach ($list as $row)
									{
										?>
										<tr>
									<td><?php echo ++$start ?></td>
									<td><?php echo substr($row->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $row->no_rm ?></td>
									<td><?php echo $row->nama ?></td>
									<td><?php echo $row->bangsal ?></td>
									<td>
									<input type="radio" name="gelang_identitas_masuk_bangsal<?php echo ++$start26; ?>" id="optionsRadios1" value="yes"/>Ya &nbsp&nbsp
									<input type="radio" name="gelang_identitas_masuk_bangsal<?php echo ++$start27; ?>" id="optionsRadios1" value="no"/>Tidak
									</td>
									<td><input type="text" class="form-control" name="keterangan1_<?php echo ++$start28; ?>"" placeholder="Keterangan"/></td>
									<td>
									<center>
									<?php if(cek($row->tgl_masuk,$row->no_rm)==NULL){?>
									<img src="<?php echo base_url(); ?>assets/backend/img/wrong.jpg" width="20" height="20" alt=""/>
									<?php }else{ ?>
									<img src="<?php echo base_url(); ?>assets/backend/img/right.jpg" width="20" height="20" alt=""/>
									<?php ;} ?>
									</center>
									</td>
									<input type="hidden" name="no_rm<?php echo ++$start17; ?>" value="<?php echo $row->no_rm ?>"/>
									<input type="hidden" name="tgl_masuk<?php echo ++$start18; ?>" value="<?php echo $row->tgl_masuk ?>"/>
									<input type="hidden" name="tgl_lahir<?php echo ++$start19; ?>" value="<?php echo $row->tgl_lahir ?>"/>
									<input type="hidden" name="nama<?php echo ++$start20; ?>" value="<?php echo $row->nama ?>"/>
									<input type="hidden" name="bangsal<?php echo ++$start21; ?>" value="<?php echo $row->bangsal ?>"/>
									<input type="hidden" name="dokter<?php echo ++$start22; ?>" value="<?php echo $row->dokter ?>"/>
									<input type="hidden" name="bulan<?php echo ++$start23; ?>" value="<?php echo $row->bulan ?>"/>
									<input type="hidden" name="tahun<?php echo ++$start24; ?>" value="<?php echo $row->tahun ?>"/>
									<input type="hidden" name="dpjp<?php echo ++$start25; ?>" value="<?php echo $row->dokter ?>"/>
									
								</tr>
										<?php
									}
									?>
								</table>
								<!--ISKP 1 End-->
							</div>
							<div class="tab-pane fade" id="iskp2">
								<h4>ISKP 2. Verbal Order Ditangani Oleh Dokter Dalam 24 Jam</h4>
								<!--ISKP 2 Start-->
								<table class="table table-bordered" style="margin-bottom: 10px">
									<tr>
										<th>No</th>
								<th>Tgl Masuk</th>
								<th>No. RM</th>
								<th>Nama</th>
								<th>Bangsal</th>
								<th>Tanggal Jam Lapor DPJP</th>
								<th>Tanggal Jam TTD DPJP</th>
								<th>Verbal Order 24 Jam<br/>
								<small>ya/tidak</small></th>
								<th>Keterangan</th>
								<th>Status</th>
									</tr><?php
									foreach ($list as $row)
									{
										?>
										<tr>
									<td><?php echo ++$start ?></td>
									<td><?php echo substr($row->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $row->no_rm ?></td>
									<td><?php echo $row->nama ?></td>
									<td><?php echo $row->bangsal ?></td>
									<td><input type="text"  class="form-control" name="tanggal_jam_lapor_dpjp<?php echo ++$start38; ?>"   value=""/></td>
									<td><input type="text"  class="form-control" name="tanggal_jam_ttd_dpjp<?php echo ++$start39; ?>"   value=""/></td>
									<td><input type="radio" name="verbal_order_24_jam<?php echo ++$start40; ?>" id="optionsRadios1" value="yes"/>Ya<br/>
									<input type="radio" name="verbal_order_24_jam<?php echo ++$start41; ?>" id="optionsRadios1" value="no"/>Tidak</td>
									<td><input type="text" class="form-control" name="keterangan<?php echo ++$start42; ?>"" placeholder="Keterangan" value=""/></td>
									<td>
									<center>
									<?php if(cek($row->tgl_masuk,$row->no_rm)==NULL){?>
									<img src="<?php echo base_url(); ?>assets/backend/img/wrong.jpg" width="20" height="20" alt=""/>
									<?php }else{ ?>
									<img src="<?php echo base_url(); ?>assets/backend/img/right.jpg" width="20" height="20" alt=""/>
									<?php ;} ?>
									</center>
									</td>
									<input type="hidden" name="no_rm<?php echo ++$start29; ?>" value="<?php echo $row->no_rm ?>"/>
									<input type="hidden" name="tgl_masuk<?php echo ++$start30; ?>" value="<?php echo $row->tgl_masuk ?>"/>
									<input type="hidden" name="tgl_lahir<?php echo ++$start31; ?>" value="<?php echo $row->tgl_lahir ?>"/>
									<input type="hidden" name="nama<?php echo ++$start32; ?>" value="<?php echo $row->nama ?>"/>
									<input type="hidden" name="bangsal<?php echo ++$start33; ?>" value="<?php echo $row->bangsal ?>"/>
									<input type="hidden" name="dokter<?php echo ++$start34; ?>" value="<?php echo $row->dokter ?>"/>
									<input type="hidden" name="bulan<?php echo ++$start35; ?>" value="<?php echo $row->bulan ?>"/>
									<input type="hidden" name="tahun<?php echo ++$start36; ?>" value="<?php echo $row->tahun ?>"/>
									<input type="hidden" name="dpjp<?php echo ++$start37; ?>" value="<?php echo $row->dokter ?>"/>
									
								</tr>
										<?php
									}
									?>
								</table>
								<!--ISKP 2 End-->
							</div>
							<div class="tab-pane fade" id="iskp6">
								<h4>ISKP 6. Pelaksanaan Asesmen Resiko jatuh Pasien Rawat Inap</h4>
								<!--ISKP 6 Start-->
								<table class="table table-bordered" style="margin-bottom: 10px">
									<tr>
										<th>No</th>
								<th>Tgl Masuk</th>
								<th>No. RM</th>
								<th>Nama</th>
								<th>Bangsal</th>
								<th>Asesmen Resiko Jatuh<br/>
								<small>ya/tidak</small></th>
								<th>Keterangan</th>
								<th>Status</th>
									</tr><?php
									foreach ($list as $row)
									{
										?>
										<tr>
									<td><?php echo ++$start ?></td>
									<td><?php echo substr($row->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $row->no_rm ?></td>
									<td><?php echo $row->nama ?></td>
									<td><?php echo $row->bangsal ?></td>
									<td>
									<input type="radio" name="asesmen_resiko_jatuh<?php echo ++$start43; ?>" id="optionsRadios1" value="yes"/>Ya &nbsp&nbsp
									<input type="radio" name="asesmen_resiko_jatuh<?php echo ++$start44; ?>" id="optionsRadios1" value="no"/>Tidak
									</td>
									<td><input type="text" class="form-control" name="keterangan<?php echo ++$start45; ?>"" placeholder="Keterangan"/></td>
									<td>
									<center>
									<?php if(cek($row->tgl_masuk,$row->no_rm)==NULL){?>
									<img src="<?php echo base_url(); ?>assets/backend/img/wrong.jpg" width="20" height="20" alt=""/>
									<?php }else{ ?>
									<img src="<?php echo base_url(); ?>assets/backend/img/right.jpg" width="20" height="20" alt=""/>
									<?php ;} ?>
									</center>
									</td>
									<input type="hidden" name="no_rm<?php echo ++$start46; ?>" value="<?php echo $row->no_rm ?>"/>
									<input type="hidden" name="tgl_masuk<?php echo ++$start47; ?>" value="<?php echo $row->tgl_masuk ?>"/>
									<input type="hidden" name="tgl_lahir<?php echo ++$start48; ?>" value="<?php echo $row->tgl_lahir ?>"/>
									<input type="hidden" name="nama<?php echo ++$start49; ?>" value="<?php echo $row->nama ?>"/>
									<input type="hidden" name="bangsal<?php echo ++$start51; ?>" value="<?php echo $row->bangsal ?>"/>
									<input type="hidden" name="dokter<?php echo ++$start52; ?>" value="<?php echo $row->dokter ?>"/>
									<input type="hidden" name="bulan<?php echo ++$start53; ?>" value="<?php echo $row->bulan ?>"/>
									<input type="hidden" name="tahun<?php echo ++$start54; ?>" value="<?php echo $row->tahun ?>"/>
									<input type="hidden" name="dpjp<?php echo ++$start55; ?>" value="<?php echo $row->dokter ?>"/>
									
								</tr>
										<?php
									}
									?>
								</table>
								<!--ISKP 6 End-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
				<?php echo anchor(site_url('iak_1'),'Kembali', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <input type="hidden" name="total_rows" value="<?php echo $total_rows ?>"/>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </div>
        </div>
		</form>
		<hr/>
		
        </div>
        </div>
		
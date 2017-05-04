<div id="page-wrapper" >
    <div id="page-inner">
		<div class="row">
		<div class="col-md-12">
		<h2>Laporan Data Masuk</h2>
		</div>
		</div>
		<hr/>
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
		<div class="row">
		<div class="col-md-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Tab Laporan Data Masuk
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
							<h4>Laporan IAK 1 <?php echo $bangsal; ?> - <?php echo $bulan; ?> <?php echo $tahun; ?></h4>
							<table class="table table-bordered" style="margin-bottom: 10px">
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
									<th>Pilihan</th>
									</tr>
									<?php foreach ($iak_1_data as $iak_1) { ?>
									<tr>
									<td><?php echo ++$start_a ?></td>
									<td><?php echo substr($iak_1->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $iak_1->no_rm ?></td>
									<td><?php echo $iak_1->nama ?></td>
									<td><?php echo substr($iak_1->tgl_masuk, -8) ?></td>
									<td><?php echo $iak_1->jam_asesmen ?></td>
									<td><?php echo $iak_1->asesmen_24_jam ?></td>
									<td><?php echo $iak_1->dokter ?></td>
									<td><?php echo $iak_1->keterangan ?></td>
									<td>
									<small><a href="<?php echo site_url('iak_1/update/'.$iak_1->id_iak1)?>">Edit</a></small>
									<small><a href="<?php echo site_url('iak_1/delete/'.$iak_1->id_iak1)?>">Hapus</a></small>
									</td>
									</tr>
											<?php
										}
								?>
							</table>
						</div>
						<div class="tab-pane fade" id="iskp1">
							<h4>Laporan ISKP 1 <?php echo $bangsal; ?> - <?php echo $bulan; ?> <?php echo $tahun; ?></h4>
							<table class="table table-bordered" style="margin-bottom: 10px">
								<tr>
									<th>No</th>
									<th>Tgl Masuk</th>
									<th>No. RM</th>
									<th>Nama</th>
									<th>Jam Masuk Bangsal</th>
									<th>Gelang ID Masuk Bangsal</th>
									<th>Keterangan</th>
									<th>Pilihan</th>
									</tr>
									<?php foreach ($iskp_1_data as $iskp_1) { ?>
									<tr>
									<td><?php echo ++$start_b ?></td>
									<td><?php echo substr($iskp_1->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $iskp_1->no_rm ?></td>
									<td><?php echo $iskp_1->nama ?></td>
									<td><?php echo substr($iskp_1->tgl_masuk, -8) ?></td>
									<td><?php echo $iskp_1->gelang_identitas_masuk_bangsal ?></td>
									<td><?php echo $iskp_1->keterangan ?></td>
									<td>
									<small><a href="<?php echo site_url('iskp_1/update/'.$iskp_1->id_iskp1)?>">Edit</a></small>
									<small><a href="<?php echo site_url('iskp_1/delete/'.$iskp_1->id_iskp1)?>">Hapus</a></small>
									</td>
									</tr>
											<?php
										}
								?>
							</table>
						</div>
						<div class="tab-pane fade" id="iskp2">
							<h4>Laporan ISKP 2 <?php echo $bangsal; ?> - <?php echo $bulan; ?> <?php echo $tahun; ?></h4>
							<table class="table table-bordered" style="margin-bottom: 10px">
								<tr>
									<th>No</th>
									<th>Tgl Masuk</th>
									<th>No. RM</th>
									<th>Nama</th>
									<th>Jam Masuk Bangsal</th>
									<th>Tanggal Jam Lapor DPJP</th>
									<th>Tanggal Jam TTD DPJP</th>
									<th>Verbal Order 24 Jam</th>
									<th>Keterangan</th>
									<th>Pilihan</th>
									</tr>
									<?php foreach ($iskp_2_data as $iskp_2) { ?>
									<tr>
									<td><?php echo ++$start_c ?></td>
									<td><?php echo substr($iskp_2->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $iskp_2->no_rm ?></td>
									<td><?php echo $iskp_2->nama ?></td>
									<td><?php echo substr($iskp_2->tgl_masuk, -8) ?></td>
									<td><?php echo $iskp_2->tanggal_jam_lapor_dpjp ?></td>
									<td><?php echo $iskp_2->tanggal_jam_ttd_dpjp ?></td>
									<td><?php echo $iskp_2->verbal_order_24_jam ?></td>
									<td><?php echo $iskp_2->keterangan ?></td>
									<td>
									<small><a href="<?php echo site_url('iskp_2/update/'.$iskp_2->id_iskp2)?>">Edit</a></small>
									<small><a href="<?php echo site_url('iskp_2/delete/'.$iskp_2->id_iskp2)?>">Hapus</a></small>
									</td>
									</tr>
											<?php
										}
								?>
							</table>
						</div>
						<div class="tab-pane fade" id="iskp6">
							<h4>Laporan ISKP 6 <?php echo $bangsal; ?> - <?php echo $bulan; ?> <?php echo $tahun; ?></h4>
							<table class="table table-bordered" style="margin-bottom: 10px">
								<tr>
									<th>No</th>
									<th>Tgl Masuk</th>
									<th>No. RM</th>
									<th>Nama</th>
									<th>Jam Masuk Bangsal</th>
									<th>Asesmen Resiko Jatuh</th>
									<th>Keterangan</th>
									<th>Pilihan</th>
									</tr>
									<?php foreach ($iskp_6_data as $iskp_6) { ?>
									<tr>
									<td><?php echo ++$start_d ?></td>
									<td><?php echo substr($iskp_6->tgl_masuk, 0, 10) ?></td>
									<td><?php echo $iskp_6->no_rm ?></td>
									<td><?php echo $iskp_6->nama ?></td>
									<td><?php echo substr($iskp_6->tgl_masuk, -8) ?></td>
									<td><?php echo $iskp_6->asesmen_resiko_jatuh ?></td>
									<td><?php echo $iskp_6->keterangan ?></td>
									<td>
									<small><a href="<?php echo site_url('iskp_6/update/'.$iskp_6->id_iskp6)?>">Edit</a></small>
									<small><a href="<?php echo site_url('iskp_6/delete/'.$iskp_6->id_iskp6)?>">Hapus</a></small>
									</td>
									</tr>
											<?php
										}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
				
        <div class="row">
            <div class="col-md-6">
				<?php echo anchor(site_url('iak_1/laporan'),'Kembali', 'class="btn btn-primary"'); ?>
				<?php echo anchor(site_url('iak_1/excel/'.$bulan.'/'.$tahun.'/'.$bangsal), 'Excel', 'class="btn btn-primary"'); ?>
				<?php echo anchor(site_url('iak_1/word/'.$bulan.'/'.$tahun.'/'.$bangsal), 'Word', 'class="btn btn-primary"'); ?>
			</div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>
</div>
		
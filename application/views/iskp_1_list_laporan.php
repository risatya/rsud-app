<div id="page-wrapper" >
            <div id="page-inner">
		<div class="row">
		<div class="col-md-12">
		<h2>Laporan IAK 1 Bangsal <?php echo $_POST['bangsal']?> - <?php echo $_POST['bulan']?> <?php echo $_POST['tahun']?></h2>
		</div>
		</div>
		<hr/>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('iskp_1/laporan'),'Kembali', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('iskp_1/search1'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        
                        <?php
                    }
                    ?>
                    <input type="submit" value="Search" class="btn btn-primary" />
                </form>
            </div>
        </div>
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
				<td><?php echo ++$start ?></td>
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
		<div class="row">
            <div class="col-md-12 text-right">
				
            </div>
        </div>
		
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
				<?php echo anchor(site_url('iskp_1/excel/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Excel', 'class="btn btn-primary"'); ?>
				<?php echo anchor(site_url('iskp_1/word/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Word', 'class="btn btn-primary"'); ?>
			</div>
            <div class="col-md-6 text-right">
            </div>
        </div>
        </div>
        </div>
		
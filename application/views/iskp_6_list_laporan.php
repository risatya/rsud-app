<div id="page-wrapper" >
            <div id="page-inner">
		<div class="row">
		<div class="col-md-12">
		<h2>Laporan ISKP 6</h2>
		</div>
		</div>
		<hr/>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('iskp_6/laporan'),'Kembali', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('iskp_6/search1'); ?>" class="form-inline" method="post">
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
				<th>Asesmen Resiko Jatuh</th>
				<th>Keterangan</th>
				<th>Pilihan</th>
				</tr>
				<?php foreach ($iskp_6_data as $iskp_6) { ?>
				<tr>
				<td><?php echo ++$start ?></td>
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
		<div class="row">
            <div class="col-md-12 text-right">
				
            </div>
        </div>
		
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
				<?php echo anchor(site_url('iskp_6/excel/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Excel', 'class="btn btn-primary"'); ?>
				<?php echo anchor(site_url('iskp_6/word/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Word', 'class="btn btn-primary"'); ?>
			</div>
            <div class="col-md-6 text-right">
            </div>
        </div>
        </div>
        </div>
		
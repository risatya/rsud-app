<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Daftar Surat Keluar</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('surat_keluar/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('surat_keluar/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('surat_keluar'); ?>" class="btn btn-default">Reset</a>
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
				<th>No. Surat</th>
				<th>Tanggal Keluar</th>
				<th>Perihal</th>
				<th>Pilihan</th>
            </tr><?php
            foreach ($surat_keluar_data as $surat_keluar)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $surat_keluar->no_surat ?></td>
			<td><?php echo $surat_keluar->tgl_keluar ?></td>
			<td><?php echo $surat_keluar->perihal ?></td>
			<td width="10%">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo site_url('surat_keluar/read/'.$surat_keluar->id_surat)?>">Detail</a></li>
					<li><a href="<?php echo site_url('surat_keluar/update/'.$surat_keluar->id_surat)?>">Update</a></li>
					<li><a href="<?php echo site_url('surat_keluar/delete/'.$surat_keluar->id_surat)?>">Hapus</a></li>
					<li><a href="<?php echo site_url('surat_keluar/diajukan_diteruskan/'.$surat_keluar->id_surat)?>">Diajukan/Diteruskan</a></li>
				</ul>
			</div>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('surat_keluar/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('surat_keluar/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
   
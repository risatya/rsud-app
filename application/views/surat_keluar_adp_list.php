<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Daftar Surat Keluar</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('surat_keluar_adp/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('surat_keluar_adp/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('surat_keluar_adp'); ?>" class="btn btn-default">Reset</a>
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
            foreach ($surat_keluar_adp_data as $surat_keluar_adp)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $surat_keluar_adp->no_surat ?></td>
			<td><?php echo $surat_keluar_adp->tgl_keluar ?></td>
			<td><?php echo $surat_keluar_adp->perihal ?></td>
			<td width="10%">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo site_url('surat_keluar_adp/read/'.$surat_keluar_adp->id_surat)?>">Detail</a></li>
					<li><a href="<?php echo site_url('surat_keluar_adp/update/'.$surat_keluar_adp->id_surat)?>">Update</a></li>
					<li><a href="<?php echo site_url('surat_keluar_adp/delete/'.$surat_keluar_adp->id_surat)?>">Hapus</a></li>
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
		<?php echo anchor(site_url('surat_keluar_adp/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('surat_keluar_adp/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
   
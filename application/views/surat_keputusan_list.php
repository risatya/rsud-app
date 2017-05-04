<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Daftar SK</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('surat_keputusan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('surat_keputusan/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('surat_keputusan'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama SK</th>
		<th>No. SK</th>
		<th>Tanggal SK</th>
		<th>Kategori SK</th>
		<th>Pilihan</th>
            </tr><?php
            foreach ($surat_keputusan_data as $surat_keputusan)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $surat_keputusan->nama_sk ?></td>
			<td><?php echo $surat_keputusan->no_sk ?></td>
			<td><?php echo $surat_keputusan->tanggal_sk ?></td>
			<td><?php echo $surat_keputusan->kategori ?></td>
			<td width="10%">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo site_url('surat_keputusan/read/'.$surat_keputusan->id_sk)?>">Detail</a></li>
					<li><a href="<?php echo site_url('surat_keputusan/update/'.$surat_keputusan->id_sk)?>">Update</a></li>
					<li><a href="<?php echo site_url('surat_keputusan/delete/'.$surat_keputusan->id_sk)?>">Hapus</a></li>
					<li><a href="<?php echo site_url('surat_keputusan/diajukan_diteruskan/'.$surat_keputusan->id_sk)?>">Diajukan/Diteruskan</a></li>
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
		<?php echo anchor(site_url('surat_keputusan/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('surat_keputusan/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
    
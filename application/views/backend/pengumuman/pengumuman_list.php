<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Pengumuman List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pengumuman/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('pengumuman/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('pengumuman'); ?>" class="btn btn-default">Reset</a>
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
		<th>Bagian Ditujukan</th>
		<th>Judul Pengumuman</th>
		<th>Keterangan</th>
		<th>Pilihan</th>
            </tr><?php
            foreach ($pengumuman_data as $pengumuman)
            {
				$p = array("<p>", "</p>");
				$txt = str_replace($p, "", $pengumuman->keterangan);
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $pengumuman->nama ?></td>
			<td><?php echo $pengumuman->nama_pengumuman ?></td>
			<td><?php echo $txt?></td>
			
			<td width="10%">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo site_url('pengumuman/read/'.$pengumuman->id_pengumuman)?>">Detail</a></li>
					<li><a href="<?php echo site_url('pengumuman/update/'.$pengumuman->id_pengumuman)?>">Update</a></li>
					<li><a href="<?php echo site_url('pengumuman/delete/'.$pengumuman->id_pengumuman)?>">Hapus</a></li>
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
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
    
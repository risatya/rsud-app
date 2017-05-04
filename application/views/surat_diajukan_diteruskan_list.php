<div id="page-wrapper" >
        <div id="page-inner">
        <?php if($this->uri->segment(2) == 'surat_masuk'){ ?>
			<h2 style="margin-top:0px">Daftar Surat Masuk Diajukan/Diteruskan</h2>
		<?php }else if($this->uri->segment(2) == 'surat_keluar'){ ?>
			<h2 style="margin-top:0px">Daftar Surat Keluar Diajukan/Diteruskan</h2>
		<?php }else if($this->uri->segment(2) == 'surat_keputusan'){ ?>
			<h2 style="margin-top:0px">Daftar Surat Keputusan Diajukan/Diteruskan</h2>
		<?php }else{
			echo '';
		}
		?>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('surat_diajukan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('surat_diajukan/search_surat_masuk'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('surat_diajukan'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                    ?>
                    <input type="submit" value="Search" class="btn btn-primary" />
                </form>
            </div>
        </div>
		
		<?php if($this->uri->segment(2) == 'surat_masuk'){ ?>
		<!--start table-->
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Nama Surat</th>
				<th>Nama Bagian</th>
				<th>Pilihan</th>
            </tr><?php foreach ($surat_diajukan_data as $surat_diajukan) { ?><tr>
				<td><?php echo ++$start ?></td>
				<td><?php echo $surat_diajukan->perihal ?></td>
				<td><?php echo $surat_diajukan->nama ?></td>
				<td width="10%">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('surat_diajukan/update/'.$surat_diajukan->id_surat_diajukan)?>">Update</a></li>
						<li><a href="<?php echo site_url('surat_diajukan/delete1/'.$surat_diajukan->id_surat_diajukan)?>">Hapus</a></li>
					</ul>
				</div>
				</td>
			</tr><?php } ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
		<!--end table-->
		<?php }else if($this->uri->segment(2) == 'surat_keluar'){ ?>
		<!--start table-->
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Nama Surat</th>
				<th>Nama Bagian</th>
				<th>Pilihan</th>
            </tr><?php foreach ($surat_diajukan_data as $surat_diajukan) { ?><tr>
				<td><?php echo ++$start ?></td>
				<td><?php echo $surat_diajukan->perihal ?></td>
				<td><?php echo $surat_diajukan->nama ?></td>
				<td width="10%">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('surat_diajukan/update/'.$surat_diajukan->id_surat_diajukan)?>">Update</a></li>
						<li><a href="<?php echo site_url('surat_diajukan/delete2/'.$surat_diajukan->id_surat_diajukan)?>">Hapus</a></li>
					</ul>
				</div>
				</td>
			</tr><?php } ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
		<!--end table-->
		<?php }else if($this->uri->segment(2) == 'surat_keputusan'){ ?>
		<!--start table-->
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
				<th>Nama Surat</th>
				<th>Nama Bagian</th>
				<th>Pilihan</th>
            </tr><?php foreach ($surat_diajukan_data as $surat_diajukan) { ?><tr>
				<td><?php echo ++$start ?></td>
				<td><?php echo $surat_diajukan->nama_sk ?></td>
				<td><?php echo $surat_diajukan->nama ?></td>
				<td width="10%">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilihan
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('surat_diajukan/update/'.$surat_diajukan->id_surat_diajukan)?>">Update</a></li>
						<li><a href="<?php echo site_url('surat_diajukan/delete3/'.$surat_diajukan->id_surat_diajukan)?>">Hapus</a></li>
					</ul>
				</div>
				</td>
			</tr><?php } ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
		<!--end table-->
		<?php }else{
			echo '';
		}
		?>
		
        </div>
        </div>
   
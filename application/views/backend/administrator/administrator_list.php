
		<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Administrator</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('administrator/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-3 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-5 text-right">
                <form action="<?php echo site_url('administrator/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('administrator'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama</th>
		<th>Email</th>
		<th>Status</th>
		<th>Pilihan</th>
            </tr><?php
            foreach ($administrator_data as $administrator)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $administrator->nama ?></td>
			<td><?php echo $administrator->email ?></td>
			<td>
			<?php 
			$stat = $administrator->status; 
			if($stat == 0){
				echo 'Non Aktif';
			}else{
				echo 'Aktif';
			}
			?>
			</td>
			<td>
				<?php 
				echo anchor(site_url('administrator/read/'.$administrator->id_user),'<i class="fa fa-search-plus"></i>'); 
				echo '|'; 
				echo anchor(site_url('administrator/update/'.$administrator->id_user),'<i class="fa fa-pencil"></i>'); 
				echo '|'; 
				echo anchor(site_url('administrator/delete/'.$administrator->id_user),'<i class="fa fa-trash"></i>','onclick="javascript: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-12 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
		</div>
		</div>
		
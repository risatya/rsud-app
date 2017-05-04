<div id="page-wrapper" >
            <div id="page-inner">
		<div class="row">
		<div class="col-md-12">
		<h2>Data Bangsal <?php echo $_POST['bangsal']?> - <?php echo $_POST['bulan']?> <?php echo $_POST['tahun']?> </h2>
		</div>
		</div>
		<hr/>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('iskp_6'),'Kembali', 'class="btn btn-primary"'); ?>
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
		<form method="POST" action="<?php echo site_url('iskp_6/create_action');?>">
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
            </tr><?php
            foreach ($iskp_6_data as $iskp_6)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo substr($iskp_6->tgl_masuk, 0, 10) ?></td>
			<td><?php echo $iskp_6->no_rm ?></td>
			<td><?php echo $iskp_6->nama ?></td>
			<td><?php echo $iskp_6->bangsal ?></td>
			<td>
			<input type="radio" name="asesmen_resiko_jatuh<?php echo ++$start11; ?>" id="optionsRadios1" value="yes"/>Ya &nbsp&nbsp
			<input type="radio" name="asesmen_resiko_jatuh<?php echo ++$start14; ?>" id="optionsRadios1" value="no"/>Tidak
			</td>
			<td><input type="text" class="form-control" name="keterangan<?php echo ++$start13; ?>"" placeholder="Keterangan"/></td>
			<input type="hidden" name="no_rm<?php echo ++$start2; ?>" value="<?php echo $iskp_6->no_rm ?>"/>
			<input type="hidden" name="tgl_masuk<?php echo ++$start3; ?>" value="<?php echo $iskp_6->tgl_masuk ?>"/>
			<input type="hidden" name="tgl_lahir<?php echo ++$start4; ?>" value="<?php echo $iskp_6->tgl_lahir ?>"/>
			<input type="hidden" name="nama<?php echo ++$start5; ?>" value="<?php echo $iskp_6->nama ?>"/>
			<input type="hidden" name="bangsal<?php echo ++$start6; ?>" value="<?php echo $iskp_6->bangsal ?>"/>
			<input type="hidden" name="dokter<?php echo ++$start7; ?>" value="<?php echo $iskp_6->dokter ?>"/>
			<input type="hidden" name="bulan<?php echo ++$start8; ?>" value="<?php echo $iskp_6->bulan ?>"/>
			<input type="hidden" name="tahun<?php echo ++$start9; ?>" value="<?php echo $iskp_6->tahun ?>"/>
			<input type="hidden" name="dpjp<?php echo ++$start12; ?>" value="<?php echo $iskp_6->dokter ?>"/>
			
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
		<!--<?php echo anchor(site_url('iskp_6/excel/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('iskp_6/word'), 'Word', 'class="btn btn-primary"'); ?>-->
	    </div>
            <div class="col-md-6 text-right">
                <input type="hidden" name="total_rows" value="<?php echo $total_rows ?>"/>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </div>
        </div>
		</form>
        </div>
        </div>
		
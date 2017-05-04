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
                <?php echo anchor(site_url('iskp_2'),'Kembali', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('iskp_2/search1'); ?>" class="form-inline" method="post">
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
		<form method="POST" action="<?php echo site_url('iskp_2/create_action');?>">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tgl Masuk</th>
		<th>No. RM</th>
		<th>Nama</th>
		<th>Bangsal</th>
		<th>Tanggal Jam Lapor DPJP</th>
		<th>Tanggal Jam TTD DPJP</th>
		<th>Verbal Order 24 Jam<br/>
		<small>ya/tidak</small></th>
		<th>Keterangan</th>
            </tr><?php
            foreach ($iskp_2_data as $iskp_2)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo substr($iskp_2->tgl_masuk, 0, 10) ?></td>
			<td><?php echo $iskp_2->no_rm ?></td>
			<td><?php echo $iskp_2->nama ?></td>
			<td><?php echo $iskp_2->bangsal ?></td>
			<td><input type="text"  class="form-control" name="tanggal_jam_lapor_dpjp<?php echo ++$start10; ?>"   value=""/></td>
			<td><input type="text"  class="form-control" name="tanggal_jam_ttd_dpjp<?php echo ++$start11; ?>"   value=""/></td>
			<td><input type="radio" name="verbal_order_24_jam<?php echo ++$start11; ?>" id="optionsRadios1" value="yes"/>Ya<br/>
			<input type="radio" name="verbal_order_24_jam<?php echo ++$start15; ?>" id="optionsRadios1" value="no"/>Tidak</td>
			<td><input type="text" class="form-control" name="keterangan<?php echo ++$start13; ?>"" placeholder="Keterangan" value=""/></td>
			<input type="hidden" name="no_rm<?php echo ++$start2; ?>" value="<?php echo $iskp_2->no_rm ?>"/>
			<input type="hidden" name="tgl_masuk<?php echo ++$start3; ?>" value="<?php echo $iskp_2->tgl_masuk ?>"/>
			<input type="hidden" name="tgl_lahir<?php echo ++$start4; ?>" value="<?php echo $iskp_2->tgl_lahir ?>"/>
			<input type="hidden" name="nama<?php echo ++$start5; ?>" value="<?php echo $iskp_2->nama ?>"/>
			<input type="hidden" name="bangsal<?php echo ++$start6; ?>" value="<?php echo $iskp_2->bangsal ?>"/>
			<input type="hidden" name="dokter<?php echo ++$start7; ?>" value="<?php echo $iskp_2->dokter ?>"/>
			<input type="hidden" name="bulan<?php echo ++$start8; ?>" value="<?php echo $iskp_2->bulan ?>"/>
			<input type="hidden" name="tahun<?php echo ++$start9; ?>" value="<?php echo $iskp_2->tahun ?>"/>
			<input type="hidden" name="dpjp<?php echo ++$start12; ?>" value="<?php echo $iskp_2->dokter ?>"/>
			
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
		<!--<?php echo anchor(site_url('iskp_2/excel/'.$_POST['bulan'].'/'.$_POST['tahun'].'/'.$_POST['bangsal']), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('iskp_2/word'), 'Word', 'class="btn btn-primary"'); ?>-->
	    </div>
            <div class="col-md-6 text-right">
                <input type="hidden" name="total_rows" value="<?php echo $total_rows ?>"/>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </div>
        </div>
		</form>
        </div>
        </div>
		
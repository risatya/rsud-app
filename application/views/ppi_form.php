<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">PPI Data <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">Nama Infeksi <?php echo form_error('id_infeksi') ?></label>
                <input type="text" class="form-control" name="id_infeksi" id="id_infeksi" placeholder="id_infeksi" value="<?php echo $id_infeksi; ?>" readonly />
            </div>
		<div class="form-group">
                <label for="varchar">Tanggal <?php echo form_error('tanggal') ?></label>
                <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal" value="<?php echo $tanggal; ?>"  readonly />
            </div>
	    <div class="form-group">
                <label for="varchar">Bulan <?php echo form_error('bulan') ?></label>
                <input type="text" class="form-control" name="bulan" id="bulan" placeholder="bulan" value="<?php echo $bulan; ?>" readonly />
            </div>
	    <div class="form-group">
                <label for="keterangan">Tahun <?php echo form_error('tahun') ?></label>
               <input type="text" class="form-control" name="tahun" id="tahun" placeholder="tahun" value="<?php echo $tahun; ?>" readonly />
            </div>
			<div class="form-group">
                <label for="keterangan">Bangsal <?php echo form_error('bangsal') ?></label>
                <input type="text" class="form-control" name="bangsal" id="bangsal" placeholder="bangsal" value="<?php echo $bangsal; ?>" readonly />
            </div>
		<div class="form-group">
                <label for="varchar">Nilai <?php echo form_error('nilai') ?></label>
                <input type="text" class="form-control" name="nilai" id="nilai" placeholder="nilai" value="<?php echo $nilai; ?>" />
            </div>
	    <input type="hidden" name="id_nilai" value="<?php echo $id_nilai; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ppi/laporan') ?>" class="btn btn-default">Kembali Ke Laporan</a>
	</form>
    </div>
</div>
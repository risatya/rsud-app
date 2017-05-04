<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Surat Keputusan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
                <label for="varchar">Nama SK <?php echo form_error('nama_sk') ?></label>
                <input type="text" class="form-control" name="nama_sk" id="nama_sk" placeholder="nama_sk" value="<?php echo $nama_sk; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">No. SK <?php echo form_error('no_sk') ?></label>
                <input type="text" class="form-control" name="no_sk" id="no_sk" placeholder="no_sk" value="<?php echo $no_sk; ?>" />
            </div>
	    <div class="form-group">
                <label for="date">Tanggal SK <?php echo form_error('tanggal_sk') ?></label>
                <input type="text" class="form-control" name="tanggal_sk" id="datepicker" placeholder="tanggal_sk" value="<?php echo $tanggal_sk; ?>" />
            </div>
	    <div class="form-group">
                <label for="date">Tanggal Revisi <?php echo form_error('tanggal_revisi') ?></label>
                <input type="text" class="form-control" name="tanggal_revisi" id="datepicker1" placeholder="tanggal_revisi" value="<?php echo $tanggal_revisi; ?>" />
            </div>
		<div class="form-group">
			<label>Status SK</label>
			<?php
					$status1 = '';
					$status2 = '';
					if($status == 'Berlaku'){
						$status1='checked="checked"';
					} elseif($status == 'Tidak Berlaku'){
						$status2='checked="checked"';
					}
					?>
			<div class="radio">
				<label>
					<input type="radio" name="status" id="status1" value="Berlaku" <?php echo $status1 ?> />Berlaku
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="status" id="status2" value="Tidak Berlaku" <?php echo $status2 ?> />Tidak Berlaku
				</label>
			</div>
		</div>
		<div class="form-group">
			<label>Status SK</label>
			<?php
					$kategori1 = '';
					$kategori2 = '';
					$kategori3 = '';
					$kategori4 = '';
					if($kategori == 'SK Internal'){
						$kategori1='checked="checked"';
					} elseif($kategori == 'SK Eksternal Kota'){
						$kategori2='checked="checked"';
					} elseif($kategori == 'SK Eksternal Propinsi'){
						$kategori3='checked="checked"';
					} elseif($kategori == 'SK Eksternal Nasional'){
						$kategori4='checked="checked"';
					}
					?>
			<div class="radio">
				<label>
					<input type="radio" name="kategori" id="kategori1" value="SK Internal" <?php echo $kategori1 ?> />SK Internal
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="kategori" id="kategori2" value="SK Eksternal (Kota)" <?php echo $kategori2 ?> />SK Eksternal (Kota)
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="kategori" id="kategori3" value="SK Eksternal (Propinsi)" <?php echo $kategori3 ?> />SK Eksternal (Propinsi)
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="kategori" id="kategori4" value="SK Eksternal (Nasional)" <?php echo $kategori4 ?> />SK Eksternal (Nasional)
				</label>
			</div>
		</div>
	    <div class="form-group">
                <label for="varchar">Dokumen <?php echo form_error('dokumen') ?></label>
                <input type="file" name="dokumen" id="dokumen" placeholder="dokumen" value="<?php echo $dokumen; ?>" />
            </div>
	    <input type="hidden" name="hidden" value="<?php echo $dokumen; ?>" /> 
	    <input type="hidden" name="id_sk" value="<?php echo $id_sk; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_keputusan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
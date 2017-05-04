<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Buat Data Surat Keluar</h2>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
                <label for="varchar">Indeks <?php echo form_error('indeks') ?></label>
                <input type="text" class="form-control" name="indeks" id="indeks" placeholder="indeks" value="<?php echo $indeks; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Kode <?php echo form_error('kode') ?></label>
                <input type="text" class="form-control" name="kode" id="kode" placeholder="kode" value="<?php echo $kode; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">No. Surat <?php echo form_error('no_surat') ?></label>
                <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="no_surat" value="<?php echo $no_surat; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Perihal <?php echo form_error('perihal') ?></label>
                <input type="text" class="form-control" name="perihal" id="perihal" placeholder="perihal" value="<?php echo $perihal; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Tujuan Surat <?php echo form_error('tujuan_surat') ?></label>
                <input type="text" class="form-control" name="tujuan_surat" id="tujuan_surat" placeholder="tujuan_surat" value="<?php echo $tujuan_surat; ?>" />
            </div>
	    <div class="form-group">
                <label for="date">Tanggal Keluar <?php echo form_error('tgl_keluar') ?></label>
                <input type="text" class="form-control" name="tgl_keluar" id="datepicker" placeholder="tgl_keluar" value="<?php echo $tgl_keluar; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Lampiran <?php echo form_error('lampiran') ?></label>
                <input type="text" class="form-control" name="lampiran" id="lampiran" placeholder="lampiran" value="<?php echo $lampiran; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Informasi Instruksi <?php echo form_error('informasi_instruksi') ?></label>
                <input type="text" class="form-control" name="informasi_instruksi" id="informasi_instruksi" placeholder="informasi_instruksi" value="<?php echo $informasi_instruksi; ?>" />
            </div>
	    <div class="form-group">
                <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="keterangan"><?php echo $keterangan; ?></textarea>
            </div>
	    <div class="form-group">
                <label for="varchar">Upload Dokumen <?php echo form_error('dokumen2') ?></label>
                <input type="file" name="dokumen2" id="dokumen2" placeholder="dokumen2" value="<?php echo $dokumen2; ?>" />
            </div>
	    <input type="hidden" name="hidden" value="<?php echo $dokumen2; ?>" /> 
	    <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_keluar') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
    </div>
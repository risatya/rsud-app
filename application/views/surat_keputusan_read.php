<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Detail SK</h2>
        <table class="table">
	    <tr><td width="15%"><b>Nama SK</b></td><td><?php echo $nama_sk; ?></td></tr>
	    <tr><td><b>No SK</b></td><td><?php echo $no_sk; ?></td></tr>
	    <tr><td><b>Tanggal SK</b></td><td><?php echo $tanggal_sk; ?></td></tr>
	    <tr><td><b>Tanggal Revisi</b></td><td><?php echo $tanggal_revisi; ?></td></tr>
	    <tr><td><b>Status</b></td><td><?php echo $status; ?></td></tr>
	    <tr><td><b>Dokumen</b></td><td height="100%">
		<object data="<?php echo base_url('uploads/surat_keputusan/'.$dokumen)?>" type="application/pdf" width="100%" height="700px">
			<p>It appears you don't have a PDF plugin for this browser.
			No biggie... you can <a href="<?php echo base_url('uploads/surat_keputusan/'.$dokumen)?>" download>click here to
			download the PDF file.</a></p>
		</object>
		</td>
		</tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat_keputusan') ?>" class="btn btn-default">Kembali</button></td></tr>
	</table>
    </div>
    </div>
<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Detail Surat Keluar</h2>
        <table class="table">
	    <tr><td  width="18%"><b>Indeks</b></td><td><?php echo $indeks; ?></td></tr>
	    <tr><td><b>Kode</b></td><td><?php echo $kode; ?></td></tr>
	    <tr><td><b>No Surat</b></td><td><?php echo $no_surat; ?></td></tr>
	    <tr><td><b>Perihal</b></td><td><?php echo $perihal; ?></td></tr>
	    <tr><td><b>Tujuan Surat</b></td><td><?php echo $tujuan_surat; ?></td></tr>
	    <tr><td><b>Tanggal Keluar</b></td><td><?php echo $tgl_keluar; ?></td></tr>
	    <tr><td><b>Lampiran</b></td><td><?php echo $lampiran; ?></td></tr>
	    <tr><td><b>Informasi Instruksi</b></td><td><?php echo $informasi_instruksi; ?></td></tr>
	    <tr><td><b>Keterangan</b></td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td><b>Dokumen</b></td><td height="100%">
		<object data="<?php echo base_url('uploads/surat_keluar/'.$dokumen2)?>" type="application/pdf" width="100%" height="700px">
			<p>It appears you don't have a PDF plugin for this browser.
			No biggie... you can <a href="<?php echo base_url('uploads/surat_keluar/'.$dokumen2)?>" download>click here to
			download the PDF file.</a></p>
		</object>
		</td>
		</tr>
		<tr><td><b>Download</b></td><td><a href="<?php echo base_url('uploads/surat_keluar/'.$dokumen2)?>" download>Link Download</a></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat_keluar') ?>" class="btn btn-default">Kembali</button></td></tr>
	</table>
	</div>
	</div>
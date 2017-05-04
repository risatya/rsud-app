<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
		<div class="col-md-12">
		 <h2>Laporan Data Masuk</h2>
		</div>
	</div>
<hr/>
<div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>		
<div class="row" style="margin-bottom: 10px">
<form action="<?php echo site_url('iak_1/search_laporan'); ?>" method="post">
<div class="col-md-4">
	<label>Bulan</label>
	<select class="form-control" name="bulan">
		<option value="Januari">Januari</option>
		<option value="Februari">Februari</option>
		<option value="Maret">Maret</option>
		<option value="April">April</option>
		<option value="Mei">Mei</option>
		<option value="Juni">Juni</option>
		<option value="Juli">Juli</option>
		<option value="Agustus">Agustus</option>
		<option value="September">September</option>
		<option value="Oktober">Oktober</option>
		<option value="November">November</option>
		<option value="Desember">Desember</option>
	</select>
</div>
<div class="col-md-4">
	<label>Tahun</label>
	<select class="form-control" name="tahun">
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
	</select>
</div>
<div class="col-md-4">
	<label>Bangsal</label>
	<select class="form-control" name="bangsal">
		<option value="ANGGREK">ANGGREK</option>
		<option value="BOUGENVILE">BOUGENVILE</option>
		<option value="DAHLIA">DAHLIA</option>
		<option value="CEMPAKA">CEMPAKA</option>
		<option value="EDELWEIS">EDELWEIS</option>
		<option value="IRI/ICU">IRI/ICU</option>
		<option value="FLAMBOYAN">FLAMBOYAN</option>
		<option value="KANNA">KANNA</option>
		<option value="KENANGA">KENANGA</option>
		<option value="PERINATAL">PERINATAL</option>
		<option value="VINOLIA">VINOLIA</option>
	</select>
</div>
</div>

<div class="row">
<div class="col-md-6">
	<button class="btn btn-primary">Submit</button>
</div>

</div>
</form>
</div>
</div>

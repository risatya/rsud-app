<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
		<div class="col-md-12">
		 <h2>Laporan PPI</h2>
		</div>
	</div>
<hr/>
<div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>		
<div class="row" style="margin-bottom: 10px">
<form action="<?php echo site_url('ppi/search_laporan'); ?>" method="post">
<div class="col-md-4">
	<label>Bulan</label>
	<select class="form-control" name="bulan">
		<option value="1">Januari</option>
		<option value="2">Februari</option>
		<option value="3">Maret</option>
		<option value="4">April</option>
		<option value="5">Mei</option>
		<option value="6">Juni</option>
		<option value="7">Juli</option>
		<option value="8">Agustus</option>
		<option value="9">September</option>
		<option value="10">Oktober</option>
		<option value="11">November</option>
		<option value="12">Desember</option>
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
		<option value="EDELWEIS I">EDELWEIS I</option>
		<option value="EDELWEIS II">EDELWEIS II</option>
		<option value="FLAMBOYAN">FLAMBOYAN</option>
		<option value="ICU">ICU</option>
		<option value="KANNA">KANNA</option>
		<option value="KENANGA">KENANGA</option>
		<option value="PADMA">PADMA</option>
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

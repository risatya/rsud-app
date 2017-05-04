<div id="page-wrapper" >
            <div id="page-inner">
<h2 style="margin-top:0px">Master_data_pegawai List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('master_data_pegawai/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('master_data_pegawai/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('master_data_pegawai'); ?>" class="btn btn-default">Reset</a>
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
		<th>nama</th>
		<th>nip</th>
		<th>nip_lama</th>
		<th>no_kartu_pegawai</th>
		<th>ttl</th>
		<th>jenis_kelamin</th>
		<th>nama_jabatan</th>
		<th>eselon_jabatan</th>
		<th>tmt_jabatan</th>
		<th>sub_unit_kerja</th>
		<th>unit_kerja</th>
		<th>status_perkawinan</th>
		<th>no_karis_karsu</th>
		<th>gol_darah</th>
		<th>agama</th>
		<th>jalan</th>
		<th>kelurahan</th>
		<th>kecamatan</th>
		<th>kota</th>
		<th>propinsi</th>
		<th>nomor</th>
		<th>telepon</th>
		<th>kode_pos</th>
		<th>alamat_alternatif</th>
		<th>status_kepegawaian</th>
		<th>tmt_pengangkatan_cpns</th>
		<th>tmt_pengangkatan_pns</th>
		<th>golongan_ruang</th>
		<th>tmt_golongan_ruang</th>
		<th>masa_kerja</th>
		<th>tmt_berkala_terakhir</th>
		<th>gaji_pokok</th>
		<th>no_npwp</th>
		
		<th>tmt_pensiun</th>
		<th>ketugasan_pokok</th>
		<th>keterangan</th>
		<th>Action</th>
            </tr><?php
            foreach ($master_data_pegawai_data as $master_data_pegawai)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $master_data_pegawai->nama ?></td>
			<td><?php echo $master_data_pegawai->nip ?></td>
			<td><?php echo $master_data_pegawai->nip_lama ?></td>
			<td><?php echo $master_data_pegawai->no_kartu_pegawai ?></td>
			<td><?php echo $master_data_pegawai->ttl ?></td>
			<td><?php echo $master_data_pegawai->jenis_kelamin ?></td>
			<td><?php echo $master_data_pegawai->nama_jabatan ?></td>
			<td><?php echo $master_data_pegawai->eselon_jabatan ?></td>
			<td><?php echo $master_data_pegawai->tmt_jabatan ?></td>
			<td><?php echo $master_data_pegawai->sub_unit_kerja ?></td>
			<td><?php echo $master_data_pegawai->unit_kerja ?></td>
			<td><?php echo $master_data_pegawai->status_perkawinan ?></td>
			<td><?php echo $master_data_pegawai->no_karis_karsu ?></td>
			<td><?php echo $master_data_pegawai->gol_darah ?></td>
			<td><?php echo $master_data_pegawai->agama ?></td>
			<td><?php echo $master_data_pegawai->jalan ?></td>
			<td><?php echo $master_data_pegawai->kelurahan ?></td>
			<td><?php echo $master_data_pegawai->kecamatan ?></td>
			<td><?php echo $master_data_pegawai->kota ?></td>
			<td><?php echo $master_data_pegawai->propinsi ?></td>
			<td><?php echo $master_data_pegawai->nomor ?></td>
			<td><?php echo $master_data_pegawai->telepon ?></td>
			<td><?php echo $master_data_pegawai->kode_pos ?></td>
			<td><?php echo $master_data_pegawai->alamat_alternatif ?></td>
			<td><?php echo $master_data_pegawai->status_kepegawaian ?></td>
			<td><?php echo $master_data_pegawai->tmt_pengangkatan_cpns ?></td>
			<td><?php echo $master_data_pegawai->tmt_pengangkatan_pns ?></td>
			<td><?php echo $master_data_pegawai->golongan_ruang ?></td>
			<td><?php echo $master_data_pegawai->tmt_golongan_ruang ?></td>
			<td><?php echo $master_data_pegawai->masa_kerja ?></td>
			<td><?php echo $master_data_pegawai->tmt_berkala_terakhir ?></td>
			<td><?php echo $master_data_pegawai->gaji_pokok ?></td>
			<td><?php echo $master_data_pegawai->no_npwp ?></td>
			<td><?php echo $master_data_pegawai->tmt_pensiun ?></td>
			<td><?php echo $master_data_pegawai->ketugasan_pokok ?></td>
			<td><?php echo $master_data_pegawai->keterangan ?></td>
			<td>
				<?php 
				echo anchor(site_url('master_data_pegawai/read/'.$master_data_pegawai->id),'<i class="fa fa-search-plus"></i>'); 
				echo '|'; 
				echo anchor(site_url('master_data_pegawai/update/'.$master_data_pegawai->id),'<i class="fa fa-pencil"></i>'); 
				echo '|'; 
				echo anchor(site_url('master_data_pegawai/delete/'.$master_data_pegawai->id),'<i class="fa fa-trash"></i>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <ul class="pagination" style="margin-top: 0px">
                    <li class="active"><a href="#">Total Record : <?php echo $total_rows ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
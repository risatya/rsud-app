<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
		<li class="text-center">
          
			</li>
            <li>
                <a class="active-menu"  href="<?php echo site_url();?>/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
			<?php 
			$level = $this->session->userdata('data_user')->user_level;
			if($level == 1){
			?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Inst. Kesehatan Pasien<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/iak_1">Proses Data</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iak_1/laporan">Laporan Data</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Instalasi PPI<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/ppi">PPI</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/ppi/laporan">Laporan PPI</a>
                    </li>
                </ul>
            </li>	
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Bagian Tata Usaha<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/surat_masuk">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/surat_keluar">Surat Keluar</a>
                    </li>
					<li>
						<a href="#">Surat Ditujukan/Diteruskan<span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_masuk">Surat Masuk</a>
							</li>
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_keluar">Surat Keluar</a>
							</li>
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_keputusan">Surat Keputusan</a>
							</li>
						</ul>
					   
					</li>
					<li>
                        <a href="<?php echo site_url();?>/surat_keputusan">Surat Keputusan (SK)</a>
                    </li>
					<li>
                        <a href="<?php echo site_url();?>/pengumuman">Pengumuman</a>
                    </li>
                </ul>
            </li>	
            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Manajemen Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/administrator">Data Administrator</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/administrator/administrator_simpeg">Data Administrator SIMPEG</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/administrator/administrator_webinternal">Data Administrator Web Internal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/administrator/pegawai_simpeg">Data Pegawai SIMPEG</a>
                    </li>
                </ul>
            </li>
			
			<?php }elseif($level == 2){ ?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Bagian Tata Usaha<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/surat_masuk">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/surat_keluar">Surat Keluar</a>
                    </li>
					<li>
                        <a href="<?php echo site_url();?>/surat_keputusan">Surat Keputusan (SK)</a>
                    </li>
					<li>
                        <a href="<?php echo site_url();?>/pengumuman">Pengumuman</a>
                    </li>
					<li>
						<a href="#">Surat Ditujukan/Diteruskan<span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_masuk">Surat Masuk</a>
							</li>
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_keluar">Surat Keluar</a>
							</li>
							<li>
								<a href="<?php echo site_url();?>/surat_diajukan/surat_keputusan">Surat Keputusan</a>
							</li>
						</ul>
					   
					</li>
                </ul>
            </li>	
			<?php }elseif($level == 3){ ?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Inst. Kesehatan Pasien<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/iak_1">Proses Data</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iak_1/laporan">Laporan Data</a>
                    </li>
                </ul>
            </li>
			<?php }elseif($level == 4){ ?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Instalasi PPI<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/ppi">PPI</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/ppi/laporan">Laporan PPI</a>
                    </li>
                </ul>
            </li>
			<?php }elseif($level == 5){ ?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Bagian ADP<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/surat_masuk_adp">Surat Masuk ADP</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/surat_keluar_adp">Surat Keluar ADP</a>
                    </li>
					
                </ul>
            </li>	
			<?php }else{ ?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Tidak ada akses<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url()?>auth/logout">Logout</a>
                    </li>
                </ul>
            </li>
			<?php } ?>					
        </ul>
       
    </div>
    
</nav>  
<!-- /. NAV SIDE  -->
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
			$level = $this->session->userdata('data_member')->user_level;
			if($level == 1){
			?>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Inst. Kesehatan Pasien<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/iak_1">IAK 1. Asesmen Awal Medis Pasien Rawat Inap Dalam 24 Jam</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp_1">ISKP 1. Jumlah Pasien Rawat Inap Dengan Gelang Identitas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp_2">ISKP 2. Verbal Order Ditandatangani Oleh Dokter dalam 24 Jam</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp_6">ISKP 6. Pelaksanaan Asesmen Resiko Jatuh Pasien Rawat Inap</a>
                    </li>
					<li>
                        <a href="<?php echo site_url();?>/iak1/laporan">Laporan IAK 1</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp1/laporan">Laporan ISKP 1</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp2/laporan">Laporan ISKP 2</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/iskp6/laporan">Laporan ISKP 6</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Tata Usaha<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>/surat_masuk">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/surat_keluar">Surat Keluar</a>
                    </li>
					<li>
                        <a href="<?php echo site_url();?>/surat_kepurusan">Surat Keputusan (SK)</a>
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
          
			<?php }elseif($level == 3){ ?>
				
			<?php }elseif($level == 4){ ?>
				
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
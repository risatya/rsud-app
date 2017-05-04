<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Simpeg RSUD Kota Yogyakarta</title>
<link href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/frontend/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- start slider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/sss.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});
			});
	</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/sss.min.js"></script>
<script>
jQuery(function($) {
$('.slider').sss();
});
</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/images/logos.jpg" alt="" width="85"/></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!DOCTYPE html>
<html lang="es">
<head>

	<link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/libs/animate.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/libs/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/libs/owl.theme.default.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- jQuery Modal -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" / -->
	<meta charset="utf-8">
	<title><?php echo $titulo?></title>

	<!-- CEO -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="languaje" content="ES">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="geo.region" content="AR-J">
	<meta name="geo.placename" content="San Juan">
	<meta name="author" content="Bixa, www.bixa.io">
	<meta name="owner" content="Anchipurac">

	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/site/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/site/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/site/favicon-16x16.png') ?>">
	<link rel="manifest" href="<?= base_url('assets/favicon/site/site.webmanifest') ?>">
	<link rel="mask-icon" href="<?= base_url('assets/favicon/site/safari-pinned-tab.svg') ?>" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00a29d">
	<meta name="theme-color" content="#00a29d">


	<!--OG-->
	<meta property="og:title" content="Anchipurac"/>
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="Anchipurac"/>
	<meta property="og:locale" content="es_LA"/>

	
</head>
<body>

	<?php $this->load->view('includes/nav') ?>
	<?php $this->load->view($contenido) ?>
	<?php $this->load->view('includes/footer') ?>

	<script type="text/javascript">
		var ruta = "<?php echo base_url();?>";
	</script>

	<?php
	function base_url_noticias($url)
	{
		return "https://anchipurac.com/noticias-anchipurac/".$url;
		//return "https://localhost/CodeIgniter/noticias-anchipurac/".$url;
	}



	?>
	
	<!-- <script src="<?= base_url('assets/js/libs/jQuery-3.3.1.js')?>"></script> -->
	<script src="<?= base_url('assets/js/libs/owl.carousel.min.js')?>"></script>
	<script src="<?= base_url('assets/js/libs/jsPDF/dist/jspdf.min.js')?>"></script>
	<script src="<?= base_url('assets/js/libs/wow.js')?>"></script>
	<script src="<?= base_url('assets/js/app.js')?>"></script>
	<script>new WOW().init();</script>
	<!--script>
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items:1,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		smartSpeed:400,

        
	
	});
	</script-->
	
</body>
</html>
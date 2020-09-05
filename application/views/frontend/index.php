
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= (isset($title)) ? $title : ''; ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Chairs" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="<?= base_url('assets/frontend/');?>css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Font-Awesome-Icons -->

	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<?php include('page/header.php'); ?>
		<!-- //header -->
		<!-- banner -->
		<?php 
			// if($slider){
			// 	include('page/banner.php');
			// }else{
			// 	echo ""; 
			// }
		?>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- middle section -->
	<?= (isset($content)) ? $content : "Found Nothing"; ?>
	<!-- //middle section-->

	<!-- footer -->
	<?php include('page/footer.php'); ?>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy_right text-center py-3 position-relative">
		<p style="text-align: center !important;">© 2019 Total Review. All rights reserved
		</p>
		<!-- move top icon -->
		<a href="#home" class="move-top text-center">
			<span class="fa fa-level-up" aria-hidden="true"></span>
		</a>
		<!-- //move top icon -->
	</div>
	<!-- //copyright -->
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56ff9f1ceba9b115"></script>

</body>

</html>
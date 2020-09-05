
<!-- banner -->
<div class="banner_w3lspvt-2">
	<ol class="breadcrumb">
		<li class="breadcrumb-item" style="background:#000; color:#fff; padding:10px;"><a href="<?= base_url('Welcome/');?>">Home</a></li>
		<li class="breadcrumb-item" aria-current="page" style="background:#000; color:#fff; padding:10px;">Review Details</li>
	</ol>
</div>
<!-- //banner -->
<br>

<?php
	$short_desc=mb_substr($selected_review->description,0,220,"UTF-8");
?>

<!-- facebook -->
<meta property="og:title" content="<?= $selected_review->review_title; ?>" />
<meta property="og:description" content="<?php $short_desc; ?>" />
<meta property="og:site_name" content="totalreview.xyz" />
<meta property="og:type" content="article" />
<meta property="og:locale" content="en_US" />
<link rel="canonical" href="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:url" content="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="<?= $selected_review->photo; ?>" />
<!--------------------------->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="pull-right">
				<div class="pull-left hidden-xs">
					SHARE<div class="addthis_sharing_toolbox"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.review-img img{
		width: 100%;
	}
</style>
<!-- single page -->
<section class="ab-info-main py-5">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="title mb-5 pb-4 text-center font-weight-bold"><?= $selected_review->review_title; ?></h3>
		<div class="inner-sec-w3pvt">
			<div class="card" data-aos="fade-up">

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="review-img">
							<img class="img-responsive" src="<?= base_url($selected_review->photo);?>" alt="image" style="max-height: 500px;" >
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				
				<div class="card-body">
					<h6 class="date"><span>
							By: <?php echo $selected_review->post_by; ?></span> <?= $selected_review->created_date;?></h6>
					<h5 class="card-title"><?= $selected_review->review_title; ?></h5>
					<p class="card-text">
						<?php 
							$descexp = explode('if gte mso 9]', $selected_review->description);
							echo $description = substr($descexp[0], 0,-8);
					 	?>
					</p>
				</div>

				<?php
					$link = $selected_review->video_link;
					if($link == './assets/admin/uploaded_image/'){

						echo '';

					}else{ ?>
						
						<center>
							<div>
								<!-- <iframe width="700px" height="350px" src="https://www.youtube.com/embed/<?php echo $link?>" frameborder="0" allowfullscreen></iframe> -->
								<?php  

									$url = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
									$abc = explode('/',$url);
									$url1='';
									for($i=0; $i<(count($abc)-3); $i++){
										$url1.=$abc[$i]."/";
									}
								?>
									<video width="700" height="350" controls>
										<source src="<?php echo $url1.$link; ?>" type="video/mp4">
									</video>
							</div>
						</center>

					<?php } ?>

				<div class="card-footer">
					<div class="fb-comments" data-href="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="10"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //single page -->
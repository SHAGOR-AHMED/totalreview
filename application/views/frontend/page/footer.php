<!-- map -->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2295642408117!2d90.4080103142105!3d23.739191795123027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88ad591d673%3A0xcf8604a987eb36b4!2sRahman+Lucid+Tower!5e0!3m2!1sbn!2sbd!4v1551855014154" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> -->
<!--// map -->

<!-- footer -->
<footer class="bg-li py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="row footer-grids">
			<div class="col-lg-4 footer-grid mt-lg-3">
				<!-- <h2>
					<a class="logo-2" href="#">Total<br> Review<br>Here</a>
				</h2> -->
			</div>
			<div class="col-lg-2 col-sm-6 footer-grid mt-lg-3 mt-4">
				<h3 class="mb-sm-4 mb-3 pb-3">Home</h3>
				<ul class="list-unstyled">
					<li>
						<a href="<?= base_url('Welcome/AboutUs'); ?>">About Us</a>
					</li>

					<?php
						$userID = $this->session->userdata('user_id');
						if($userID != NULL){ ?>

							<li><a href="<?= base_url('User/postReview');?>">Post Review</a></li>

						<?php }else{ ?>

							<li><a href="<?= base_url('Welcome/userLogin');?>">Post Review</a></li>

					<?php } ?>
				</ul>
			</div>
			<!-- <div class="col-lg-2 col-sm-6 footer-grid footer-contact mt-lg-3 mt-4">
				<h3 class="mb-sm-4 mb-3 pb-3"> Contact Us</h3>
				<ul class="list-unstyled">
					<li>
						
					</li>
					<li>
						
					</li>
					<li class="mt-2">
						<a href="mailto:info@totalreview.xyz">info@totalreview.xyz</a>
					</li>
				</ul>
			</div> -->
			<div class="col-lg-2 col-sm-6 footer-grid-social mt-lg-3 mt-4">
				<h3 class="mb-sm-4 mb-3 pb-3">Catch on Social</h3>
				<ul class="list-unstyled">
					<li class="d-inline">
						<a href="https://www.facebook.com/Total-Review-991274564405465/?modal=admin_todo_tour" target="_blank"><span class="fa fa-facebook"></span></a>
					</li>
					<li class="d-inline">
						<a href="#"><span class="fa fa-twitter"></span></a>
					</li>
					<li class="d-inline">
						<a href="https://www.youtube.com/channel/UCHl80qOaQKtj39MmYbjBhGQ" target="_blank"><span class="fa fa-youtube"></span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
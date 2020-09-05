<style type="text/css">
	.top-header{
		color: #000;
		padding: 10px;
	}
</style>

<div class="row">
	<div class="col-md-12" style="background: #1EBBA3;">
		<div class="top-header pull-right">
			<?php
				$userID = $this->session->userdata('user_id');
				if($userID != NULL){ ?>
					<ul style="list-style: none;">
						<li>Hello <a href="<?= base_url('User/');?>"><b style="color: #fff;"><?= $this->session->userdata('full_name');?></b></a>&nbsp; you can <a href="<?= base_url('User/logout'); ?>"><span style="color: #fff;">Logout</span></a> now</li>
					</ul>

			<?php }else{
				echo '';
			} ?>
		</div>
	</div>
</div>

<header>
	<div class="container-fluid">
		<div class="header d-md-flex align-items-center py-sm-3 py-2 px-sm-2 px-1">
			<!-- logo -->
			<div id="logo">
				<h1><a href="<?= base_url('Welcome/'); ?>">Total Review</a></h1>
			</div>
			<!-- //logo -->
			<!-- nav -->
			<div class="nav_w3ls ml-5">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="<?= base_url('Welcome/'); ?>">Home</a></li>
						<li><a href="<?= base_url('Welcome/AboutUs'); ?>">About Us</a></li>

						<?php
							foreach ($all_type as $value) { ?>

								<li><a href="<?= base_url('Welcome/ReviewByType/'.$value->type_id); ?>"><?= $value->type_name; ?></a></li>

						<?php } ?>
						
						<?php
							$userID = $this->session->userdata('user_id');
							if($userID != NULL){ ?>

								<li><a href="<?= base_url('User/postReview');?>">Post Review</a></li>

							<?php }else{ ?>

								<li><a href="<?= base_url('Welcome/userLogin');?>">Post Review</a></li>

						<?php } ?>
						<!-- <li>
							<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>
								<li><a href="#new" class="drop-text">New Collections</a></li>
								<li><a href="blog.html" class="drop-text">Blog</a></li>
								<li><a href="single.html" class="drop-text">Single Page</a></li>
								<li><a href="#newsletter" class="drop-text">Newsletter</a></li>
							</ul>
						</li> -->
						<!-- <li><a href="<?= base_url('Welcome/Contact'); ?>">Contact Us</a></li> -->
					</ul>
				</nav>
			</div>
			<!-- //nav -->
		</div>
	</div>
</header>
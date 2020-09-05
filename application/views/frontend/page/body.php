
<?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>
<!-- Latest Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Latest Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach($latest_review as $value){ ?>
					<div class="col-md-4">
						<div class="row" style=" border:1px solid #e2e2e2; border-radius: 3px; min-height: 180px; margin: 5px; margin-bottom: 5px;">
							<div class="col-md-6">
								<div class="element-item" >
									<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 150px; max-width: 150px;" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="headline">
									<h5><?= $value->review_title; ?></h5>
									<p>
										<?php
                                        	echo limit_words(strip_tags($value->description),2,"UTF-8");
                                    	?>

                                    </p>
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><button class="btn btn-success">Read More</button></a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Latest Review-->

<!-- Popular Review -->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Most Popular Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach($popular_review as $value){ ?>
					<div class="col-md-3 col-sm-6">
						<div class="element-item" style="text-align: center; border:1px solid #e2e2e2; border-radius: 3px; min-height: 320px; padding: 5px; margin-bottom: 5px;">
							<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 250px; max-width: 300px;" />
							<div class="isotope-overlay">
								<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h3>View Details</h3></a>
							</div>
							<div class="headline">
								<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h4><?= $value->review_title; ?></h4></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Popular Review -->

<!-- Product Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Product Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php 
					$product = $this->db->select('*')->from('tbl_review')->where('review_type',1)->limit(8)->get()->result();
					foreach($product as $value){ ?>
						<div class="col-md-3">
							<div class="element-item" style="text-align: center; border:1px solid #e2e2e2; border-radius: 3px; min-height: 320px; padding: 5px; margin-bottom: 5px;">
								<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 250px; max-width: 300px;" >
								<div class="isotope-overlay">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h3>View Details</h3></a>
								</div>
								<div class="headline">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h4><?= $value->review_title; ?></h4></a>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Product Review-->

<!-- Govt Service Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Govt Service Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php
					$govt_service = $this->db->select('*')->from('tbl_review')->where('review_type',2)->limit(6)->get()->result(); 
					foreach($govt_service as $value){ ?>
						<div class="col-md-4">
							<div class="row" style=" border:1px solid #e2e2e2; border-radius: 3px; min-height: 200px; margin: 5px; margin-bottom: 5px;">
								<div class="col-md-6">
									<div class="element-item" >
										<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>">
											<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 150px; max-width: 150px;" >
										</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="headline">
										<h5><?= $value->review_title; ?></h5>
										<p>
											<?php
	                                        	echo limit_words(strip_tags($value->description),5,"UTF-8");
	                                    	?>

	                                    </p>
										<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><button class="btn btn-success">Read More</button></a>
									</div>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Govt Service Review-->

<!-- Non-Govt Service Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Non-Govt Service Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php 
					$non_govt = $this->db->select('*')->from('tbl_review')->where('review_type',3)->limit(8)->get()->result();
					foreach($non_govt as $value){ ?>
						<div class="col-md-3">
							<div class="element-item" style="text-align: center; border:1px solid #e2e2e2; border-radius: 3px; min-height: 320px; padding: 5px; margin-bottom: 5px;">
								<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 250px; max-width: 300px;" >
								<div class="isotope-overlay">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h3>View Details</h3></a>
								</div>
								<div class="headline">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h4><?= $value->review_title; ?></h4></a>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Non-Govt Service Review-->

<!-- Professional Service Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Professional Service Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php
					$professional = $this->db->select('*')->from('tbl_review')->where('review_type',4)->limit(6)->get()->result(); 
					foreach($professional as $value){ ?>
						<div class="col-md-4">
							<div class="row" style=" border:1px solid #e2e2e2; border-radius: 3px; min-height: 200px; margin: 5px; margin-bottom: 5px;">
								<div class="col-md-6">
									<div class="element-item" >
										<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 150px; max-width: 150px;" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="headline">
										<h5><?= $value->review_title; ?></h5>
										<p>
											<?php
	                                        	echo limit_words(strip_tags($value->description,'<p><em><a><br/><b><strong>'),5,"UTF-8");
	                                    	?>

	                                    </p>
										<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><button class="btn btn-success">Read More</button></a>
									</div>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Professional Service Review-->

<!-- Others Services Review-->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>Others Services Review</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php 
					$other_service = $this->db->select('*')->from('tbl_review')->where('review_type',5)->limit(8)->get()->result();
					foreach($other_service as $value){ ?>
						<div class="col-md-3">
							<div class="element-item" style="text-align: center; border:1px solid #e2e2e2; border-radius: 3px; min-height: 320px; padding: 5px; margin-bottom: 5px;">
								<img src="<?= base_url($value->photo)?>" class="img-responsive" style="min-height: 250px; max-width: 300px;" >
								<div class="isotope-overlay">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h3>View Details</h3></a>
								</div>
								<div class="headline">
									<a href="<?= base_url('Welcome/ReviewDetails/'.$value->review_id)?>"><h4><?= $value->review_title; ?></h4></a>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- //Others Services Review-->


<!-- <section class="single_grid_w3_main py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="row main-grid-w3pvt-wh position-relative">
			<div class="col-sm-6 single_grid_w3">
				<img src="<?= base_url('assets/frontend/');?>images/wh1.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-sm-5">
				<div class="single_grid_text mt-md-5 mt-sm-3 mt-4 pt-xl-5">
					<h5 class="wht-titl-w3">sub heading goes here</h5>
					<hr>
					<p>Sub headings stand out because they are like mini titles.</p>
					<p class="mt-2">They make your post stand out and make it more readable.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
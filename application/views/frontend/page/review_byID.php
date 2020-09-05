
<!-- Popular Review -->
<div class="three-grids py-5" id="new">
	<div class="container py-xl-5 py-lg-3">
		<div class="about-top">
			<h2>All Review of <?= $type_name->type_name; ?></h2>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach($review_by_typeID as $value){ ?>
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
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>LOGIN | Blog Management</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link href="<?php echo base_url()."css/bootstrap.min.css"; ?>" type="text/css" rel="stylesheet">
		<link href="<?php echo base_url()."css/font-awesome.min.css"; ?>" type="text/css" rel="stylesheet">

		<!-- text fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="<?php echo base_url()."css/custom-admin.css"; ?>" type="text/css" rel="stylesheet">

		<!-- ace styles -->
		<link href="<?php echo base_url()."css/ace.min.css"; ?>" type="text/css" rel="stylesheet">
		<link href="<?php echo base_url()."css/ace-rtl.min.css"; ?>" type="text/css" rel="stylesheet">
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Blog Management</span>
								</h1>
								<h4 class="blue" id="id-company-text">Admin Panel</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>
											<h3>
												<?php
													$msg=$this->session->userdata('message');
													if($msg){
														echo $msg;
														$this->session->unset_userdata('message');
													}
												?>
											</h3>

											<div class="space-6"></div>

											<form name="login_panel" id="login_panel" action="<?= base_url('Admin/admin_login_check'); ?>" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															
															<!--<select id="login_type" name="login_type" required>
																<option value="" disabled="disabled" selected="selected">Select Login </option>
																<option value="1" >Admin login</option>
																<option value="2" >Student login</option>
																<option value="3" >Guardian login</option>
                                                                <option value="4" >Teacher login</option>
																<option value="5" >Guest login</option>
															</select>-->
															
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="admin_email" id="admin_email" value="" placeholder="Admin Email" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="admin_pass" id="password" value="" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">LOGIN</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div style="float:right;">
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													I Forget My Password
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url()."js/jquery.min.js"; ?>" type="text/javascript"></script>
		<!-- <![endif]-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url()."js/jquery.min.js"; ?>'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()."js/jquery.mobile.custom.min.js"; ?>'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
		</script>
	</body>
</html>
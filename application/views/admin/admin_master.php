<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Total Review | Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">
	<link rel="shortcut icon" href="<?= base_url('images/favicon.ico');?>">

	<!-- The styles -->
	<link  href="<?php echo base_url()?>assets/admin/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()?>assets/admin/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()?>assets/admin/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>assets/admin/css/uploadify.css' rel='stylesheet'>
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?= base_url('images/logo.png');?>" /> <span>T-R</span></a>
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i>
						<span class="hidden-phone">
							<?php echo $this->session->userdata('full_name'); ?>
						</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php $AdminID =  $this->session->userdata('admin_id'); ?>
						<li><a href="<?= base_url('Super_admin/ChangePassword/'.$AdminID); ?>">Change Password</a></li>
						<li class="divider"></li>
                        <li><a href="<?= base_url('Super_admin/logout'); ?>">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Total Review Control Panel</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url('Super_admin/');?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>

                        <li><a class="ajax-link" href="<?php echo base_url('Super_admin/manageAdmin');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage Admin</span></a></li>

                        <li><a class="ajax-link" href="<?php echo base_url('Review_type/add_type');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Type</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url('Review_type/'); ?>"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Type</span></a></li> 

						<li><a class="ajax-link" href="<?php echo base_url('Review/add_review');?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Review</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url('Review/');?>"><i class="icon-font"></i><span class="hidden-tablet"> Manage Review</span></a></li>

						<li><a class="ajax-link" href="<?php echo base_url('Super_admin/manageUser');?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage User</span></a></li>
						
						<li class="nav-header hidden-tablet">Sample Section</li>
						<!-- <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
                <?php echo $admin_maincontent; ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">Ã—</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="https://branded.me/shagor" target="_blank">Mr Perfect</a>&nbsp;<?= date('Y'); ?></p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">U-Turn Tech Ltd</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()?>assets/admin/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()?>assets/admin/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()?>assets/admin/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()?>assets/admin/js/charisma.js"></script>
	
		
</body>
</html>



<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-6 welcome-left pr-lg-5">
				<div class="panel panel-info" style="border:1px solid #e2e2e2;padding: 10px;">
					<?php 
					    if(!empty($message)){
					?>
					    <div class="alert alert-block alert-success">
					        <button type="button" class="close" data-dismiss="alert">
					            <i class="ace-icon fa fa-times"></i>
					        </button>

					        <i class="ace-icon fa fa-check green"></i>
					        <?php echo $message; ?>
					    </div>

					<?php } ?>
				    <div class="panel-heading" style="background: #2DA2BF; color: #fff;padding: 10px;"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
				        Please Login
				    </div>
				    <div class="panel-body">
				        <?php
				            $message = $this->session->userdata('message');
				            if (isset($message)) {
				                echo '<div class="alert alert-danger">' . $message . "</div>";
				                $this->session->unset_userdata('message');
				            }
				        ?>
				        <form class="form-vertical" action="<?php print base_url('Welcome/check_user_login');?>" method="post">
				            <div class="form-group">
				                <label for="email">Username</label>
				                <input  type="text" value="" name="username" class="form-control" placeholder="Enter your username" required>
				            </div>
				            <div class="form-group">
				                <label for="password">Password</label>
				                <input type="password" value="" name="password" class="form-control" placeholder="Enter your password" required> 
				            </div>
				            <div class="form-group">
				                <button class="btn btn-danger" type="submit" name="login">Login</button>
				                &nbsp;<a href="<?= base_url('Welcome/UserRegistration');?>">Need an Account?</a>
				            </div>
				        </form> 

				    </div>
				</div>
			</div>
			<div class="col-lg-6 welcome-right text-center mt-lg-0 mt-5">
				<img src="<?= base_url('assets/frontend/');?>images/lock.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
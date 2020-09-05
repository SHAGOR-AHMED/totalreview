

<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-8 welcome-left pr-lg-5">
				<div class="panel panel-info" style="border:1px solid #e2e2e2;padding: 10px;">
				    <div class="panel-heading" style="background: #2DA2BF; color: #fff;padding: 10px;"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
				        Please Registration here
				    </div>
				    <div class="panel-body">
				        <?php
				            $message = $this->session->userdata('message');
				            if (isset($message)) {
				                echo '<div class="alert alert-danger">' . $message . "</div>";
				                $this->session->unset_userdata('message');
				            }
				        ?>
				        <form class="form-vertical" action="<?php print base_url('Welcome/save_user');?>" method="post">
				            <div class="form-group">
				                <label for="email">Full Name</label>
				                <input  type="text" value="" name="full_name" class="form-control" placeholder="Enter your first name" required>
				                <div class="help-block"><?php echo form_error('full_name'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="email">Mobile No</label>
				                <input  type="text" value="" name="mobile_no" class="form-control" placeholder="Enter your mobile number" required>
				                <div class="help-block"><?php echo form_error('mobile_no'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="email">Email</label>
				                <input  type="email" value="" name="email" class="form-control" placeholder="Enter your E-mail">
				            </div>

				            <div class="form-group">
				                <label for="email">Username</label>
				                <input  type="text" value="" name="username" class="form-control" placeholder="Enter your username" required>
				                <div class="help-block"><?php echo form_error('username'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="password">Password</label>
				                <input type="password" value="" name="password" class="form-control" placeholder="Enter your password" required> 
				                <div class="help-block"><?php echo form_error('password'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="password">Confirm Password</label>
				                <input type="password" value="" name="con_password" class="form-control" placeholder="Enter confirm password" required> 
				                <div class="help-block"><?php echo form_error('con_password'); ?></div>
				            </div>

				            <div class="form-group">
				                <button class="btn btn-success" type="submit" name="login">Submit</button>
				            </div>
				        </form> 

				    </div>
				</div>
			</div>
			<div class="col-lg-4 welcome-right text-center mt-lg-0 mt-5">
				<img src="<?= base_url('assets/frontend/');?>images/lock.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
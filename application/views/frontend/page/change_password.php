

<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-6 welcome-left pr-lg-5">
				<div class="panel panel-info" style="border:1px solid #e2e2e2;padding: 10px;">
				    <div class="panel-heading" style="background: #2DA2BF; color: #fff;padding: 10px;"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
				        Change your password
				    </div>

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

				    <div class="panel-body">
				        <form class="form-vertical" action="<?php print base_url('User/update_password');?>" method="post">
				        	<br>
				            <div class="form-group">
				                <label for="password">Old Password</label>
				                <input type="password" value="" name="old_password" class="form-control" placeholder="Enter your old password" required> 
				            </div>

				            <div class="form-group">
				                <label for="password">New Password</label>
				                <input type="password" value="" name="new_password" class="form-control" placeholder="Enter your New password" required> 
				            </div>

				            <div class="form-group">
				                <label for="password">Confirm Password</label>
				                <input type="password" value="" name="confirm_password" class="form-control" placeholder="Re-type password" required> 
				            </div>

				            <input type="hidden" value="<?= $userID ?>" name="user_id" class="form-control"> 

				            <div class="form-group">
				                <button class="btn btn-success" type="submit">Change Password</button>
				            </div>
				        </form> 

				    </div>
				</div>
			</div>
			<div class="col-lg-6 welcome-right text-center mt-lg-0 mt-5">
				<img src="<?= base_url('assets/frontend/');?>images/abt.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
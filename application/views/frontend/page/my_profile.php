

<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-10 offset-sm-1 welcome-left pr-lg-5">
				<div class="panel panel-info" style="border:1px solid #e2e2e2;padding: 10px;">
				    <div class="panel-heading" style="background: #2DA2BF; color: #fff;padding: 10px; text-align: center;">
				        My Profile
				    </div>
				    <div class="panel-body">
				        <?php
				            $message = $this->session->userdata('message');
				            if (isset($message)) {
				                echo '<div class="alert alert-danger">' . $message . "</div>";
				                $this->session->unset_userdata('message');
				            }
				        ?>
				        <form class="form-vertical" action="<?php print base_url('User/update_user');?>" method="post">
				        	<br>
				            <div class="form-group">
				                <label for="email">Full Name</label>
				                <input  type="text" value="<?= $selected_info->full_name; ?>" name="full_name" class="form-control" placeholder="Enter your first name" required>
				            </div>

				            <div class="form-group">
				                <label for="email">Mobile No</label>
				                <input  type="text" value="<?= $selected_info->mobile_no; ?>" name="mobile_no" class="form-control" placeholder="Enter your mobile number" required>
				            </div>

				            <div class="form-group">
				                <label for="email">Email</label>
				                <input  type="email" value="<?= $selected_info->email; ?>" name="email" class="form-control" placeholder="Enter your E-mail">
				            </div>

				            <div class="form-group">
				                <label for="email">Username</label>
				                <input  type="text" value="<?= $selected_info->username; ?>" name="username" class="form-control" placeholder="Enter your username" required>
				            </div>

				            <input  type="hidden" value="<?= $selected_info->user_id; ?>" name="user_id" class="form-control">

				            <div class="form-group">
				                <button class="btn btn-success" type="submit" name="login">Update</button>
				            </div>
				        </form> 

				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-10  offset-sm-1 welcome-left pr-lg-5">
				<div class="panel panel-info" style="border:1px solid #e2e2e2;padding: 10px;">
				    <div class="panel-heading" style="background: #2DA2BF; color: #fff;padding: 10px; text-align: center; text-transform: uppercase;">
				        Post your review here
				    </div>
				    <div class="panel-body">
				        <br>
				        <form class="form-vertical" action="<?php print base_url('User/save_review');?>" method="post" enctype="multipart/form-data">
				            <div class="form-group">
				                <label for="email">Review Type</label>
				                <select name="review_type" class="form-control">
	                                <option value="0">Select Type...</option>
	                                <?php getAlltype(); ?>
	                            </select>
				            </div>

				            <div class="form-group">
				                <label for="email">Review Title</label>
				                <input  type="text" value="" name="review_title" class="form-control" placeholder="Enter review title" required>
				                <div class="help-block"><?php echo form_error('review_title'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="email">Review Description</label>
				                <textarea name="description"  class="form-control" id="textarea2" rows="3"></textarea>
				                <div class="help-block"><?php echo form_error('description'); ?></div>
				            </div>

				            <div class="form-group">
				                <label for="email">Upload Image</label>
				                <input type="file" class="form-control" name="photo" >
				            </div>

				            <div class="form-group">
				                <label for="email">Upload Video</label>
				                <input type="file" class="form-control" name="video_link" >
				            </div>

				            <div class="form-group">
				                <button class="btn btn-success" type="submit">Save Review</button>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
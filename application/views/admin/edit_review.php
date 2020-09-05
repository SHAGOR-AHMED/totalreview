<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Review</h2>
            <h3>
                <?php
                    $msg=$this->session->userdata('message');
                    if($msg){
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="editReview" id="editReview" class="form-horizontal" action="<?php echo base_url('Review/update_review');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Review Type</label>
                        <div class="controls">
                            <select name="review_type">
                                <option value="0">Select Type...</option>
                                <option value="1">Product</option>
                                <option value="2">Service</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Review Title</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="review_title" value="<?= $review_info->review_title ?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Review Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" id="textarea2" rows="3">
                                <?= $review_info->description ?>
                            </textarea>
                        </div>
                    </div>

                     <img src="<?= base_url($review_info->photo);?>" height="100px" width="100px">

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Video Link(Optional)</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="video_link" value="<?= $review_info->video_link ?>" >
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="review_id" value="<?= $review_info->review_id ?>" >

                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->

<script type="text/javascript">
    document.forms['editReview'].elements['review_type'].value='<?php echo $review_info->review_type?>';
</script>
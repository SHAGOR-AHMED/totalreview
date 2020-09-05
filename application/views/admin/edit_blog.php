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
            <h2><i class="icon-edit"></i>Add Blog</h2>
            <h3>
                <?php
                    $msg=$this->session->userdata('message');
                    if($msg)
                    {
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
            <form name="edit_blog" id="edit_blog" class="form-horizontal" action="<?php echo base_url('SuperAdmin/update_blog');?>" method="post">
                <fieldset>
                    <legend>Add Blog</legend>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="blog_title" value="<?php echo $blog_info->blog_title; ?>" >
                            <input type="hidden" name="id" value="<?php echo $blog_info->id?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <select name="cat_id">
                                <option>Select Category Name.....</option>
                                <?php
                                    foreach($all_published_category as $v_category){ ?>

                                    <option value="<?php echo $v_category->cat_id;?>"><?php echo $v_category->cat_name;?></option>

                                <?php } ?>
                            </select>
                            
                        </div>
                    </div>
                   
    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_short_des" id="textarea2" rows="3"><?php echo $blog_info->blog_short_des;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_long_des" id="textarea2" rows="3"><?php echo $blog_info->blog_long_des;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status...</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->

<script type="text/javascript">

   document.forms['edit_blog'].elements['publication_status'].value='<?php echo $blog_info->publication_status; ?>';
   document.forms['edit_blog'].elements['cat_id'].value='<?php echo $blog_info->cat_id; ?>';
   
</script>
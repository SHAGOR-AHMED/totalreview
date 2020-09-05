<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Members</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Blog Title</th>
                        <!-- <th>Calegory Id</th> -->
                        <!-- <th>Short Des</th> -->
                        <th> Blog Long Des</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        $i=1;
                        foreach($all_blog as $v_blog){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="center"><?php echo $v_blog->blog_title;?></td>
                        <!-- <td class="center"><?php echo $v_blog->cat_id;?></td>
                        <td class="center"><?php echo $v_blog->blog_short_des;?></td> -->
                        <td class="center"><?php echo $v_blog->blog_long_des;?></td>
                        <td class="center">
                            <?php 
                                if($v_blog->publication_status==1){
                                    echo 'Published';
                                }else{
                                    echo 'Unpublished';
                                }
                            ?>
                        
                        </td>
                        <td class="center">
                            <?php
                                if($v_blog->publication_status==1){ ?>

                                <a class="btn btn-success" href="<?php echo base_url();?>SuperAdmin/unpublished_blog/<?php echo $v_blog->id?>">
                                    <i class="icon-lock icon-white"></i>  
                                </a>

                            <?php }else{ ?>

                                <a class="btn btn-danger" href="<?php echo base_url();?>SuperAdmin/published_blog/<?php echo $v_blog->id?>">
                                    <i class="icon-ok icon-white"></i>  
                                </a>

                            <?php } ?>

                            <a class="btn btn-info" href="<?php echo base_url();?>SuperAdmin/edit_blog/<?php echo $v_blog->id?>" title="Edit">
                                <i class="icon-edit icon-white"></i>                                              
                            </a>

                            <a class="btn btn-danger" href="<?php echo base_url();?>SuperAdmin/delete_blog/<?php echo $v_blog->id?>" title="Delete" onclick="return checkDelete();">
                                <i class="icon-trash icon-white"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
			<div style="text-align:center;"><?php echo $this->pagination->create_links(); ?></div>
        </div>
    </div><!--/span-->
</div><!--/row-->


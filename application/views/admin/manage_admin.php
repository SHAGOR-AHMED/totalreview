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

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><a href="<?= base_url('Super_admin/create'); ?>"><i class="icon-user"></i>&nbsp;Add New Admin</a></h2>
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
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        $i=1;
                        foreach($all_admin as $val){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="center"><?php echo $val->full_name;?></td>
                        <td class="center"><?php echo $val->mobile;?></td>
                        <td class="center"><?php echo $val->admin_email;?></td>
                        <td class="center"><?php selectedStatus($val->status);?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?php echo base_url();?>Super_admin/edit_admin/<?php echo $val->admin_id?>" title="Edit">
                                <i class="icon-edit icon-white"></i>                                
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div><!--/span-->
</div><!--/row-->
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
            <h2><i class="icon-user"></i> All User's</h2>
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
                        <th>Mobile No</th>
                        <th>Email</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        $i=1;
                        foreach($all_user as $val){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="center"><?php echo $val->full_name;?></td>
                        <td class="center"><?php echo $val->mobile_no;?></td>
                        <td class="center"><?php echo $val->email;?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div><!--/span-->
</div><!--/row-->
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
            <h2><i class="icon-edit"></i> Update Admin Information</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="editAdmin" id="editAdmin" class="form-horizontal" action="<?php echo base_url('Super_admin/update_admin');?>" method="post">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Full Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="full_name" value="<?= $admin_info->full_name; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mobile</label>
                        <div class="controls">
                            <input type="number" class="span6 typeahead" name="mobile" value="<?= $admin_info->mobile; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Email</label>
                        <div class="controls">
                            <input type="email" class="span6 typeahead" name="admin_email" value="<?= $admin_info->admin_email; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Status</label>
                        <div class="controls">
                            <select name="status">
                                <option value="-1">Select Status...</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="admin_id" value="<?= $admin_info->admin_id; ?>">

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
    document.forms['editAdmin'].elements['status'].value='<?php echo $admin_info->status?>';
</script>
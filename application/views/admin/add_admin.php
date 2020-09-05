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
            <h2><i class="icon-edit"></i> Add New Admin</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('Super_admin/save_admin');?>" method="post">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Full Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="full_name" value="">
                            <div class="help-block"><?php echo form_error('full_name'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mobile</label>
                        <div class="controls">
                            <input type="number" class="span6 typeahead" name="mobile" value="">
                            <div class="help-block"><?php echo form_error('mobile'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Email</label>
                        <div class="controls">
                            <input type="email" class="span6 typeahead" name="admin_email" value="">
                            <div class="help-block"><?php echo form_error('admin_email'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Password</label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" name="admin_pass" value="">
                            <div class="help-block"><?php echo form_error('admin_pass'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Confirm Password</label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" name="confirm_password" value="">
                            <div class="help-block"><?php echo form_error('confirm_password'); ?></div>
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
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
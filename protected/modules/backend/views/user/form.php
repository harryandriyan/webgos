<div class="row">
	<div class="col-md-12">
		<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="save" id="form_user">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="user_name" value="<?php echo $type=='edit' ? $data->user_name : ''; ?>" />
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="user_uname" value="<?php echo $type=='edit' ? $data->user_uname : ''; ?>" />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="user_email" value="<?php echo $type=='edit' ? $data->user_email : ''; ?>" />
                </div>
                <?php if($type=='add'): ?>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="user_pass" value="" />
                </div>
            	<?php endif; ?>
                <div class="form-group">
                  <label>Group</label>
                  <select class="form-control" name="group_id">
                  	<?php foreach ($group as $g): ?>
                    <option <?php echo (($type=='edit') && ($g['group_id']==$data->group_id)) ? 'selected' : ''; ?> value="<?php echo $g['group_id'] ?>"><?php echo $g['group_uraian'] ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="user_status">
                  	<option <?php echo (($type=='edit') && ($data->user_status=='active')) ? 'selected' : ''; ?> value="active">active</option>
                  	<option <?php echo (($type=='edit') && ($data->user_status=='nonactive')) ? 'selected' : ''; ?> value="nonactive">non active</option>
                  </select>
                </div>
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <input type="hidden" name="id" value="<?php echo $type=='edit' ? $data->user_id : ''; ?>">
              </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
	            <button onclick="submitform()" class="btn btn-success pull-right"><i class="fa fa-check"></i> Save</button>
	          </div>
          </div><!-- /.box -->
    </div>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
function submitform () {
	$("#form_user").submit();
}
</script>

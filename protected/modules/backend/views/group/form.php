<div class="row">
	<div class="col-md-12">
		<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="save" id="form_group">
                <div class="form-group">
                  <label>Group</label>
                  <input type="text" class="form-control" name="group_uraian" value="<?php echo $type=='edit' ? $data->group_uraian : ''; ?>" />
                </div>
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <input type="hidden" name="id" value="<?php echo $type=='edit' ? $data->group_id : ''; ?>">
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
	$("#form_group").submit();
}
</script>

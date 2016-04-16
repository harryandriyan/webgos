<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header">
	      <h3 class="box-title">Data User</h3>
	    </div><!-- /.box-header -->
	    <div class="box-body">
	      <table id="table" class="table table-bordered table-hovered table-striped">
	        <thead>
	          <tr>
	          	<th>No</th>
	            <th>Name</th>
	            <th>Username</th>
	            <th>Email</th>
	            <th>Status</th>
	            <th></th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php $no=1; foreach ($data['user'] as $user): ?>
	          <tr>
	          	<td><?php echo $no++; ?></td>
	            <td><?php echo $user['user_name'] ?></td>
	            <td><?php echo $user['user_uname'] ?></td>
	            <td><?php echo $user['user_email'] ?></td>
	            <td><?php echo $user['user_status'] ?></td>
	            <td>
	            	<a class="btn btn-success" href="user/edit?id=<?php echo $user['user_id']; ?>"><i class="fa fa-pencil"></i></a>
					<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="user/delete?id=<?php echo $user['user_id']; ?>"><i class="fa fa-trash-o"></i></a>
	            </td>
	          </tr>
	        <?php endforeach; ?>
	        </tbody>
	        <tfoot>
	          <tr>
	          	<th>No</th>
	            <th>Name</th>
	            <th>Username</th>
	            <th>Email</th>
	            <th>Status</th>
	            <th></th>
	          </tr>
	        </tfoot>
	      </table>
	    </div><!-- /.box-body -->
	  </div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#table').DataTable();
</script>
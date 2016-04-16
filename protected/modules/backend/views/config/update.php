<?php
/* @var $this ConfigController */
/* @var $model Config */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	$model->config_id=>array('view','id'=>$model->config_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Config', 'url'=>array('index')),
	array('label'=>'Create Config', 'url'=>array('create')),
	array('label'=>'View Config', 'url'=>array('view', 'id'=>$model->config_id)),
	array('label'=>'Manage Config', 'url'=>array('admin')),
);
?>

<h1>Update Config <?php echo $model->config_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
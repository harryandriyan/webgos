<?php

class GroupController extends Controller
{
	public function actionIndex()
	{
		$data['group'] = Group::model()->findAll();
		$this->render('index', array('data'=>$data));
	}

	public function actionAdd()
	{
		$type = "add";
		$data = array();
		$this->render('form', array('data'=>$data));
	}

	public function actionEdit()
	{
		$type = "edit";
		$id = (int) trim($_REQUEST['id']);
		$data = Group::model()->findByPk($id);
		$this->render('form', array('data'=>$data,'type'=>$type));
	}

	public function actionSave()
	{
		if(!Yii::app()->request->isPostRequest)
			throw new CHttpException(400,'Error, please do not request this page again');
		$id = trim($_REQUEST['id']);
		$type = trim($_REQUEST['type']);
		$group_uraian = trim($_REQUEST['group_uraian']);

		if ($type=='add') {
			$data = new Group;
		}
		elseif ($type=='edit') {
			$data = Group::model()->findByPk($id);
		}
		else {
			echo "Error occured, about the type";
			Yii::app()->end();
		}

		$data->group_uraian = $group_uraian;

		if ($data->save()) {
			$this->redirect('../../backend/group');
		}
		else {
			echo "Failed to save data";
		}

	}

	public function actionDelete()
	{
		$data = Group::model()->findByPk((int) trim($_REQUEST['id']));

		if ($data) {
			$data->delete() ? $this->redirect('../../backend/group') : '';
		}
		else {
			echo "notfound";
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
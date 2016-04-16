<?php

class UserController extends Controller
{
	public function actionIndex()
	{
		$data['user'] = User::model()->findAll();
		$this->render('index', array('data'=>$data));
	}

	public function actionAdd()
	{
		$type = "add";
		$data = array();
		$group = Group::model()->findAll();
		$this->render('form', array('data'=>$data,'type'=>$type, 'group'=>$group));
	}

	public function actionEdit()
	{
		$type = "edit";
		$id = (int) trim($_REQUEST['id']);
		$data = User::model()->findByPk($id);
		$group = Group::model()->findAll();
		$this->render('form', array('data'=>$data,'type'=>$type, 'group'=>$group));
	}

	public function actionSave()
	{
		if(!Yii::app()->request->isPostRequest)
			throw new CHttpException(400,'Error, please do not request this page again');
		$id = trim($_REQUEST['id']);
		$type = trim($_REQUEST['type']);
		$group_id = trim($_REQUEST['group_id']);
		$user_name = trim($_REQUEST['user_name']);
		$user_uname = trim($_REQUEST['user_uname']);
		$user_pass = $type=='add' ? md5(trim($_REQUEST['user_pass'])) : null;
		$user_email = trim($_REQUEST['user_email']);
		$user_status = trim($_REQUEST['user_status']);

		if ($type=='add') {
			$data = new User;
			$data->user_pass = $user_pass;
		}
		elseif ($type=='edit') {
			$data = User::model()->findByPk($id);
		}
		else {
			echo "Error occured, about the type";
			Yii::app()->end();
		}

		$data->group_id = $group_id;
		$data->user_name = $user_name;
		$data->user_uname = $user_uname;
		$data->user_email = $user_email;
		$data->user_status = $user_status;

		if ($data->save()) {
			$this->redirect('../../backend/user');
		}
		else {
			echo "Failed to save data";
		}

	}

	public function actionDelete()
	{
		$data = User::model()->findByPk((int) trim($_REQUEST['id']));

		if ($data) {
			$data->delete() ? $this->redirect('../../backend/user') : '';
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
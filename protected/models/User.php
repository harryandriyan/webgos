<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property integer $group_id
 * @property string $user_name
 * @property string $user_uname
 * @property string $user_pass
 * @property string $user_email
 * @property string $user_foto
 * @property string $user_created
 * @property string $user_updated
 * @property string $user_status
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id', 'required'),
			array('group_id', 'numerical', 'integerOnly'=>true),
			array('user_name, user_pass, user_email, user_foto', 'length', 'max'=>255),
			array('user_uname, user_status', 'length', 'max'=>30),
			array('user_created, user_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, group_id, user_name, user_uname, user_pass, user_email, user_foto, user_created, user_updated, user_status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'group_id' => 'Group',
			'user_name' => 'User Name',
			'user_uname' => 'User Uname',
			'user_pass' => 'User Pass',
			'user_email' => 'User Email',
			'user_foto' => 'User Foto',
			'user_created' => 'User Created',
			'user_updated' => 'User Updated',
			'user_status' => 'User Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_uname',$this->user_uname,true);
		$criteria->compare('user_pass',$this->user_pass,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_foto',$this->user_foto,true);
		$criteria->compare('user_created',$this->user_created,true);
		$criteria->compare('user_updated',$this->user_updated,true);
		$criteria->compare('user_status',$this->user_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

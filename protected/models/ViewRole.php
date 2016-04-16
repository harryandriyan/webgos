<?php

/**
 * This is the model class for table "view_role".
 *
 * The followings are the available columns in table 'view_role':
 * @property string $privilege_id
 * @property string $group_uraian
 * @property string $menu_uraian
 * @property integer $menu_idparent
 * @property string $menu_type
 * @property string $menu_link
 * @property string $privilege_show
 * @property string $menu_icon
 * @property integer $menu_id
 * @property string $group_id
 */
class ViewRole extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'view_role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_id, group_id', 'required'),
			array('menu_idparent, menu_id', 'numerical', 'integerOnly'=>true),
			array('privilege_id', 'length', 'max'=>11),
			array('group_uraian, menu_uraian, menu_link', 'length', 'max'=>255),
			array('menu_type', 'length', 'max'=>15),
			array('privilege_show', 'length', 'max'=>10),
			array('menu_icon', 'length', 'max'=>100),
			array('group_id', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('privilege_id, group_uraian, menu_uraian, menu_idparent, menu_type, menu_link, privilege_show, menu_icon, menu_id, group_id', 'safe', 'on'=>'search'),
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
			'privilege_id' => 'Privilege',
			'group_uraian' => 'Group Uraian',
			'menu_uraian' => 'Menu Uraian',
			'menu_idparent' => 'Menu Idparent',
			'menu_type' => 'Menu Type',
			'menu_link' => 'Menu Link',
			'privilege_show' => 'Privilege Show',
			'menu_icon' => 'Menu Icon',
			'menu_id' => 'Menu',
			'group_id' => 'Group',
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

		$criteria->compare('privilege_id',$this->privilege_id,true);
		$criteria->compare('group_uraian',$this->group_uraian,true);
		$criteria->compare('menu_uraian',$this->menu_uraian,true);
		$criteria->compare('menu_idparent',$this->menu_idparent);
		$criteria->compare('menu_type',$this->menu_type,true);
		$criteria->compare('menu_link',$this->menu_link,true);
		$criteria->compare('privilege_show',$this->privilege_show,true);
		$criteria->compare('menu_icon',$this->menu_icon,true);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('group_id',$this->group_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ViewRole the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "menu".
 *
 * The followings are the available columns in table 'menu':
 * @property string $menu_id
 * @property integer $menu_idparent
 * @property string $menu_icon
 * @property string $menu_link
 * @property string $menu_uraian
 * @property string $menu_type
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_idparent', 'numerical', 'integerOnly'=>true),
			array('menu_icon', 'length', 'max'=>100),
			array('menu_link, menu_uraian', 'length', 'max'=>255),
			array('menu_type', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('menu_id, menu_idparent, menu_icon, menu_link, menu_uraian, menu_type', 'safe', 'on'=>'search'),
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
			'menu_id' => 'Menu',
			'menu_idparent' => 'Menu Idparent',
			'menu_icon' => 'Menu Icon',
			'menu_link' => 'Menu Link',
			'menu_uraian' => 'Menu Uraian',
			'menu_type' => 'Menu Type',
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

		$criteria->compare('menu_id',$this->menu_id,true);
		$criteria->compare('menu_idparent',$this->menu_idparent);
		$criteria->compare('menu_icon',$this->menu_icon,true);
		$criteria->compare('menu_link',$this->menu_link,true);
		$criteria->compare('menu_uraian',$this->menu_uraian,true);
		$criteria->compare('menu_type',$this->menu_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

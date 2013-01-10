<?php

/**
 * This is the model class for table "stock_history".
 *
 * The followings are the available columns in table 'stock_history':
 * @property integer $id
 * @property integer $medicine_id
 * @property integer $amount
 * @property string $last_update
 * @property integer $officer
 *
 * The followings are the available model relations:
 * @property Medicine $medicine
 */
class StockHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medicine_id, amount, officer', 'required'),
			array('medicine_id, amount, officer', 'numerical', 'integerOnly'=>true),
			array('last_update', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, medicine_id, amount, last_update, officer', 'safe', 'on'=>'search'),
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
			'medicine' => array(self::BELONGS_TO, 'Medicine', 'medicine_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'medicine_id' => 'Medicine',
			'amount' => 'Amount',
			'last_update' => 'Last Update',
			'officer' => 'Officer',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('medicine_id',$this->medicine_id);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('officer',$this->officer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
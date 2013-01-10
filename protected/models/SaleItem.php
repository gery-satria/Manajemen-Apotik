<?php

/**
 * This is the model class for table "sale_item".
 *
 * The followings are the available columns in table 'sale_item':
 * @property integer $id
 * @property integer $sale_id
 * @property integer $medicine_id
 * @property integer $amount
 * @property integer $price
 * @property integer $costumer_id
 *
 * The followings are the available model relations:
 * @property Medicine $medicine
 * @property Sale $sale
 * @property Users $costumer
 */
class SaleItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SaleItem the static model class
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
		return 'sale_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sale_id, medicine_id, amount, price, costumer_id', 'required'),
			array('sale_id, medicine_id, amount, price, costumer_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sale_id, medicine_id, amount, price, costumer_id', 'safe', 'on'=>'search'),
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
			'sale' => array(self::BELONGS_TO, 'Sale', 'sale_id'),
			'costumer' => array(self::BELONGS_TO, 'Users', 'costumer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sale_id' => 'Sale',
			'medicine_id' => 'Medicine',
			'amount' => 'Amount',
			'price' => 'Price',
			'costumer_id' => 'Costumer',
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
		$criteria->compare('sale_id',$this->sale_id);
		$criteria->compare('medicine_id',$this->medicine_id);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('price',$this->price);
		$criteria->compare('costumer_id',$this->costumer_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
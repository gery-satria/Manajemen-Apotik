<?php

/**
 * This is the model class for table "purchase_item".
 *
 * The followings are the available columns in table 'purchase_item':
 * @property integer $id
 * @property integer $purchase_id
 * @property integer $medicine_id
 * @property integer $amount
 * @property integer $price_per_unit
 * @property integer $supplier_id
 *
 * The followings are the available model relations:
 * @property Medicine $medicine
 * @property Purchase $purchase
 * @property Supplier $supplier
 */
class PurchaseItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseItem the static model class
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
		return 'purchase_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purchase_id, medicine_id, amount, price_per_unit, supplier_id', 'required'),
			array('purchase_id, medicine_id, amount, price_per_unit, supplier_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, purchase_id, medicine_id, amount, price_per_unit, supplier_id', 'safe', 'on'=>'search'),
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
			'purchase' => array(self::BELONGS_TO, 'Purchase', 'purchase_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'purchase_id' => 'Purchase',
			'medicine_id' => 'Medicine',
			'amount' => 'Amount',
			'price_per_unit' => 'Price Per Unit',
			'supplier_id' => 'Supplier',
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
		$criteria->compare('purchase_id',$this->purchase_id);
		$criteria->compare('medicine_id',$this->medicine_id);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('price_per_unit',$this->price_per_unit);
		$criteria->compare('supplier_id',$this->supplier_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
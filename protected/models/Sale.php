<?php

/**
 * This is the model class for table "sale".
 *
 * The followings are the available columns in table 'sale':
 * @property integer $id
 * @property string $sale_date
 * @property integer $total_item
 * @property integer $total_price
 * @property integer $officer_id
 *
 * The followings are the available model relations:
 * @property SaleItem[] $saleItems
 */
class Sale extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sale the static model class
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
		return 'sale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_item, total_price, officer_id', 'required'),
			array('total_item, total_price, officer_id', 'numerical', 'integerOnly'=>true),
			array('sale_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sale_date, total_item, total_price, officer_id', 'safe', 'on'=>'search'),
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
			'saleItems' => array(self::HAS_MANY, 'SaleItem', 'sale_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sale_date' => 'Sale Date',
			'total_item' => 'Total Item',
			'total_price' => 'Total Price',
			'officer_id' => 'Officer',
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
		$criteria->compare('sale_date',$this->sale_date,true);
		$criteria->compare('total_item',$this->total_item);
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('officer_id',$this->officer_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
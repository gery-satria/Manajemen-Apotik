<?php

/**
 * This is the model class for table "medicine".
 *
 * The followings are the available columns in table 'medicine':
 * @property integer $id
 * @property string $name
 * @property integer $unit_id
 * @property integer $sale_price
 * @property integer $current_stock
 * @property integer $member_discount
 *
 * The followings are the available model relations:
 * @property Unit $unit
 * @property MedicineSupplier[] $medicineSuppliers
 * @property PurchaseItem[] $purchaseItems
 * @property SaleItem[] $saleItems
 * @property StockHistory[] $stockHistories
 */
class Medicine extends CActiveRecord
{
        var $unitName;
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Medicine the static model class
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
		return 'medicine';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, unit_id, sale_price, current_stock, member_discount', 'required'),
			array('unit_id, sale_price, current_stock, member_discount', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, unit_id, sale_price, current_stock, member_discount, unitName', 'safe', 'on'=>'search'),
                        array('name', 'match', 'pattern'=>'/^[a-zA-Z.-]/', 'on'=>array('insert','update'), 'message'=>'Name must be a caracter.'),
                        array('unit_id,', 'unique', 'on'=>'insert', 'message'=>'This value already exists!'),
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
			'unit' => array(self::BELONGS_TO, 'Unit', 'unit_id'),
			'medicineSuppliers' => array(self::HAS_MANY, 'MedicineSupplier', 'medicine_id'),
			'purchaseItems' => array(self::HAS_MANY, 'PurchaseItem', 'medicine_id'),
			'saleItems' => array(self::HAS_MANY, 'SaleItem', 'medicine_id'),
			'stockHistories' => array(self::HAS_MANY, 'StockHistory', 'medicine_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'unit_id' => 'Unit',
			'sale_price' => 'Sale Price',
			'current_stock' => 'Current Stock',
			'member_discount' => 'Member Discount',
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
		$criteria->compare('t.name',$this->name,true);
		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('sale_price',$this->sale_price);
		$criteria->compare('current_stock',$this->current_stock);
		$criteria->compare('member_discount',$this->member_discount);
                $criteria->compare('unit.name',$this->unitName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getMedicine()
        {
                return $this->name;
        }
}
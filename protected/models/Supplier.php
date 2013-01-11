<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property integer $id
 * @property string $company_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $contact_person
 *
 * The followings are the available model relations:
 * @property MedicineSupplier[] $medicineSuppliers
 * @property PurchaseItem[] $purchaseItems
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplier the static model class
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
		return 'supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, address, phone, email, contact_person', 'required'),
			array('company_name, address, phone, email, contact_person', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, company_name, address, phone, email, contact_person', 'safe', 'on'=>'search'),
                        array('company_name', 'match', 'pattern'=>'/^[a-zA-Z-.]/', 'on'=>array('insert','update'), 'message'=>'Company name must be a character.'),
                        array('phone', 'match', 'pattern'=>'/^[0-9()-]/', 'on'=>array('insert','update'), 'message'=>'Phone must be a phone number.'),
                        array('email','email'),
                        array('contact_person', 'match', 'pattern'=>'/^[a-zA-Z]/', 'on'=>array('insert','update'), 'message'=>'Contact person must be a character.'),
                        array('company_name,', 'unique', 'on'=>'insert', 'message'=>'This value already exists!'),
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
			'medicineSuppliers' => array(self::HAS_MANY, 'MedicineSupplier', 'supplier_id'),
			'purchaseItems' => array(self::HAS_MANY, 'PurchaseItem', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company_name' => 'Company Name',
			'address' => 'Address',
			'phone' => 'Phone',
			'email' => 'Email',
			'contact_person' => 'Contact Person',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact_person',$this->contact_person,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getSupplier()
        {
                return $this->company_name;
        }
}
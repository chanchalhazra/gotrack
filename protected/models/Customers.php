<?php

/**
 * This is the model class for table "tbl_customers".
 *
 * The followings are the available columns in table 'tbl_customers':
 * @property integer $id
 * @property string $customerName
 * @property integer $customerOwnerId
 * @property string $customerStatus
 * @property string $industry
 * @property string $billingAddress
 * @property integer $billingPhone
 * @property string $customerType
 * @property string $shippingAddress
 * @property string $parentCustomer
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerName, customerOwnerId, customerType', 'required'),
			array('customerOwnerId, billingPhone', 'numerical', 'integerOnly'=>true),
			array('customerName, parentCustomer', 'length', 'max'=>50),
			array('customerStatus, industry', 'length', 'max'=>25),
			array('billingAddress, shippingAddress', 'length', 'max'=>100),
			array('customerType', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customerName, customerOwnerId, customerStatus, industry, billingAddress, billingPhone, customerType, shippingAddress, parentCustomer', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'customerName' => 'Customer Name',
			'customerOwnerId' => 'Customer Owner',
			'customerStatus' => 'Customer Status',
			'industry' => 'Industry',
			'billingAddress' => 'Billing Address',
			'billingPhone' => 'Billing Phone',
			'customerType' => 'Customer Type',
			'shippingAddress' => 'Shipping Address',
			'parentCustomer' => 'Parent Customer',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('customerName',$this->customerName,true);
		$criteria->compare('customerOwnerId',$this->customerOwnerId);
		$criteria->compare('customerStatus',$this->customerStatus,true);
		$criteria->compare('industry',$this->industry,true);
		$criteria->compare('billingAddress',$this->billingAddress,true);
		$criteria->compare('billingPhone',$this->billingPhone);
		$criteria->compare('customerType',$this->customerType,true);
		$criteria->compare('shippingAddress',$this->shippingAddress,true);
		$criteria->compare('parentCustomer',$this->parentCustomer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

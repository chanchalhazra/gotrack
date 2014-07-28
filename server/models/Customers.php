<?php

/**
 * This is the model class for table "tbl_customers".
 *
 * The followings are the available columns in table 'tbl_customers':
 * @property integer $id
 * @property string $name
 * @property integer $customer_owner_id
 * @property integer $account_manager_id
 * @property string $customer_status
 * @property string $industry
 * @property string $billing_address
 * @property integer $billing_phone
 * @property string $customer_type
 * @property string $shipping_address
 * @property string $parent_customer
 * @property integer $org_id
 */
class Customers extends CActiveRecord
{
	
    const Type_Customer =0;
    const Type_Prospect =1;
    const Type_Partner =2;
    const Type_Competitor =3;
    const Type_Investor =4;
    
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
			array('name, customer_owner_id, customer_type', 'required'),
			array('customer_owner_id,account_manager_id, billing_phone, org_id', 'numerical', 'integerOnly'=>true),
			array('name, parent_customer', 'length', 'max'=>50),
			array('customer_status, industry', 'length', 'max'=>25),
			array('billing_address, shipping_address', 'length', 'max'=>100),
			array('customer_type', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, customer_owner_id,account_manager_id, customer_status, industry, billing_address, billing_phone, customer_type, shipping_address, parent_customer, org_id', 'safe', 'on'=>'search'),
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
                    'owner'=>(array(self::BELONGS_TO, 'Users','customer_owner_id')),
                    'manager'=>(array(self::BELONGS_TO, 'Users','account_manager_id')),
                    'users' =>(array(self::MANY_MANY, 'Users', 'tbl_customer_user_assignment(customer_id, user_id)'))
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Customer Name',
			'customer_owner_id' => 'Customer Owner',
                        'account_manager_id' => 'Account Manager',
			'customer_status' => 'Customer Status',
			'industry' => 'Industry',
			'billing_address' => 'Billing Address',
			'billing_phone' => 'Billing Phone',
			'customer_type' => 'Customer Type',
			'shipping_address' => 'Shipping Address',
			'parent_customer' => 'Parent Customer',
                        'org_id' => 'Organization',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('customer_owner_id',$this->customer_owner_id);
                $criteria->compare('account_manager_id',$this->account_manager_id);
		$criteria->compare('customer_status',$this->customer_status,true);
		$criteria->compare('industry',$this->industry,true);
		$criteria->compare('billing_address',$this->billing_address,true);
		$criteria->compare('billing_phone',$this->billing_phone);
		$criteria->compare('customer_type',$this->customer_type,true);
		$criteria->compare('shipping_address',$this->shipping_address,true);
		$criteria->compare('parent_customer',$this->parent_customer,true);
                $criteria->compare('org_id',$this->org_id);

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
        
        public function getcustomer_type()
        {
            return array(
                self::Type_Customer =>'Customer',
                self::Type_Prospect => 'Prospect',
                self::Type_Partner => 'Partner',
                self::Type_Competitor=>'Competitor',
                self::Type_Investor=>'Investor',
                
            );
          
        }
          public function getProjectLead()
           {
              $usersArray = CHtml::listData($this->users, 'id', 'username');
              return $usersArray;
            }
            
            public function getCustomerTypetext()
            {
                $type=  $this->getcustomer_type;
                return (isset($type[$this->customer_type])? $type[$this->customer_type]:"unknown type ({$this->customer_type})");
            }
}

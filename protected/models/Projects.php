<?php

/**
 * This is the model class for table "tbl_projects".
 *
 * The followings are the available columns in table 'tbl_projects':
 * @property integer $project_id
 * @property string $projectName
 * @property string $projectDescription
 * @property integer $projectLeadId
 * @property integer $createUserId
 * @property integer $updateUserId
 * @property string $createDate
 * @property string $UpdateDate
 * @property string $projectType
 * @property integer $projectCustomerId
 *
 * The followings are the available model relations:
 * @property Users $updateUser
 * @property Users $createUser
 * @property Customers $projectCustomer
 * @property Users $projectLead
 */
class Projects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, project_lead_id, customer_id', 'required'),
			array('project_lead, create_user, update_user, customer_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description', 'length', 'max'=>250),
			array('projectType', 'length', 'max'=>25),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, project_lead_id, create_user, update_user, create_date, Update_date, type, customer_id', 'safe', 'on'=>'search'),
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
			'update_user' => array(self::BELONGS_TO, 'Users', 'update_user'),
			'create_user' => array(self::BELONGS_TO, 'Users', 'create_user'),
			'projectCustomer' => array(self::BELONGS_TO, 'Customers', 'customer_id'),
			'projectLead' => array(self::BELONGS_TO, 'Users', 'project_lead_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Project',
			'name' => 'Project Name',
			'description' => 'Project Description',
			'project_lead_ld' => 'Project Lead',
			'create_user' => 'Create User',
			'update_user' => 'Update User',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
			'type' => 'Project Type',
			'customer_id' => 'Project Customer',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('project_lead_id',$this->project_lead_id);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_user',$this->update_user);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('customer_id',$this->customer_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

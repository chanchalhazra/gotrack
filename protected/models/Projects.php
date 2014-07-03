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
			array('projectName, projectDescription, projectLeadId, projectCustomerId', 'required'),
			array('projectLeadId, createUserId, updateUserId, projectCustomerId', 'numerical', 'integerOnly'=>true),
			array('projectName', 'length', 'max'=>50),
			array('projectDescription', 'length', 'max'=>250),
			array('projectType', 'length', 'max'=>25),
			array('createDate, UpdateDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('project_id, projectName, projectDescription, projectLeadId, createUserId, updateUserId, createDate, UpdateDate, projectType, projectCustomerId', 'safe', 'on'=>'search'),
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
			'updateUser' => array(self::BELONGS_TO, 'Users', 'updateUserId'),
			'createUser' => array(self::BELONGS_TO, 'Users', 'createUserId'),
			'projectCustomer' => array(self::BELONGS_TO, 'Customers', 'projectCustomerId'),
			'projectLead' => array(self::BELONGS_TO, 'Users', 'projectLeadId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'projectName' => 'Project Name',
			'projectDescription' => 'Project Description',
			'projectLeadId' => 'Project Lead',
			'createUserId' => 'Create User',
			'updateUserId' => 'Update User',
			'createDate' => 'Create Date',
			'UpdateDate' => 'Update Date',
			'projectType' => 'Project Type',
			'projectCustomerId' => 'Project Customer',
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

		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('projectName',$this->projectName,true);
		$criteria->compare('projectDescription',$this->projectDescription,true);
		$criteria->compare('projectLeadId',$this->projectLeadId);
		$criteria->compare('createUserId',$this->createUserId);
		$criteria->compare('updateUserId',$this->updateUserId);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('UpdateDate',$this->UpdateDate,true);
		$criteria->compare('projectType',$this->projectType,true);
		$criteria->compare('projectCustomerId',$this->projectCustomerId);

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

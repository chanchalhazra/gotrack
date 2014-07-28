<?php

/**
 * This is the model class for table "tbl_task".
 *
 * The followings are the available columns in table 'tbl_task':
 * @property integer $id
 * @property integer $org_id
 * @property integer $project_id
 * @property string $name
 * @property string $description
 * @property integer $requestor
 * @property integer $performer
 * @property string $type
 * @property string $target_date
 * @property string $status
 * @property integer $isbilled
 * @property string $completion_date
 * @property string $duration
 * @property string $create_date
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $update_date
 * @property integer $att1
 * @property integer $att2
 * @property integer $att3
 * @property integer $att4
 * @property string $att5
 * @property string $att6
 * @property string $att7
 * @property string $att8
 * @property string $att9
 * @property string $att10
 *
 * The followings are the available model relations:
 * @property Subtask[] $subtasks
 * @property Users $requestor0
 * @property Users $createdBy
 * @property Organization $org
 * @property Users $performer0
 * @property Projects $project
 * @property Users $updatedBy
 */
class Task extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('org_id, project_id, name, description, type, status, isbilled', 'required'),
			array('org_id, project_id, requestor, performer, isbilled, created_by, updated_by, att1, att2, att3, att4', 'numerical', 'integerOnly'=>true),
			array('name, att5, att6, att7, att8, att9, att10', 'length', 'max'=>100),
			array('description', 'length', 'max'=>250),
			array('type, duration', 'length', 'max'=>10),
			array('status', 'length', 'max'=>14),
			array('target_date, completion_date, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, org_id, project_id, name, description, requestor, performer, type, target_date, status, isbilled, completion_date, duration, create_date, created_by, updated_by, update_date, att1, att2, att3, att4, att5, att6, att7, att8, att9, att10', 'safe', 'on'=>'search'),
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
			'subtasks' => array(self::HAS_MANY, 'Subtask', 'task_id'),
			'requestor' => array(self::BELONGS_TO, 'Users', 'requestor'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'org' => array(self::BELONGS_TO, 'Organization', 'org_id'),
			'performer' => array(self::BELONGS_TO, 'Users', 'performer'),
			'project' => array(self::BELONGS_TO, 'Projects', 'project_id'),
			'updatedBy' => array(self::BELONGS_TO, 'Users', 'updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'org_id' => 'Org',
			'project_id' => 'Project',
			'name' => 'Name',
			'description' => 'Description',
			'requestor' => 'Requestor',
			'performer' => 'Performer',
			'type' => 'Type',
			'target_date' => 'Target Date',
			'status' => 'Status',
			'isbilled' => 'Isbilled',
			'completion_date' => 'Completion Date',
			'duration' => 'Duration',
			'create_date' => 'Create Date',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
			'update_date' => 'Update Date',
			'att1' => 'Att1',
			'att2' => 'Att2',
			'att3' => 'Att3',
			'att4' => 'Att4',
			'att5' => 'Att5',
			'att6' => 'Att6',
			'att7' => 'Att7',
			'att8' => 'Att8',
			'att9' => 'Att9',
			'att10' => 'Att10',
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
		$criteria->compare('org_id',$this->org_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('requestor',$this->requestor);
		$criteria->compare('performer',$this->performer);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('target_date',$this->target_date,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('isbilled',$this->isbilled);
		$criteria->compare('completion_date',$this->completion_date,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('att1',$this->att1);
		$criteria->compare('att2',$this->att2);
		$criteria->compare('att3',$this->att3);
		$criteria->compare('att4',$this->att4);
		$criteria->compare('att5',$this->att5,true);
		$criteria->compare('att6',$this->att6,true);
		$criteria->compare('att7',$this->att7,true);
		$criteria->compare('att8',$this->att8,true);
		$criteria->compare('att9',$this->att9,true);
		$criteria->compare('att10',$this->att10,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

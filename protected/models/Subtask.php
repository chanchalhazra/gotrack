<?php

/**
 * This is the model class for table "tbl_subtask".
 *
 * The followings are the available columns in table 'tbl_subtask':
 * @property integer $id
 * @property integer $org_id
 * @property integer $task_id
 * @property string $name
 * @property string $description
 * @property integer $requester
 * @property integer $performer
 * @property string $type
 * @property string $status
 * @property string $target_date
 * @property string $completion_date
 * @property string $duration
 * @property string $create_date
 * @property integer $created_by
 * @property string $update_date
 * @property integer $updated_by
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
 * @property string $att11
 *
 * The followings are the available model relations:
 * @property Users $updatedBy
 * @property Users $performer0
 * @property Users $requester0
 * @property Users $createdBy
 * @property Organization $org
 * @property Task $task
 */
class Subtask extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_subtask';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, org_id, task_id, name, description', 'required'),
			array('id, org_id, task_id, requester, performer, created_by, updated_by, att1, att2, att3, att4', 'numerical', 'integerOnly'=>true),
			array('name, att5, att6, att7, att8, att9, att10, att11', 'length', 'max'=>50),
			array('description', 'length', 'max'=>250),
			array('type, status, duration', 'length', 'max'=>10),
			array('target_date, completion_date, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, org_id, task_id, name, description, requester, performer, type, status, target_date, completion_date, duration, create_date, created_by, update_date, updated_by, att1, att2, att3, att4, att5, att6, att7, att8, att9, att10, att11', 'safe', 'on'=>'search'),
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
			'updatedBy' => array(self::BELONGS_TO, 'Users', 'updated_by'),
			'performer0' => array(self::BELONGS_TO, 'Users', 'performer'),
			'requester0' => array(self::BELONGS_TO, 'Users', 'requester'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'org' => array(self::BELONGS_TO, 'Organization', 'org_id'),
			'task' => array(self::BELONGS_TO, 'Task', 'task_id'),
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
			'task_id' => 'Task',
			'name' => 'Name',
			'description' => 'Description',
			'requester' => 'Requester',
			'performer' => 'Performer',
			'type' => 'Type',
			'status' => 'Status',
			'target_date' => 'Target Date',
			'completion_date' => 'Completion Date',
			'duration' => 'Duration',
			'create_date' => 'Create Date',
			'created_by' => 'Created By',
			'update_date' => 'Update Date',
			'updated_by' => 'Updated By',
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
			'att11' => 'Att11',
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
		$criteria->compare('task_id',$this->task_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('requester',$this->requester);
		$criteria->compare('performer',$this->performer);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('target_date',$this->target_date,true);
		$criteria->compare('completion_date',$this->completion_date,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('updated_by',$this->updated_by);
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
		$criteria->compare('att11',$this->att11,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subtask the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php
/* @var $this SubtaskController */
/* @var $model Subtask */

$this->breadcrumbs=array(
	'Subtasks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Subtask', 'url'=>array('index')),
	array('label'=>'Create Subtask', 'url'=>array('create')),
	array('label'=>'Update Subtask', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subtask', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subtask', 'url'=>array('admin')),
);
?>

<h1>View Subtask #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'org_id',
		'task_id',
		'name',
		'description',
		'requester',
		'performer',
		'type',
		'status',
		'target_date',
		'completion_date',
		'duration',
		'create_date',
		'created_by',
		'update_date',
		'updated_by',
		'att1',
		'att2',
		'att3',
		'att4',
		'att5',
		'att6',
		'att7',
		'att8',
		'att9',
		'att10',
		'att11',
	),
)); ?>

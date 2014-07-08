<?php
/* @var $this TaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Task', 'url'=>array('index')),
	array('label'=>'Create Task', 'url'=>array('create')),
	array('label'=>'Update Task', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Task', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Task', 'url'=>array('admin')),
);
?>

<h1>View Task #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'org_id',
		'project_id',
		'name',
		'description',
		'requestor',
		'performer',
		'type',
		'target_date',
		'status',
		'isbilled',
		'completion_date',
		'duration',
		'create_date',
		'created_by',
		'updated_by',
		'update_date',
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
	),
)); ?>

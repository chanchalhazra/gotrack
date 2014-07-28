<?php
/* @var $this SubtaskController */
/* @var $model Subtask */

$this->breadcrumbs=array(
	'Subtasks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subtask', 'url'=>array('index')),
	array('label'=>'Create Subtask', 'url'=>array('create')),
	array('label'=>'View Subtask', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subtask', 'url'=>array('admin')),
);
?>

<h1>Update Subtask <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
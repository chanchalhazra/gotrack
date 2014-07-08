<?php
/* @var $this SubtaskController */
/* @var $model Subtask */

$this->breadcrumbs=array(
	'Subtasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subtask', 'url'=>array('index')),
	array('label'=>'Manage Subtask', 'url'=>array('admin')),
);
?>

<h1>Create Subtask</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
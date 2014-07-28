<?php
/* @var $this SubtaskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subtasks',
);

$this->menu=array(
	array('label'=>'Create Subtask', 'url'=>array('create')),
	array('label'=>'Manage Subtask', 'url'=>array('admin')),
);
?>

<h1>Subtasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

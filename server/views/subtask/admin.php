<?php
/* @var $this SubtaskController */
/* @var $model Subtask */

$this->breadcrumbs=array(
	'Subtasks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subtask', 'url'=>array('index')),
	array('label'=>'Create Subtask', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subtask-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subtasks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subtask-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'org_id',
		'task_id',
		'name',
		'description',
		'requester',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

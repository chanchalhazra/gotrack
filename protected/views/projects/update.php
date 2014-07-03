<?php
/* @var $this ProjectsController */
/* @var $model Projects */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->project_id=>array('view','id'=>$model->project_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Create Projects', 'url'=>array('create')),
	array('label'=>'View Projects', 'url'=>array('view', 'id'=>$model->project_id)),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>Update Projects <?php echo $model->project_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
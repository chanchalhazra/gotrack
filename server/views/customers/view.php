<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Update Customers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Customers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
        array('label'=>'Create Project', 'url'=>array('projects/create','cid'=>$model->id)),
);
?>

<h1>View Customers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
                 array('name'=>'customer_owner_id',
                  'value'=>(isset($model->owner)? CHtml::encode($model->owner->username):'unknown')),
                array('name'=>'account_manager_id', 
                      'value'=>(isset($model->manager)?CHtml::encode($model->manager->username):'unknown')),
		'customer_status',
		'industry',
		'billing_address',
		'billing_phone',
		'customer_type',
		'shipping_address',
		'parent_customer',
	),
)); ?>

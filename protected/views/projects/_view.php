<?php
/* @var $this ProjectsController */
/* @var $data Projects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->project_id), array('view', 'id'=>$data->project_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectName')); ?>:</b>
	<?php echo CHtml::encode($data->projectName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectDescription')); ?>:</b>
	<?php echo CHtml::encode($data->projectDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectLeadId')); ?>:</b>
	<?php echo CHtml::encode($data->projectLeadId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createUserId')); ?>:</b>
	<?php echo CHtml::encode($data->createUserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateUserId')); ?>:</b>
	<?php echo CHtml::encode($data->updateUserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createDate')); ?>:</b>
	<?php echo CHtml::encode($data->createDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateDate')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectType')); ?>:</b>
	<?php echo CHtml::encode($data->projectType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectCustomerId')); ?>:</b>
	<?php echo CHtml::encode($data->projectCustomerId); ?>
	<br />

	*/ ?>

</div>
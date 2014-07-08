<?php
/* @var $this TaskController */
/* @var $data Task */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('org_id')); ?>:</b>
	<?php echo CHtml::encode($data->org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requestor')); ?>:</b>
	<?php echo CHtml::encode($data->requestor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('performer')); ?>:</b>
	<?php echo CHtml::encode($data->performer); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_date')); ?>:</b>
	<?php echo CHtml::encode($data->target_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isbilled')); ?>:</b>
	<?php echo CHtml::encode($data->isbilled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('completion_date')); ?>:</b>
	<?php echo CHtml::encode($data->completion_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att1')); ?>:</b>
	<?php echo CHtml::encode($data->att1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att2')); ?>:</b>
	<?php echo CHtml::encode($data->att2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att3')); ?>:</b>
	<?php echo CHtml::encode($data->att3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att4')); ?>:</b>
	<?php echo CHtml::encode($data->att4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att5')); ?>:</b>
	<?php echo CHtml::encode($data->att5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att6')); ?>:</b>
	<?php echo CHtml::encode($data->att6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att7')); ?>:</b>
	<?php echo CHtml::encode($data->att7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att8')); ?>:</b>
	<?php echo CHtml::encode($data->att8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att9')); ?>:</b>
	<?php echo CHtml::encode($data->att9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att10')); ?>:</b>
	<?php echo CHtml::encode($data->att10); ?>
	<br />

	*/ ?>

</div>
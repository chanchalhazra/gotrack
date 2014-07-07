<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_owner_id); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('account_manager_id')); ?>:</b>
	<?php echo CHtml::encode($data->account_manager_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_status')); ?>:</b>
	<?php echo CHtml::encode($data->customer_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_phone')); ?>:</b>
	<?php echo CHtml::encode($data->billing_phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_type')); ?>:</b>
	<?php echo CHtml::encode($data->customer_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_customer')); ?>:</b>
	<?php echo CHtml::encode($data->parent_customer); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerName')); ?>:</b>
	<?php echo CHtml::encode($data->customerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerOwnerId')); ?>:</b>
	<?php echo CHtml::encode($data->customerOwnerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerStatus')); ?>:</b>
	<?php echo CHtml::encode($data->customerStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->billingAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingPhone')); ?>:</b>
	<?php echo CHtml::encode($data->billingPhone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('customerType')); ?>:</b>
	<?php echo CHtml::encode($data->customerType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->shippingAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentCustomer')); ?>:</b>
	<?php echo CHtml::encode($data->parentCustomer); ?>
	<br />

	*/ ?>

</div>
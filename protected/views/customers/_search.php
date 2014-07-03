<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerName'); ?>
		<?php echo $form->textField($model,'customerName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerOwnerId'); ?>
		<?php echo $form->textField($model,'customerOwnerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerStatus'); ?>
		<?php echo $form->textField($model,'customerStatus',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billingAddress'); ?>
		<?php echo $form->textField($model,'billingAddress',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billingPhone'); ?>
		<?php echo $form->textField($model,'billingPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerType'); ?>
		<?php echo $form->textField($model,'customerType',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingAddress'); ?>
		<?php echo $form->textField($model,'shippingAddress',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentCustomer'); ?>
		<?php echo $form->textField($model,'parentCustomer',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
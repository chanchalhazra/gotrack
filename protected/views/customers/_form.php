<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerName'); ?>
		<?php echo $form->textField($model,'customerName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'customerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customerOwnerId'); ?>
		<?php echo $form->textField($model,'customerOwnerId'); ?>
		<?php echo $form->error($model,'customerOwnerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customerStatus'); ?>
		<?php echo $form->textField($model,'customerStatus',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'customerStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billingAddress'); ?>
		<?php echo $form->textField($model,'billingAddress',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billingAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billingPhone'); ?>
		<?php echo $form->textField($model,'billingPhone'); ?>
		<?php echo $form->error($model,'billingPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customerType'); ?>
		<?php echo $form->textField($model,'customerType',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'customerType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingAddress'); ?>
		<?php echo $form->textField($model,'shippingAddress',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shippingAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentCustomer'); ?>
		<?php echo $form->textField($model,'parentCustomer',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'parentCustomer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
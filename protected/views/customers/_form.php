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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_owner_id'); ?>
		<?php echo $form->textField($model,'customer_owner_id'); ?>
		<?php echo $form->error($model,'customer_owner_id'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'account_manager_id'); ?>
		<?php echo $form->textField($model,'account_manager_id'); ?>
		<?php echo $form->error($model,'account_manager_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_status'); ?>
		<?php echo $form->textField($model,'customer_status',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'customer_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_address'); ?>
		<?php echo $form->textField($model,'billing_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'billing_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billing_phone'); ?>
		<?php echo $form->textField($model,'billing_phone'); ?>
		<?php echo $form->error($model,'billing_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_type'); ?>
		<?php echo $form->dropDownList($model,'customer_type',$model->getcustomer_type()); ?>
		<?php echo $form->error($model,'customer_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_address'); ?>
		<?php echo $form->textField($model,'shipping_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shipping_address'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id'); ?>
		<?php echo $form->error($model,'org_id'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
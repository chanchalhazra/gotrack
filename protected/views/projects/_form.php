<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'projects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'projectName'); ?>
		<?php echo $form->textField($model,'projectName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'projectName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectDescription'); ?>
		<?php echo $form->textField($model,'projectDescription',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'projectDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectLeadId'); ?>
		<?php echo $form->textField($model,'projectLeadId'); ?>
		<?php echo $form->error($model,'projectLeadId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createUserId'); ?>
		<?php echo $form->textField($model,'createUserId'); ?>
		<?php echo $form->error($model,'createUserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateUserId'); ?>
		<?php echo $form->textField($model,'updateUserId'); ?>
		<?php echo $form->error($model,'updateUserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createDate'); ?>
		<?php echo $form->textField($model,'createDate'); ?>
		<?php echo $form->error($model,'createDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UpdateDate'); ?>
		<?php echo $form->textField($model,'UpdateDate'); ?>
		<?php echo $form->error($model,'UpdateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectType'); ?>
		<?php echo $form->textField($model,'projectType',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'projectType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectCustomerId'); ?>
		<?php echo $form->textField($model,'projectCustomerId'); ?>
		<?php echo $form->error($model,'projectCustomerId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
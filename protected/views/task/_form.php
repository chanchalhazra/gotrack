<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id'); ?>
		<?php echo $form->error($model,'org_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requestor'); ?>
		<?php echo $form->textField($model,'requestor'); ?>
		<?php echo $form->error($model,'requestor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'performer'); ?>
		<?php echo $form->textField($model,'performer'); ?>
		<?php echo $form->error($model,'performer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_date'); ?>
		<?php echo $form->textField($model,'target_date'); ?>
		<?php echo $form->error($model,'target_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isbilled'); ?>
		<?php echo $form->textField($model,'isbilled'); ?>
		<?php echo $form->error($model,'isbilled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completion_date'); ?>
		<?php echo $form->textField($model,'completion_date'); ?>
		<?php echo $form->error($model,'completion_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att1'); ?>
		<?php echo $form->textField($model,'att1'); ?>
		<?php echo $form->error($model,'att1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att2'); ?>
		<?php echo $form->textField($model,'att2'); ?>
		<?php echo $form->error($model,'att2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att3'); ?>
		<?php echo $form->textField($model,'att3'); ?>
		<?php echo $form->error($model,'att3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att4'); ?>
		<?php echo $form->textField($model,'att4'); ?>
		<?php echo $form->error($model,'att4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att5'); ?>
		<?php echo $form->textField($model,'att5',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att6'); ?>
		<?php echo $form->textField($model,'att6',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att7'); ?>
		<?php echo $form->textField($model,'att7',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att8'); ?>
		<?php echo $form->textField($model,'att8',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att9'); ?>
		<?php echo $form->textField($model,'att9',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'att10'); ?>
		<?php echo $form->textField($model,'att10',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'att10'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this SubtaskController */
/* @var $model Subtask */
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
		<?php echo $form->label($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester'); ?>
		<?php echo $form->textField($model,'requester'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'performer'); ?>
		<?php echo $form->textField($model,'performer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_date'); ?>
		<?php echo $form->textField($model,'target_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'completion_date'); ?>
		<?php echo $form->textField($model,'completion_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att1'); ?>
		<?php echo $form->textField($model,'att1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att2'); ?>
		<?php echo $form->textField($model,'att2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att3'); ?>
		<?php echo $form->textField($model,'att3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att4'); ?>
		<?php echo $form->textField($model,'att4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att5'); ?>
		<?php echo $form->textField($model,'att5',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att6'); ?>
		<?php echo $form->textField($model,'att6',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att7'); ?>
		<?php echo $form->textField($model,'att7',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att8'); ?>
		<?php echo $form->textField($model,'att8',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att9'); ?>
		<?php echo $form->textField($model,'att9',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att10'); ?>
		<?php echo $form->textField($model,'att10',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'att11'); ?>
		<?php echo $form->textField($model,'att11',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
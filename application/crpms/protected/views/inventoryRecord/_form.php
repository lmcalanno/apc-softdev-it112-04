<?php
/* @var $this InventoryRecordController */
/* @var $model InventoryRecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventory-record-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'delivery_Date'); ?>
		<?php echo $form->textField($model,'delivery_Date'); ?>
		<?php echo $form->error($model,'delivery_Date'); ?>
=======
		<?php echo $form->labelEx($model,'delivery_date'); ?>
		<?php //echo $form->textField($model,'delivery_date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::activeTextField($model,'delivery_date',array("id"=>"delivery_date")); ?>
		  <?php $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'delivery_date',
        'ifFormat'=>'%Y-%m-%d',
		));
		?>
		<?php echo $form->error($model,'delivery_date'); ?>
>>>>>>> 96e29da47882c5cc515b8e09669c44ffeea4bcd7
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Medicine_Record_id'); ?>
		<?php echo $form->textField($model,'Medicine_Record_id'); ?>
		<?php echo $form->error($model,'Medicine_Record_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
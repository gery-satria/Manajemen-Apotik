<?php
/* @var $this MedicineController */
/* @var $model Medicine */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicine-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>40)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_id'); ?>
		<?php echo $form->dropDownList($model,'unit_id',CHtml::listData(Unit::model()->findAll(),
                      'id', 'name'),array('empty'=>'Select Unit', 'style'=>'width:263px;'));; ?>
		<?php echo $form->error($model,'unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price',array('size'=>40)); ?>
		<?php echo $form->error($model,'sale_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_stock'); ?>
		<?php echo $form->textField($model,'current_stock',array('size'=>40)); ?>
		<?php echo $form->error($model,'current_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_discount'); ?>
		<?php echo $form->textField($model,'member_discount',array('size'=>40)); ?>
		<?php echo $form->error($model,'member_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this SaleItemController */
/* @var $model SaleItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_id'); ?>
		<?php echo $form->textField($model,'sale_id'); ?>
		<?php echo $form->error($model,'sale_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_id'); ?>
		<?php echo $form->textField($model,'medicine_id'); ?>
		<?php echo $form->error($model,'medicine_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costumer_id'); ?>
		<?php echo $form->textField($model,'costumer_id'); ?>
		<?php echo $form->error($model,'costumer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
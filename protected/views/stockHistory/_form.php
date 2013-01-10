<?php
/* @var $this StockHistoryController */
/* @var $model StockHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officer'); ?>
		<?php echo $form->textField($model,'officer'); ?>
		<?php echo $form->error($model,'officer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
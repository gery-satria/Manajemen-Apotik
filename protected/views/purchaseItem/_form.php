<?php
/* @var $this PurchaseItemController */
/* @var $model PurchaseItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_id'); ?>
		<?php echo $form->textField($model,'purchase_id'); ?>
		<?php echo $form->error($model,'purchase_id'); ?>
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
		<?php echo $form->labelEx($model,'price_per_unit'); ?>
		<?php echo $form->textField($model,'price_per_unit'); ?>
		<?php echo $form->error($model,'price_per_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
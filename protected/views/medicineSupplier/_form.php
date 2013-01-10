<?php
/* @var $this MedicineSupplierController */
/* @var $model MedicineSupplier */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicine-supplier-form',
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
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
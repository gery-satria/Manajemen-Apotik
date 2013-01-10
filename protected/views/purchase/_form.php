<?php
/* @var $this PurchaseController */
/* @var $model Purchase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_date'); ?>
		<?php echo $form->textField($model,'purchase_date'); ?>
		<?php echo $form->error($model,'purchase_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_item'); ?>
		<?php echo $form->textField($model,'total_item'); ?>
		<?php echo $form->error($model,'total_item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
		<?php echo $form->error($model,'total_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officer_id'); ?>
		<?php echo $form->textField($model,'officer_id'); ?>
		<?php echo $form->error($model,'officer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this PurchaseController */
/* @var $model Purchase */
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
		<?php echo $form->label($model,'purchase_date'); ?>
		<?php echo $form->textField($model,'purchase_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_item'); ?>
		<?php echo $form->textField($model,'total_item'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officer_id'); ?>
		<?php echo $form->textField($model,'officer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this MedicineController */
/* @var $model Medicine */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_id'); ?>
		<?php echo $form->dropDownList($model,'unit_id',CHtml::listData(Unit::model()->findAll(),
                      'id', 'name'),array('empty'=>'Select Unit', 'style'=>'width:263px;'));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price',array('size'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_stock'); ?>
		<?php echo $form->textField($model,'current_stock',array('size'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'member_discount'); ?>
		<?php echo $form->textField($model,'member_discount',array('size'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
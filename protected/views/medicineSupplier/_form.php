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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_id'); 
                      $this->widget('EJuiAutoCompleteFkField',array(
                          'model'=>$model,
                          'attribute'=>'medicine_id',
                          'sourceUrl'=>Yii::app()->createUrl('/medicineSupplier/findMedicine'),
                          'showFKField'=>false,
                          'relName'=>'medicine',
                          'displayAttr'=>'Medicine',
                          'autoCompleteLength'=>40,
                          'options'=>array(
                                'minLength'=>1,
                          ),
                      ));?>
		<?php echo $form->error($model,'medicine_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); 
                      $this->widget('EJuiAutoCompleteFkField',array(
                          'model'=>$model,
                          'attribute'=>'supplier_id',
                          'sourceUrl'=>Yii::app()->createUrl('/medicineSupplier/findSupplier'),
                          'showFKField'=>false,
                          'relName'=>'supplier',
                          'displayAttr'=>'Supplier',
                          'autoCompleteLength'=>40,
                          'options'=>array(
                                'minLength'=>1,
                          ),
                      ));?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
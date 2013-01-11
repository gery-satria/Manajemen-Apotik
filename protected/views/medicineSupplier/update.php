<?php
/* @var $this MedicineSupplierController */
/* @var $model MedicineSupplier */

$this->breadcrumbs=array(
	'Medicine Supplier'=>array('index'),
	'Update',
);
?>

<h2>Update MedicineSupplier</h2>

<?php echo CHtml::link('List Medicine Supplier', array('/medicineSupplier'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
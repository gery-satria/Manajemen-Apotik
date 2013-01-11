<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Supplier'=>array('index'),
	'Create',
);
?>

<h2>Create Supplier</h2>

<?php echo CHtml::link('List Supplier', array('/supplier'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
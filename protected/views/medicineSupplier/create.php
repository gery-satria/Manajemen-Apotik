<?php
/* @var $this MedicineSupplierController */
/* @var $model MedicineSupplier */

$this->breadcrumbs=array(
	'Medicine Suppliers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicineSupplier', 'url'=>array('index')),
	array('label'=>'Manage MedicineSupplier', 'url'=>array('admin')),
);
?>

<h1>Create MedicineSupplier</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
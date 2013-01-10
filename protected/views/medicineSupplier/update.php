<?php
/* @var $this MedicineSupplierController */
/* @var $model MedicineSupplier */

$this->breadcrumbs=array(
	'Medicine Suppliers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicineSupplier', 'url'=>array('index')),
	array('label'=>'Create MedicineSupplier', 'url'=>array('create')),
	array('label'=>'View MedicineSupplier', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MedicineSupplier', 'url'=>array('admin')),
);
?>

<h1>Update MedicineSupplier <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
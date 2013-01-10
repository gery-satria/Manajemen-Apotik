<?php
/* @var $this MedicineSupplierController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicine Suppliers',
);

$this->menu=array(
	array('label'=>'Create MedicineSupplier', 'url'=>array('create')),
	array('label'=>'Manage MedicineSupplier', 'url'=>array('admin')),
);
?>

<h1>Medicine Suppliers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
